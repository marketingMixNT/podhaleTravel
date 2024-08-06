<x-base.main>

    <x-base.header type="index">
        <x-base.heading as="h1" size="2xl">Atrakcje</x-base.heading>
    </x-base.header>

    <x-base.section id="content" tight>



        <x-filters.mobile-btn />
        <x-attraction.fillter-box />


        @if ($this->attractions->count() === 0)
            <span class="flex justify-center font-medium text-lg">Nie znaleziono żadnych atrakcji</span>
        @else
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-x-16 gap-y-8 ">
                @foreach ($this->attractions as $attraction)
                    <x-attraction.card :attraction="$attraction" />
                @endforeach
            </div>
        @endif
    </x-base.section>

    {{-- PAGINATION --}}
    {{ $this->attractions->links('vendor.livewire.tailwind') }}



    <x-shared.podhale />


</x-base.main>
