@props(['attraction'])

<x-base.section>
    {{-- CONTAINER --}}
    <div class="flex flex-col lg:flex-row justify-start items-start gap-x-24 gap-y-12 md:gap-y-24 ">
        {{-- SHORT_DESC --}}
        <div class="w-full lg:w-[60%] xs:text-base text-lg md:text-2xl" style="line-height: 1.6">
            {!! $attraction->short_desc !!}
        </div>
        {{-- INFO --}}
        <div
            class="w-full lg:w-[40%] grid grid-cols-1 md:grid-cols-2 lg:grid-cols-1 border-l border-bgDark-400 dark:border-bgLight-200 h-full gap-y-8 gap-x-14 pl-12">
            {{-- ADDRESS --}}
            <div>
                <h2 class="font-bold">Adres</h2>
                <a href="{{ $attraction->google_maps_link }}" target="_blank"
                    class="link-hover">{{ $attraction->address }}, {{ $attraction->city->name }}</a>
            </div>
            {{-- CONTACT --}}
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
            {{-- SOCIALS --}}
            @if ($attraction->socials)
                <div class="flex flex-col justify-start items-start gap-2 ">
                    <h2 class="font-bold">Social Media</h2>
                    <x-attraction.show.socials :attraction="$attraction" />
                </div>
            @endif
            {{-- SITE LINK --}}
            <div class="flex justify-start items-center">
                <x-base.link-btn type="wider" :href="$attraction->site_link" target="_blank">Zobacz stronę</x-base.link-btn>
            </div>
        </div>
    </div>

</x-base.section>
