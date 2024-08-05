@if ($item->site_link)
    <div class="flex flex-col justify-start items-start gap-2 ">
        <h2 class="font-bold">Strona internetowa</h2>
        <div class="flex justify-start items-center gap-2 ml-2">

            <a href="{{ $item->site_link }}" class="link-hover">{{ $item->site_link }}</a>
        </div>

    </div>
@endif
