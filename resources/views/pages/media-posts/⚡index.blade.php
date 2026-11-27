<?php

use App\Models\MediaCategory;
use App\Models\MediaPost;
use Livewire\Attributes\Computed;
use Livewire\Attributes\Url;
use Livewire\Component;
use Livewire\WithPagination;

new class extends Component {
    use WithPagination;

    #[Url(except: '')]
    public string $search = '';

    #[Url(except: '')]
    public string $categoryId = '';

    public function updatedSearch(): void
    {
        $this->resetPage();
    }

    public function updatedCategoryId(): void
    {
        $this->resetPage();
    }

    #[Computed]
    public function categories()
    {
        return MediaCategory::query()->orderBy('name')->get(['id', 'name']);
    }

    #[Computed]
    public function posts()
    {
        return MediaPost::query()
            ->with(['media', 'category'])
            ->when($this->search, fn ($q) => $q->where('title', 'like', "%{$this->search}%"))
            ->when($this->categoryId, fn ($q) => $q->where('category_id', $this->categoryId))
            ->orderByDesc('published_at')
            ->paginate(10);
    }

    public function toggleActive(int $id): void
    {
        $post = MediaPost::findOrFail($id);
        $post->update(['is_active' => ! $post->is_active]);
    }

    public function delete(int $id): void
    {
        // Spatie Media Library removes the cover, PDF and gallery files automatically
        MediaPost::findOrFail($id)->delete();

        session()->flash('success', 'Post deleted.');
    }
};
?>

<div class="space-y-6">
    <div class="flex flex-wrap items-center justify-between gap-3">
        <flux:heading size="xl" level="1">Media Posts</flux:heading>

        <flux:button variant="primary" icon="plus" :href="route('media-posts.create')" wire:navigate>
            New Post
        </flux:button>
    </div>

    @if (session('success'))
        <flux:callout variant="success" icon="check-circle" :heading="session('success')" />
    @endif

    <div class="flex flex-wrap gap-3">
        <div class="grow">
            <flux:input wire:model.live.debounce.300ms="search" icon="magnifying-glass"
                placeholder="Search by title..." clearable />
        </div>

        <div class="w-full sm:w-64">
            <flux:select wire:model.live="categoryId">
                <flux:select.option value="">All categories</flux:select.option>
                @foreach ($this->categories as $category)
                    <flux:select.option value="{{ $category->id }}">{{ $category->name }}</flux:select.option>
                @endforeach
            </flux:select>
        </div>
    </div>

    <flux:table :paginate="$this->posts">
        <flux:table.columns>
            <flux:table.column>Image</flux:table.column>
            <flux:table.column>Title</flux:table.column>
            <flux:table.column>Category</flux:table.column>
            <flux:table.column>Published</flux:table.column>
            <flux:table.column>Files</flux:table.column>
            <flux:table.column>Active</flux:table.column>
            <flux:table.column></flux:table.column>
        </flux:table.columns>

        <flux:table.rows>
            @forelse ($this->posts as $post)
                <flux:table.row :key="$post->id">
                    <flux:table.cell>
                        @if ($thumb = $post->thumbnail())
                            <img src="{{ $thumb->getUrl() }}" alt="" loading="lazy"
                                 class="h-16 w-12 rounded object-cover">
                        @else
                            <span class="text-zinc-400">—</span>
                        @endif
                    </flux:table.cell>

                    <flux:table.cell class="font-medium">{{ $post->title }}</flux:table.cell>

                    <flux:table.cell>{{ $post->category?->name ?? '—' }}</flux:table.cell>

                    <flux:table.cell>{{ $post->published_at->format('M j, Y') }}</flux:table.cell>

                    <flux:table.cell>
                        <div class="flex flex-col gap-1 text-sm">
                            @if ($post->hasMedia('pdf'))
                                <a href="{{ $post->getFirstMediaUrl('pdf') }}" target="_blank" rel="noopener"
                                   class="underline text-blue-600 dark:text-blue-400">PDF</a>
                            @endif

                            @if ($count = $post->getMedia('gallery')->count())
                                <span class="text-zinc-500">{{ $count }} {{ Str::plural('image', $count) }}</span>
                            @endif

                            @if (! $post->hasMedia('pdf') && ! $post->getMedia('gallery')->count())
                                <span class="text-zinc-400">—</span>
                            @endif
                        </div>
                    </flux:table.cell>

                    <flux:table.cell>
                        <flux:switch :checked="$post->is_active"
                                     wire:click="toggleActive({{ $post->id }})" />
                    </flux:table.cell>

                    <flux:table.cell>
                        <div class="flex justify-end gap-2">
                            <flux:button size="sm" icon="pencil-square"
                                :href="route('media-posts.edit', $post)" wire:navigate>
                                Edit
                            </flux:button>

                            <flux:button size="sm" variant="danger" icon="trash"
                                wire:click="delete({{ $post->id }})"
                                wire:confirm="Delete this post? This also removes its cover, PDF and gallery images.">
                                Delete
                            </flux:button>
                        </div>
                    </flux:table.cell>
                </flux:table.row>
            @empty
                <flux:table.row>
                    <flux:table.cell colspan="7" class="text-center text-zinc-500">
                        No posts found.
                    </flux:table.cell>
                </flux:table.row>
            @endforelse
        </flux:table.rows>
    </flux:table>
</div>
