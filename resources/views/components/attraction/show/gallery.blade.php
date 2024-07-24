<section class="py-10 sm:py-20">

    {{-- heading --}}
    <div class="max-w-screen-xl mx-auto px-6 md:px-16 2xl:px-0">
        <x-base.heading-third heading="Galeria"
            subheading="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut sit amet tristique massa," />
    </div>

    {{-- swiper --}}
    <div class="swiper attraction-gallery-swiper">
        <div class="py-20  swiper-wrapper">

            @foreach ($shuffledGallery as $img)
                <a data-fslightbox href="{{ asset('storage/' . $img) }}" class=" swiper-slide">

                    <img src="{{ asset('storage/' . $img) }}" alt=""
                        class=" h-full w-full object-cover aspect-square">
                </a>
            @endforeach
        </div>

        {{-- nav --}}
        <nav class="absolute right-8 bottom-4 flex justify-center items-center gap-2 z-50">

            <x-navigate-button direction="left" indicator="attraction-gallery-prev" />
            <x-navigate-button direction="right" indicator="attraction-gallery-next" />



        </nav>
    </div>
    <section
