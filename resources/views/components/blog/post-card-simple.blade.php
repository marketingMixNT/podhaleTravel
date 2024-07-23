@props(['attraction'])

<div class="w-1/3 h-full flex flex-col justify-start gap-6 group">
    {{-- thumbnail --}}
    <a href="#" class="overflow-hidden">
        <img src="{{ $attraction->getThumbnailUrl() }}" alt="{{ $attraction->name }}"
            class="group-hover:scale-110 duration-500 lg:h-[400px] object-cover w-full aspect-video"
            width="624" height="400" loading="lazy">
    </a>
    {{-- categories & reading time --}}
    <div class="flex justify-start items-center gap-5">

        {{-- @foreach ($post->categories as $category)
            <x-ui.link-btn wire:navigate :key="$category->slug" type='secondary' href="{{ $category->slug }}">{{ $category->title }}</x-ui.link-btn>
        @endforeach --}}

        <span class="text-sm">5 min</span>

    </div>
    {{-- title & excerpt --}}
    <div class="flex flex-col justify-start gap-6">

        <h3 class="text-2xl md:text-[28px] lg:text-3xl font-medium">testowy tytuł</h3>
        <p>asdasdsadsadasdasdasdasdasdsadsadsdasdasd</p>

        <x-base.link href="#">Czytaj</x-base.link>

    </div>
   

</div>