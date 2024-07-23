<x-base.section >

    <x-base.heading subheading="Atrakcje" heading="Polecane atrakcje" />

    <div class="grid grid-cols-1 lg:grid-cols-2 gap-x-8 gap-y-12 py-16">

        @foreach ($attractions as $attraction)

            <x-attraction.card :attraction="$attraction" />
        @endforeach
    </div>

    <div class="flex justify-end items-center">

        <a wire:navigate href="{{route('attraction.index')}}" class="link-hover">Zobacz wszystkie</a>
    </div>
</x-base.section>