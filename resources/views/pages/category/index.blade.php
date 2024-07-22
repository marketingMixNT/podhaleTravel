<x-layouts.app title="" description="">

    <x-base.heading-secondary heading="Kategorie"
        text="Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magnam, illo." />

<x-base.section>


    <div class="grid grid-cols-3 h-[130vh] md:h-screen  gap-4">

        @foreach ($categories as $category)
        <x-category-item href="{{ route('attraction.index', ['category' => $category->slug]) }}"
            style="background-image: url({{ asset($category->getThumbnailUrl()) }})"
            subheading="{{ $category->title }}" heading="{{ $category->title }}" />
    @endforeach

    </div>

    </x-base.section>


</x-layouts.app>
