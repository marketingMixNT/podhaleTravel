@props(['class'=>'','href'=>'#'])



<li {{$attributes}}>
    <a wire:navigate wire:preserve-scroll   href="{{ $href }}" 
    
        class="block px-4 py-2 bg-bgLight-400 dark:bg-bgDark-400  hover:bg-bgLight-600 dark:hover:bg-gray-600 dark:hover:text-white {{$class}} ">

        {{ $slot }}
    </a>
</li>