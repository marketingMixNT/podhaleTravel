

<x-base.main>
    <x-base.heading-secondary heading="Miejscowości"
        />

    <x-base.section tight id='main'>


        <div class="grid grid-cols-1 lg:grid-cols-2 xl:grid-cols-3 gap-y-8  md:gap-y-6 md:gap-x-4">

            @foreach ($this->cities as $item)
                <x-item-card wire:key="{{$item->id}}" :item="$item" link="{{ route('attraction.index', ['city' => $item->slug]) }}" class="h-[400px] md:h-[500px]"/>
            @endforeach

        </div>

    </x-base.section>

     {{-- PAGINATION --}}
     {{ $this->cities->links('vendor.livewire.tailwind') }}


     <x-shared.podhale />


</x-base.main>
