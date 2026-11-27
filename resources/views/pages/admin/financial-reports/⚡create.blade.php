<?php

use App\Models\FinancialReport;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Attributes\Validate;
use Livewire\Component;
use Livewire\WithFileUploads;

new #[Layout('layouts::app')]
#[Title('Add Financial Report')]
class extends Component {

    use WithFileUploads;

    #[Validate('required|digits:4|integer|min:2000|max:2100')]
    public string $year = '';

    #[Validate('required|string|max:200')]
    public string $period_title = '';

    #[Validate('required|string|max:200')]
    public string $document_title = '';

    #[Validate('required|integer|min:0')]
    public string|int $sort_order = 0;

    #[Validate('required|file|mimes:pdf|max:20480')]
    public $file;

    public function mount(): void
    {
        $this->year = (string) now()->year;
    }

    public function save()
    {
        $this->validate();

        $filePath = $this->file
            ? $this->file->store('financial-reports', 'public')
            : null;

        FinancialReport::create([
            'year' => $this->year,
            'period_title' => $this->period_title,
            'document_title' => $this->document_title,
            'sort_order' => $this->sort_order,
            'file_path' => $filePath,
        ]);

        session()->flash('status', 'Report created.');

        $this->redirectRoute('admin.financial-reports.index', navigate: true);
    }
};
?>

<div>
    <h1 class="text-gray-600">Add Financial Report</h1>

    <form wire:submit="save">

        <!-- Year -->
        <div class="mt-4">
            <flux:input
                wire:model="year"
                :label="__('Year')"
                type="text"
                required
                autofocus
                :placeholder="__('Year')"
                badge="Required"
            />
            <flux:error name="year" />
        </div>

        <!-- Period Title -->
        <div class="mt-4">
            <flux:input
                wire:model="period_title"
                :label="__('Period Title')"
                type="text"
                required
                :placeholder="__('Period Title')"
                badge="Required"
            />
            <flux:error name="period_title" />
        </div>

        <!-- Document Title -->
        <div class="mt-4">
            <flux:input
                wire:model="document_title"
                :label="__('Document Title')"
                type="text"
                required
                :placeholder="__('Document Title')"
                badge="Required"
            />
            <flux:error name="document_title" />
        </div>

        <!-- Sort Order -->
        <div class="mt-4">
            <flux:input
                wire:model="sort_order"
                :label="__('Sort Order')"
                type="text"
                required
                :placeholder="__('Sort Order')"
                badge="Required"
            />
            <flux:error name="sort_order" />
        </div>

        <!-- PDF File -->
        <div class="mt-4">
            <flux:input
                wire:model="file"
                :label="__('PDF File')"
                type="file"
                accept="application/pdf,.pdf"
                required
                :placeholder="__('PDF File')"
                badge="Required"
            />
            <flux:error name="file" />
        </div>

        <div class="mt-5">
            <flux:button type="submit" variant="primary" class="cursor-pointer">
                {{ __('Add Financial Report') }}
            </flux:button>
        </div>

    </form>
</div>
