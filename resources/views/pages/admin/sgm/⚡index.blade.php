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

    <table class="table-auto mt-5 w-5xl text-gray-600">
        <thead>
        <tr>
            <th>Name</th>
            <th>Designation</th>
            <th>Deparment</th>
            <th>Photo</th>
        </tr>
        </thead>
        <tbody>
        @forelse($sgms as $sgm)
            <tr class="even:bg-gray-50 hover:bg-gray-200 dark:even:bg-gray-700">
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
            </tr>
        @empty
            <tr>
                <td colspan="4" class="py-4">No records found.</td>
            </tr>
        @endforelse
        </tbody>
    </table>
</div>
