<?php

use App\Models\ManagementCategory;
use App\Models\Sgm;
use Illuminate\Database\Eloquent\Collection;
use Laravel\Mcp\Server\Attributes\Title;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Validate;
use Livewire\Component;
use Livewire\WithFileUploads;
use Spatie\MediaLibrary\HasMedia;

new #[Layout('layouts::app')]
#[Title('Add New Senior General Manager')]
class extends Component {

    use WithFileUploads;

    public string $name = '';

    public string $designation = '';

    public Collection $designations;

    public string $department = '';

    #[Validate('image|max:2048')]
    public $picture;

    public function mount()
    {
        $this->designations = ManagementCategory::all();
    }

    public function save(): void
    {
        $designation = ManagementCategory::where('id', $this->designation)->value('name');

        $sgms = Sgm::create([
            'name' => $this->name,
            'designation' => $designation,
            'department' => $this->department,
            'photo' => 'media',
            'category_id' => $this->designation,
            'user_id' => Auth::id(),
        ]);

        $sgms->addMedia($this->picture->getRealPath())
            ->usingFileName($this->picture->getClientOriginalName())
            ->toMediaCollection('sgms');

        session()->flash('status', 'SGM added successfully.');

        $this->redirectRoute('admin.sgms.create');
    }
};
?>

<div>
    <h4 class="mt-4 text-gray-600">Senior General Managers</h4>
    <h5 class="mt-4 text-xl text-gray-600">Add Senior General Managers</h5>

    <!-- Session Status -->
    <x-auth-session-status class="text-center" :status="session('status')"/>

    <form method="POST" wire:submit="save">
        @csrf

        <!-- Name -->
        <div class="mt-4">
            <flux:input
                wire:model="name"
                :label="__('Name')"
                :value="old('name')"
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

                <flux:select wire:model="designation" badge="Required" placeholder="Select Designation...">
                    @foreach($designations as $designation)
                        <flux:select.option value="{{ $designation->id }}">{{ $designation->name }}</flux:select.option>
                    @endforeach
                </flux:select>

                <flux:error name="type"/>
            </flux:field>
        </div>

        <!-- Department -->
        <div class="mt-4">
            <flux:input
                wire:model="department"
                :label="__('Department')"
                :value="old('department')"
                type="text"
                required
                :placeholder="__('Department')"
                badge="Required"
            />
        </div>

        <!-- Picture -->
        <div class="mt-4">
            <flux:input
                wire:model="picture"
                :label="__('Profile Picture')"
                :value="old('picture')"
                type="file"
                required
                :placeholder="__('Attach file')"
                badge="Required"
            />

        </div>

        <div class="mt-5">
            <flux:button type="submit" variant="primary" class="cursor-pointer">
                {{ __('Add Senior General Manager') }}
            </flux:button>
        </div>

    </form>
</div>
