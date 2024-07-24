<x-base.section>

    <div class="flex flex-col gap-16 justify-start items-start">
        <x-base.heading-third heading="Podobne atrakcje"
            subheading="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut sit amet tristique massa," />

        <div class="flex justify-center items-center gap-x-12 w-full">

           

            <div class="swiper similar-attraction-swiper">
                <div class="swiper-wrapper">
                    @foreach ($similarAttractions as $attraction)
                        <x-attraction.card-simple wire:key="{{$attraction->id}}" :attraction="$attraction" class="swiper-slide" />
                    @endforeach


                </div>
                <div class="swiper-pagination"></div>
            </div>
        </div>

    </div>

</x-base.section>
