<div>

    <x-base.section id="content" tight>

        <x-attraction.fillter-box />


        @if ($this->attractions->count() === 0)
            <span class="flex justify-center font-medium text-lg">Nie znaleziono żadnych atrakcji</span>
        @else
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-x-16 gap-y-8 ">
                @foreach ($this->attractions as $attraction)
                    <x-attraction.card :attraction="$attraction" />
                @endforeach
            </div>
            @endif
    </x-base.section>

    {{-- PAGINATION --}}
    {{ $this->attractions->links('vendor.livewire.tailwind') }}
</div>
