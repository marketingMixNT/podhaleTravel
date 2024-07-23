@props(['footer' => false])

@php
    $flexDirection = $footer ? 'sm:flex-row' : ' lg:flex-row';
    $gap = $footer ? 'gap-6 sm:gap-12' : ' gap-12';
@endphp



<ul class="flex flex-col {{ $flexDirection }} justify-center items-center {{ $gap }} flex-wrap">
    <x-nav.nav-item href="{{route('attraction.index')}}" :footer="$footer">Atrakcje</x-nav.nav-item>
    <x-nav.nav-item href="{{route('category.index')}}" :footer="$footer">Kategorie</x-nav.nav-item>
    <x-nav.nav-item href="{{route('city.index')}}" :footer="$footer">Miejscowości</x-nav.nav-item>
    <x-nav.nav-item href="{{route('contact')}}" :footer="$footer">Kontakt</x-nav.nav-item>

    <x-nav.nav-item href="{{route('blog.index')}}" :footer="$footer">Blog</x-nav.nav-item>
</ul>
