<section class="py-20">

    <div class="max-w-screen-2xl mx-auto px-6 md:px-16 2xl:px-0">
        <x-base.heading-third heading="Galeria"
            subheading="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut sit amet tristique massa," />
    </div>



    {{-- swiper --}}
    <div class="swiper apartment-gallery-swiper" wire:ignore>
        <div class="py-20  swiper-wrapper">

            @foreach ($attraction->gallery as $img)
                <a data-fslightbox href="{{ asset('storage/' . $img) }}" class=" swiper-slide">

                    <img src="{{ asset('storage/' . $img) }}" alt=""
                        class=" h-full w-full object-cover aspect-square">
                </a>
            @endforeach
        </div>

        <div class="absolute right-8 bottom-4 flex justify-center items-center gap-2 z-50">

            <button class=" apartment-gallery-prev"><x-iconpark-arrowcircleleft-o
                    class="w-12 text-primary-400 hover:text-secondary-400 duration-500" />

            </button>
            <button class=" apartment-gallery-next"><x-iconpark-arrowcircleright-o
                    class="w-12 text-primary-400 hover:text-secondary-400 duration-500" />

            </button>

        </div>
    </div>
    <section
