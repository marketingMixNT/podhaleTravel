{{-- CONTAINER --}}
<div class="w-full flex justify-between items-center  gap-16 pb-12">
    {{-- tags & cities --}}
    <div class="flex justify-center items-center gap-6">
    {{-- tags --}}
        <div>
            <x-dropdown-filter id="tags" title="Wybierz tag" class="{{ $this->tag !== '' ? 'active' : 'inactive' }}">

                <x-dropdown-filter-item href="{{ route('attraction.index') }}">
                    Wszystkie</x-dropdown-filter-item>
                @foreach ($this->tags as $tag)
                    <x-dropdown-filter-item wire:key="{{ $tag->id }}"
                        href="{{ route('attraction.index', ['tag' => $tag->slug]) }}"
                        class="{{ $tag->slug === $this->tag ? 'font-bold' : '' }}">
                        {{ $tag->getFormatName() }}</x-dropdown-filter-item>
                @endforeach

            </x-dropdown-filter>
        </div>
        {{-- cities --}}
        <div>
            <x-dropdown-filter id="cities" title="Wybierz miejscowość" class="{{ $this->city !== '' ? 'active' : 'inactive' }}">

                <x-dropdown-filter-item href="{{ route('attraction.index') }}">
                    Wszystkie</x-dropdown-filter-item>
                @foreach ($this->cities as $city)
                    <x-dropdown-filter-item wire:key="{{ $city->id }}"
                        href="{{ route('attraction.index', ['city' => $city->slug]) }}"
                        class="{{ $city->slug === $this->city ? 'font-bold' : '' }}">
                        {{ $city->getFormatName() }}</x-dropdown-filter-item>
                @endforeach

            </x-dropdown-filter>
        </div>
    </div>


    <div class="flex justify-center items-center gap-6">

    {{-- SearchBox --}}
    <x-search-box/>
    {{-- clear --}}
   
        
        <x-base.badge type='large' wire:navigate href="{{ route('attraction.index') }}" 
        class="bg-bgLight-800 hover:bg-bgLight-600 duration-500 dark:text-fontDark">Wyczyść</x-base.badge>
    </div>
</div>