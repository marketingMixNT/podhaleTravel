<x-base.main>

    <x-about.hero-header />

    <x-about.text-image-block title="Kraina Gór" img="{{ asset('assets/img/podhale2.webp') }}">Podhale to region, który
        zachwyca nie tylko malowniczymi krajobrazami,
        ale także bogatą
        historią i
        kulturą. Urok Tatr przyciąga turystów przez cały rok, oferując niezapomniane widoki i liczne atrakcje.
        Wysokie szczyty, takie jak Rysy czy Giewont, stanowią wyzwanie dla miłośników górskich wędrówek, a
        doliny, jak Chochołowska czy Kościeliska, zapraszają do relaksu w otoczeniu natury. To idealne miejsce
        dla osób pragnących odpocząć od zgiełku miasta i zanurzyć się w pięknie górskiego
        krajobrazu.</x-about.text-image-block>

    <x-about.text-image-block title="Kultura i Tradycje" img="{{ asset('assets/img/podhale3.webp') }}"
        reverseOrder>Podhale to region, w którym tradycje góralskie są wciąż żywe i pielęgnowane przez mieszkańców.
        Górale, znani ze swojej gościnności, chętnie dzielą się swoją kulturą z turystami. Lokalne festiwale, takie jak
        Góralskie Święto, przyciągają rzesze odwiedzających, oferując im możliwość poznania regionalnych tańców, muzyki
        oraz rękodzieła. Warto również zwrócić uwagę na tradycyjne stroje góralskie, które są noszone z dumą podczas
        różnych uroczystości. To wszystko sprawia, że Podhale to nie tylko miejsce do zwiedzania, ale także do
        odkrywania bogatej kultury.</x-about.text-image-block>


    <div class="w-full h-[500px]  bg-cover bg-top bg-no-repeat bg-blend-multiply bg-gray-500 bg-fixed my-20 flex justify-center items-center px-6"
        style="background-image: url({{ asset('assets/img/podhale7.webp') }})">

        <div class="max-w-screen-md mx-auto text-center flex flex-col justify-center items-center gap-8">

            <x-.base.heading1 class="text-fontLight" size="xl">
                Twoje Miejsce na Ziemi
            </x-.base.heading1>
            <x-base.text class="text-fontLight">Na Podhalu czeka na Ciebie niezapomniana przygoda! Odkryj malownicze szlaki, spróbuj lokalnych
                specjałów i poznaj gościnność mieszkańców. Nie zwlekaj, sprawdź, co Podhale ma do
                zaoferowania!</x-base.text>

                <x-base.link-btn href="{{ route('attraction.index') }}">Poznaj atrakcje</x-base.link-btn>
        </div>
    </div>

    <x-about.text-image-block title="Atrakcje Turystyczne" img="{{ asset('assets/img/podhale4.webp') }}">Podhale oferuje
        wiele atrakcji turystycznych, które zadowolą każdego odwiedzającego. Od wspaniałych szlaków górskich, przez
        termalne źródła, aż po urokliwe miasteczka, takie jak Zakopane, region ten ma wiele do zaoferowania. W Zakopanem
        można odwiedzić Krupówki, tętniący życiem deptak pełen sklepów, restauracji i kawiarni. Dla miłośników sportów
        zimowych Podhale staje się rajem, z licznymi stokami narciarskimi i trasami snowboardowymi. Latem natomiast,
        region przyciąga turystów szlakami do wędrówek oraz możliwością uprawiania wspinaczki
        górskiej.</x-about.text-image-block>

    <x-about.text-image-block title="Zabytki i Historia" img="{{ asset('assets/img/podhale5.webp') }}"
        reverseOrder>Podhale to nie tylko piękna przyroda, ale także bogata historia, która odzwierciedla się w licznych
        zabytkach. W regionie znajduje się wiele drewnianych kościołów, które są wpisane na listę UNESCO, a także
        tradycyjne góralskie chaty, które zachowały swój pierwotny charakter. Odkrywanie historii Podhala to fascynująca
        podróż w czasie, która pozwala zrozumieć, jak region ten kształtował się na przestrzeni wieków. Warto odwiedzić
        muzea, które prezentują lokalne tradycje i historię, aby lepiej poznać ten wyjątkowy
        region.</x-about.text-image-block>

</x-base.main>
