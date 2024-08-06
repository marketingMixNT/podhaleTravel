<header class="grid lg:grid-cols-2 ">
    {{-- text --}}
    <div class="flex  flex-col justify-center items-start px-6 md:px-20 gap-10 h-full py-16 lg:py-0 ">

        <span class="text-lg md:text-xl lg:text-2xl">Harmonia Natury</span>
        <h1 class="text-4xl md:text-5xl lg:text-6xl 2xl:text-7xl font-medium" style="line-height: 1.2"><span
                id="jsTyping"></span> <br> czekają na Ciebie</h1>

        <x-base.link-btn href="{{ route('attraction.index') }}">Sprawdź</x-base.link-btn>
    </div>
    {{-- img --}}
    <div class="relative h-[500px] lg:h-[80vh] 2xl:h-[85vh] overflow-hidden">
        <img src="{{ asset('assets/img/hero-home.jpg') }}" alt="wspaniały widok na na podhalańskie Tatry"
            class="h-full w-full object-cover scale-hover" width="884" height="901">

        <div class="absolute right-5 bottom-5 flex flex-col xs:flex-row gap-6">
            {{-- LOOP --}}
            @foreach ($this->categories->take(3) as $category)
                <x-base.badge wire::key="{{ $category->id }}"
                    href="{{ route('attraction.index', ['category' => $category->slug]) }}">{{ $category->getFormatName() }}</x-base.badge>
            @endforeach
        </div>
    </div>
</header>
