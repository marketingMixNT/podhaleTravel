<div>
    {{-- CATEGORIES --}}
    <x-base.section tight>
        <x-categories-list :categories="$this->categories" />
    </x-base.section>
    {{-- MAIN COINTAINER --}}
    <x-base.section tight>
        {{-- filters --}}
        <x-attraction.fillter-box />
         {{--ATTRACTIONS --}}
         <div class="grid grid-cols-1 lg:grid-cols-2 gap-x-16 gap-y-8 ">
            @foreach ($this->attractions as $attraction)
                <x-attraction.card :attraction="$attraction" />
            @endforeach
        </div>
    </x-base.section>

    {{-- PAGINATION --}}
    <nav class="max-w-screen-xl mx-auto px-6 md:px-16 pt-10 pb-20">
        {{ $this->attractions->links() }}
    </nav>
</div>
