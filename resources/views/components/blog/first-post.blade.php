@props(['post'])

<div class="w-full h-full flex flex-col justify-start gap-6 group">
    {{-- thumbnail --}}
    <a wire:navigate href="{{ route('blog.show', $post->slug) }}" >
        <div class="overflow-hidden">

            <img src="{{ $post->getThumbnailUrl() }}" alt="{{ $post->title }}"
            class="group-hover:scale-110 duration-500 lg:h-[400px] object-cover w-full aspect-video" width="624"
            height="400" loading="lazy">
        </div>
    </a>
    {{-- categories & reading time --}}
    <div class="flex justify-start items-center gap-5">

        @foreach ($post->categories as $category)
            <x-base.badge class="mr-4" wire:navigate
                href="{{ route('attraction.index', ['category' => $category->slug]) }}">{{ $category->getFormatName() }}</x-base.badge>
        @endforeach

        <span class="text-sm">{{ $post->getReadingTime() }} min</span>

    </div>
    {{-- title & excerpt --}}
    <div class="flex flex-col justify-start gap-6">

        <h3 class="text-2xl md:text-[28px] lg:text-3xl font-medium">{{ $post->title }}</h3>
        <p>{{ $post->getExcerpt() }}</p>

        <x-base.link href="{{ route('blog.show', $post->slug) }}">Czytaj</x-base.link>

    </div>


</div>