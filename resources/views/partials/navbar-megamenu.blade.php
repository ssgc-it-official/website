@php
// Chunk children into groups of 10 items per column
$columns = $item->activeChildren->chunk(10);
$columnCount = $columns->count();

// Map column count to Bootstrap column classes
$colClass = match (true) {
$columnCount >= 4 => 'col-lg-3',
$columnCount === 3 => 'col-lg-4',
$columnCount === 2 => 'col-lg-6',
default => 'col-lg-12',
};
@endphp

<div class="tmp-mega-menu">
    <div class="wrapper inner-page">
        <div class="container">
            <div class="row g-5">
                @foreach($columns as $chunk)
                <div class="{{ $colClass }}">
                    <ul class="mega-menu-item with-list parent-nav">
                        @foreach($chunk as $subItem)
                        <li>
                            <a href="{{ url($subItem->url) ?? '#' }}" @if(!empty($subItem->target)) target="{{
                                $subItem->target }}" @endif>
                                {{ $subItem->title }}
                            </a>
                        </li>
                        @endforeach
                    </ul>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
