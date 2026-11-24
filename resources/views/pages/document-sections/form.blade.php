<?php

use App\Models\DocumentSection;
use Illuminate\Support\Str;
use Illuminate\Validation\Rule;
use Livewire\Attributes\Computed;
use Livewire\Component;
use Livewire\WithFileUploads;

new class extends Component {
    use WithFileUploads;

    public ?DocumentSection $documentSection = null; // null = create, set = edit

    public $name = '';
    public $slug = '';
    public $pdf;                 // temporary uploaded file
    public bool $slugEdited = false;

    public function mount(?DocumentSection $documentSection = null): void
    {
        if ($documentSection?->exists) {
            $this->documentSection = $documentSection;
            $this->name = $documentSection->name;
            $this->slug = $documentSection->slug;
            $this->slugEdited = true; // never auto-change an existing slug
        }
    }

    // Auto-fill slug from name until the user edits the slug by hand
    public function updatedName($value): void
    {
        if (! $this->slugEdited) {
            $this->slug = Str::slug($value);
        }
    }

    public function updatedSlug($value): void
    {
        $this->slugEdited = true;
        $this->slug = Str::slug($value);
    }

    protected function rules(): array
    {
        return [
            'name' => ['required', 'string', 'max:255'],
            'slug' => [
                'required', 'string', 'max:255', 'alpha_dash',
                Rule::unique('document_sections', 'slug')->ignore($this->documentSection?->id),
            ],
            // required on create, optional on edit (max 10 MB)
            'pdf'  => [$this->documentSection ? 'nullable' : 'required', 'file', 'mimes:pdf', 'max:10240'],
        ];
    }

    #[Computed]
    public function currentPdf()
    {
        return $this->documentSection?->getFirstMedia('pdf');
    }

    public function save()
    {
        $this->slug = Str::slug($this->slug);

        $data = $this->validate();

        if ($this->documentSection) {
            $this->documentSection->update(['name' => $data['name'], 'slug' => $data['slug']]);
            $section = $this->documentSection;
            $message = 'Document section updated.';
        } else {
            $section = DocumentSection::create(['name' => $data['name'], 'slug' => $data['slug']]);
            $message = 'Document section created.';
        }

        // Store the PDF in the `media` table (singleFile() replaces the old one)
        if ($this->pdf) {
            $section->addMedia($this->pdf->getRealPath())
                ->usingName($section->name)
                ->usingFileName($this->pdf->getClientOriginalName())
                ->toMediaCollection('pdf');
        }

        session()->flash('success', $message);

        return $this->redirectRoute('document-sections.index', navigate: true);
    }
};
?>

<div class="max-w-xl space-y-6">
    <flux:heading size="xl" level="1">
        {{ $documentSection ? 'Edit Document Section' : 'New Document Section' }}
    </flux:heading>

    <form wire:submit="save" class="space-y-6">
        <flux:input wire:model.live.debounce.300ms="name" label="Name" placeholder="e.g. Annual Report" />

        <flux:input wire:model.blur="slug" label="Slug" placeholder="annual-report" />

        <div class="space-y-2">
            @if ($this->currentPdf)
                <div class="text-sm text-zinc-600 dark:text-zinc-300">
                    Current file:
                    <a href="{{ route('document-sections.file', $documentSection) }}" target="_blank"
                       class="underline text-blue-600 dark:text-blue-400">{{ $this->currentPdf->file_name }}</a>
                    <span class="text-zinc-400">({{ $this->currentPdf->human_readable_size }})</span>
                </div>
            @endif

            <flux:input type="file" wire:model="pdf" accept="application/pdf"
                        :label="$documentSection ? 'Replace PDF (optional)' : 'PDF file'" />

            <div wire:loading wire:target="pdf" class="text-sm text-zinc-500 dark:text-zinc-400">Uploading...</div>

            @if ($pdf)
                <div class="text-sm text-green-600 dark:text-green-400">Selected: {{ $pdf->getClientOriginalName() }}</div>
            @endif
        </div>

        <div class="flex gap-3">
            <flux:button type="submit" variant="primary" wire:loading.attr="disabled" wire:target="pdf, save">
                {{ $documentSection ? 'Update' : 'Save' }}
            </flux:button>
            <flux:button :href="route('document-sections.index')" wire:navigate>Cancel</flux:button>
        </div>
    </form>
</div>
