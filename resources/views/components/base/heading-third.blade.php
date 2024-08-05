@props(['heading', 'subheading'=>false ])


<div class="flex flex-col gap-6">

    <h2 class="text-3xl xs:text-4xl md:text-5xl lg:text-6xl font-medium">{{$heading}}</h2>

    @if($subheading)
    <span class="text-base md:text-lg">{{$subheading}}</span>
    @endif
</div>