@props(['small' => false])

<a wire:navigate href="{{ route('home') }}"
    class="flex justify-center items-center lg:gap-1 text-2xl {{ $small ? 'sm:text-lg ' : 'sm:text-[23px] ' }}  font-normal">
    <img src="{{ asset('assets//logo/logo.webp') }}" alt="" width="80" height="60" class="w-18">Atrakcje
    Podhala
</a>
