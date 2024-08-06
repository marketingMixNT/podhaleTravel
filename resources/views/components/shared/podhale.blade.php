<x-base.section class="bg-bgLight-200 dark:bg-dark-600">

    <div class="grid grid-cols-1 lg:grid-cols-2 gap-y-16 lg:gap-y-0">
        <div class="flex flex-col justify-center gap-12 items-start lg:w-3/4">
            <h2 class="text-4xl sm:text-5xl font-medium" style="line-height: 1.2">Odkryj Urok Podhala
            </h2>
            <div class="space-y-4">

                <p class="text-lg ">Podhale to malowniczy region położony u stóp Tatr, który zachwyca swoją
                    unikalną kulturą, tradycjami oraz zapierającymi dech w piersiach krajobrazami. To miejsce, gdzie
                    górskie
                    szczyty spotykają się z urokliwymi dolinami, a czyste powietrze i krystaliczne strumienie tworzą
                    idealne
                    warunki do wypoczynku i aktywnego spędzania czasu.
                </p>
               
             
            </div>
            <x-base.link-btn type="wider" href="{{ route('about.index') }}">Dowiedz się więcej</x-base.link-btn>
        </div>
        <div class="w-full h-full overflow-hidden">
            <img src="{{ asset('assets/img/podhale.webp') }}" alt="piękny widok na Tatry" loading="lazy"
                class="w-full h-full max-h-[500px] lg:max-h-[700px] object-cover  scale-hover">
        </div>
    </div>

</x-base.section>
