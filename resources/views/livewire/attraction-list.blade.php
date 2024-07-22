
<div>
    {{-- MAIN COINTAINER --}}
    <x-base.section id="content" tight>
        {{-- filters --}}
        <x-attraction.fillter-box />
        {{-- ATTRACTIONS --}}
        <div  class="grid grid-cols-1 lg:grid-cols-2 gap-x-16 gap-y-8 ">
            @foreach ($this->attractions as $attraction)
                <x-attraction.card :attraction="$attraction" />
            @endforeach
        </div>
    </x-base.section>

    {{-- PAGINATION --}}
        {{ $this->attractions->links('vendor.livewire.tailwind') }}
</div>

