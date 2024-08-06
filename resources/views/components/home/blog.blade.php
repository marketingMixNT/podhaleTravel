<x-base.section >

    <x-base.heading subheading="Blog" heading="Najnowsze artykuły" />

    <div class="grid grid-cols-1 lg:grid-cols-2 gap-y-12 sm:gap-y-12 lg:gap-y-0  lg:gap-x-8 mt-16">

        <x-home.blog-first-post :post="$posts[0]" />

        <div class="grid grid-cols-1 grid-rows-3 gap-y-10 lg:gap-y-0">
            @foreach ($posts->skip(1) as $post)
                <x-home.blog-other-post wire:key="{{ $post->id }}" :post="$post" />
            @endforeach
        </div>

    </div>

    <div class="flex justify-end items-center mt-20">

        <x-base.link href="{{ route('blog.index') }}">Zobacz wszystkie</x-base.link>
    </div>

</x-base.section>
