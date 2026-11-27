<?php

use App\Models\FinancialReport;
use Illuminate\Support\Facades\Storage;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;
use Livewire\WithPagination;

new #[Layout('layouts::app')]
#[Title('Financial Reports')]
class extends Component {
    use WithPagination;

    public function delete(int $id): void
    {
        $report = FinancialReport::findOrFail($id);

        if ($report->file_path) {
            Storage::disk('public')->delete($report->file_path);
        }

        $report->delete();

        session()->flash('status', 'Report deleted.');
    }

    public function with(): array
    {
        return [
            'reports' => FinancialReport::query()
                ->orderByDesc('year')
                ->orderBy('sort_order')
                ->orderByDesc('id')
                ->paginate(20),
        ];
    }
};
?>

<div>
    <div>
        <h4 class="mt-4 text-gray-600">Financial Reports</h4>

        <div class="mt-4">
            <flux:link :href="route('admin.financial-reports.create')" wire:navigate>
                <flux:button type="submit" variant="primary" class="cursor-pointer shadow-md">
                    {{ __('Add Financial Report') }}
                </flux:button>
            </flux:link>
        </div>
    </div>

    @if (session('status'))
        <div>{{ session('status') }}</div>
    @endif

    <table class="table text-gray-600 w-7xl mt-5">
        <thead>
        <tr>
            <th class="py-2 bg-gray-200">Year</th>
            <th class="py-2 bg-gray-200">Period Title</th>
            <th class="py-2 bg-gray-200">Document Title</th>
            <th class="py-2 bg-gray-200">Order</th>
            <th class="py-2 bg-gray-200">File</th>
            <th class="py-2 bg-gray-200 w-10"></th>
            <th class="py-2 bg-gray-200 w-10"></th>
        </tr>
        </thead>
        <tbody>
        @forelse ($reports as $report)
            <tr wire:key="report-{{ $report->id }}">
                <td class="py-1 text-center">{{ $report->year }}</td>
                <td>{{ $report->period_title }}</td>
                <td>{{ $report->document_title }}</td>
                <td class="text-center">{{ $report->sort_order }}</td>
                <td class="text-center">
                    @if ($report->file_path)
                        <a href="{{ asset('storage/' . $report->file_path) }}" target="_blank" class="bg-red-200 p-3 rounded-md hover:text-black hover:bg-red-300 text-gray-700">View PDF</a>
                    @else
                        —
                    @endif
                </td>
                <td class="text-center p-1">
                    <flux:link :href="route('admin.financial-reports.edit', $report)" wire:navigate>
                        <flux:button type="submit" variant="outline" class="cursor-pointer">
                            <x-pen/>
                        </flux:button>
                    </flux:link>
                </td>
                <td class="text-center p-1">
                    <flux:button type="button" variant="danger" class="cursor-pointer"
                                 wire:click="delete({{ $report->id }})"
                                 wire:confirm="Delete this record?">
                        <x-trash/>
                    </flux:button>
                </td>
            </tr>
        @empty
            <tr>
                <td colspan="6">No financial reports found.</td>
            </tr>
        @endforelse
        </tbody>
    </table>

    <div>
        {{ $reports->links() }}
    </div>
</div>
