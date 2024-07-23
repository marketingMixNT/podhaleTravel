<x-base.section>

    <div class="flex flex-col gap-16 justify-start items-start">


      
            <x-base.heading-third heading="Galeria"
                subheading="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut sit amet tristique massa," />
   


        <div class="flex justify-center gap-x-12">

           
          
        <x-blog.post-card-simple :attraction="$attraction"/>
        <x-blog.post-card-simple :attraction="$attraction"/>
        <x-blog.post-card-simple :attraction="$attraction"/>

        </div>
    </div>

</x-base.section>
