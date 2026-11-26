<?php

use App\Models\BlacklistedFirm;
use App\Models\Gm;
use Illuminate\Support\Collection;
use Laravel\Mcp\Server\Attributes\Title;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Validate;
use Livewire\Component;
use Livewire\WithFileUploads;

new #[Layout('layouts::app')]
#[Title('General Managers')]
class extends Component {

    public Collection $firms;

    public function mount(): void
    {
        $this->firms = BlacklistedFirm::orderBy('created_at', 'DESC')->get();
    }

    public function delete_firm()
    {

    }
}
?>

<div>
    <h4 class="mt-4 text-gray-600">Blacklisted Firms</h4>
    <h5 class="mt-4 text-xl text-gray-600">List of Blacklisted Firms</h5>

    <table class="table-auto mt-5 w-full text-gray-600">
        <thead>
        <tr>
            <th>Firm Name</th>
            <th>Address</th>
            <th>From</th>
            <th>To</th>
            <th>Reasons</th>
            <th>Type</th>
            <th></th>
            <th></th>
        </tr>
        </thead>
        <tbody>
        @forelse($firms as $firm)
            <tr class="even:bg-gray-50 hover:bg-gray-200 dark:even:bg-gray-700">
                <td>{{ $firm->name }}</td>
                <td class="px-2">{{ $firm->address }}</td>
                <td class="px-2">{{ $firm->from }}</td>
                <td class="px-2">{{ $firm->to }}</td>
                <td class="px-2">{{ $firm->reasons }}</td>
                <td class="px-2">{{ $firm->type }}</td>
                <td class="px-2">
                    <a href="{{ route('admin.blacklist.edit', $firm->id) }}">
                        <button type="button" wire:navigate
                                class="bg-indigo-500 px-1 py-1 rounded-md cursor-pointer" title="Edit">
                            <x-pen/>
                        </button>
                    </a>
                </td>
                <td>
                    <button type="button" wire:click="delete_firm"
                            class="bg-red-500 px-1 py-1 rounded-md cursor-pointer" title="Delete">
                        <x-trash/>
                    </button>
                </td>
            </tr>
        @empty
            <tr>
                <td colspan="4" class="py-4">No records found.</td>
            </tr>
        @endforelse
        </tbody>
    </table>
</div>
