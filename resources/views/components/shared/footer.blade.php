<footer class="px-6 md:px-16 pt-10 pb-10">
    {{-- container --}}
    <div class="max-w-screen-xl mx-auto space-y-11">
        {{-- TOP --}}
        <div class="flex flex-col lg:flex-row justify-between items-center gap-y-8 md:gap-y-">
            {{-- logo --}}
            <div class="w-full lg:w-1/5 ">
                <x-logo-link small />
            </div>
            {{-- nav --}}
            <nav class="w-full lg:w-3/5">
                <x-nav.nav-list footer />
            </nav>
            <div class="w-full lg:w-1/5 flex justify-center lg:justify-end">
                <x-social />
            </div>
        </div>
        {{-- hr --}}
        <hr class="w-full  border border-bgDark-800 dark:border-bgLight-200  ">
        {{-- BOTTOM --}}
        <div class="flex flex-col md:flex-row justify-between items-center gap-y-8 md:gap-y-0">
            {{-- copy --}}
            <div class="w-full md:w-1/5 flex justify-center items-center gap-12  text-sm">
                <span>© <span id="footerYear"></span> Atrakcje Podhala</span>
            </div>
            {{-- dev --}}
            <div class="w-full md:w-3/5 flex justify-center order-1 md:order-none">
                <a href="https://marketingmix.pl" target="_blank">
                    <img src="{{ asset('assets/marketingmix--light.svg') }}"
                        alt=""class="w-28 md:w-36 scale-hover hidden dark:inline-block">
                    <img src="{{ asset('assets/marketingmix--dark.svg') }}"
                        alt=""class="w-28 md:w-36 scale-hover inline-block dark:hidden ">
                </a>
            </div>
            {{-- privacy --}}
            <div class="w-full md:w-1/5 flex items-center justify-center md:justify-end text-sm ">
                <a href="#" class="link-hover">Polityka Prywatności</a>
            </div>
        </div>
    </div>
</footer>
