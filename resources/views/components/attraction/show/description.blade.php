<x-base.section tight>

    <div class="flex flex-col lg:flex-row">

        <div class="w-full lg:w-[55%] flex flex-col gap-y-12 relative">


            @foreach (collect($attraction->gallery)->slice(0, 3) as $img)
                <img src="{{ asset('storage/' . $img) }}" alt="Gallery image" class="w-full sticky top-12 aspect-square md:aspect-video" width="1920" height="1080" loading="lazy">
            @endforeach

        </div>
        <div class="w-full lg:w-[45%] lg:pl-12 prose relative">

            <div class="sticky top-12  ">

                {!! $attraction->desc !!}
            </div>
        </div>
    </div>


</x-base.section>
