<div>
    <x-base.heading-secondary heading="Kategorie"
        text="Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magnam, illo." />

    <x-base.section>


        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3  gap-4">

            @foreach ($categories as $category)
                <x-category-item :category="$category" />
            @endforeach

        </div>

    </x-base.section>

     {{-- PAGINATION --}}
     {{ $categories->links('vendor.livewire.tailwind') }}

</div>
