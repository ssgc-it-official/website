<li wire:key="menu-node-{{ $item->id }}" class="rounded-lg border border-slate-200 bg-slate-50/60 p-3.5">
    <div class="flex flex-wrap items-center justify-between gap-3">
        <div class="min-w-0 flex-1">
            <div class="flex flex-wrap items-center gap-2">
                @if ($depth > 0)
                    <span class="rounded bg-indigo-50 px-1.5 py-0.5 text-[11px] font-medium text-indigo-600">
                        Level {{ $depth + 1 }}
                    </span>
                @endif

                @if ($item->icon)
                    <span class="text-xs text-slate-500">[{{ $item->icon }}]</span>
                @endif

                <span class="text-sm font-semibold text-slate-900">{{ $item->title }}</span>

                <span class="truncate font-mono text-xs text-slate-500">{{ $item->url }}</span>

                <span class="rounded bg-slate-200/80 px-2 py-0.5 text-[11px] font-medium text-slate-700">
                    Order: {{ $item->order }}
                </span>

                @if ($item->target === '_blank')
                    <span class="rounded bg-sky-100 px-2 py-0.5 text-[11px] font-medium text-sky-800">
                        _blank
                    </span>
                @endif
            </div>
        </div>

        <div class="flex items-center gap-2">
            <button
                type="button"
                wire:click="toggleActive({{ $item->id }})"
                class="rounded-md px-2.5 py-1 text-xs font-medium transition {{ $item->is_active ? 'bg-emerald-100 text-emerald-800 hover:bg-emerald-200' : 'bg-amber-100 text-amber-800 hover:bg-amber-200' }}"
            >
                {{ $item->is_active ? 'Active' : 'Hidden' }}
            </button>

            <a
                href="{{ route('admin.menus.edit', $item->id) }}"
                wire:navigate
                class="rounded-md border border-slate-300 bg-white px-2.5 py-1 text-xs font-medium text-slate-700 transition hover:bg-slate-50"
            >
                Edit
            </a>

            <button
                type="button"
                wire:click="deleteMenu({{ $item->id }})"
                wire:confirm="Delete '{{ $item->title }}' and all nested submenus?"
                class="rounded-md border border-rose-200 bg-rose-50 px-2.5 py-1 text-xs font-medium text-rose-700 transition hover:bg-rose-100"
            >
                Delete
            </button>
        </div>
    </div>

    @if ($item->children && $item->children->isNotEmpty())
        <ul class="mt-3 space-y-2.5 border-l-2 border-indigo-200 pl-4">
            @foreach ($item->children as $child)
                @include('partials.tree-node', ['item' => $child, 'depth' => $depth + 1])
            @endforeach
        </ul>
    @endif
</li>
