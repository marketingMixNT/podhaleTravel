@props(['direction','indicator'])

@if ($direction === 'left')
    <button class=" {{ $indicator }}"><x-iconpark-arrowcircleleft-o
            class="w-12 text-fontDark hover:text-fontDark  duration-500" />

    </button>
@elseif ($direction === 'right')
    <button class="{{ $indicator }}"><x-iconpark-arrowcircleright-o
            class="w-12 text-fontDark hover:text-fontDark  duration-500" />

    </button>
@endif
