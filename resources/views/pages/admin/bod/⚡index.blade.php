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
    <h4 class="mt-4">Board Of Directors</h4>
    <h5 class="mt-4 text-xl">List of  Board Members</h5>

    <!-- Session Status -->
    <x-auth-session-status class="text-center" :status="session('status')" />

    <table class="table-auto mt-5 w-full">
        <thead>
        <tr>
            <th>Name</th>
            <th>Type</th>
            <th>Profile</th>
            <th>Photo</th>
        </tr>
        </thead>
        <tbody>
        @forelse($members as $member)
            <tr>
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
            </tr>
        @empty
            <tr>
                <td colspan="4" class="py-4">No records found.</td>
            </tr>
        @endforelse
        </tbody>
    </table>
</div>
