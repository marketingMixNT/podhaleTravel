@props(['class' => '', 'light' => false])


<div class="flex justify-center items-center gap-4 {{ $class }}">
    <a href="#">
        <x-iconpark-facebook-o
            class="w-5 {{ $light ? 'text-fontLight' : 'text-fontDark dark:text-fontLight' }} scale-hover" />
    </a>
    <a href="">
        <x-iconpark-instagram-o
            class="w-5 {{ $light ? 'text-fontLight' : 'text-fontDark dark:text-fontLight' }} scale-hover" />
    </a>
    <a href="">
        <x-iconpark-instagramone-o
            class="w-5 {{ $light ? 'text-fontLight' : 'text-fontDark dark:text-fontLight' }} scale-hover" />
    </a>
    <a href="">
        <x-iconpark-youtube-o
            class="w-5 {{ $light ? 'text-fontLight' : 'text-fontDark dark:text-fontLight' }} scale-hover" />
    </a>

</div>
