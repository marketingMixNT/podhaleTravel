@props(['item'])

<x-base.section tight>

    <div class="flex flex-col gap-8 lg:gap-16 ">


        <x-base.heading-third heading="Kontakt" />

        <div class="flex flex-col lg:flex-row justify-center items-center">

            {{-- text --}}
            <div class="w-full lg:w-[40%] flex flex-col justify-end items-start p-12 gap-4">

                <x-show.elements.address :item="$item" />
                <x-show.elements.phone-mail :item="$item" />
                <x-show.elements.socials :item="$item" />
                <x-show.elements.site-link :item="$item" />

            </div>
            {{-- google maps iframe --}}
            <div class="w-full lg:w-[60%] h-[500px] overflow-hidden">
                @if ($item->google_maps_frame)
                    {!! $item->google_maps_frame !!}
                @else
                    <img src="{{ $item->getThumbnailUrl() }}" alt="zdjęcie przedstawiające {{ $item->name }}"
                        class="scale-hover" />
                @endif
            </div>
        </div>

    </div>

</x-base.section>
