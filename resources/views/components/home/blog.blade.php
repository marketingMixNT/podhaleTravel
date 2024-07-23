<x-base.section class="bg-bgLight-200">

    <x-base.heading subheading="Blog" heading="Najnowsze artykuły" />

    <div class="grid grid-cols-1 lg:grid-cols-2 gap-y-12 sm:gap-y-12 lg:gap-y-0  lg:gap-x-8 mt-16">

        <x-blog.first-post-home :post="$posts[0]" />

        <div class="grid grid-cols-1 grid-rows-3 gap-y-10 lg:gap-y-0">
            @foreach ($posts->skip(1) as $post)
                <x-blog.other-post-home wire:key="{{$post->id}}" :post="$post" />
            @endforeach
        </div>

    </div>

</x-base.section>
