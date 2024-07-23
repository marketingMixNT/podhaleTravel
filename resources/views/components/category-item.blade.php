@props(['category'])

<a wire:navigate href="{{ route('attraction.index', ['category' => $category->slug]) }}"
    class=" group relative  bg-center bg-cover bg-blend-multiply bg-gray-300 hover:bg-gray-500 duration-500 h-[400px] md:h-[500px]"
    style="background-image:url('{{ $category->getThumbnailUrl() }}')">

    <div class="absolute bottom-6 px-6 left-0 right-0 flex justify-between items-center">
        <div class="flex flex-col gap-1">
            <h3 class="font-medium text-white text-2xl">{{ $category->getFormatName() }}</h3>
            <span class="text-sm text-white">
                {{ $category->attractions_count }} -
                @if ($category->attractions_count === 1)
                    atrakcja
                @elseif($category->attractions_count >= 2 && $category->attractions_count <= 4)
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
