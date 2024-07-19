@props(['class' => '', 'type' => 'primary', 'href' => '#'])




<a {{ $attributes }} href="{{ $href }}"
    class=" duration-500 hover:shadow-xl
     {{ $type === 'primary' ? ' bg-secondary-400 hover:bg-secondary-600   px-9 py-3 text-fontLight md:text-lg  rounded-xl' : '' }} 
        {{ $type === 'badge-small' ? 'bg-bgLight-400 hover:bg-bgLight-600 px-4 py-[2px] text-sm  rounded-xl' : '' }} 
        {{ $type === 'third' ? ' px-6 py-2 rounded-full' : '' }} 
       {{ $class }}
    
    
    ">{{ $slot }}</a>