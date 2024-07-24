<x-base.main>
    <x-base.heading-secondary heading="Kategorie"
        text="Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magnam, illo." />

    <x-base.section tight id="content">


        <div class="grid grid-cols-1 lg:grid-cols-2 xl:grid-cols-3 gap-y-8  md:gap-y-6 md:gap-x-4">

            @foreach ($this->categories as $item)
                <x-item-card wire:key="{{$item->id}}" :item="$item" />
            @endforeach

        </div>

    </x-base.section>

     {{-- PAGINATION --}}
     {{ $this->categories->links('vendor.livewire.tailwind') }}

</x-base.main>
