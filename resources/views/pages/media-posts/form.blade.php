<?php

use App\Models\MediaCategory;
use App\Models\MediaPost;
use Illuminate\Support\Str;
use Illuminate\Validation\Rule;
use Livewire\Attributes\Computed;
use Livewire\Component;
use Livewire\WithFileUploads;

new class extends Component {
    use WithFileUploads;

    public ?MediaPost $mediaPost = null; // null = create, set = edit

    public $category_id = '';
    public $title = '';
    public $slug = '';
    public $excerpt = '';
    public $body = '';
    public $external_url = '';
    public $published_at = '';
    public bool $is_active = true;

    public $cover;
    public $pdf;
    public array $gallery = [];

    public function mount(?MediaPost $mediaPost = null): void
    {
        $this->published_at = now()->format('Y-m-d');

        if ($mediaPost?->exists) {
            $this->mediaPost    = $mediaPost;
            $this->category_id  = $mediaPost->category_id ?? '';
            $this->title        = $mediaPost->title;
            $this->slug         = $mediaPost->slug;
            $this->excerpt      = $mediaPost->excerpt ?? '';
            $this->body         = $mediaPost->body ?? '';
            $this->external_url = $mediaPost->external_url ?? '';
            $this->published_at = $mediaPost->published_at->format('Y-m-d');
            $this->is_active    = $mediaPost->is_active;
        }
    }

    // Auto-fill the slug from the title, only when creating
    public function updatedTitle($value): void
    {
        if (! $this->mediaPost) {
            $this->slug = Str::slug($value);
        }
    }

    #[Computed]
    public function categories()
    {
        return MediaCategory::query()
            ->where('status', 'active')
            ->orderBy('name')
            ->get(['id', 'name']);
    }

    protected function rules(): array
    {
        return [
            'category_id'  => ['required', 'integer', 'exists:media_categories,id'],
            'title'        => ['required', 'string', 'max:255'],
            'slug'         => [
                'required', 'string', 'max:255', 'alpha_dash',
                Rule::unique('media_posts', 'slug')->ignore($this->mediaPost?->id),
            ],
            'excerpt'      => ['nullable', 'string', 'max:500'],
            'body'         => ['nullable', 'string'],
            'external_url' => ['nullable', 'url', 'max:500'],
            'published_at' => ['required', 'date'],
            'is_active'    => ['boolean'],
            'cover'        => ['nullable', 'image', 'max:2048'],
            'pdf'          => ['nullable', 'file', 'mimes:pdf', 'max:20480'],
            'gallery'      => ['array', 'max:20'],
            'gallery.*'    => ['image', 'max:4096'],
        ];
    }

    protected function validationAttributes(): array
    {
        return [
            'category_id'  => 'category',
            'external_url' => 'external link',
        ];
    }

    public function removeImage(int $mediaId): void
    {
        $this->mediaPost
            ?->getMedia('gallery')
            ->firstWhere('id', $mediaId)
            ?->delete();

        $this->mediaPost?->refresh();
    }

    public function save()
    {
        $this->slug = Str::slug($this->slug);

        $data = $this->validate();

        $attributes = [
            'category_id'  => $data['category_id'],
            'title'        => $data['title'],
            'slug'         => $data['slug'],
            'excerpt'      => $data['excerpt'] ?: null,
            'body'         => $data['body'] ?: null,
            'external_url' => $data['external_url'] ?: null,
            'published_at' => $data['published_at'],
            'is_active'    => $data['is_active'],
        ];

        if ($this->mediaPost) {
            // UPDATE
            $this->mediaPost->update($attributes);
            $post = $this->mediaPost;
            $message = 'Post updated.';
        } else {
            // CREATE
            $post = MediaPost::create($attributes);
            $message = 'Post created.';
        }

        // singleFile() replaces the old file automatically
        if ($this->cover) {
            $post->addMedia($this->cover->getRealPath())
                ->usingFileName($this->cover->getClientOriginalName())
                ->toMediaCollection('cover');
        }

        if ($this->pdf) {
            $post->addMedia($this->pdf->getRealPath())
                ->usingFileName($this->pdf->getClientOriginalName())
                ->toMediaCollection('pdf');
        }

        foreach ($this->gallery as $image) {
            $post->addMedia($image->getRealPath())
                ->usingFileName($image->getClientOriginalName())
                ->toMediaCollection('gallery');
        }

        session()->flash('success', $message);

        return $this->redirectRoute('media-posts.index', navigate: true);
    }
};
?>

