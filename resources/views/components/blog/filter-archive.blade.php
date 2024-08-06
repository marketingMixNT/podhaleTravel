<x-filters.container clearRoute="{{ route('blog.archive') }}">

    {{-- LEFT SIDE --}}
    <div class="flex flex-col xs:flex-row justify-center items-center gap-6 flex-wrap">
        {{-- categories --}}
        <x-filters.dropdown-btn id="categories"
            title="{{ $this->category ? $this->getFormatedTitle($this->category) : 'Wybierz kategorię' }}"
            class="{{ $this->category !== '' ? 'active' : 'inactive' }}">

            <x-dropdown-filter-item href="{{ route('blog.archive') }}">
                Wszystkie</x-dropdown-filter-item>
            @foreach ($this->categories as $category)
                <x-dropdown-filter-item wire:key="{{ $category->id }}"
                    href="{{ route('blog.archive', ['category' => $category->slug]) }}"
                    class="{{ $category->slug === $this->category ? 'font-bold' : '' }}">
                    {{ $category->getFormatName() }}</x-dropdown-filter-item>
            @endforeach

        </x-filters.dropdown-btn>

        {{-- attractions --}}
        <x-filters.dropdown-btn id="attractions"
            title="{{ $this->attraction ? $this->getFormatedTitle($this->attraction) : 'Wybierz atrakcję' }}"
            class="{{ $this->attraction !== '' ? 'active' : 'inactive' }}">

            <x-dropdown-filter-item href="{{ route('blog.archive') }}">
                Wszystkie</x-dropdown-filter-item>
            @foreach ($this->attractions as $attraction)
                <x-dropdown-filter-item wire:key="{{ $attraction->id }}"
                    href="{{ route('blog.archive', ['attraction' => $attraction->slug]) }}"
                    class="{{ $attraction->slug === $this->attraction ? 'font-bold' : '' }}">
                    {{ $attraction->getFormatName() }}</x-dropdown-filter-item>
            @endforeach

        </x-filters.dropdown-btn>

    </div>


    {{-- RIGHT SIDE --}}
    <x-filters.search-box clearRoute="{{ route('blog.archive') }}" />



</x-filters.container>
