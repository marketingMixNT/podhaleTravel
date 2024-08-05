@props(['item'])

<x-base.section tight>

    <div class="flex flex-col lg:flex-row gap-y-12">

        <div class="w-full lg:w-[55%] flex flex-col gap-y-12 relative justify-center items-center">



            @foreach (collect($item->gallery)->slice(0, 3) as $img)
                <div class="overflow-hidden">
                    <img src="{{ asset('storage/' . $img) }}" alt="zdjęcie przedstawiajaące {{ $item->name }}"
                        class="w-full sticky top-12 aspect-square max-w-[500px]  2xl:max-w-[550px] object-cover scale-hover"
                        loading="lazy">
                </div>
            @endforeach


        </div>
        <div class="relative w-full lg:w-[45%] lg:pl-12 prose ">

            <div class="sticky top-12  ">

                {!! $item->desc !!}
            </div>
        </div>
    </div>


</x-base.section>
