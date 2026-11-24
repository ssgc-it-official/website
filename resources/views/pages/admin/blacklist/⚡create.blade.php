<?php

use App\Models\BlacklistedFirm;
use Laravel\Mcp\Server\Attributes\Title;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Validate;
use Livewire\Component;
use Livewire\WithFileUploads;

new #[Layout('layouts::app')]
#[Title('Add Blacklisted Firm')]
class extends Component {

    #[Validate('required|min:10|max:100')]
    public string $name = '';

    #[Validate('required|min:10|max:200')]
    public string $address = '';

    #[Validate('required|max:11')]
    public string $from = '';

    #[Validate('required|max:11')]
    public string $to = '';

    #[Validate('required|max:500')]
    public string $reasons = '';

    #[Validate('required|max:200')]
    public string $type = '';

    public function save(): void
    {
        $this->validate();

        BlacklistedFirm::create([
            'name' => $this->name,
            'address' => $this->address,
            'from' => $this->from,
            'to' => $this->to,
            'reasons' => $this->reasons,
            'type' => $this->type,
            'user_id' => Auth::id(),
        ]);

        session()->flash('status', 'Blacklisted firm added successfully.');

        $this->redirectRoute('admin.blacklist.index');
    }
}
?>

<div>
    <h4 class="mt-4">Blacklisted Firms</h4>
    <h5 class="mt-4 text-xl">Add New Blacklisted Firm</h5>

    <!-- Session Status -->
    <x-auth-session-status class="text-center" :status="session('status')"/>

    <form method="POST" wire:submit="save">
        @csrf

        <!-- Firm / Company Name -->
        <div class="mt-4">
            <flux:input
                wire:model="name"
                :label="__('Firm / Company Name')"
                :value="old('name')"
                type="text"
                required
                autofocus
                autocomplete="name"
                :placeholder="__('Firm / Company Name')"
                badge="Required"
            />
        </div>

        <!-- Address -->
        <div class="mt-4">
            <flux:input
                wire:model="address"
                :label="__('Address')"
                :value="old('address')"
                type="text"
                required
                autofocus
                autocomplete="address"
                :placeholder="__('Address')"
                badge="Required"
            />
        </div>

        <!-- From -->
        <div class="mt-4">
            <flux:input
                wire:model="from"
                :label="__('From')"
                :value="old('from')"
                type="text"
                required
                autofocus
                autocomplete="from"
                :placeholder="__('From')"
                badge="Required"
            />
        </div>

        <!-- To -->
        <div class="mt-4">
            <flux:input
                wire:model="to"
                :label="__('To')"
                :value="old('to')"
                type="text"
                required
                autofocus
                autocomplete="to"
                :placeholder="__('To')"
                badge="Required"
            />
        </div>

        <!-- Reasons -->
        <div class="mt-4">
            <flux:input
                wire:model="reasons"
                :label="__('Reasons')"
                :value="old('reasons')"
                type="text"
                required
                autofocus
                autocomplete="reasons"
                :placeholder="__('Reasons')"
                badge="Required"
            />
        </div>

        <!-- Type -->
        <div class="mt-4">
            <flux:input
                wire:model="type"
                :label="__('Type')"
                :value="old('type')"
                type="text"
                required
                autofocus
                autocomplete="type"
                :placeholder="__('Type')"
                badge="Required"
            />
        </div>

        <div class="mt-5">
            <flux:button type="submit" variant="primary" class="cursor-pointer">
                {{ __('Add Blacklisted Firm') }}
            </flux:button>
        </div>
    </form>
</div>
