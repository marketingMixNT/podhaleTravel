{{-- <div class="w-full flex flex-col xl:flex-row justify-between items-center gap-8 lg:gap-16 pb-12">

    <div class="flex flex-col xs:flex-row justify-center items-center gap-6 flex-wrap">
      
{{$slot}}

    </div>


  
   <x-filters.search-box clearRoute="{{ route('blog.index') }}" />

</div> --}}

<div class="w-full flex flex-col xl:flex-row justify-between items-center gap-8 lg:gap-16 pb-12">

  {{$slot}}

</div>
