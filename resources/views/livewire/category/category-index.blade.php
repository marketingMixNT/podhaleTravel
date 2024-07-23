<main>
    <x-base.heading-secondary heading="Kategorie"
        text="Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magnam, illo." />

    <x-base.section tight>


        <div class="grid grid-cols-1 lg:grid-cols-2 xl:grid-cols-3 gap-y-8  md:gap-y-6 md:gap-x-4">

            @foreach ($categories as $category)
                <x-category-item wire:key="{{$category->id}}" :category="$category" />
            @endforeach

        </div>

    </x-base.section>

     {{-- PAGINATION --}}
     {{ $categories->links('vendor.livewire.tailwind') }}

</main>
