
@props(['class'=>'','attraction'])

<div class="flex flex-col group  h-fit {{$class}}">
   

        <div class="overflow-hidden relative">
            <div class="overflow-hidden">

                <img src="{{ $attraction->getThumbnailUrl() }}" alt="{{ $attraction->title }}"
                    class="hover:scale-105 duration-500  min-h-[275px]">
            </div>

            <div class="flex justify-start items-center mt-4  gap-y-3 flex-wrap">

                @foreach ($attraction->categories as $category)
                <x-base.badge class="mr-4" 
                    href="{{ route('attraction.index', ['category' => $category->slug]) }}">{{ $category->getFormatName() }}</x-base.badge>
            @endforeach
            </div>
        </div>
        <div class="relative flex justify-between items-center px-2 py-4 flex-grow">

            <div class="flex flex-col justify-between items-start gap-3">
                <h2 class="text-2xl min-h-[100px]">{{ $attraction->name }}</h2>
                <span class="text-sm">{{ $attraction->address }}</span>
                <span class="text-sm"> {{ $attraction->city->name }}</span>

            </div>
            <div class="absolute right-0 bottom-6"><x-base.link-btn
                href="{{ route('attraction.show', $attraction->slug) }}">Sprawdź</x-base.link-btn>
        </div>
       
    </div>
   
</div>