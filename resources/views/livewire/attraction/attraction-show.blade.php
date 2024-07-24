<main>
    <x-attraction.show.hero :attraction="$attraction" />
    <x-attraction.show.info :attraction="$attraction" />
    <x-attraction.show.description :attraction="$attraction" />
    <x-attraction.show.gallery :attraction="$attraction" />
    <x-attraction.show.posts :attraction="$attraction" />
    <x-attraction.show.contact :attraction="$attraction" />
    <x-attraction.show.similar :similarAttractions="$similarAttractions" />

    <x-base.section class="bg-black">
        tutaj pasuje coś opisać ze podhale jest wspaniałe i ze zachecamy do odwiedzania tego wspaniałego regionu
    </x-base.section>
</main>