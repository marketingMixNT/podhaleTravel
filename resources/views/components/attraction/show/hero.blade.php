@props(['attraction'])

<div class="relative w-full h-[calc(100vh-117px)] bg-blend-multiply bg-fixed bg-no-repeat bg-cover bg-center  bg-gray-400  text-center"
    style="background-image: url({{ asset($attraction->getThumbnailUrl()) }})">

    <h1
        class="absolute left-1/2 -translate-x-1/2 top-1/2 -translate-y-1/2 text-5xl xs:text-7xl md:text-8xl 2xl:text-9xl font-bold text-fontLight">
        {{ $attraction->name }}</h1>

    {{-- categories --}}
    <div class="absolute left-8 bottom-8 flex flex-wrap justify-center sm:justify-start items-center mt-4  gap-y-3 ">
        @foreach ($attraction->categories as $category)
        <x-base.badge class="mr-4" 
            href="{{ route('attraction.index', ['category' => $category->slug]) }}">{{ $category->getFormatName() }}</x-base.badge>
    @endforeach

    </div>
</div>
