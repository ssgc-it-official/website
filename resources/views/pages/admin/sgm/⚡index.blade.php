<?php

use App\Models\Sgm;
use Illuminate\Support\Collection;
use Laravel\Mcp\Server\Attributes\Title;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Validate;
use Livewire\Component;
use Livewire\WithFileUploads;

new #[Layout('layouts::app')]
#[Title('Senior General Managers')]
class extends Component {

    public Collection $sgms;

    public function mount()
    {
        $this->sgms = Sgm::with('category')->get();
    }
}
?>

<div>
    <h4 class="mt-4 text-gray-600">Senior General Managers</h4>
    <h5 class="mt-4 text-xl text-gray-600">List of Senior General Managers</h5>

    <div class="mt-4">
        <flux:link :href="route('admin.sgms.create')" wire:navigate>
            <flux:button type="submit" variant="primary" class="cursor-pointer shadow-md">
                {{ __('Senior General Managers') }}
            </flux:button>
        </flux:link>
    </div>

    <table class="table-auto mt-5 w-7xl text-gray-600">
        <thead>
        <tr>
            <th class="text-center bg-gray-200 py-1">Name</th>
            <th class="text-center bg-gray-200 py-1">Designation</th>
            <th class="text-center bg-gray-200 py-1">Deparment</th>
            <th class="text-center bg-gray-200 py-1">Photo</th>
            <th class="text-center bg-gray-200 py-1 w-10"></th>
            <th class="text-center bg-gray-200 py-1 w-10"></th>
        </tr>
        </thead>
        <tbody>
        @forelse($sgms as $sgm)
            <tr class="even:bg-gray-50 hover:bg-gray-200">
                <td>{{ $sgm->name }}</td>
                <td>{{ $sgm->designation }}</td>
                <td>{{ $sgm->department }}</td>
                <td class="flex justify-center items-center py-2">
                    <img
                        src="{{ $sgm->getFirstMediaUrl('sgms') }}"
                        class="h-[50px] object-cover"
                        alt="{{ $sgm->name }}"
                    />
                </td>
                <td class="text-center p-1">
                    <flux:link :href="route('admin.sgms.edit', $sgm)" wire:navigate>
                        <flux:button type="submit" variant="outline" class="cursor-pointer">
                            <x-pen/>
                        </flux:button>
                    </flux:link>
                </td>
                <td class="text-center p-1">
                    <flux:button type="button" variant="danger" class="cursor-pointer"
                                 wire:click="delete({{ $sgm->id }})"
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
