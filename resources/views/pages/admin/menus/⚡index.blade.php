<?php

use App\Models\MenuItem;
use Illuminate\Database\Eloquent\Collection;
use Livewire\Attributes\Computed;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;

new #[Layout('layouts.app')]
#[Title('Manage Menus & Submenus')]
class extends Component {
    public ?string $statusMessage = null;

    public function mount(): void
    {
        if (session()->has('success')) {
            $this->statusMessage = session('success');
        }
    }

    #[Computed]
    public function menuTree(): Collection
    {
        return MenuItem::tree();
    }

    public function toggleActive(int $id): void
    {
        $item = MenuItem::findOrFail($id);
        $item->update(['is_active' => !$item->is_active]);

        unset($this->menuTree);
        $this->statusMessage = "Updated visibility for \"{$item->title}\".";
    }

    public function deleteMenu(int $id): void
    {
        $item = MenuItem::findOrFail($id);
        $item->delete();

        unset($this->menuTree);
        $this->statusMessage = 'Menu item and all nested submenus removed.';
    }
};
?>

<div class="mx-auto max-w-6xl px-4 py-8 sm:px-6 lg:px-8">
    <!-- Header -->
    <div class="mb-6 flex flex-wrap items-center justify-between gap-4 border-b border-slate-200 pb-5">
        <div>
            <h1 class="text-2xl font-bold tracking-tight text-slate-900">Menu Architecture</h1>
            <p class="mt-1 text-sm text-slate-500">Build, nest, and rearrange menus and submenus.</p>
        </div>

        <div class="flex flex-wrap items-center gap-3">
            <a
                href="{{ route('home') }}"
                class="inline-flex items-center rounded-lg border border-slate-300 bg-white px-4 py-2 text-sm font-medium text-slate-700 shadow-xs transition hover:bg-slate-50"
            >
                View Live Website &rarr;
            </a>
            <a
                href="{{ route('admin.menus.create') }}"
                wire:navigate
                class="inline-flex items-center rounded-lg bg-indigo-600 px-4 py-2 text-sm font-semibold text-white shadow-xs transition hover:bg-indigo-500"
            >
                + Add Menu Item
            </a>
        </div>
    </div>

    <!-- Flash / Livewire Alert -->
    @if ($statusMessage)
        <div
            wire:key="status-alert"
            class="mb-6 flex items-center justify-between rounded-lg border border-emerald-200 bg-emerald-50 px-4 py-3 text-sm text-emerald-800"
        >
            <span>{{ $statusMessage }}</span>
            <button
                type="button"
                wire:click="$set('statusMessage', null)"
                class="ml-4 text-xs font-semibold text-emerald-700 hover:text-emerald-950"
            >
                Dismiss
            </button>
        </div>
    @endif

    <!-- Hierarchy Tree Panel -->
    <div class="rounded-xl border border-slate-200 bg-white shadow-xs">
        <div class="flex items-center justify-between border-b border-slate-200 px-6 py-4">
            <h2 class="text-base font-semibold text-slate-900">Live Hierarchy Tree</h2>
            <span class="rounded-full bg-slate-100 px-3 py-1 text-xs font-semibold text-slate-700">
                {{ $this->menuTree->count() }} Root {{ \Illuminate\Support\Str::plural('Node', $this->menuTree->count()) }}
            </span>
        </div>

        <div class="p-6">
            @if ($this->menuTree->isEmpty())
                <div class="rounded-lg border border-dashed border-slate-300 py-12 text-center">
                    <p class="text-sm font-medium text-slate-700">No menu items created yet.</p>
                    <p class="mt-1 text-xs text-slate-500">Click &ldquo;Add Menu Item&rdquo; above to create your
                        primary navigation links.</p>
                </div>
            @else
                <ul class="space-y-3">
                    @foreach ($this->menuTree as $item)
                        @include('partials.tree-node', ['item' => $item, 'depth' => 0])
                    @endforeach
                </ul>
            @endif
        </div>
    </div>
</div>
