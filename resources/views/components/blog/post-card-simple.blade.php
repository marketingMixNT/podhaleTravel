@props(['post','class'=>''])

<div class="w-1/3 h-full flex flex-col justify-start gap-6 group {{$class}}">
    {{-- thumbnail --}}
    <a wire:navigate href="{{route('blog.show',$post->slug)}}" >
        <div class="overflow-hidden">

            <img src="{{ $post->getThumbnailUrl() }}" alt="{{ $post->title }}"
            class="group-hover:scale-110 duration-500 lg:h-[400px] object-cover w-full aspect-video"
            width="624" height="400" loading="lazy">
        </div>
    </a>
    {{-- categories & reading time --}}
    <div class="flex justify-start items-center gap-5">

        {{-- @foreach ($post->categories as $category)
            <x-ui.link-btn wire:navigate :key="$category->slug" type='secondary' href="{{ $category->slug }}">{{ $category->title }}</x-ui.link-btn>
        @endforeach --}}

        <span class="text-sm">{{$post->getReadingTime()}} min</span>

    </div>
    {{-- title & excerpt --}}
    <dsiv class="flex flex-col justify-start gap-6">

        <h3 class="text-2xl md:text-[28px] lg:text-3xl font-medium">{{$post->title}}</h3>
        <p>{{$post->getExcerpt()}}</p>

        <x-base.link href="{{route('blog.show',$post->slug)}}">Czytaj</x-base.link>

    </dsiv>
   

</div>