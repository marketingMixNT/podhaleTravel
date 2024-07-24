@props(['class'=>'','wrapperClass'=>'' ,'tight'=>false])
<section {{$attributes}} class="{{$tight ?'py-10':'py-20'}}  px-6 md:px-16 2xl:px-0 {{$class}}">
    <div class="max-w-screen-xl mx-auto {{$wrapperClass}}">

        {{$slot}}
    </div>
</section>