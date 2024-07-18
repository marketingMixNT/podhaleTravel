@props(['title', 'description', 'noFollow' => false])


<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="application-name" content="{{ config('app.name') }}">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="">

    {{-- No Follow --}}
    @if ($noFollow)
        <meta name="robots" content="noindex, nofollow">
    @endisset

    <!--Title-->
    <title>{{ isset($title) ? $title : '' }} - PodhaleTravel</title>
    <meta name="description" content="{{ isset($description) ? $description : '' }}">


    <!--Cannonical-->
    <link rel="canonical" href="{{ url()->current() }}" />

    <!--Favicon-->
    @include('partials.favicon')

    <!--Fonts-->
    @include('partials.fonts')

    <!--Facebook-->
    @include('partials.facebook')


    @vite('resources/scss/app.scss')
</head>

<body class="relative bg-bgLight-300 font-text font-thin text-fontDark overflow-x-hidden">


{{ $slot }}

@vite('resources/js/app.js')
</body>

</html>
