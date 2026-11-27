<?php

use App\Models\Gm;
use App\Models\ManagementCategory;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Attributes\Validate;
use Livewire\Component;
use Livewire\WithFileUploads;

new #[Layout('layouts::app')]
#[Title('Edit General Manager')]
class extends Component {

    use WithFileUploads;

    public Gm $gm;

    #[Validate('required|string|max:255')]
    public string $name = '';

    #[Validate('required|exists:management_categories,id')]
    public string $designation = '';

    public Collection $designations;

    #[Validate('required|string|max:255')]
    public string $department = '';

    #[Validate('nullable|image|max:2048')]
    public $picture;

    public function mount(Gm $gm): void
    {
        $this->gm = $gm;
        $this->designations = ManagementCategory::all();

        $this->name = $gm->name;
        $this->designation = (string) $gm->category_id;
        $this->department = $gm->department;
    }

    public function update(): void
    {
        $this->validate();

        $designationName = ManagementCategory::where('id', $this->designation)->value('name');

        $this->gm->update([
            'name' => $this->name,
            'designation' => $designationName,
            'department' => $this->department,
            'category_id' => $this->designation,
            'user_id' => Auth::id(),
        ]);

        if ($this->picture) {
            $this->gm->clearMediaCollection('gms');

            $this->gm->addMedia($this->picture->getRealPath())
                ->usingFileName($this->picture->getClientOriginalName())
                ->toMediaCollection('gms');
        }

        session()->flash('status', 'GM updated successfully.');

        $this->redirectRoute('admin.gms.edit', $this->gm);
    }
};
?>

<div>
    <h4 class="mt-4 text-gray-600">General Managers</h4>
    <h5 class="mt-4 text-xl text-gray-600">Edit General Manager</h5>

    <!-- Session Status -->
    <x-auth-session-status class="text-center" :status="session('status')"/>

    <form method="POST" wire:submit="update">
        @csrf

        <!-- Name -->
        <div class="mt-4">
            <flux:input
                wire:model="name"
                :label="__('Name')"
                type="text"
                required
                autofocus
                autocomplete="name"
                :placeholder="__('Name')"
                badge="Required"
            />
        </div>

        <!-- Designation -->
        <div class="mt-5">
            <flux:field>
                <flux:label>Designation</flux:label>

                <flux:select badge="Required" wire:model="designation" placeholder="Select Designation...">
                    @foreach($designations as $item)
                        <flux:select.option value="{{ $item->id }}">{{ $item->name }}</flux:select.option>
                    @endforeach
                </flux:select>

                <flux:error name="designation"/>
            </flux:field>
        </div>

        <!-- Department -->
        <div class="mt-4">
            <flux:input
                wire:model="department"
                :label="__('Department')"
                type="text"
                required
                :placeholder="__('Department')"
                badge="Required"
            />
        </div>

        <!-- Current Picture Preview -->
        @if($gm->getFirstMediaUrl('gms'))
            <div class="mt-4">
                <flux:label class="mb-2 block">Current Profile Picture</flux:label>
                <img
                    src="{{ $gm->getFirstMediaUrl('gms') }}"
                    alt="{{ $gm->name }}"
                    class="h-20 w-20 rounded-lg object-cover"
                />
            </div>
        @endif

        <!-- Picture -->
        <div class="mt-4">
            <flux:input
                wire:model="picture"
                :label="__('Profile Picture')"
                type="file"
                :placeholder="__('Attach file')"
            />
        </div>

        <div class="mt-5 flex items-center gap-3">
            <flux:button type="submit" variant="primary" class="cursor-pointer">
                {{ __('Update General Manager') }}
            </flux:button>
        </div>
    </form>
</div>