<div class="space-y-6">
    <flux:heading size="xl" level="1">
        {{ $mediaPost ? 'Edit Post' : 'New Post' }}
    </flux:heading>

    <form wire:submit="save" class="space-y-6">
        <flux:select wire:model="category_id" label="Category" placeholder="Choose a category...">
            @foreach ($this->categories as $category)
                <flux:select.option value="{{ $category->id }}">{{ $category->name }}</flux:select.option>
            @endforeach
        </flux:select>

        <flux:input wire:model.live.debounce.300ms="title" label="Title"
            placeholder="e.g. SSGC Disconnects 3,276 Illegal Gas Connections" />

        <flux:input wire:model="slug" label="URL slug" placeholder="ssgc-disconnects-illegal-connections" />

        <flux:input type="date" wire:model="published_at" label="Published date" />

        <flux:textarea wire:model="excerpt" label="Short summary (shown on the listing card)" rows="2" />

        <flux:textarea wire:model="body" label="Full description (shown on the detail page)" rows="8" />

        <flux:input type="url" wire:model="external_url" label="External link (optional)"
            placeholder="https://..." />

        {{-- Cover --}}
        <div class="space-y-2">
            @if ($mediaPost?->hasMedia('cover') && ! $cover)
                <div class="text-sm text-zinc-500">Current cover:</div>
                <img src="{{ $mediaPost->getFirstMediaUrl('cover') }}" alt="" class="h-40 rounded">
            @endif

            <flux:input type="file" wire:model="cover" accept="image/*"
                :label="$mediaPost?->hasMedia('cover') ? 'Replace cover (optional)' : 'Cover image (optional)'" />

            <div wire:loading wire:target="cover" class="text-sm text-zinc-500">Uploading...</div>

            @if ($cover)
                <img src="{{ $cover->temporaryUrl() }}" alt="" class="h-40 rounded">
            @endif
        </div>

        {{-- PDF --}}
        <div class="space-y-2">
            @if ($mediaPost?->hasMedia('pdf'))
                <div class="text-sm text-zinc-600 dark:text-zinc-300">
                    Current file:
                    <a href="{{ $mediaPost->getFirstMediaUrl('pdf') }}" target="_blank" rel="noopener"
                        class="underline text-blue-600 dark:text-blue-400">
                        {{ $mediaPost->getFirstMedia('pdf')->file_name }}
                    </a>
                </div>
            @endif

            <flux:input type="file" wire:model="pdf" accept="application/pdf"
                :label="$mediaPost?->hasMedia('pdf') ? 'Replace PDF (optional)' : 'PDF file (optional)'" />

            <div wire:loading wire:target="pdf" class="text-sm text-zinc-500">Uploading...</div>

            @if ($pdf)
                <div class="text-sm text-green-600 dark:text-green-400">
                    Selected: {{ $pdf->getClientOriginalName() }}
                </div>
            @endif
        </div>

        {{-- Gallery --}}
        <div class="space-y-2">
            @if ($mediaPost?->hasMedia('gallery'))
                <div class="text-sm text-zinc-500">Current gallery images:</div>
                <div class="flex flex-wrap gap-3">
                    @foreach ($mediaPost->getMedia('gallery') as $image)
                        <div class="relative" wire:key="gallery-{{ $image->id }}">
                            <img src="{{ $image->getUrl() }}" alt="" class="h-24 rounded">
                            <button type="button"
                                wire:click="removeImage({{ $image->id }})"
                                wire:confirm="Remove this image?"
                                class="absolute top-0 right-0 rounded bg-red-600 px-1.5 text-xs text-white">×</button>
                        </div>
                    @endforeach
                </div>
            @endif

            <flux:input type="file" wire:model="gallery" multiple accept="image/*"
                label="Add gallery images (optional)" />

            <div wire:loading wire:target="gallery" class="text-sm text-zinc-500">Uploading...</div>

            @if (count($gallery))
                <div class="flex flex-wrap gap-3">
                    @foreach ($gallery as $i => $image)
                        <img src="{{ $image->temporaryUrl() }}" alt="" class="h-24 rounded"
                            wire:key="new-{{ $i }}">
                    @endforeach
                </div>
            @endif

            @error('gallery.*') <div class="text-sm text-red-600">{{ $message }}</div> @enderror
        </div>

        <flux:switch wire:model="is_active" label="Active" />

        <div class="flex gap-3">
            <flux:button type="submit" variant="primary" wire:loading.attr="disabled"
                wire:target="cover, pdf, gallery, save">
                {{ $mediaPost ? 'Update' : 'Save' }}
            </flux:button>
            <flux:button :href="route('media-posts.index')" wire:navigate>Cancel</flux:button>
        </div>
    </form>
</div>
