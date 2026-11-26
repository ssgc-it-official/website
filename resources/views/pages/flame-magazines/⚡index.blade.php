<?php

use App\Models\FlameMagazine;
use Livewire\Attributes\Computed;
use Livewire\Attributes\Url;
use Livewire\Component;
use Livewire\WithPagination;

new class extends Component {
    use WithPagination;

    #[Url(except: '')]
    public string $search = '';

    public function updatedSearch(): void
    {
        $this->resetPage();
    }

    #[Computed]
    public function issues()
    {
        return FlameMagazine::query()
            ->with('media')
            ->when($this->search, fn ($q) => $q->where('title', 'like', "%{$this->search}%"))
            ->orderByDesc('published_at')
            ->paginate(10);
    }

    public function toggleActive(int $id): void
    {
        $issue = FlameMagazine::findOrFail($id);
        $issue->update(['is_active' => ! $issue->is_active]);
    }

    public function delete(int $id): void
    {
        // Spatie Media Library removes the cover and PDF files automatically
        FlameMagazine::findOrFail($id)->delete();

        session()->flash('success', 'Issue deleted.');
    }
};
?>

<div class="space-y-6">
    <div class="flex flex-wrap items-center justify-between gap-3">
        <flux:heading size="xl" level="1">Magazine Issues</flux:heading>

        <flux:button variant="primary" icon="plus" :href="route('flame-magazines.create')" wire:navigate>
            New Issue
        </flux:button>
    </div>

    @if (session('success'))
        <flux:callout variant="success" icon="check-circle" :heading="session('success')" />
    @endif

    <flux:input wire:model.live.debounce.300ms="search" icon="magnifying-glass"
        placeholder="Search by title..." clearable />

    <flux:table :paginate="$this->issues">
        <flux:table.columns>
            <flux:table.column>Cover</flux:table.column>
            <flux:table.column>Title</flux:table.column>
            <flux:table.column>Published</flux:table.column>
            <flux:table.column>PDF</flux:table.column>
            <flux:table.column>Active</flux:table.column>
            <flux:table.column></flux:table.column>
        </flux:table.columns>

        <flux:table.rows>
            @forelse ($this->issues as $issue)
                <flux:table.row :key="$issue->id">
                    <flux:table.cell>
                        @if ($issue->hasMedia('cover'))
                            <img src="{{ $issue->getFirstMediaUrl('cover') }}" alt=""
                                 class="h-16 w-12 rounded object-cover">
                        @else
                            <span class="text-zinc-400">—</span>
                        @endif
                    </flux:table.cell>

                    <flux:table.cell class="font-medium">{{ $issue->title }}</flux:table.cell>

                    <flux:table.cell>{{ $issue->published_at->format('M j, Y') }}</flux:table.cell>

                    <flux:table.cell>
                        @if ($issue->hasMedia('pdf'))
                            <a href="{{ $issue->getFirstMediaUrl('pdf') }}" target="_blank" rel="noopener"
                               class="underline text-blue-600 dark:text-blue-400">View</a>
                        @else
                            <span class="text-zinc-400">Missing</span>
                        @endif
                    </flux:table.cell>

                    <flux:table.cell>
                        <flux:switch :checked="$issue->is_active"
                                     wire:click="toggleActive({{ $issue->id }})" />
                    </flux:table.cell>

                    <flux:table.cell>
                        <div class="flex justify-end gap-2">
                            <flux:button size="sm" icon="pencil-square"
                                :href="route('flame-magazines.edit', $issue)" wire:navigate>
                                Edit
                            </flux:button>

                            <flux:button size="sm" variant="danger" icon="trash"
                                wire:click="delete({{ $issue->id }})"
                                wire:confirm="Delete '{{ $issue->title }}'? This also removes its cover and PDF.">
                                Delete
                            </flux:button>
                        </div>
                    </flux:table.cell>
                </flux:table.row>
            @empty
                <flux:table.row>
                    <flux:table.cell colspan="6" class="text-center text-zinc-500">
                        No issues found.
                    </flux:table.cell>
                </flux:table.row>
            @endforelse
        </flux:table.rows>
    </flux:table>
</div>
