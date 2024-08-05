<x-filters.container clearRoute="{{ route('attraction.index') }}">

    {{-- LEFT SIDE --}}
    <div class="flex flex-col xs:flex-row justify-center items-center gap-6 flex-wrap">
        {{-- categories --}}
        <x-filters.dropdown-btn id="categories"  title="{{ $this->category ? $this->getFormatedTitle($this->category) : 'Wybierz kategorię' }}"
            class="{{ $this->category !== '' ? 'active' : 'inactive' }}">

            <x-dropdown-filter-item href="{{ route('attraction.index') }}">
                Wszystkie</x-dropdown-filter-item>
            @foreach ($this->categories as $category)
                <x-dropdown-filter-item wire:key="{{ $category->id }}"
                    href="{{ route('attraction.index', ['category' => $category->slug]) }}"
                    class="{{ $category->slug === $this->category ? 'font-bold' : '' }}">
                    {{ $category->getFormatName() }}</x-dropdown-filter-item>
            @endforeach

        </x-filters.dropdown-btn>

        {{-- tags --}}
        <x-filters.dropdown-btn id="tags"  title="{{ $this->tag ? $this->getFormatedTitle($this->tag) : 'Wybierz tag' }}"
            class="{{ $this->tag !== '' ? 'active' : 'inactive' }}">

            <x-dropdown-filter-item href="{{ route('attraction.index') }}">
                Wszystkie</x-dropdown-filter-item>
            @foreach ($this->tags as $tag)
                <x-dropdown-filter-item wire:key="{{ $tag->id }}"
                    href="{{ route('attraction.index', ['tag' => $tag->slug]) }}"
                    class="{{ $tag->slug === $this->tag ? 'font-bold' : '' }}">
                    {{ $tag->getFormatName() }}</x-dropdown-filter-item>
            @endforeach

        </x-filters.dropdown-btn>

        {{-- cities --}}
        <x-filters.dropdown-btn id="cities"  title="{{ $this->city ? $this->getFormatedTitle($this->city) : 'Wybierz miejscowość' }}"
            class="{{ $this->city !== '' ? 'active' : 'inactive' }}">

            <x-dropdown-filter-item href="{{ route('attraction.index') }}">
                Wszystkie</x-dropdown-filter-item>
            @foreach ($this->cities as $city)
                <x-dropdown-filter-item wire:key="{{ $city->id }}"
                    href="{{ route('attraction.index', ['city' => $city->slug]) }}"
                    class="{{ $city->slug === $this->city ? 'font-bold' : '' }}">
                    {{ $city->getFormatName() }}</x-dropdown-filter-item>
            @endforeach

        </x-filters.dropdown-btn>
    </div>


    {{-- RIGHT SIDE --}}
    <x-filters.search-box clearRoute="{{ route('blog.index') }}" />


</x-filters.container>
