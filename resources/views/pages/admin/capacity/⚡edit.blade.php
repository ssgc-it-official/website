<?php

use App\Models\Board;
use App\Models\CapacityInfo;
use Laravel\Mcp\Server\Attributes\Title;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Validate;
use Livewire\Component;
use Livewire\WithFileUploads;
use Spatie\MediaLibrary\HasMedia;

new #[Layout('layouts::app')]
#[Title('Update Capacity Information')]
class extends Component {

    use WithFileUploads;

    public string $capacity_id = '';

    #[Validate('nullable|file|max:2048')]
    public $file_1 = '';

    #[Validate('nullable|file|max:2048')]
    public $file_2 = '';

    public function save(): void
    {
        $this->validate();

        $filename = date("Y" . '_' . date("m"));

        // Capacity Info - Baluchistan
        if($this->capacity_id === "1") {
            $file_1 = $filename . "_cap_info_dist_balochistan.pdf";
            $file_2 = $filename . "_cap_info_dist_balochistan_segment_wise.pdf";
        } else if($this->capacity_id === "2") {
            // Capacity Info - Distribution Karachi
            $file_1 = $filename . "_cap_info_dist_khi.pdf";
            $file_2 = $filename . "_cap_info_dist_khi_segment_wise.pdf";
        } else if($this->capacity_id === "3") {
            // Capacity Info - Distribution Sindh
            $file_1 = $filename . "_cap_info_dist_sindh.pdf";
            $file_2 = $filename . "_cap_info_dist_sindh_segment_wise.pdf";
        } else if($request->capacity_id === "4") {
            // Capacity Info - Transmission
            $file_1 = $filename . "_cap_info_dist_trans.pdf";
            $file_2 = $filename . "_cap_info_dist_trans_segment_wise.pdf";
        } else {
            $file_1 = NULL; $file_2 = NULL;
        }

        $capacity = CapacityInfo::where('id', $this->capacity_id)->update([
            'file_1' => $file_1,
            'file_2' => $file_2,
            'user_id' => Auth::id(),
        ]);

        if($this->file_1) {
            $this->file_1->storeAs(path: 'capacity', name: $file_1, options: 'public');
        }

        if($this->file_2) {
            $this->file_2->storeAs(path: 'capacity', name: $file_2, options: 'public');
        }

        session()->flash('status', 'Capacity information updated successfully.');

        $this->redirectRoute('admin.capacity-info.edit');
    }
}
?>

<div>
    <h4 class="mt-4">Capacity Information</h4>
    <h5 class="mt-4 text-xl">Update Capacity Information</h5>

    <!-- Session Status -->
    <x-auth-session-status class="text-center" :status="session('status')"/>

    <form method="POST" wire:submit="save">
        @csrf

        <!-- Capacity Type -->
        <div class="mt-5">
            <flux:field>
                <flux:label>Capacity Type</flux:label>

                <flux:select badge="Required" wire:model="capacity_id" placeholder="Select Capacity Type...">
                    <flux:select.option value="1">Baluchistan</flux:select.option>
                    <flux:select.option value="2">Karachi</flux:select.option>
                    <flux:select.option value="3">Sindh</flux:select.option>
                    <flux:select.option value="4">Transmission</flux:select.option>
                </flux:select>

                <flux:error name="type"/>
            </flux:field>
        </div>

        <!-- File #1 -->
        <div class="mt-4">
            <flux:input
                wire:model="file_1"
                :label="__('Entry / Exit Points')"
                :value="old('file_1')"
                type="file"
                required
                :placeholder="__('Attach file')"
            />

        </div>

        <!-- File #2 -->
        <div class="mt-4">
            <flux:input
                wire:model="file_2"
                :label="__('Segment-Wise Capacity Info')"
                :value="old('file_2')"
                type="file"
                required
                :placeholder="__('Attach file')"
            />

        </div>

        <div class="mt-5">
            <flux:button type="submit" variant="primary" class="cursor-pointer">
                {{ __('Publish Capacity Info') }}
            </flux:button>
        </div>

    </form>
</div>
