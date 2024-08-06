@props(['class' => '', 'type' => '','img' => ''])

@if ($type === 'index')
    <header  class="pt-10 pb-0 md:pt-20 md:pb-10 px-6 md:px-16 2xl:px-0 {{ $class }}">
        <div class="max-w-screen-xl mx-auto text-center">

            {{ $slot }}
        </div>
    </header>
@endif


@if ($type === 'show')
    
@endif

@if ($type === 'hero')
<header class="h-[calc(100vh-130px)] w-full max-w-screen-max mx-auto">

    <div class="h-1/2 2xl:h-[70%] w-full bg-cover bg-no-repeat bg-fixed bg-bottom "
        style="background-image: url({{ $img }})"></div>

    <div class="h-1/2 2xl:h-[30%] w-full flex justify-center items-center text-center max-w-screen-lg mx-auto px-6">
       {{$slot}}
    </div>

</header>
@endif