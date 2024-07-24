<x-base.main>



    <x-base.section tight>

        <div class="text-left max-w-screen-xl mx-auto  flex flex-col gap-6 pt-10 px-6 md:px-16 2xl:px-0 pb-12">
            <div class="flex justify-between items-center">
                <div class="flex justify-start items-center gap-2">
                    @foreach ($post->categories as $category)
                    <x-base.badge class="mr-4" wire:key='{{$category->id}}'
                        href="{{ route('blog.index', ['category' => $category->slug]) }}">{{ $category->getFormatName() }}</x-base.badge>
                @endforeach
                    <span class="text-sm">{{ $post->getReadingTime() }} min</span>
                </div>
              
                <x-base.link back href="{{ url()->previous() }}">powrót</x-base.link>
            </div>
            <h1 class="text-5xl lg:w-3/4 md:text-left">{{ $post->title }}</h1>
        </div>

        <img src="{{ $this->post->getThumbnailUrl() }}" alt=""
            class="w-full object-cover aspect-video max-h-[600px]" width="16" height="9">
        <div class="py-10">
            <div class="flex justify-between items-center">
                <div class="flex flex-col justify-start items-start gap-2">
                    <span class="text-base font-medium">Publikacja:</span>
                    <span class="text-sm"> {{ $post->getPublishedDate() }}</span>
                </div>
                <x-social/>
            </div>
        </div>
        <article class="max-w-screen-lg mx-auto prose" style="line-height:1.6">
            {!! $post->content !!}
        </article>
    </x-base.section>

<x-base.section tight>

    <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
        
        @foreach ($latestPosts as $post)
        <x-blog.other-post-index :post="$post" :key="$post->id" />
            @endforeach
        </div>
    </x-base.section>
</x-base.main>


   
       



