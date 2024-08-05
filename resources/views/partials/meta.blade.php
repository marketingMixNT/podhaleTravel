<meta charset="utf-8">
<meta name="application-name" content="{{ config('app.name') }}">
<meta name="csrf-token" content="{{ csrf_token() }}">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

{{-- title & desc --}}
<title>{{ $title }} - AtrakcjePodhala</title>
<meta name="description" content="{{ $description }}">

{{-- other --}}
<meta name="keywords" content="keyword1, keyword2, keyword3">
<meta name="author" content="Author Name">

{{-- nofollow --}}
@if ($noFollow)
    <meta name="robots" content="noindex, nofollow">
@else
    <meta name="robots" content="index, follow">
@endif

{{-- cannonical --}}
<link rel="canonical" href="{{ url()->current() }}" />

{{-- og --}}
<meta property="og:title" content="{{ $title }}">
<meta property="og:description" content="{{ $description }}">
<meta property="og:url" content="https://www.atrakcjepodhala.pl">
<meta property="og:type" content="website">
<meta property="og:image" content="">
