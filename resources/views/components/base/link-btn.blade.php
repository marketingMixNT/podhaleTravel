@props(['class' => '', 'type' => '', 'href' => '#'])




<a {{ $attributes }} wire:navigate href="{{ $href }}"
    class=" duration-500 hover:shadow-xl bg-bgLight-200 hover:bg-bgLight-400 scale-hove border border-fontDark text-fontDark py-2  {{ $type === 'wider' ? 'px-12   ' : 'px-9 md:text-lg' }}    rounded-xl 
       {{ $class }}
    
    
    ">{{ $slot }}</a>
