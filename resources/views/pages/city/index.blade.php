<x-layouts.app title="" description="">

    <x-base.heading-secondary heading="Miejscowości"
        text="Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magnam, illo." />

<x-base.section>


    <div class="grid grid-cols-3 h-[130vh] md:h-screen  gap-4">

        @foreach ($cities as $city)
      <p>{{$city->name}}</p>
    @endforeach

    </div>

    </x-base.section>


</x-layouts.app>
