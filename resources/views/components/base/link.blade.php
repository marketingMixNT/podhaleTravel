
@props(['back' => false, 'href' => '#','class'=>''])
<a wire:navigate href="{{ $href }}" class="flex  {{$class}}">

    @if ($back)
        <x-iconpark-left-o class="w-4" />
    @endif

    <span class="link-hover">{{ $slot }}</span>

    @if (!$back)
        <x-iconpark-right-o class="w-4" />
    @endif
</a>