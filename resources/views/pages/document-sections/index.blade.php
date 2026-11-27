<?php

use App\Models\DocumentSection;
use Livewire\Attributes\Computed;
use Livewire\Attributes\Title;
use Livewire\Attributes\Url;
use Livewire\Component;
use Livewire\WithPagination;

new #[Title('Document Sections')] class extends Component {
    use WithPagination;

    #[Url(as: 'search')]
    public $search = '';

    public function updatedSearch(): void
    {
        $this->resetPage();
    }

    #[Computed]
    public function sections()
    {
        return DocumentSection::with('media')
            ->when($this->search !== '', function ($q) {
                $q->where(function ($q) {
                    $q->where('name', 'like', "%{$this->search}%")
                      ->orWhere('slug', 'like', "%{$this->search}%");
                });
            })
            ->latest()
            ->paginate(10);
    }

    public function delete(int $id): void
    {
        // Deleting the model also deletes its PDF row in `media` and the file on disk.
        DocumentSection::findOrFail($id)->delete();

        session()->flash('success', 'Document section deleted.');
        $this->redirectRoute('document-sections.index', navigate: true);
    }
};
?>

<div class="space-y-6">
    <div class="flex items-center justify-between">
        <flux:heading size="xl" level="1">Document Sections</flux:heading>
        <flux:button variant="primary" icon="plus" :href="route('document-sections.create')" wire:navigate>
            New
        </flux:button>
    </div>

    @if (session('success'))
        <flux:callout variant="success" icon="check-circle" :heading="session('success')" />
    @endif
    @if (session('error'))
        <flux:callout variant="danger" icon="x-circle" :heading="session('error')" />
    @endif

    <div class="max-w-sm">
        <flux:input wire:model.live.debounce.300ms="search" icon="magnifying-glass"
                    placeholder="Search name or slug..." />
    </div>

    <div class="overflow-x-auto rounded-lg border border-zinc-200 dark:border-zinc-700">
        <table class="w-full text-left text-sm text-zinc-800 dark:text-zinc-100">
            <thead class="bg-zinc-50 dark:bg-zinc-800 text-xs uppercase text-zinc-500 dark:text-zinc-400">
                <tr>
                    <th class="px-4 py-3">Name</th>
                    <th class="px-4 py-3">Slug</th>
                    <th class="px-4 py-3">PDF</th>
                    <th class="px-4 py-3 text-right">Actions</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-zinc-200 dark:divide-zinc-700">
            @forelse ($this->sections as $section)
                @php $pdf = $section->pdf; @endphp
                <tr wire:key="section-{{ $section->id }}">
                    <td class="px-4 py-3 font-medium">{{ $section->name }}</td>
                    <td class="px-4 py-3">
                        <flux:badge size="sm">{{ $section->slug }}</flux:badge>
                    </td>
                    <td class="px-4 py-3">
                        @if ($pdf)
                            <div class="space-x-2">
                                <a href="{{ route('document-sections.file', $section) }}" target="_blank"
                                   class="underline text-blue-600 dark:text-blue-400">View</a>
                                <a href="{{ route('document-sections.download', $section) }}"
                                   class="underline text-blue-600 dark:text-blue-400">Download</a>
                            </div>
                            <div class="text-xs text-zinc-500 dark:text-zinc-400">
                                {{ $pdf->file_name }} ({{ $pdf->human_readable_size }})
                            </div>
                        @else
                            <span class="text-zinc-400">No file</span>
                        @endif
                    </td>
                    <td class="px-4 py-3">
                        <div class="flex justify-end gap-2">
                            <flux:button size="sm" :href="route('document-sections.edit', $section)" wire:navigate>
                                Edit
                            </flux:button>
                            <flux:button size="sm" variant="danger"
                                         wire:click="delete({{ $section->id }})"
                                         wire:confirm="Delete this section and its PDF?">
                                Delete
                            </flux:button>
                        </div>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="4" class="px-4 py-8 text-center text-zinc-500 dark:text-zinc-400">
                        No document sections found.
                    </td>
                </tr>
            @endforelse
            </tbody>
        </table>
    </div>

    <div>{{ $this->sections->links() }}</div>
</div>
