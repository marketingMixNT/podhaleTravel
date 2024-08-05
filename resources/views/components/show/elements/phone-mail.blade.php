@if ($item->phone || $item->mail)

    <div class="flex flex-col justify-start items-start gap-2 ">
        <h2 class="font-bold">Kontakt</h2>
        @if ($item->phone)
            <div class="flex justify-start items-center gap-2 ml-2">
                <x-iconpark-phonetelephone-o class="w-5 mt-[2px]" />
                <a href="tel:+48{{ $item->phone }}" class="link-hover">+48{{ $item->phone }}</a>
            </div>
        @endif
        @if ($item->mail)
            <div class="flex justify-start items-center gap-2 ml-2">
                <x-iconpark-mail-o class="w-5 mt-[2px]" />
                <a href="mailto:{{ $item->mail }}" class="link-hover">{{ $item->email }}</a>
            </div>
        @endif
    </div>
@endif
