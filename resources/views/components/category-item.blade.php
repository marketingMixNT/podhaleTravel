@props(['href'=>'#','class'=>'','subheading'=>'','heading'=>''])

<a wire:navigate href="{{$href}}" 
    class="{{$class}} group relative  bg-center bg-cover bg-blend-multiply bg-gray-300 hover:bg-gray-500 duration-500" {{$attributes}}>

    <div class="absolute bottom-6 px-6 left-0 right-0 flex justify-between items-center">
        <div class="flex flex-col gap-1">
            <h3 class="font-medium text-white text-2xl">{{$subheading}}</h3>
            <span class="text-sm text-white">Saga Fiordów</span>
        </div>

        <x-iconpark-arrowcircleright-o
            class="w-12 text-white group-hover:text-secondary-400 duration-500 group-hover:animate-pulse" />
    </div>
</a>