<main>
    <x-show.hero-header :item="$this->attraction" />
    <x-show.info :item="$this->attraction" />
    <x-show.description :item="$this->attraction" />
    <x-show.gallery :item="$this->attraction" :gallery="$this->shuffledGallery" />
    <x-show.posts :item="$this->attraction" allPostsLink="{{ route('blog.index', ['attraction' => $attraction->slug]) }}" />
    <x-show.contact :item="$this->attraction" />

    <x-show.similar>
        @foreach ($this->similarAttractions as $attraction)
            <x-attraction.card-simple wire:key="{{ $attraction->id }}" :attraction="$attraction" class="flex-1" />
        @endforeach
    </x-show.similar>

    {{-- <x-base.section class="bg-black">
        tutaj pasuje coś opisać ze podhale jest wspaniałe i ze zachecamy do odwiedzania tego wspaniałego regionu
    </x-base.section> --}}
</main>
