<?php

use App\Models\Board;
use Illuminate\Support\Collection;
use Laravel\Mcp\Server\Attributes\Title;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Validate;
use Livewire\Component;
use Livewire\WithFileUploads;

new #[Layout('layouts::app')]
#[Title('Board of Directors')]
class extends Component {

    public Collection $members;

    public function mount()
    {
        $this->members = Board::all();
    }
}
?>

<div>
    <h4 class="mt-4 text-gray-600">Board Of Directors</h4>
    <h5 class="mt-4 text-xl text-gray-600">List of  Board Members</h5>

    <div class="mt-4">
        <flux:link :href="route('admin.director.create')" wire:navigate>
            <flux:button type="submit" variant="primary" class="cursor-pointer shadow-md">
                {{ __('Add Board Member') }}
            </flux:button>
        </flux:link>
    </div>

    <!-- Session Status -->
    <x-auth-session-status class="text-center" :status="session('status')" />

    <table class="table-auto mt-5 w-7xl text-gray-600">
        <thead>
        <tr>
            <th class="text-center bg-gray-200 py-1">Name</th>
            <th class="text-center bg-gray-200 py-1">Type</th>
            <th class="text-center bg-gray-200 py-1">Profile</th>
            <th class="text-center bg-gray-200 py-1">Photo</th>
            <th class="text-center bg-gray-200 py-1 w-10"></th>
            <th class="text-center bg-gray-200 py-1 w-10"></th>
        </tr>
        </thead>
        <tbody>
        @forelse($members as $member)
            <tr class="even:bg-gray-200">
                <td class="px-1">
                    <a href="{{ route('admin.director.edit', $member->id) }}" wire:navigate class="hover:text-red-500">{{ $member->name }}</a></td>
                <td class="px-1">{{ $member->type }}</td>
                <td class="px-1 whitespace-pre-line">{!! Str::limit($member->profile, 100) !!}</td>
                <td class="px-1 flex justify-center items-center py-2">
                    <img
                        src="{{ $member->getFirstMediaUrl('bod') }}"
                        class="h-[50px] object-cover"
                        alt=""
                    />
                </td>
                <td class="text-center p-1">
                    <flux:link :href="route('admin.blacklist.edit', $member)" wire:navigate>
                        <flux:button type="submit" variant="outline" class="cursor-pointer">
                            <x-pen/>
                        </flux:button>
                    </flux:link>
                </td>
                <td class="text-center p-1">
                    <flux:button type="button" variant="danger" class="cursor-pointer"
                                 wire:click="delete({{ $member->id }})"
                                 wire:confirm="Delete this director?">
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
