<x-base.section>

    <div class="flex flex-col gap-16 justify-start items-start">
    <x-base.heading-third heading="Podobne atrakcje"
                subheading="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut sit amet tristique massa," />

    <div class="flex justify-center items-center gap-x-12 w-full">

        @foreach ($similarAttractions as $attraction)
            
        <x-attraction.card-simple :attraction="$attraction"/>
        @endforeach
    </div>

    </div>

</x-base.section>