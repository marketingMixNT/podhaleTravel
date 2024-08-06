@props(['title' => '', 'img' => '', 'reverseOrder' => false])
<x-base.section tight>

    <div class="flex flex-col lg:flex-row  space-between items-center gap-12">

        <div
            class="w-full lg:w-1/2 flex flex-col justify-center items-start gap-10 {{ $reverseOrder ? 'order-1 lg:pl-10' : 'lg:pr-20 order-1 lg:order-none ' }}">
            <x-base.heading1>{{ $title }}</x-base.heading1>
            <x-base.text>{{ $slot }}</x-base.text>
        </div>
        <div class="overflow-hidden w-full lg:w-1/2 ">
            <img src="{{ $img }}" alt="Zdjęcie przedstawiające Tatry na Podhalu" loading="lazy"
                class="hover:scale-110 transition-transform duration-500 ease-in-out  max-h-[400px] lg:max-h-[500px]  object-cover mx-auto" />
        </div>

    </div>


</x-base.section>
