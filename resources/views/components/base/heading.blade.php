{{-- @props(['class'=>'','subheading'=>'','heading'=>''])

<div class="flex flex-col gap-4 {{$class}}">
    <span class="text-sm">{{$subheading}}</span>
    <h2 class="text-4xl sm:text-6xl font-medium">{{$heading}}</h2>
</div> --}}


@props(['as' => 'h2', 'class' => '', 'size' => '','class' => ''])


@php
    $size = match ($size) {
        'lg' => 'text-4xl sm:text-5xl',
        'xl' => 'text-4xl sm:text-6xl',
        '2xl' => 'text-4xl xs:text-6xl md:text-8xl',
        default => 'text-3xl sm:text-4xl', // base
    };
@endphp


<{{ $as }} class="{{$size}} font-medium {{$class}}" style="line-height: 1.2">{{ $slot }}
    </{{ $as }}>


    