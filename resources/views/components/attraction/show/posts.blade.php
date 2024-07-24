<x-base.section>

    <div class="flex flex-col gap-16 justify-start items-start">


      
            <x-base.heading-third heading="Artykuły "
                subheading="Przeczytaj artykuły dotyczące atrakcji bla bla bla" />
   


        {{-- <div class="flex justify-center gap-x-12 max-w-screen-xl mx-auto">

            
           @foreach ($this->attraction->posts as $post)
               
           <x-blog.post-card-simple wire:id="{{$attraction->id}}" :post="$post"/>
           @endforeach

           
    
    </div> --}}
    <div class="flex justify-center items-center gap-x-12 w-full">

           

        <div class="swiper similar-attraction-swiper">
            <div class="swiper-wrapper">
                @foreach ($this->attraction->posts as $post)
               
                <x-blog.post-card-simple wire:id="{{$attraction->id}}" :post="$post" class="swiper-slide"/>
                @endforeach


            </div>
            <div class="swiper-pagination"></div>
        </div>
    </div>
        

        </div>
        <div class="flex justify-center items-center w-full">
            <a wire:navigate href="" class="link-hover">Zobacz wszystkie</a
        </div>
    </div>

</x-base.section>
