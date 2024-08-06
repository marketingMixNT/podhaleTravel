@props(['item'])

<x-base.section tight>
    {{-- CONTAINER --}}
    <div class="flex flex-col lg:flex-row justify-start items-start gap-x-24 gap-y-12 md:gap-y-24 ">
        {{-- SHORT_DESC --}}
        <div class="w-full lg:w-[60%] xs:text-base text-lg md:text-2xl" style="line-height: 1.6">
            {!! $item->short_desc !!}
        </div>
        {{-- INFO --}}
        <div
            class="w-full lg:w-[40%]  h-full grid grid-cols-1 md:grid-cols-2 lg:grid-cols-1  gap-y-8 gap-x-14 pl-12 border-l border-bgDark-400 dark:border-bgLight-200">
            {{-- ADDRESS --}}
            <div>
                <h2 class="font-bold">Adres</h2>
                <a href="{{ $item->google_maps_link }}" target="_blank" class="link-hover">{{ $item->address }},
                    {{ $item->city->name }}</a>
            </div>
            {{-- CONTACT --}}
            <div class="flex flex-col justify-start items-start gap-2 ">
                <h2 class="font-bold">Kontakt</h2>
                <div class="flex justify-start items-center gap-2 ml-2">
                    <x-iconpark-phonetelephone-o class="w-5 mt-[2px]" />
                    <a href="tel:+48{{ $item->phone }}" class="link-hover">+48{{ $item->phone }}</a>
                </div>
                <div class="flex justify-start items-center gap-2 ml-2">
                    <x-iconpark-mail-o class="w-5 mt-[2px]" />
                    <a href="mailto:{{ $item->mail }}" class="link-hover">{{ $item->email }}</a>
                </div>
            </div>
            {{-- SOCIALS --}}
            @if ($item->socials)
                <div class="flex flex-col justify-start items-start gap-2 ">
                    <x-show.elements.socials :socials="$item->socials" />
                </div>
            @endif
            {{-- SITE LINK --}}
            <div class="flex justify-start items-center">
                <x-base.link-btn type="wider" :href="$item->site_link" target="_blank">Zobacz stronę</x-base.link-btn>
            </div>
        </div>
    </div>

</x-base.section>
