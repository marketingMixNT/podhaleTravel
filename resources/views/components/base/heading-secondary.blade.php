@props(['heading' => '', 'text' => false])

<div class="flex flex-col justify-center items-center gap-4 text-center pt-10 md:pt-20 pb-5  md:pb-10 px-6">

    <h1 class="text-4xl xs:text-6xl md:text-8xl font-normal">{{ $heading }}</h1>
    @if ($text)
        <span class="text-base md:text-lg">{{ $text }}</span>
    @endif

</div>
