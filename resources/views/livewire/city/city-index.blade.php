<div>
    <x-base.heading-secondary heading="Miejscowości"
        text="Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magnam, illo." />

    <x-base.section>


        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3  gap-4">

            @foreach ($cities as $category)
                <x-category-item :category="$category" />
            @endforeach

        </div>

    </x-base.section>

     {{-- PAGINATION --}}
     {{ $cities->links('vendor.livewire.tailwind') }}

</div>

