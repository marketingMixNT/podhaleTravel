@if ($item->address)
    <div class="flex flex-col justify-start items-start gap-4 ">

        <x-iconpark-mapdraw class="text-fontDark dark:text-fontLight w-8" />

        <div class="flex justify-center items-center gap-1">
            <a class="text-xl font-semibold link-hover" href="{{ $item->link }}">{{ $item->name }}</a>
            <x-iconpark-arrowrightup-o class="w-6 text-fontDark dark:text-fontLight" />


        </div>
        <span class="ml-2">{{ $item->address }}, {{ $item->city->name }}</span>
    </div>
@endif
