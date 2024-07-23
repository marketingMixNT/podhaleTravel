<x-base.section>

    <div class="grid grid-cols-1 lg:grid-cols-2 gap-y-16 lg:gap-y-0">
        <div class="flex flex-col justify-center gap-12 items-start lg:w-3/4">
            <h2 class="text-4xl sm:text-6xl" style="line-height: 1.2">Mozna tutaj dodać mapkę podhala
            </h2>
            <p class="text-base md:text-lg">I zrobić jakaś stronę gdzie opiszemy cały region, a tutaj kilka słów ... Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi obcaecati sed quisquam error totam suscipit delectus expedita nihil magni velit! Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate, odit dignissimos reprehenderit at eligendi tempore. Qui alias commodi officiis maiores quas deserunt ipsa rerum amet aperiam cumque numquam eligendi tempora ad, consequuntur mollitia ex praesentium nostrum repellat. Nisi, doloremque modi.
            </p>
            <x-base.link-btn type="wider" href="#">Zobacz</x-base.link-btn>
        </div>
        <div class="w-full h-full overflow-hidden">
            <img src="{{ asset('assets/img/map.jpg') }}" alt="mapka Podhala" width="" height="" loading="lazy" class="w-full h-full max-h-[500px] lg:max-h-[700px] object-cover  scale-hover">
        </div>
    </div>

</x-base.section>