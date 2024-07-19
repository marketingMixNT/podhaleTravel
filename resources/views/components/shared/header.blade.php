<header
    class="flex justify-between items-center px-6 sm:px-12 lg:px-20 2xl:px-28 py-7 border-b border-bgDark-800 dark:border-b-bgLight-200">


    {{-- LOGO & NAV --}}
    <div class="flex lg:justify-center items-center gap-20">
        {{-- logo --}}
        <x-logo-link />
        {{-- nav --}}
        <nav id="menu"
            class="fixed lg:static top-[121px] left-0 right-0 bottom-0  flex justify-center items-center bg-primary-400  lg:bg-transparent dark:lg:bg-transparent translate-x-[100%] lg:translate-x-0 duration-500  ease-in-out z-50">
            <x-nav.nav-list />
            <x-nav.theme-toggler class="absolute top-4 right-4 lg:hidden" />
            <x-social light class="absolute bottom-4 left-4 lg:hidden" />
            <x-nav.language-switcher class="absolute bottom-4 right-4 lg:hidden text-fontLight" />
        </nav>
    </div>
    {{-- LANGUAGE-SWITCHER & THEME-TOGGLE --}}
    <div class="flex justify-center items-center gap-6">
        <x-nav.language-switcher class="hidden lg:flex" />
        <x-nav.theme-toggler class="hidden lg:inline-block" />
    </div>
    {{-- HAMBURGER --}}
    <x-nav.hamburger />
    </header>
