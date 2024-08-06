@props(['as' => 'h2', 'class' => '', 'size' => '','class' => ''])


@php
    $size = match ($size) {
        'lg' => 'text-4xl sm:text-5xl',
        'xl' => 'text-4xl sm:text-6xl',
        '2xl' => 'text-6xl sm:text-7xl',
        default => 'text-3xl sm:text-4xl', // base
    };
@endphp


<{{ $as }} class="{{$size}} font-medium {{$class}}" style="line-height: 1.2">{{ $slot }}
    </{{ $as }}>
  