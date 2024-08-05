{{-- style of active and inactive in global.scss --}}
@props(['categories', 'class' => ''])



@php
    if (!isset($scrollTo)) {
        $scrollTo = '#content';
    }

    $scrollIntoViewJsSnippet =
        $scrollTo !== false
            ? <<<JS
               let scrollToElement = \$el.closest('{$scrollTo}') || document.querySelector('{$scrollTo}');
               if (scrollToElement) {
                   scrollToElement.scrollIntoView();
               }
            JS
            : '';
@endphp

<ul class="flex flex-wrap justify-center items-center gap-6 {{ $class }}">

    <x-base.badge type='large' wire:navigate href="{{ route('blog.index') }}"
        class="{{ $this->category === '' ? 'active' : 'inactive' }}">Wszystkie</x-base.badge>
    @foreach ($categories as $category)
        <x-base.badge wire:key='{{ $category->id }}' type='large'
            href="{{ route('blog.index', ['category' => $category->slug]) }}"
            class="{{ $category->slug === $this->category ? 'active' : 'inactive' }}">{{ $category->getFormatName() }}</x-base.badge>
    @endforeach
</ul>
