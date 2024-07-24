@props(['item'])

<a wire:navigate href="{{ route('attraction.index', ['category' => $item->slug]) }}"
    class=" group relative  bg-center bg-cover bg-blend-multiply bg-gray-300 hover:bg-gray-500 duration-500 h-[400px] md:h-[500px]"
    style="background-image:url('{{ $item->getThumbnailUrl() }}')">

    <div class="absolute bottom-6 px-6 left-0 right-0 flex justify-between items-center">
        <div class="flex flex-col gap-1">
            <h3 class="font-medium text-white text-2xl">{{ $item->getFormatName() }}</h3>
            <span class="text-sm text-white">
                {{ $item->attractions_count }}
                @if ($item->attractions_count === 1)
                    atrakcja
                @elseif($item->attractions_count >= 2 && $item->attractions_count <= 4)
                    atrakcje
                @else
                    atrakcji
                @endif
            </span>

        </div>

        <x-iconpark-arrowcircleright-o
            class="w-12 text-white group-hover:text-secondary-400 duration-500 group-hover:animate-pulse" />
    </div>
</a>
