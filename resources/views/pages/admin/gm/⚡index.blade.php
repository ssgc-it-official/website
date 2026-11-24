<?php

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

    public Collection $gms;

    public function mount()
    {
        $this->gms = Gm::with('category')->get();
    }
}
?>

<div>
    <h4 class="mt-4">General Managers</h4>
    <h5 class="mt-4 text-xl">List of General Managers</h5>

    <table class="table-auto mt-5 w-5xl">
        <thead>
        <tr>
            <th>Name</th>
            <th>Designation</th>
            <th>Deparment</th>
            <th>Photo</th>
        </tr>
        </thead>
        <tbody>
        @forelse($gms as $gm)
            <tr class="even:bg-gray-50 hover:bg-gray-200 dark:even:bg-gray-700">
                <td>{{ $gm->name }}</td>
                <td>{{ $gm->designation }}</td>
                <td>{{ $gm->department }}</td>
                <td class="flex justify-center items-center py-2">
                    <img
                        src="{{ $gm->getFirstMediaUrl('gms') }}"
                        class="h-[50px] object-cover"
                        alt="{{ $gm->name }}"
                    />
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
