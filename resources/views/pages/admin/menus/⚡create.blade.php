<?php

use App\Models\MenuItem;
use Illuminate\Support\Collection;
use Livewire\Attributes\Computed;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Attributes\Validate;
use Livewire\Component;

new #[Layout('layouts.app')]
#[Title('Create Menu Item')]
class extends Component {
    #[Validate('required|string|max:191')]
    public string $title = '';

    #[Validate('required|string|max:255')]
    public string $url = '#';

    #[Validate('nullable|exists:menu_items,id')]
    public ?int $parent_id = null;

    #[Validate('nullable|integer|min:0')]
    public int $order = 0;

    #[Validate('required|in:_self,_blank')]
    public string $target = '_self';

    #[Validate('nullable|string|max:50')]
    public ?string $icon = null;

    #[Validate('boolean')]
    public bool $is_active = true;

    #[Computed]
    public function parentOptions(): Collection
    {
        return MenuItem::orderBy('title')->get();
    }

    public function save(): void
    {
        $validated = $this->validate();

        $validated['parent_id'] = $validated['parent_id'] ?: null;
        $validated['order'] = $validated['order'] ?? 0;

        MenuItem::create($validated);

        session()->flash('success', 'Menu item added successfully.');

        $this->redirectRoute('admin.menus.index', navigate: true);
    }
};
?>

<div class="mx-auto max-w-4xl px-4 py-8 sm:px-6 lg:px-8">
    <div class="mb-6 flex flex-wrap items-center justify-between gap-4 border-b border-slate-200 pb-5">
        <div>
            <h1 class="text-2xl font-bold tracking-tight text-slate-900">Create Menu Item</h1>
            <p class="mt-1 text-sm text-slate-500">Add a top-level link or nested submenu entry.</p>
        </div>

        <a
            href="{{ route('admin.menus.index') }}"
            wire:navigate
            class="inline-flex items-center rounded-lg border border-slate-300 bg-white px-4 py-2 text-sm font-medium text-slate-700 shadow-xs transition hover:bg-slate-50"
        >
            &larr; Back to Menus
        </a>
    </div>

    <div class="rounded-xl border border-slate-200 bg-white p-6 shadow-xs">
        <form wire:submit="save" class="space-y-5">
            <div>
                <label for="title" class="block text-sm font-medium text-slate-700">
                    Title <span class="text-rose-600">*</span>
                </label>
                <input
                    type="text"
                    id="title"
                    wire:model="title"
                    placeholder="e.g. Products or Web Services"
                    class="mt-1.5 block w-full rounded-lg border border-slate-300 px-3.5 py-2 text-sm text-slate-900 placeholder-slate-400 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-500/20 focus:outline-none"
                >
                @error('title')
                <p class="mt-1.5 text-xs font-medium text-rose-600">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <label for="url" class="block text-sm font-medium text-slate-700">
                    URL / Path <span class="text-rose-600">*</span>
                </label>
                <input
                    type="text"
                    id="url"
                    wire:model="url"
                    placeholder="e.g. /services or https://..."
                    class="mt-1.5 block w-full rounded-lg border border-slate-300 px-3.5 py-2 text-sm text-slate-900 placeholder-slate-400 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-500/20 focus:outline-none"
                >
                @error('url')
                <p class="mt-1.5 text-xs font-medium text-rose-600">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <label for="parent_id" class="block text-sm font-medium text-slate-700">
                    Parent Menu
                </label>
                <select
                    id="parent_id"
                    wire:model="parent_id"
                    class="mt-1.5 block w-full rounded-lg border border-slate-300 bg-white px-3.5 py-2 text-sm text-slate-900 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-500/20 focus:outline-none"
                >
                    <option value="">-- Top-Level Root Menu --</option>
                    @foreach ($this->parentOptions as $parent)
                        <option value="{{ $parent->id }}">
                            {{ $parent->title }} ({{ $parent->url }})
                        </option>
                    @endforeach
                </select>
                @error('parent_id')
                <p class="mt-1.5 text-xs font-medium text-rose-600">{{ $message }}</p>
                @enderror
            </div>

            <div class="grid grid-cols-1 gap-5 sm:grid-cols-3">
                <div>
                    <label for="order" class="block text-sm font-medium text-slate-700">
                        Display Order
                    </label>
                    <input
                        type="number"
                        id="order"
                        min="0"
                        wire:model="order"
                        class="mt-1.5 block w-full rounded-lg border border-slate-300 px-3.5 py-2 text-sm text-slate-900 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-500/20 focus:outline-none"
                    >
                    @error('order')
                    <p class="mt-1.5 text-xs font-medium text-rose-600">{{ $message }}</p>
                    @enderror
                </div>

                <div>
                    <label for="target" class="block text-sm font-medium text-slate-700">
                        Target Window
                    </label>
                    <select
                        id="target"
                        wire:model="target"
                        class="mt-1.5 block w-full rounded-lg border border-slate-300 bg-white px-3.5 py-2 text-sm text-slate-900 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-500/20 focus:outline-none"
                    >
                        <option value="_self">Same Tab (_self)</option>
                        <option value="_blank">New Tab (_blank)</option>
                    </select>
                    @error('target')
                    <p class="mt-1.5 text-xs font-medium text-rose-600">{{ $message }}</p>
                    @enderror
                </div>

                <div>
                    <label for="icon" class="block text-sm font-medium text-slate-700">
                        Icon Class / Name
                    </label>
                    <input
                        type="text"
                        id="icon"
                        wire:model="icon"
                        placeholder="e.g. heroicon-o-home"
                        class="mt-1.5 block w-full rounded-lg border border-slate-300 px-3.5 py-2 text-sm text-slate-900 placeholder-slate-400 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-500/20 focus:outline-none"
                    >
                    @error('icon')
                    <p class="mt-1.5 text-xs font-medium text-rose-600">{{ $message }}</p>
                    @enderror
                </div>
            </div>

            <div class="pt-1">
                <label class="inline-flex cursor-pointer items-center gap-3">
                    <input
                        type="checkbox"
                        wire:model="is_active"
                        class="h-4 w-4 rounded border-slate-300 text-indigo-600 focus:ring-indigo-500"
                    >
                    <span class="text-sm font-medium text-slate-700">Active &amp; Visible in Navbar</span>
                </label>
            </div>

            <div class="flex items-center justify-end gap-3 border-t border-slate-100 pt-5">
                <a
                    href="{{ route('admin.menus.index') }}"
                    wire:navigate
                    class="rounded-lg border border-slate-300 bg-white px-4 py-2 text-sm font-medium text-slate-700 transition hover:bg-slate-50"
                >
                    Cancel
                </a>
                <button
                    type="submit"
                    wire:loading.attr="disabled"
                    class="inline-flex items-center rounded-lg bg-indigo-600 px-5 py-2 text-sm font-semibold text-white shadow-xs transition hover:bg-indigo-500 disabled:opacity-50"
                >
                    <span wire:loading.remove wire:target="save">Save Menu Item</span>
                    <span wire:loading wire:target="save">Saving...</span>
                </button>
            </div>
        </form>
    </div>
</div>
