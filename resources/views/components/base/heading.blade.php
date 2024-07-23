@props(['class'=>'','subheading'=>'','heading'=>''])

<div class="flex flex-col gap-4 {{$class}}">
    <span class="text-sm">{{$subheading}}</span>
    <h2 class="text-4xl sm:text-6xl">{{$heading}}</h2>
</div>