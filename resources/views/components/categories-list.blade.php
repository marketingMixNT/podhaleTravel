@props(['categories'])

<ul class="flex justify-center items-center gap-6 flex-wrap">

    <x-base.link-btn wire:navigate type="third" href="{{ route('attraction.index') }}" wire:key="all"
        class="{{ $this->category === '' ? 'bg-primary-400 text-white border-none hover:bg-primary-400 ' : 'bg-white border border-black hover:bg-gray-100' }}">Wszystkie</x-base.link-btn>
    @foreach ($categories as $category)
        <x-base.link-btn wire:navigate type="third"
            href="{{ route('attraction.index', ['category' => $category->slug]) }}" wire:key="{{ $category->slug }}"
            class="{{ $category->slug === $this->category ? 'bg-primary-400 text-white border-none hover:bg-primary-400 ' : ' bg-white border border-black hover:bg-gray-100' }}">{{ $category->name }}</x-base.link-btn>
    @endforeach
</ul>
