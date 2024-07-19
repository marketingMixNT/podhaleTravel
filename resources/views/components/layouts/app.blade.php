@props(['title', 'description', 'noFollow' => false])


<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="dark">

<head>
    <!--Meta-->
    @include('partials.meta')
    <!--Favicon-->
    @include('partials.favicon')
    <!--Fonts-->
    @include('partials.fonts')

    @vite(['resources/scss/app.scss', 'resources/js/app.js'])
    
</head>

<body
    class="relative bg-bgLight-400 dark:bg-bgDark-800 font-text font-light text-fontDark dark:text-fontLight overflow-x-hidden">

    <x-shared.header />

    {{ $slot }}

    <x-shared.footer />

    
  

   
</body>

</html>
