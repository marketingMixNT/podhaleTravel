<x-base.section >

    <x-base.heading subheading="Atrakcje" heading="Polecane atrakcje" />

    <div class="grid grid-cols-1 lg:grid-cols-2 gap-x-8 gap-y-12 py-16">

        @foreach ($attractions as $attraction)

            <x-attraction.card wire:key="{{$attraction->id}}" :attraction="$attraction" />
        @endforeach
    </div>

    <div class="flex justify-end items-center">

        <x-base.link  href="{{route('attraction.index')}}">Zobacz wszystkie</x-base.link>
    </div>
</x-base.section>