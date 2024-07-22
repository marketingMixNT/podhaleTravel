@props(['class'=>'','href'=>'#'])

@php
if (! isset($scrollTo)) {
    $scrollTo = '#content';
}

$scrollIntoViewJsSnippet = ($scrollTo !== false)
    ? <<<JS
       let scrollToElement = \$el.closest('{$scrollTo}') || document.querySelector('{$scrollTo}');
       if (scrollToElement) {
           scrollToElement.scrollIntoView();
       }
    JS
    : '';
@endphp

<li {{$attributes}}>
    <a wire:navigate href="{{ $href }}" x-on:click="{{ $scrollIntoViewJsSnippet }}"
    
        class="block px-4 py-2 bg-bgLight-400 dark:bg-bgDark-400  hover:bg-bgLight-600 dark:hover:bg-gray-600 dark:hover:text-white {{$class}} ">

        {{ $slot }}
    </a>
</li>