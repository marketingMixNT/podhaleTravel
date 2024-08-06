<x-base.section class="bg-bgLight-200 dark:bg-dark-600">

    <x-base.heading subheading="Kategorie" heading="Popularne Kategorie" />

    <div class="grid grid-cols-1 lg:grid-cols-2 h-[130vh] md:h-[80vh] py-12 gap-4">


        <x-item-card :item="$categories[0]" link="{{ route('attraction.index', ['category' => $categories[0]->slug]) }}"
            />





        <div class="grid grid-cols-2 grid-rows-2 gap-4">

            @foreach ($categories->slice(1, 4) as $item)
                <x-item-card wire:key="{{ $item->id }}" :item="$item"
                    link="{{ route('attraction.index', ['category' => $item->slug]) }}" />
            @endforeach




        </div>
    </div>
    <div class="flex justify-end items-center">

        <x-base.link href="{{ route('category.index') }}">Zobacz wszystkie</x-base.link>
    </div>
</x-base.section>
