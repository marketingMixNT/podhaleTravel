@props(['post','class'=>''])

<div class="w-full flex flex-col justify-start items-start gap-8 group">
    {{-- IMG --}}
    <div class="w-full">
        <a wire:navigate href="{{ route('blog.show', $post->slug) }}" >
            <div class="overflow-hidden">

                <img src="{{ $post->getThumbnailUrl() }}" alt="{{ $post->title }}"
                class="group-hover:scale-110 duration-500  object-cover w-full aspect-[4/3] sm:aspect-video lg:aspect-[4/3]" width="624"
                height="400" loading="lazy">
            </div>

              
        </a>
    </div>
    {{-- CONTENT --}}
    <div class="flex flex-col justify-start items-start gap-6 h-full">
        {{-- category & reading time --}}
        <div class="flex justify-start items-center gap-6">
            @foreach ($post->categories as $category)
            <x-base.badge class="mr-4" wire:key="{{$category->id}}" 
                href="{{ route('blog.index', ['category' => $category->slug]) }}">{{ $category->getFormatName() }}</x-base.badge>
        @endforeach
            <span class="text-sm">{{ $post->getReadingTime() }} min</span>
        </div>
        {{-- text --}}
        <h2 class="text-2xl font-medium">{{ $post->title }}</h2>
        <div class="flex flex-col justify-between h-full gap-6">
            <p>{{ $post->getExcerpt() }}</p>
            <x-base.link href="{{ route('blog.show', $post->slug) }}">Czytaj</x-base.link>
        </div>
    </div>
</div>