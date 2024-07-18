<header>
    {{-- top --}}
    <div class="flex justify-between items-center px-6 sm:px-12 lg:px-20 2xl:px-28 py-7 border-b border-b-primary-400">
        {{-- logo & nav --}}
        <div class="flex lg:justify-center items-center gap-20">
            {{-- logo --}}

            <a href="{{ route('home') }}" class="flex justify-center items-center lg:gap-1">
                <img src="{{ asset('assets//logo/logo.webp') }}" alt="" width="80" height="60" class="w-20">
                <h1 class="text-2xl sm:text-[26px] font-medium">Atrakcje Podhala</h1>
            </a>
            {{-- nav --}}
            <nav id="menu"
                class="fixed lg:static top-[121px] left-0 right-0 bottom-0  flex justify-center items-center bg-primary-400 lg:bg-transparent translate-x-[100%] lg:translate-x-0 duration-500  ease-in-out z-50">
                <x-nav.nav-list />
                <x-social light class="absolute bottom-4 left-4 lg:hidden" />
                <x-nav.language-switcher class="absolute bottom-4 right-4 lg:hidden text-fontLight" />
            </nav>
        </div>
        {{-- social & language-switcher & theme-toggle --}}
        <div class="flex justify-center items-center gap-6">
           
            <x-nav.language-switcher class="hidden lg:flex" />
            <x-nav.theme-toggler />

        </div>
        {{-- hamburger --}}
        <x-nav.hamburger />
    </div>

</header>
