<div>
    {{-- CATEGORIES --}}
    <x-base.section tight>
        <x-categories-list :categories="$this->categories" />
    </x-base.section>

    {{-- TAG FILTER --}}
    <x-base.section tight>
        <div class="w-full border border-black h-[100px] flex gap-16">
            {{-- TAGS --}}
            <div>

             


                <button id="dropdownDefaultButton" data-dropdown-toggle="dropdown"
                    class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                    type="button">Dropdown button <svg class="w-2.5 h-2.5 ms-3" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m1 1 4 4 4-4" />
                    </svg>
                </button>

                <!-- Dropdown menu -->
                <div id="dropdown"
                    class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700">
                    <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownDefaultButton">
                        <li>
                            <a href="#"
                                class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Dashboard</a>
                        </li>

                        @foreach ($this->tags as $tag)
                        <li >
                            <a wire:navigate href="{{ route('attraction.index', ['tag' => $tag->slug]) }}" wire:key="{{$tag->id}}" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">

                                {{ $tag->name }}
                            </a>
                        </li>
                    @endforeach
                        
                    </ul>
                </div>


            </div>
{{-- City --}}
<div>

             


    <button id="2" data-dropdown-toggle="dropdown2"
        class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
        type="button">Dropdown button <svg class="w-2.5 h-2.5 ms-3" aria-hidden="true"
            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="m1 1 4 4 4-4" />
        </svg>
    </button>

    <!-- Dropdown menu -->
    <div id="dropdown2"
        class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700">
        <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownDefaultButton">
            <li>
                <a href="#"
                    class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Dashboard</a>
            </li>

            @foreach ($this->cities as $city)
            <li >
                <a wire:navigate href="{{ route('attraction.index', ['city' => $city->id]) }}" wire:key="{{$city->id}}" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">

                    {{ $city->name }}
                </a>
            </li>
        @endforeach
            
        </ul>
    </div>


</div>
{{-- SearchBox --}}
<div id="search-box" class="flex flex-col items-center px-2 my-4 justify-center">
    <div class="flex justify-center items-center">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
            stroke="currentColor" class="w-6 h-6">
            <path stroke-linecap="round" stroke-linejoin="round"
                d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z" />
        </svg>
        <input wire:model.live.debounce.500ms="search" type="text" placeholder="Search..."
            class="bg-gray-100 ml-2 rounded px-4 py-2 hover:bg-gray-100" />
    </div>

</div>
{{-- clear --}}
<x-base.link-btn wire:navigate type="third" href="{{ route('attraction.index') }}" wire:key="all"
class="{{ $this->category === '' ? 'bg-primary-400 text-white border-none hover:bg-primary-400 ' : 'bg-white border border-black hover:bg-gray-100' }}">Wyczyść</x-base.link-btn>

        </div>
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 ">
            @foreach ($this->attractions as $attraction)
                <x-attraction.attraction-card :attraction="$attraction" />
            @endforeach
        </div>
    </x-base.section>

    {{-- PAGINATION --}}
    <nav class="max-w-screen-xl mx-auto px-6 md:px-16 pt-10 pb-20">
        {{ $this->attractions->links() }}
    </nav>
</div>
