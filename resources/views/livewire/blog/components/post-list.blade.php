<div>
    <x-base.section tight id="content">

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


</div>
