@props(['footer' => false, 'href' => '#'])


@php
    $class = $footer
        ? 'text-base text-fontDark dark:text-fontLight'
        : 'text-2xl lg:text-[17px] text-fontLight lg:text-fontDark lg:dark:text-fontLight';
@endphp



<li class=" {{ $class }} link-hover--nav  "><a href="{{ $href }}">{{ $slot }}</a>
</li>
