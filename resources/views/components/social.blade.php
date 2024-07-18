@props(['class' => '', 'light' => false])


<div class="flex justify-center items-center gap-4 {{ $class }}">
    <a href="#">
        <x-iconpark-facebook-o class="w-5 {{ $light ? 'text-white' : 'text-primary-400' }} hover:scale-105 duration-500" />
    </a>
    <a href="">
        <x-iconpark-instagram-o class="w-5 {{ $light ? 'text-white' : 'text-primary-400' }} hover:scale-105 duration-500" />
    </a>
    <a href="">
        <x-iconpark-instagramone-o class="w-5 {{ $light ? 'text-white' : 'text-primary-400' }} hover:scale-105 duration-500" />
    </a>
    <a href="">
        <x-iconpark-youtube-o class="w-5 {{ $light ? 'text-white' : 'text-primary-400' }} hover:scale-105 duration-500" />
    </a>

</div>