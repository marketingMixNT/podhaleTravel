<div>
    {{-- CATEGORIES --}}
    <x-base.section tight>
        <x-categories-list :categories="$this->categories" />
    </x-base.section>
    {{-- FIRST POST --}}
    <x-base.section tight id="content">
        <x-blog.first-post-index :post="$this->posts->first()" />
    </x-base.section>

    {{-- OTHER POSTS --}}
    <x-base.section tight>
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
            @foreach ($this->posts->skip(1) as $post)
                <x-blog.other-post-index :post="$post" wire:key="$post->id" />
            @endforeach
        </div>

    </x-base.section>

    {{-- NAVIGATE --}}

    {{ $this->posts->links('vendor.livewire.tailwind') }}
</div>
</div>