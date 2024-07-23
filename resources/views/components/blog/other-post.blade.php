@props(['post'])


<div class="flex flex-col sm:flex-row justify-between items-center gap-6 group">
    {{-- IMG --}}
    <div class="w-full sm:w-[35%] max-h-[400px] overflow-hidden">
        <a href="{{ route('blog.show', $post->slug) }}"><img src="{{ $post->getThumbnailUrl() }}" alt="{{ $post->title }}"
                class="w-full h-full aspect-square  object-cover group-hover:scale-110 duration-500"></a>
    </div>
    {{-- TEXT --}}
    <div class="w-full sm:w-[65%] flex flex-col justify-start items-start gap-8">
        {{-- categories & reading time --}}
        <div class="flex justify-start items-center gap-5">

            @foreach ($post->categories as $category)
                    <x-base.badge class="mr-4" wire:navigate
                        href="{{ route('attraction.index', ['category' => $category->slug]) }}">{{ $category->getFormatName() }}</x-base.badge>
                @endforeach

            <span class="text-sm">{{ $post->getReadingTime() }} min</span>

        </div>
        {{-- title & link --}}
        <div class="flex flex-col justify-start gap-6">

            <h3 class="text-lg font-medium">{{ $post->title }}</h3>


            <x-base.link href="{{ route('blog.show', $post->slug) }}">Czytaj</x-base.link>

        </div>
    </div>
</div>
