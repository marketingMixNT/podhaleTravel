{{-- style of active and inactive in global.scss --}}
@props(['categories','class'=>''])

<ul class="flex flex-wrap justify-center items-center gap-6 {{$class}}">

    <x-base.badge type='large' wire:navigate href="{{ route('attraction.index') }}" 
        class="{{ $this->category === '' ? 'active' : 'inactive' }}">Wszystkie</x-base.badge>
    @foreach ($categories as $category)
        <x-base.badge  type='large' wire:navigate href="{{ route('attraction.index', ['category' => $category->slug]) }}"
            wire:key="{{ $category->slug }}"
            class="{{ $category->slug === $this->category ? 'active' : 'inactive' }}">{{  $category->getFormatName()}}</x-base.badge>
    @endforeach
</ul>
