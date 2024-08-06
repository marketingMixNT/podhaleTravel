<x-base.main>

    <x-base.heading-secondary heading="Blog" />



    <x-base.section tight id="content">

        <x-filters.mobile-btn />
        <x-blog.filter-box />

        @if ($this->posts->count() === 0)
            <span class="flex justify-center font-medium text-lg">Nie znaleziono żadnych wpisów</span>
        @else
            {{-- FIRST POST --}}
            <x-blog.first-post-index :post="$this->posts->first()" />
            {{-- OTHER POST --}}
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-6 mt-20">
                @foreach ($this->posts->skip(1) as $post)
                    <x-blog.other-post-index :post="$post" wire:key="$post->id" />
                @endforeach
        @endif
    </x-base.section>
    
    {{-- NAVIGATE --}}
    {{ $this->posts->links('vendor.livewire.tailwind') }}


    <div class="flex justify-center items-center mt-20">

        <x-base.link-btn href="{{ route('blog.archive') }}">Archiwum</x-base.link-btn>
    </div>








</x-base.main>
