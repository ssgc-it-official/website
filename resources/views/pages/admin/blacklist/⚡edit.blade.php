
<?php

use App\Models\BlacklistedFirm;
use Laravel\Mcp\Server\Attributes\Title;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Validate;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;

new #[Layout('layouts::app')]
#[Title('Edit Blacklisted Firm')]
class extends Component {

    public BlacklistedFirm $firm;

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

    public function mount(BlacklistedFirm $blacklistedFirm): void
    {
        $this->firm = $blacklistedFirm;

        $this->name = $this->firm->name;
        $this->address = $this->firm->address;

        // Get original database values, bypassing accessors
        $this->from = $this->firm->getRawOriginal('from') ?? '';
        $this->to = $this->firm->getRawOriginal('to') ?? '';

        $this->reasons = $this->firm->reasons;
        $this->type = $this->firm->type;
    }

    public function save(): void
    {
        $this->validate();

        $this->firm->update([
            'name' => $this->name,
            'address' => $this->address,
            'from' => $this->from,
            'to' => $this->to,
            'reasons' => $this->reasons,
            'type' => $this->type,
            'user_id' => Auth::id(),
        ]);

        session()->flash('status', 'Blacklisted firm updated successfully.');

        $this->redirectRoute('admin.blacklist.index');
    }
}
?>

<div>
    <h4 class="mt-4">Blacklisted Firms</h4>
    <h5 class="mt-4 text-xl">Edit Blacklisted Firm</h5>

    <!-- Session Status -->
    <x-auth-session-status
        class="text-center"
        :status="session('status')"
    />

    <form method="POST" wire:submit="save">
        @csrf

        <!-- Firm / Company Name -->
        <div class="mt-4">
            <flux:input
                wire:model="name"
                :label="__('Firm / Company Name')"
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
                type="text"
                required
                autocomplete="street-address"
                :placeholder="__('Address')"
                badge="Required"
            />
        </div>

        <!-- From -->
        <div class="mt-4">
            <flux:input
                wire:model="from"
                :label="__('From')"
                type="text"
                required
                placeholder="From"
                badge="Required"
            />
        </div>

        <!-- To -->
        <div class="mt-4">
            <flux:input
                wire:model="to"
                :label="__('To')"
                type="text"
                required
                placeholder="To"
                badge="Required"
            />
        </div>

        <!-- Reasons -->
        <div class="mt-4">
            <flux:input
                wire:model="reasons"
                :label="__('Reasons')"
                type="text"
                required
                placeholder="Reasons"
                badge="Required"
            />
        </div>

        <!-- Type -->
        <div class="mt-4">
            <flux:input
                wire:model="type"
                :label="__('Type')"
                type="text"
                required
                placeholder="Type"
                badge="Required"
            />
        </div>

        <div class="mt-5">
            <flux:button type="submit" variant="primary" class="cursor-pointer">
                {{ __('Update Blacklisted Firm') }}
            </flux:button>
        </div>
    </form>
</div>
