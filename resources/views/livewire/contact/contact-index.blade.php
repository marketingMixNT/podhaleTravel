<x-base.main>

    <x-base.heading-secondary heading="Kontakt" />



    <x-base.section tight>

        <div class="flex flex-col items-center gap-8 lg:gap-16 ">




            <div class="flex flex-col lg:flex-row justify-center items-center gap-y-12">

                {{-- text --}}
                <div class="w-full lg:w-[50%] flex flex-col justify-between items-start p-12 gap-12">

                    <div class="flex flex-col justify-start items-start gap-6 pr-12 ">

                        <x-base.heading1>Napisz do nas</x-base.heading1>

                        <x-base.text>Jeśli masz jakiekolwiek pytania dotyczące Podhala, chcesz podzielić się swoimi
                            sugestiami
                            lub masz pomysł na dodanie nowych atrakcji na naszej stronie, nie wahaj się z nami
                            skontaktować!
                            Jesteśmy otwarci na wszelkie opinie i chętnie wysłuchamy Twoich propozycji. <br><br>Nasz
                            zespół
                            z
                            przyjemnością odpowie na Twoje pytania i pomoże w każdej sprawie.</x-base.text>
                    </div>


                    <div class="space-y-4">



                        <div class="flex flex-col justify-start items-start gap-2 ">
                            <h2 class="font-bold">Telefon</h2>
                            <div class="flex justify-center items-center gap-2 ml-2">
                                <x-iconpark-phonetelephone-o class="w-5 mt-[2px]" />
                                <a href="tel:+48123456789" class="link-hover">+48123456789</a>
                            </div>
                        </div>

                        <div class="flex flex-col justify-start items-start gap-2 ">
                            <h2 class="font-bold">Email</h2>
                            <div class="flex justify-center items-center gap-2 ml-2">
                                <x-iconpark-mail-o class="w-5 mt-[2px]" />
                                <a href="mailto:kontakt@atrakcjepodhala.pl"
                                    class="link-hover">kontakt@atrakcjepodhala.pl</a>
                            </div>
                        </div>


                        <div class="flex flex-col justify-start items-start gap-2 ">
                            <h2 class="font-bold">Social Media</h2>
                            <div class="flex justify-center items-center gap-2 ml-2">
                                <a href="#" target="_blank">
                                    <x-iconpark-facebook-o class="w-6 scale-hover" />
                                </a>



                                <a href="#" target="_blank">
                                    <x-iconpark-instagram-o class="w-6 scale-hover" />
                                </a>



                                <a href="#" target="_blank">
                                    <x-iconpark-twitter-o class="w-6 scale-hover" />
                                </a>



                                <a href="#" target="_blank">
                                    <x-iconpark-tiktok-o class="w-6 scale-hover" />
                                </a>



                                <a href="#" target="_blank">
                                    <x-iconpark-youtube-o class="w-6 scale-hover" />
                                </a>
                            </div>
                        </div>
                    </div>

                </div>
                {{-- form --}}
                <div class="w-full md:w-[85%] lg:w-[50%]  ">
                    <livewire:contact.contact-form />

                </div>
            </div>

        </div>

    </x-base.section>

    <section class=" max-w-screen-max mx-auto">



        {{-- swiper --}}
        <div class="swiper attraction-gallery-swiper">
            <div class="py-20  swiper-wrapper">



                <a data-fslightbox href="{{ asset('assets/img/podhale.webp') }}" class=" swiper-slide">
                    <img src="{{ asset('assets/img/podhale.webp') }}" alt="zdjęcie przedstawiające Podhale"
                        class=" h-full w-full  aspect-square max-w-[500px] object-cover" loading="lazy">
                </a>
                <a data-fslightbox href="{{ asset('assets/img/podhale2.webp') }}" class=" swiper-slide">
                    <img src="{{ asset('assets/img/podhale2.webp') }}" alt="zdjęcie przedstawiające Podhale"
                        class=" h-full w-full  aspect-square max-w-[500px] object-cover" loading="lazy">
                </a>
                <a data-fslightbox href="{{ asset('assets/img/podhale3.webp') }}" class=" swiper-slide">
                    <img src="{{ asset('assets/img/podhale3.webp') }}" alt="zdjęcie przedstawiające Podhale"
                        class=" h-full w-full  aspect-square max-w-[500px] object-cover" loading="lazy">
                </a>
                <a data-fslightbox href="{{ asset('assets/img/podhale4.webp') }}" class=" swiper-slide">
                    <img src="{{ asset('assets/img/podhale4.webp') }}" alt="zdjęcie przedstawiające Podhale"
                        class=" h-full w-full  aspect-square max-w-[500px] object-cover" loading="lazy">
                </a>
                <a data-fslightbox href="{{ asset('assets/img/podhale5.webp') }}" class=" swiper-slide">
                    <img src="{{ asset('assets/img/podhale5.webp') }}" alt="zdjęcie przedstawiające Podhale"
                        class=" h-full w-full  aspect-square max-w-[500px] object-cover" loading="lazy">
                </a>
                <a data-fslightbox href="{{ asset('assets/img/podhale6.webp') }}" class=" swiper-slide">
                    <img src="{{ asset('assets/img/podhale6.webp') }}" alt="zdjęcie przedstawiające Podhale"
                        class=" h-full w-full  aspect-square max-w-[500px] object-cover" loading="lazy">
                </a>


            </div>

            {{-- nav --}}
            <nav class="absolute right-8 bottom-4 flex justify-center items-center gap-2 z-50">
                <x-navigate-button direction="left" indicator="attraction-gallery-prev" />
                <x-navigate-button direction="right" indicator="attraction-gallery-next" />
            </nav>
        </div>
        <section </x-base.main>
