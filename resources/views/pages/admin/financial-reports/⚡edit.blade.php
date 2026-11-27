<?php

use App\Models\FinancialReport;
use Illuminate\Support\Facades\Storage;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Attributes\Validate;
use Livewire\Component;
use Livewire\WithFileUploads;

new #[Layout('layouts::app')]
#[Title('Edit Financial Report')]
class extends Component {

    use WithFileUploads;

    public FinancialReport $report;

    #[Validate('required|integer|min:1900|max:2100')]
    public string|int $year = '';

    #[Validate('required|string|max:255')]
    public string $period_title = '';

    #[Validate('required|string|max:255')]
    public string $document_title = '';

    #[Validate('nullable|integer')]
    public string|int $sort_order = 0;

    #[Validate('nullable|file|mimes:pdf|max:20480')]
    public $file = null;

    public function mount(FinancialReport $report): void
    {
        $this->report = $report;
        $this->year = $report->year;
        $this->period_title = $report->period_title;
        $this->document_title = $report->document_title;
        $this->sort_order = $report->sort_order;
    }

    public function update(): void
    {
        $validated = $this->validate();

        $filePath = $this->report->file_path;

        if ($this->file) {
            if ($filePath) {
                Storage::disk('public')->delete($filePath);
            }
            $filePath = $this->file->store('financial-reports', 'public');
        }

        $this->report->update([
            'year' => (int)$validated['year'],
            'period_title' => $validated['period_title'],
            'document_title' => $validated['document_title'],
            'sort_order' => (int)($validated['sort_order'] ?? 0),
            'file_path' => $filePath,
        ]);

        session()->flash('status', 'Report updated.');

        $this->redirectRoute('admin.financial-reports.index', navigate: true);
    }
};
?>

<div>
    <h1>Edit Financial Report</h1>

    <form wire:submit="update">
        <div>
            <label for="year">Year</label>
            <input id="year" type="number" wire:model="year">
            @error('year') <span>{{ $message }}</span> @enderror
        </div>

        <div>
            <label for="period_title">Period Title</label>
            <input id="period_title" type="text" wire:model="period_title">
            @error('period_title') <span>{{ $message }}</span> @enderror
        </div>

        <div>
            <label for="document_title">Document Title</label>
            <input id="document_title" type="text" wire:model="document_title">
            @error('document_title') <span>{{ $message }}</span> @enderror
        </div>

        <div>
            <label for="sort_order">Sort Order</label>
            <input id="sort_order" type="number" wire:model="sort_order">
            @error('sort_order') <span>{{ $message }}</span> @enderror
        </div>

        <div>
            <label for="file">Replace PDF File (Optional)</label>
            <input id="file" type="file" accept="application/pdf" wire:model="file">
            @if ($report->file_path)
                <div>
                    Current file:
                    <a href="{{ asset('storage/' . $report->file_path) }}" target="_blank">View PDF</a>
                </div>
            @endif
            @error('file') <span>{{ $message }}</span> @enderror
        </div>

        <div>
            <button type="submit">Update Report</button>
            <a href="{{ route('admin.financial-reports.index') }}" wire:navigate>Cancel</a>
        </div>
    </form>
</div>
