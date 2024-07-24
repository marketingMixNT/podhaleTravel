<x-base.section>

    <div class="flex flex-col gap-16 justify-start items-start">


      
            <x-base.heading-third heading="Artykuły "
                subheading="Przeczytaj artykuły dotyczące atrakcji bla bla bla" />
 


    <div class="flex flex-col lg:flex-row flex-1 items-start gap-x-12 w-full">

           
        @foreach ($this->attraction->posts as $post)
               
        <x-blog.post-card-simple wire:key="{{$post->id}}" :post="$post" />
        @endforeach
        {{-- <div class="swiper attraction-posts-swiper">
            <div class="swiper-wrapper">
                


            </div>
            <div class="swiper-pagination"></div>
        </div> --}}
    </div>


        

        </div>
        <div class="flex justify-center items-center w-full mt-24">
            <a wire:navigate href="" class="link-hover">Zobacz wszystkie</a
        </div>
    </div>

</x-base.section>
