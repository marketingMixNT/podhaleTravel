@props(['attraction'])

<div class="flex flex-col group ">
    <a href="#">

        <div class="overflow-hidden relative">
            <div class="overflow-hidden">

                <img src="{{ $attraction->getThumbnailUrl() }}" alt="{{ $attraction->name }}" class="hover:scale-105 duration-500">
            </div>

            <div class="flex justify-start items-center mt-4  gap-y-3 flex-wrap">
                <span class="font-bold">{{$attraction->city->name}}</span>
KATEGORIE
                @foreach ($attraction->categories as $category)
                 
                    <x-base.link-btn class="mr-4" type="badge-small" href="">{{ $category->name }}</x-base.link-btn>
                @endforeach
            </div>
            <div class="flex justify-start items-center mt-4  gap-y-3 flex-wrap">
TAGI
                @foreach ($attraction->tags as $tag)
                 
                    <x-base.link-btn class="mr-4" type="badge-small" href="">{{ $tag->name }}</x-base.link-btn>
                @endforeach
            </div>
        </div>
        <div class="flex justify-between items-center px-2 py-4">

            <div class="flex flex-col justify-between items-start gap-3">
                <h2 class="text-2xl">{{$attraction->name }}</h2>
                <span class="text-sm">{{ $attraction->address }}</span>
                {{-- <span class="text-sm">od <span class="text-lg">{{ $apartment->price }}</span> zł</span> --}}

            </div>
            <div class="self-end mb-3"><x-base.link-btn href="#">Sprawdź</x-base.link-btn></div>
        </div>
    </a>
</div>