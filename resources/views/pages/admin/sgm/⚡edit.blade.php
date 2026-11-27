<?php

use App\Models\ManagementCategory;
use App\Models\Sgm;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Support\Facades\Auth;
use Laravel\Mcp\Server\Attributes\Title;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Validate;
use Livewire\Component;
use Livewire\WithFileUploads;

new #[Layout('layouts::app')]
#[Title('Edit Senior General Manager')]
class extends Component {

    use WithFileUploads;

    public Sgm $sgm;

    public string $name = '';

    public string $designation = '';

    public Collection $designations;

    public string $department = '';

    #[Validate('nullable|image|max:2048')]
    public $picture;

    public function mount(Sgm $sgm): void
    {
        $this->sgm = $sgm;
        $this->designations = ManagementCategory::all();

        $this->name = (string) $sgm->name;
        $this->designation = (string) ($sgm->category_id ?? '');
        $this->department = (string) $sgm->department;
    }

    public function update(): void
    {
        $this->validate([
            'name' => ['required', 'string', 'max:255'],
            'designation' => ['required', 'exists:management_categories,id'],
            'department' => ['required', 'string', 'max:255'],
            'picture' => ['nullable', 'image', 'max:2048'],
        ]);

        $designationName = ManagementCategory::where('id', $this->designation)->value('name');

        $this->sgm->update([
            'name' => $this->name,
            'designation' => $designationName,
            'department' => $this->department,
            'category_id' => $this->designation,
            'user_id' => Auth::id(),
        ]);

        if ($this->picture) {
            $this->sgm->clearMediaCollection('sgms');

            $this->sgm->addMedia($this->picture->getRealPath())
                ->usingFileName($this->picture->getClientOriginalName())
                ->toMediaCollection('sgms');
        }

        session()->flash('status', 'SGM updated successfully.');

        $this->redirectRoute('admin.sgms.edit', $this->sgm);
    }
};
?>

<div>
    <h4 class="mt-4 text-gray-600">Senior General Managers</h4>
    <h5 class="mt-4 text-xl text-gray-600">Edit Senior General Manager</h5>

    <!-- Session Status -->
    <x-auth-session-status class="text-center" :status="session('status')" />

    <form wire:submit="update">
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

                <flux:select wire:model="designation" badge="Required" placeholder="Select Designation...">
                    @foreach($designations as $category)
                        <flux:select.option value="{{ $category->id }}">{{ $category->name }}</flux:select.option>
                    @endforeach
                </flux:select>

                <flux:error name="designation" />
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

        <!-- Current / New Picture -->
        <div class="mt-4">
            @if($picture)
                <div class="mb-3">
                    <p class="mb-1 text-sm text-gray-500">{{ __('New Picture Preview') }}</p>
                    <img src="{{ $picture->temporaryUrl() }}" alt="Preview" class="h-24 w-24 rounded object-cover" />
                </div>
            @elseif($sgm->getFirstMediaUrl('sgms'))
                <div class="mb-3">
                    <p class="mb-1 text-sm text-gray-500">{{ __('Current Picture') }}</p>
                    <img src="{{ $sgm->getFirstMediaUrl('sgms') }}" alt="{{ $sgm->name }}" class="h-24 w-24 rounded object-cover" />
                </div>
            @endif

            <flux:input
                wire:model="picture"
                :label="__('Profile Picture')"
                type="file"
                :placeholder="__('Attach file')"
            />
        </div>

        <div class="mt-5">
            <flux:button type="submit" variant="primary" class="cursor-pointer">
                {{ __('Update Senior General Manager') }}
            </flux:button>
        </div>
    </form>
</div>
