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

    <div class="mt-4">
        <flux:link :href="route('admin.gms.create')" wire:navigate>
            <flux:button type="submit" variant="primary" class="cursor-pointer shadow-md">
                {{ __('Add Blacklisted Firm') }}
            </flux:button>
        </flux:link>
    </div>

    <table class="table-auto mt-5 w-full text-gray-600">
        <thead>
        <tr>
            <th class="text-center bg-gray-200 py-1">Firm Name</th>
            <th class="text-center bg-gray-200 py-1">Address</th>
            <th class="text-center bg-gray-200 py-1">From</th>
            <th class="text-center bg-gray-200 py-1">To</th>
            <th class="text-center bg-gray-200 py-1">Reasons</th>
            <th class="text-center bg-gray-200 py-1">Type</th>
            <th class="text-center bg-gray-200 py-1 w-10"></th>
            <th class="text-center bg-gray-200 py-1 w-10"></th>
        </tr>
        </thead>
        <tbody>
        @forelse($firms as $firm)
            <tr class="even:bg-gray-50 hover:bg-gray-200">
                <td>{{ $firm->name }}</td>
                <td class="px-2">{{ $firm->address }}</td>
                <td class="px-2">{{ $firm->from }}</td>
                <td class="px-2">{{ $firm->to }}</td>
                <td class="px-2">{{ $firm->reasons }}</td>
                <td class="px-2">{{ $firm->type }}</td>
                <td class="text-center p-1">
                    <flux:link :href="route('admin.blacklist.edit', $firm)" wire:navigate>
                        <flux:button type="submit" variant="outline" class="cursor-pointer">
                            <x-pen/>
                        </flux:button>
                    </flux:link>
                </td>
                <td class="text-center p-1">
                    <flux:button type="button" variant="danger" class="cursor-pointer"
                                 wire:click="delete({{ $firm->id }})"
                                 wire:confirm="Delete this record?">
                        <x-trash/>
                    </flux:button>
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
