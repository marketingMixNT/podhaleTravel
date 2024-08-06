
<div id="filters"
    class="w-full flex flex-col xl:flex-row justify-center md:justify-between items-center gap-8 lg:gap-16 pb-12  fixed sm:relative inset-0 bg-bgLight-400 sm:bg-transparent z-50 translate-y-[100%] sm:translate-y-0 duration-500 ease-in-out">

    <x-iconpark-closesmall id="closeFilters" class="absolute top-2 right-2 w-6 block sm:hidden" />



    <x-base.heading class="sm:hidden">Filtry</x-base.heading>

    {{ $slot }}

</div>
