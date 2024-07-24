<x-base.section>

    <div class="flex flex-col gap-8 lg:gap-16 ">


        <x-base.heading-third heading="Kontakt"
            subheading="Dane adresowe itd. bla bla bla" />

        <div class="flex flex-col lg:flex-row justify-center items-center">

            {{-- text --}}
            <div class="w-full lg:w-[40%] flex flex-col justify-end items-start p-12 gap-4">
                <x-iconpark-mapdraw class="text-fontDark dark:text-fontLight w-8" />

                <div class="flex justify-center items-center gap-1">
                    <a class="text-xl font-semibold link-hover" href="{{ $attraction->link }}">{{ $attraction->name }}</a>
                    <x-iconpark-arrowrightup-o class="w-6 text-fontDark dark:text-fontLight" />


                </div>
                <span class="ml-2">{{ $attraction->address }}, {{ $attraction->city->name }}</span>
                <div class="flex flex-col justify-start items-start gap-2 ">
                    <h2 class="font-bold">Kontakt</h2>
                    <div class="flex justify-start items-center gap-2 ml-2">
                        <x-iconpark-phonetelephone-o class="w-5 mt-[2px]" />
                        <a href="tel:+48{{ $attraction->phone }}" class="link-hover">+48{{ $attraction->phone }}</a>
                    </div>
                    <div class="flex justify-start items-center gap-2 ml-2">
                        <x-iconpark-mail-o class="w-5 mt-[2px]" />
                        <a href="mailto:{{ $attraction->mail }}" class="link-hover">{{ $attraction->email }}</a>
                    </div>
                </div>
                @if ($attraction->socials)
                    <div class="flex flex-col justify-start items-start gap-2 ">
                        <h2 class="font-bold">Social Media</h2>
                        <x-attraction.show.socials :attraction="$attraction" />
                    </div>
                @endif
                <div class="flex flex-col justify-start items-start gap-2 ">
                    <h2 class="font-bold">Strona internetowa</h2>
                    <div class="flex justify-start items-center gap-2 ml-2">
                        
                        <a href="{{ $attraction->site_link }}" class="link-hover">{{ $attraction->site_link }}</a>
                    </div>
                   
                </div>

               


            </div>
            {{-- google maps iframe --}}
            <div class="w-full lg:w-[60%] h-[500px]">
                {!! $attraction->google_maps_frame !!}
            </div>
        </div>

    </div>

</x-base.section>
