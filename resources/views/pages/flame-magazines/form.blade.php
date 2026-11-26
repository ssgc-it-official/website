<?php

use App\Models\FlameMagazine;
use Livewire\Component;
use Livewire\WithFileUploads;

new class extends Component {
    use WithFileUploads;

    public ?FlameMagazine $flameMagazine = null; // null = create, set = edit

    public $title = '';
    public $published_at = '';
    public bool $is_active = true;
    public $cover;
    public $pdf;

    public function mount(?FlameMagazine $flameMagazine = null): void
    {
        if ($flameMagazine?->exists) {
            $this->flameMagazine = $flameMagazine;
            $this->title = $flameMagazine->title;
            $this->published_at = $flameMagazine->published_at->format('Y-m-d');
            $this->is_active = $flameMagazine->is_active;
        }
    }

    protected function rules(): array
    {
        // files are required on create, optional on edit
        $fileRule = $this->flameMagazine ? 'nullable' : 'required';

        return [
            'title'        => ['required', 'string', 'max:255'],
            'published_at' => ['required', 'date'],
            'is_active'    => ['boolean'],
            'cover'        => [$fileRule, 'image', 'max:2048'],
            'pdf'          => [$fileRule, 'file', 'mimes:pdf', 'max:20480'],
        ];
    }

    public function save()
    {
        $data = $this->validate();

        $attributes = [
            'title'        => $data['title'],
            'published_at' => $data['published_at'],
            'is_active'    => $data['is_active'],
        ];

        if ($this->flameMagazine) {
            // UPDATE
            $this->flameMagazine->update($attributes);
            $magazine = $this->flameMagazine;
            $message = 'Issue updated.';
        } else {
            // CREATE
            $magazine = FlameMagazine::create($attributes);
            $message = 'Issue created.';
        }

        // singleFile() replaces the old file automatically
        if ($this->cover) {
            $magazine->addMedia($this->cover->getRealPath())
                ->usingFileName($this->cover->getClientOriginalName())
                ->toMediaCollection('cover');
        }

        if ($this->pdf) {
            $magazine->addMedia($this->pdf->getRealPath())
                ->usingFileName($this->pdf->getClientOriginalName())
                ->toMediaCollection('pdf');
        }

        session()->flash('success', $message);

        return $this->redirectRoute('flame-magazines.index', navigate: true);
    }
};
?>

<div class="space-y-6">
    <flux:heading size="xl" level="1">
        {{ $flameMagazine ? 'Edit Issue' : 'New Issue' }}
    </flux:heading>

    <form wire:submit="save" class="space-y-6">
        <flux:input wire:model="title" label="Title" placeholder="e.g. April – June, 2026" />

        <flux:input type="date" wire:model="published_at" label="Published date" />

        {{-- Cover --}}
        <div class="space-y-2">
            @if ($flameMagazine?->hasMedia('cover') && ! $cover)
                <div class="text-sm text-zinc-500">Current cover:</div>
                <img src="{{ $flameMagazine->getFirstMediaUrl('cover') }}" alt="" class="h-40 rounded">
            @endif

            <flux:input type="file" wire:model="cover" accept="image/*"
                :label="$flameMagazine ? 'Replace cover (optional)' : 'Cover image'" />

            <div wire:loading wire:target="cover" class="text-sm text-zinc-500">Uploading...</div>

            @if ($cover)
                <img src="{{ $cover->temporaryUrl() }}" alt="" class="h-40 rounded">
            @endif
        </div>

        {{-- PDF --}}
        <div class="space-y-2">
            @if ($flameMagazine?->hasMedia('pdf'))
                <div class="text-sm text-zinc-600 dark:text-zinc-300">
                    Current file:
                    <a href="{{ $flameMagazine->getFirstMediaUrl('pdf') }}" target="_blank" rel="noopener"
                       class="underline text-blue-600 dark:text-blue-400">
                        {{ $flameMagazine->getFirstMedia('pdf')->file_name }}
                    </a>
                </div>
            @endif

            <flux:input type="file" wire:model="pdf" accept="application/pdf"
                :label="$flameMagazine ? 'Replace PDF (optional)' : 'PDF file'" />

            <div wire:loading wire:target="pdf" class="text-sm text-zinc-500">Uploading...</div>

            @if ($pdf)
                <div class="text-sm text-green-600 dark:text-green-400">
                    Selected: {{ $pdf->getClientOriginalName() }}
                </div>
            @endif
        </div>

        <flux:switch wire:model="is_active" label="Active" />

        <div class="flex gap-3">
            <flux:button type="submit" variant="primary" wire:loading.attr="disabled"
                wire:target="cover, pdf, save">
                {{ $flameMagazine ? 'Update' : 'Save' }}
            </flux:button>
            <flux:button :href="route('flame-magazines.index')" wire:navigate>Cancel</flux:button>
        </div>
    </form>
</div>
