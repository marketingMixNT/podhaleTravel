@props(['class' => '', 'type', 'href' => '#'])


@php
    $type = match ($type ?? null) {
        'large' => 'px-6 py-2 rounded-full',
        default => 'px-4 py-[4px] bg-bgLight-800 hover:bg-bgLight-600 text-xs  sm:text-sm  rounded-xl',
    };
@endphp

<a wire:navigate {{ $attributes }} href="{{ $href }}"
    class="text-center duration-500 hover:shadow-xl   text-fontDark dark:text-fontDark font-normal
        {{ $type }}
       {{ $class }}
    
    
    ">{{ $slot }}</a>
