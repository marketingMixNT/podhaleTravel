@props(['class' => '', 'type' => '', 'href' => '#'])




<a {{ $attributes }} wire:navigate href="{{ $href }}"
    class=" duration-500 hover:shadow-xl bg-bgLight-200 hover:bg-bgLight-400 scale-hove border border-fontDark text-fontDark  {{ $type === 'wider' ? 'px-12 py-2  ' : 'px-9 py-3 md:text-lg' }}    rounded-xl
       {{ $class }}
    
    
    ">{{ $slot }}</a>
