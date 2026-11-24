@php
    $hasChildren = $item->activeChildren && $item->activeChildren->isNotEmpty();
    $isRoot = is_null($item->parent_id);
    $isMega = $isRoot && ($item->type ?? 'S') === 'M';

    // Base class
    $liClasses = ['main-nav'];

    if ($hasChildren) {
        if ($isRoot) {
            if ($isMega) {
                // Megamenu root classes
                $liClasses[] = 'has-dropdown has-menu-child-item mega-menu';
            } else {
                // Standard dropdown root classes
                $liClasses[] = 'has-dropdown has-menu-child-item project-a-after';
            }
        } else {
            // Nested child with further sub-children
            $liClasses[] = 'has-third-lev';
        }
    }
@endphp

<li class="{{ implode(' ', $liClasses) }}">
    <a href="{{ $item->url ?? '#' }}" @if(!empty($item->target)) target="{{ $item->target }}" @endif class="nav-link">
        <span>{{ $item->title }}</span>
    </a>

    @if($hasChildren)
        @if($isMega)
            {{-- Megamenu Container --}}
            @include('partials.navbar-megamenu', ['item' => $item])
        @else
            {{-- Standard Recursive Dropdown --}}
            <ul class="{{ $isRoot ? 'submenu parent-nav' : 'submenu third-level-nav' }}">
                @foreach($item->activeChildren as $child)
                    @include('partials.navbar-item', ['item' => $child])
                @endforeach
            </ul>
        @endif
    @endif
</li>
