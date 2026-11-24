<?php

use App\Models\Board;
use Laravel\Mcp\Server\Attributes\Title;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Validate;
use Livewire\Component;
use Livewire\WithFileUploads;
use Spatie\MediaLibrary\HasMedia;

new #[Layout('layouts::app')]
#[Title('Add New Board Member')]
class extends Component {

    use WithFileUploads;

    public string $name = '';

    public string $type = '';

    public string $profile = '';

    #[Validate('image|max:2048')]
    public $picture;

    public function save(): void
    {
        $this->validate();

        $board = Board::create([
            'name' => $this->name,
            'type' => $this->type,
            'profile' => $this->profile,
            'picture' => 'media',
            'user_id' => Auth::id(),
        ]);

        // Add Media using Livewire temporary upload
        $board->addMedia($this->picture->getRealPath())
            ->usingFileName($this->picture->getClientOriginalName())
            ->toMediaCollection('bod');

        session()->flash('status', 'Director added successfully.');

        $this->redirectRoute('admin.director.create');
    }
}
?>

<div>
    <h4 class="mt-4">Board Of Directors</h4>
    <h5 class="mt-4 text-xl">Add New Board Member</h5>

    <!-- Session Status -->
    <x-auth-session-status class="text-center" :status="session('status')"/>

    <form method="POST" wire:submit="save">
        @csrf

        <!-- Director's Name -->
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

        <!-- Type -->
        <div class="mt-5">
            <flux:field>
                <flux:label>Director Type</flux:label>

                <flux:select badge="Required" wire:model="type" placeholder="Select Director Type...">
                    <flux:select.option value="Director">Director</flux:select.option>
                    <flux:select.option value="Managing Director">Managing Director</flux:select.option>
                    <flux:select.option value="Acting Managing Director">Acting Managing Director</flux:select.option>
                    <flux:select.option value="Chairman">Chairman</flux:select.option>
                    <flux:select.option value="Chairperson">Chairperson</flux:select.option>
                </flux:select>

                <flux:error name="type"/>
            </flux:field>
        </div>

        <!-- Profile -->
        <div class="mt-4">
            <flux:textarea
                label="Profile" wire:model="profile"
                placeholder="Director's Profile..."
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
            />

        </div>

        <div class="mt-5">
            <flux:button type="submit" variant="primary" class="cursor-pointer">
                {{ __('Add Director') }}
            </flux:button>
        </div>

    </form>
</div>
