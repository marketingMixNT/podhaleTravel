@props(['post'])


<div class="flex flex-col sm:flex-row justify-between items-center gap-6 group">
    {{-- IMG --}}
    <div class="w-full sm:w-[35%] max-h-[400px] ">
        <a href="{{ route('blog.show', $post->slug) }}">
            <div class="overflow-hidden">

                <img src="{{ $post->getThumbnailUrl() }}" alt="{{ $post->title }}" width="210" height="210"
                    loading="lazy" class="w-full h-full aspect-square  object-cover group-hover:scale-110 duration-500">
        </a>
    </div>
</div>
{{-- TEXT --}}
<div class="w-full sm:w-[65%] flex flex-col justify-start items-start gap-8">
    {{-- categories & reading time --}}
    <div class="flex justify-start items-center gap-5">

        @foreach ($post->categories->take(1) as $category)
            <x-base.badge wire:key='{{ $category->id }}' class="mr-4"
                href="{{ route('attraction.index', ['category' => $category->slug]) }}">{{ $category->getFormatName() }}</x-base.badge>
        @endforeach

        <div class="flex justify-start items-center gap-2">

            <x-heroicon-o-book-open class="w-5" />
            <span class="text-sm">{{ $post->getReadingTime() }} min</span>
        </div>

    </div>
    {{-- title & link --}}
    <div class="flex flex-col justify-start gap-6">

        <h3 class="text-lg font-medium">{{ $post->title }}</h3>


        <x-base.link href="{{ route('blog.show', $post->slug) }}">Czytaj</x-base.link>

    </div>
</div>
</div>
