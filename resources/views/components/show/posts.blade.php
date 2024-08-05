<x-base.section tight>

    <div class="flex flex-col gap-16 justify-start items-start">

        <x-base.heading-third heading="Artykuły " />

        <div class="flex flex-col lg:flex-row  gap-12 w-full ">

            @foreach ($item->posts as $post)
                <x-blog.post-card-simple wire:key="{{ $post->id }}" :post="$post" />
            @endforeach

        </div>

    </div>
    <div class="flex justify-center items-center w-full mt-24">
        <x-base.link-btn href="{{$allPostsLink}}">Zobacz wszystkie</x-base.link-btn>

    </div>

</x-base.section>
