
<?php

use App\Models\Board;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Laravel\Mcp\Server\Attributes\Title;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Validate;
use Livewire\Component;
use Livewire\WithFileUploads;

new #[Layout('layouts::app')]
#[Title('Edit Board Member')]
class extends Component {

    use WithFileUploads;

    public Board $board;

    public string $name = '';

    public string $type = '';

    public string $profile = '';

    #[Validate('nullable|image|max:2048')]
    public $picture = null;

    public function mount(Board $board): void
    {
        $this->board = $board;

        $this->name = $board->name;
        $this->type = $board->type;
        $this->profile = $board->profile;
    }

    public function save(): void
    {
        $this->validate([
            'name' => 'required|string|max:255',
            'type' => 'required|string',
            'profile' => 'nullable|string',
            'picture' => 'nullable|image|max:2048',
        ]);

        $this->board->update([
            'name' => $this->name,
            'type' => $this->type,
            'profile' => $this->profile,
        ]);

        // Add Media using Livewire temporary upload
        if ($this->picture) {
            $board->addMedia($this->picture->getRealPath())
                ->usingFileName($this->picture->getClientOriginalName())
                ->toMediaCollection('bod');
        }


        session()->flash('status', 'Director updated successfully.');

        $this->redirectRoute('admin.director.index', $this->board);
    }
};
?>

<div>
    <h4 class="mt-4 text-gray-600">Board Of Directors</h4>
    <h5 class="mt-4 text-xl text-gray-600">Edit Board Member</h5>

    <!-- Session Status -->
    <x-auth-session-status class="text-center" :status="session('status')" />

    <form method="POST" wire:submit="save">
        @csrf

        <!-- Director's Name -->
        <div class="mt-4">
            <flux:input
                wire:model="name"
                :label="__('Name')"
                type="text"
                required
                autofocus
                autocomplete="name"
                :placeholder="__('Name')"
            />
        </div>

        <!-- Type -->
        <div class="mt-5">
            <flux:field>
                <flux:label>Director Type</flux:label>

                <flux:select
                    wire:model="type"
                    placeholder="Select Director Type..."
                >
                    <flux:select.option value="Director">
                        Director
                    </flux:select.option>

                    <flux:select.option value="Managing Director">
                        Managing Director
                    </flux:select.option>

                    <flux:select.option value="Acting Managing Director">
                        Acting Managing Director
                    </flux:select.option>

                    <flux:select.option value="Chairman">
                        Chairman
                    </flux:select.option>

                    <flux:select.option value="Chairperson">
                        Chairperson
                    </flux:select.option>
                </flux:select>

                <flux:error name="type"/>
            </flux:field>
        </div>

        <!-- Profile -->
        <div class="mt-4">
            <flux:textarea
                label="Profile"
                wire:model="profile"
                placeholder="Director's Profile..."
            />
        </div>

        <!-- Existing Picture -->
        <div class="mt-4">
            @if ($board->picture)
                <div class="mb-3">
                    <label class="block mb-2">Current Profile Picture</label>

                    <img
                        src="{{ $board->getFirstMediaUrl('bod') }}"
                        class="h-[50px] object-cover"
                        alt=""
                    />
                </div>
            @endif
        </div>

        <!-- Replace Picture -->
        <div class="mt-4">
            <flux:input
                wire:model="picture"
                :label="__('Replace Profile Picture (Optional)')"
                type="file"
                :placeholder="__('Attach file')"
            />

            <flux:error name="picture"/>

            <!-- New Picture Preview -->
            @if ($picture)
                <div class="mt-3">
                    <label class="block mb-2">New Picture Preview</label>

                    <img
                        src="{{ $picture->temporaryUrl() }}"
                        alt="New Profile Picture"
                        class="w-32 h-32 object-cover rounded-md"
                    />
                </div>
            @endif
        </div>

        <div class="mt-5">
            <flux:button
                type="submit"
                variant="primary"
                class="cursor-pointer"
            >
                {{ __('Update Director') }}
            </flux:button>
        </div>

    </form>
</div>
