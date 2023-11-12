<x-layouts.master>

    @section('title', 'Realizacje | Bentto - Urządzenia Gastonomiczne Nowy Targ')
    @section('description',
        'Nasze realizacje | Bentto - Urządzenia Gastronomiczne Nowy Targ. Zobacz przykłady naszych
        udanych projektów w dziedzinie urządzeń gastronomicznych. Odkryj, jak możemy wspierać Twój biznes.')

        <x-header class="header-img--2 pt-52 pb-12">
            <div class="px-4 mx-auto w-full text-center  max-w-screen-2xl">
                <h2 class="mb-4  font-extrabold tracking-tight leading-none text-white text-5xl ">
                    Realizacje</h2>
            </div>
        </x-header>

        <main class="px-4 lg:px-0">

            <section id="projects">
                <div class="container">
                    <!-- MENU -->
                    <div class="items-links ">
                        <span class="item-link" data-name="kaprys">Kaprys</span>
                        <span class="item-link" data-name="witow">Witów</span>
                        <span class="item-link" data-name="zakatekSmaku">Zakątek Smaku</span>
                        <span class="item-link " data-name="mck">MCK-Nowy Targ</span>
                        <span class="item-link" data-name="antonio">Restauracja Antonio</span>
                        <span class="item-link" data-name="dworek">Dworek</span>
                        <span class="item-link" data-name="gospoda">Gospoda Targowa</span>
                        <span class="item-link" data-name="goscinneProgi">Goscinne Progi</span>
                    </div>

                    <div class="info text-center mb-12">
                        {{-- KAPRYS --}}
                        <div data-name="kaprys">
                            <h3 class="font-semibold text-2xl">Restauracja Kaprys - Nowy Targ</h3>
                        </div>
                        {{-- WITÓW --}}
                        <div data-name="witow">
                            <h3 class="font-semibold text-2xl">Karczma UBOC Witów</h3>
                        </div>
                        {{-- ZAKĄTEK SMAKU --}}
                        <div data-name="zakatekSmaku">
                            <h3 class="font-semibold text-2xl">Restauracja Zakątek Smaku</h3>
                            <p>Nowotarska 15, 34-434 Harklowa</p>
                            <p>Piec Retigo B1011, Frytkownica Lotus F2/18-78G, Zmywarka Redfox QQI 52 T</p>
                        </div>
                        {{-- MCK --}}
                        <div data-name="mck">
                            <h3 class="font-semibold text-2xl">Miejskie Centrum Kultury w Nowym Targu</h3>
                        </div>
                        {{-- ZAKĄTEK SMAKU --}}
                        <div data-name="antonio">
                            <h3 class="font-semibold text-2xl">Plaża Białogóra Restauracja Antonio</h3>
                            <p>Okrężna 10, 84-113 Białogóra</p>
                            <p>Lotus 700 : kuchnia 4-palnikowa, płyta grillowa, frytownica 2-komorowa</p>
                        </div>
                        {{-- ZAKĄTEK SMAKU --}}
                        <div data-name="dworek">
                            <h3 class="font-semibold text-2xl">Dworek za Gościńcem</h3>
                            <p>Ciche, Stare Bystre 375A • 34-407 Stare Bystre</p>
                            <p>piec do pizzy F-Line GGF, mikser GGF</p>
                        </div>
                        {{-- GOSPODA --}}
                        <div data-name="gospoda">
                            <h3 class="font-semibold text-2xl">Gospoda Targowa</h3>
                            <p>Św. Doroty 9, 34-400 Nowy Targ</p>
                            <p>trzon kuchenny Lotus 900</p>
                        </div>
                        {{-- GOSCINNE PROGI --}}
                        <div data-name="goscinneProgi">
                            <h3 class="font-semibold text-2xl">Zgromadzenie Służebnic Najświętszego Serca Jezusowego Dom
                                Zakonny "Gościnne Progi"</h3>
                            <p>Jana Pawła II 1, 34-500 Zakopane</p>

                        </div>

                    </div>


                    <div class="gallery">
                        {{-- KAPRYS --}}


                        <a href="{{ asset('assets/realisations/kaprys/realizacja-kaprys_02.webp') }}" class="project-img"
                            data-name="kaprys" data-fancybox="kaprys"><img class="img"
                                src="{{ asset('assets/realisations/kaprys/realizacja-kaprys_02.webp') }}"
                                alt="realizacja wykonana w restauracji Kaprys w Nowym Targu" loading="lazy"></a>

                        <a href="{{ asset('assets/realisations/kaprys/realizacja-kaprys_05.webp') }}" class="project-img"
                            data-name="kaprys" data-fancybox="kaprys"><img class="img"
                                src="{{ asset('assets/realisations/kaprys/realizacja-kaprys_05.webp') }}"
                                alt="realizacja wykonana w restauracji Kaprys w Nowym Targu" loading="lazy"></a>

                        <a href="{{ asset('assets/realisations/kaprys/realizacja-kaprys_10.webp') }}" class="project-img"
                            data-name="kaprys" data-fancybox="kaprys"><img class="img"
                                src="{{ asset('assets/realisations/kaprys/realizacja-kaprys_10.webp') }}"
                                alt="realizacja wykonana w restauracji Kaprys w Nowym Targu" loading="lazy"></a>

                        <a href="{{ asset('assets/realisations/kaprys/realizacja-kaprys_04.webp') }}" class="project-img"
                            data-name="kaprys" data-fancybox="kaprys"><img class="img"
                                src="{{ asset('assets/realisations/kaprys/realizacja-kaprys_04.webp') }}"
                                alt="realizacja wykonana w restauracji Kaprys w Nowym Targu" loading="lazy"></a>

                        <a href="{{ asset('assets/realisations/kaprys/realizacja-kaprys_12.webp') }}" class="project-img"
                            data-name="kaprys" data-fancybox="kaprys"><img class="img"
                                src="{{ asset('assets/realisations/kaprys/realizacja-kaprys_12.webp') }}"
                                alt="realizacja wykonana w restauracji Kaprys w Nowym Targu" loading="lazy"></a>

                                <a href="{{ asset('assets/realisations/kaprys/realizacja-kaprys_06.webp') }}" class="project-img"
                                data-name="kaprys" data-fancybox="kaprys"><img class="img"
                                    src="{{ asset('assets/realisations/kaprys/realizacja-kaprys_06.webp') }}"
                                    alt="realizacja wykonana w restauracji Kaprys w Nowym Targu" loading="lazy"></a>

                                    <a href="{{ asset('assets/realisations/kaprys/realizacja-kaprys_08.webp') }}" class="project-img"
                                    data-name="kaprys" data-fancybox="kaprys"><img class="img"
                                        src="{{ asset('assets/realisations/kaprys/realizacja-kaprys_08.webp') }}"
                                        alt="realizacja wykonana w restauracji Kaprys w Nowym Targu" loading="lazy"></a>

                        <a href="{{ asset('assets/realisations/kaprys/realizacja-kaprys_01.webp') }}" class="project-img"
                            data-name="kaprys" data-fancybox="kaprys"><img class="img"
                                src="{{ asset('assets/realisations/kaprys/realizacja-kaprys_01.webp') }}"
                                alt="realizacja wykonana w restauracji Kaprys w Nowym Targu" loading="lazy"></a>

                              

                        <a href="{{ asset('assets/realisations/kaprys/realizacja-kaprys_03.webp') }}" class="project-img"
                            data-name="kaprys" data-fancybox="kaprys"><img class="img"
                                src="{{ asset('assets/realisations/kaprys/realizacja-kaprys_03.webp') }}"
                                alt="realizacja wykonana w restauracji Kaprys w Nowym Targu" loading="lazy"></a>

    

                        <a href="{{ asset('assets/realisations/kaprys/realizacja-kaprys_07.webp') }}" class="project-img"
                            data-name="kaprys" data-fancybox="kaprys"><img class="img"
                                src="{{ asset('assets/realisations/kaprys/realizacja-kaprys_07.webp') }}"
                                alt="realizacja wykonana w restauracji Kaprys w Nowym Targu" loading="lazy"></a>

                  

                        <a href="{{ asset('assets/realisations/kaprys/realizacja-kaprys_09.webp') }}" class="project-img"
                            data-name="kaprys" data-fancybox="kaprys"><img class="img"
                                src="{{ asset('assets/realisations/kaprys/realizacja-kaprys_09.webp') }}"
                                alt="realizacja wykonana w restauracji Kaprys w Nowym Targu" loading="lazy"></a>

                        <a href="{{ asset('assets/realisations/kaprys/realizacja-kaprys_11.webp') }}" class="project-img"
                            data-name="kaprys" data-fancybox="kaprys"><img class="img"
                                src="{{ asset('assets/realisations/kaprys/realizacja-kaprys_11.webp') }}"
                                alt="realizacja wykonana w restauracji Kaprys w Nowym Targu" loading="lazy"></a>


                        {{-- Witów --}}


                        <a href="{{ asset('assets/realisations/witow/realizacja-witow_02.webp') }}" class="project-img"
                            data-name="witow" data-fancybox="witow"><img class="img"
                                src="{{ asset('assets/realisations/witow/realizacja-witow_02.webp') }}"
                                alt="realizacja wykonana w Karczmie UBOC Witów" loading="lazy"></a>

                        <a href="{{ asset('assets/realisations/witow/realizacja-witow_03.webp') }}" class="project-img"
                            data-name="witow" data-fancybox="witow"><img class="img"
                                src="{{ asset('assets/realisations/witow/realizacja-witow_03.webp') }}"
                                alt="realizacja wykonana w Karczmie UBOC Witów" loading="lazy"></a>

                        <a href="{{ asset('assets/realisations/witow/realizacja-witow_08.webp') }}" class="project-img"
                            data-name="witow" data-fancybox="witow"><img class="img"
                                src="{{ asset('assets/realisations/witow/realizacja-witow_08.webp') }}"
                                alt="realizacja wykonana w Karczmie UBOC Witów" loading="lazy"></a>

                        <a href="{{ asset('assets/realisations/witow/realizacja-witow_10.webp') }}" class="project-img"
                            data-name="witow" data-fancybox="witow"><img class="img"
                                src="{{ asset('assets/realisations/witow/realizacja-witow_10.webp') }}"
                                alt="realizacja wykonana w Karczmie UBOC Witów" loading="lazy"></a>

                        <a href="{{ asset('assets/realisations/witow/realizacja-witow_11.webp') }}" class="project-img"
                            data-name="witow" data-fancybox="witow"><img class="img"
                                src="{{ asset('assets/realisations/witow/realizacja-witow_11.webp') }}"
                                alt="realizacja wykonana w Karczmie UBOC Witów" loading="lazy"></a>

                        <a href="{{ asset('assets/realisations/witow/realizacja-witow_09.webp') }}" class="project-img"
                            data-name="witow" data-fancybox="witow"><img class="img"
                                src="{{ asset('assets/realisations/witow/realizacja-witow_09.webp') }}"
                                alt="realizacja wykonana w Karczmie UBOC Witów" loading="lazy"></a>

                        <a href="{{ asset('assets/realisations/witow/realizacja-witow_17.webp') }}" class="project-img"
                            data-name="witow" data-fancybox="witow"><img class="img"
                                src="{{ asset('assets/realisations/witow/realizacja-witow_17.webp') }}"
                                alt="realizacja wykonana w Karczmie UBOC Witów" loading="lazy"></a>

                        <a href="{{ asset('assets/realisations/witow/realizacja-witow_18.webp') }}" class="project-img"
                            data-name="witow" data-fancybox="witow"><img class="img"
                                src="{{ asset('assets/realisations/witow/realizacja-witow_18.webp') }}"
                                alt="realizacja wykonana w Karczmie UBOC Witów" loading="lazy"></a>

                        <a href="{{ asset('assets/realisations/witow/realizacja-witow_04.webp') }}" class="project-img"
                            data-name="witow" data-fancybox="witow"><img class="img"
                                src="{{ asset('assets/realisations/witow/realizacja-witow_04.webp') }}"
                                alt="realizacja wykonana w Karczmie UBOC Witów" loading="lazy"></a>

                        <a href="{{ asset('assets/realisations/witow/realizacja-witow_05.webp') }}" class="project-img"
                            data-name="witow" data-fancybox="witow"><img class="img"
                                src="{{ asset('assets/realisations/witow/realizacja-witow_05.webp') }}"
                                alt="realizacja wykonana w Karczmie UBOC Witów" loading="lazy"></a>

                        <a href="{{ asset('assets/realisations/witow/realizacja-witow_06.webp') }}" class="project-img"
                            data-name="witow" data-fancybox="witow"><img class="img"
                                src="{{ asset('assets/realisations/witow/realizacja-witow_06.webp') }}"
                                alt="realizacja wykonana w Karczmie UBOC Witów" loading="lazy"></a>

                        <a href="{{ asset('assets/realisations/witow/realizacja-witow_07.webp') }}" class="project-img"
                            data-name="witow" data-fancybox="witow"><img class="img"
                                src="{{ asset('assets/realisations/witow/realizacja-witow_07.webp') }}"
                                alt="realizacja wykonana w Karczmie UBOC Witów" loading="lazy"></a>

                        <a href="{{ asset('assets/realisations/witow/realizacja-witow_12.webp') }}" class="project-img"
                            data-name="witow" data-fancybox="witow"><img class="img"
                                src="{{ asset('assets/realisations/witow/realizacja-witow_12.webp') }}"
                                alt="realizacja wykonana w Karczmie UBOC Witów" loading="lazy"></a>

                        <a href="{{ asset('assets/realisations/witow/realizacja-witow_13.webp') }}" class="project-img"
                            data-name="witow" data-fancybox="witow"><img class="img"
                                src="{{ asset('assets/realisations/witow/realizacja-witow_13.webp') }}"
                                alt="realizacja wykonana w Karczmie UBOC Witów" loading="lazy"></a>

                        <a href="{{ asset('assets/realisations/witow/realizacja-witow_14.webp') }}" class="project-img"
                            data-name="witow" data-fancybox="witow"><img class="img"
                                src="{{ asset('assets/realisations/witow/realizacja-witow_14.webp') }}"
                                alt="realizacja wykonana w Karczmie UBOC Witów" loading="lazy"></a>

                        <a href="{{ asset('assets/realisations/witow/realizacja-witow_15.webp') }}" class="project-img"
                            data-name="witow" data-fancybox="witow"><img class="img"
                                src="{{ asset('assets/realisations/witow/realizacja-witow_15.webp') }}"
                                alt="realizacja wykonana w Karczmie UBOC Witów" loading="lazy"></a>

                        <a href="{{ asset('assets/realisations/witow/realizacja-witow_16.webp') }}" class="project-img"
                            data-name="witow" data-fancybox="witow"><img class="img"
                                src="{{ asset('assets/realisations/witow/realizacja-witow_16.webp') }}"
                                alt="realizacja wykonana w Karczmie UBOC Witów" loading="lazy"></a>

                        <a href="{{ asset('assets/realisations/witow/realizacja-witow_19.webp') }}" class="project-img"
                            data-name="witow" data-fancybox="witow"><img class="img"
                                src="{{ asset('assets/realisations/witow/realizacja-witow_19.webp') }}"
                                alt="realizacja wykonana w Karczmie UBOC Witów" loading="lazy"></a>

                        <a href="{{ asset('assets/realisations/witow/realizacja-witow_20.webp') }}" class="project-img"
                            data-name="witow" data-fancybox="witow"><img class="img"
                                src="{{ asset('assets/realisations/witow/realizacja-witow_20.webp') }}"
                                alt="realizacja wykonana w Karczmie UBOC Witów" loading="lazy"></a>

                        <a href="{{ asset('assets/realisations/witow/realizacja-witow_01.webp') }}" class="project-img"
                            data-name="witow" data-fancybox="witow"><img class="img"
                                src="{{ asset('assets/realisations/witow/realizacja-witow_01.webp') }}"
                                alt="realizacja wykonana w Karczmie UBOC Witów" loading="lazy"></a>

                        {{-- Witów --}}


                        <a href="{{ asset('assets/realisations/zakatekSmaku/realizacja-zakatekSmaku_01.webp') }}"
                            class="project-img" data-name="zakatekSmaku" data-fancybox="zakatekSmaku"><img
                                class="img"
                                src="{{ asset('assets/realisations/zakatekSmaku/realizacja-zakatekSmaku_01.webp') }}"
                                alt="realizacja wykonana w Restauracji Zakątek Smaku w Harklowej" loading="lazy"></a>

                        <a href="{{ asset('assets/realisations/zakatekSmaku/realizacja-zakatekSmaku_02.webp') }}"
                            class="project-img" data-name="zakatekSmaku" data-fancybox="zakatekSmaku"><img
                                class="img"
                                src="{{ asset('assets/realisations/zakatekSmaku/realizacja-zakatekSmaku_02.webp') }}"
                                alt="realizacja wykonana w Restauracji Zakątek Smaku w Harklowej" loading="lazy"></a>

                        <a href="{{ asset('assets/realisations/zakatekSmaku/realizacja-zakatekSmaku_03.webp') }}"
                            class="project-img" data-name="zakatekSmaku" data-fancybox="zakatekSmaku"><img
                                class="img"
                                src="{{ asset('assets/realisations/zakatekSmaku/realizacja-zakatekSmaku_03.webp') }}"
                                alt="realizacja wykonana w Restauracji Zakątek Smaku w Harklowej" loading="lazy"></a>

                        <a href="{{ asset('assets/realisations/zakatekSmaku/realizacja-zakatekSmaku_04.webp') }}"
                            class="project-img" data-name="zakatekSmaku" data-fancybox="zakatekSmaku"><img
                                class="img"
                                src="{{ asset('assets/realisations/zakatekSmaku/realizacja-zakatekSmaku_04.webp') }}"
                                alt="realizacja wykonana w Restauracji Zakątek Smaku w Harklowej" loading="lazy"></a>

                        <a href="{{ asset('assets/realisations/zakatekSmaku/realizacja-zakatekSmaku_05.webp') }}"
                            class="project-img" data-name="zakatekSmaku" data-fancybox="zakatekSmaku"><img
                                class="img"
                                src="{{ asset('assets/realisations/zakatekSmaku/realizacja-zakatekSmaku_05.webp') }}"
                                alt="realizacja wykonana w Restauracji Zakątek Smaku w Harklowej" loading="lazy"></a>

                        <a href="{{ asset('assets/realisations/zakatekSmaku/realizacja-zakatekSmaku_06.webp') }}"
                            class="project-img" data-name="zakatekSmaku" data-fancybox="witow"><img class="img"
                                src="{{ asset('assets/realisations/zakatekSmaku/realizacja-zakatekSmaku_06.webp') }}"
                                alt="realizacja wykonana w Restauracji Zakątek Smaku w Harklowej" loading="lazy"></a>

                        <a href="{{ asset('assets/realisations/zakatekSmaku/realizacja-zakatekSmaku_07.webp') }}"
                            class="project-img" data-name="zakatekSmaku" data-fancybox="zakatekSmaku"><img
                                class="img"
                                src="{{ asset('assets/realisations/zakatekSmaku/realizacja-zakatekSmaku_07.webp') }}"
                                alt="realizacja wykonana w Restauracji Zakątek Smaku w Harklowej" loading="lazy"></a>

                      

                        <a href="{{ asset('assets/realisations/zakatekSmaku/realizacja-zakatekSmaku_09.webp') }}"
                            class="project-img" data-name="zakatekSmaku" data-fancybox="zakatekSmaku"><img
                                class="img"
                                src="{{ asset('assets/realisations/zakatekSmaku/realizacja-zakatekSmaku_09.webp') }}"
                                alt="realizacja wykonana w Restauracji Zakątek Smaku w Harklowej" loading="lazy"></a>

                        <a href="{{ asset('assets/realisations/zakatekSmaku/realizacja-zakatekSmaku_10.webp') }}"
                            class="project-img" data-name="zakatekSmaku" data-fancybox="zakatekSmaku"><img
                                class="img"
                                src="{{ asset('assets/realisations/zakatekSmaku/realizacja-zakatekSmaku_10.webp') }}"
                                alt="realizacja wykonana w Restauracji Zakątek Smaku w Harklowej" loading="lazy"></a>

                        <a href="{{ asset('assets/realisations/zakatekSmaku/realizacja-zakatekSmaku_11.webp') }}"
                            class="project-img" data-name="zakatekSmaku" data-fancybox="zakatekSmaku"><img
                                class="img"
                                src="{{ asset('assets/realisations/zakatekSmaku/realizacja-zakatekSmaku_11.webp') }}"
                                alt="realizacja wykonana w Restauracji Zakątek Smaku w Harklowej" loading="lazy"></a>

                        <a href="{{ asset('assets/realisations/zakatekSmaku/realizacja-zakatekSmaku_12.webp') }}"
                            class="project-img" data-name="zakatekSmaku" data-fancybox="zakatekSmaku"><img
                                class="img"
                                src="{{ asset('assets/realisations/zakatekSmaku/realizacja-zakatekSmaku_12.webp') }}"
                                alt="realizacja wykonana w Restauracji Zakątek Smaku w Harklowej" loading="lazy"></a>

                        <a href="{{ asset('assets/realisations/zakatekSmaku/realizacja-zakatekSmaku_13.webp') }}"
                            class="project-img" data-name="zakatekSmaku" data-fancybox="zakatekSmaku"><img
                                class="img"
                                src="{{ asset('assets/realisations/zakatekSmaku/realizacja-zakatekSmaku_13.webp') }}"
                                alt="realizacja wykonana w Restauracji Zakątek Smaku w Harklowej" loading="lazy"></a>

                        <a href="{{ asset('assets/realisations/zakatekSmaku/realizacja-zakatekSmaku_14.webp') }}"
                            class="project-img" data-name="zakatekSmaku" data-fancybox="zakatekSmaku"><img
                                class="img"
                                src="{{ asset('assets/realisations/zakatekSmaku/realizacja-zakatekSmaku_14.webp') }}"
                                alt="realizacja wykonana w Restauracji Zakątek Smaku w Harklowej" loading="lazy"></a>

                        <a href="{{ asset('assets/realisations/zakatekSmaku/realizacja-zakatekSmaku_15.webp') }}"
                            class="project-img" data-name="zakatekSmaku" data-fancybox="zakatekSmaku"><img
                                class="img"
                                src="{{ asset('assets/realisations/zakatekSmaku/realizacja-zakatekSmaku_15.webp') }}"
                                alt="realizacja wykonana w Restauracji Zakątek Smaku w Harklowej" loading="lazy"></a>

                        <a href="{{ asset('assets/realisations/zakatekSmaku/realizacja-zakatekSmaku_16.webp') }}"
                            class="project-img" data-name="zakatekSmaku" data-fancybox="zakatekSmaku"><img
                                class="img"
                                src="{{ asset('assets/realisations/zakatekSmaku/realizacja-zakatekSmaku_16.webp') }}"
                                alt="realizacja wykonana w Restauracji Zakątek Smaku w Harklowej" loading="lazy"></a>

                                <a href="{{ asset('assets/realisations/zakatekSmaku/realizacja-zakatekSmaku_08.webp') }}"
                                class="project-img" data-name="zakatekSmaku" data-fancybox="zakatekSmaku"><img
                                    class="img"
                                    src="{{ asset('assets/realisations/zakatekSmaku/realizacja-zakatekSmaku_08.webp') }}"
                                    alt="realizacja wykonana w Restauracji Zakątek Smaku w Harklowej" loading="lazy"></a>

                        {{-- MCK --}}
                        <a href="{{ asset('assets/realisations/mck/realizacja-mck_01.webp') }}" class="project-img"
                            data-name="mck" data-fancybox="mck"><img class="img"
                                src="{{ asset('assets/realisations/mck/realizacja-mck_01.webp') }}"
                                alt="realizacja wykonana w MCK Nowy Targ" loading="lazy"></a>

                        <a href="{{ asset('assets/realisations/mck/realizacja-mck_02.webp') }}" class="project-img"
                            data-name="mck" data-fancybox="mck"><img class="img"
                                src="{{ asset('assets/realisations/mck/realizacja-mck_02.webp') }}"
                                alt="realizacja wykonana w MCK Nowy Targ" loading="lazy"></a>

                        <a href="{{ asset('assets/realisations/mck/realizacja-mck_03.webp') }}" class="project-img"
                            data-name="mck" data-fancybox="mck"><img class="img"
                                src="{{ asset('assets/realisations/mck/realizacja-mck_03.webp') }}"
                                alt="realizacja wykonana w MCK Nowy Targ" loading="lazy"></a>

                        <a href="{{ asset('assets/realisations/mck/realizacja-mck_04.webp') }}" class="project-img"
                            data-name="mck" data-fancybox="mck"><img class="img"
                                src="{{ asset('assets/realisations/mck/realizacja-mck_04.webp') }}"
                                alt="realizacja wykonana w MCK Nowy Targ" loading="lazy"></a>

                        <a href="{{ asset('assets/realisations/mck/realizacja-mck_05.webp') }}" class="project-img"
                            data-name="mck" data-fancybox="mck"><img class="img"
                                src="{{ asset('assets/realisations/mck/realizacja-mck_05.webp') }}"
                                alt="realizacja wykonana w MCK Nowy Targ" loading="lazy"></a>

                        <a href="{{ asset('assets/realisations/mck/realizacja-mck_06.webp') }}" class="project-img"
                            data-name="mck" data-fancybox="mck"><img class="img"
                                src="{{ asset('assets/realisations/mck/realizacja-mck_06.webp') }}"
                                alt="realizacja wykonana w MCK Nowy Targ" loading="lazy"></a>

                        <a href="{{ asset('assets/realisations/mck/realizacja-mck_07.webp') }}" class="project-img"
                            data-name="mck" data-fancybox="mck"><img class="img"
                                src="{{ asset('assets/realisations/mck/realizacja-mck_07.webp') }}"
                                alt="realizacja wykonana w MCK Nowy Targ" loading="lazy"></a>

                        <a href="{{ asset('assets/realisations/mck/realizacja-mck_08.webp') }}" class="project-img"
                            data-name="mck" data-fancybox="mck"><img class="img"
                                src="{{ asset('assets/realisations/mck/realizacja-mck_08.webp') }}"
                                alt="realizacja wykonana w MCK Nowy Targ" loading="lazy"></a>

                        <a href="{{ asset('assets/realisations/mck/realizacja-mck_09.webp') }}" class="project-img"
                            data-name="mck" data-fancybox="mck"><img class="img"
                                src="{{ asset('assets/realisations/mck/realizacja-mck_09.webp') }}"
                                alt="realizacja wykonana w MCK Nowy Targ" loading="lazy"></a>

                        <a href="{{ asset('assets/realisations/mck/realizacja-mck_10.webp') }}" class="project-img"
                            data-name="mck" data-fancybox="mck"><img class="img"
                                src="{{ asset('assets/realisations/mck/realizacja-mck_10.webp') }}"
                                alt="realizacja wykonana w MCK Nowy Targ" loading="lazy"></a>

                        <a href="{{ asset('assets/realisations/mck/realizacja-mck_11.webp') }}" class="project-img"
                            data-name="mck" data-fancybox="mck"><img class="img"
                                src="{{ asset('assets/realisations/mck/realizacja-mck_11.webp') }}"
                                alt="realizacja wykonana w MCK Nowy Targ" loading="lazy"></a>

                        <a href="{{ asset('assets/realisations/mck/realizacja-mck_12.webp') }}" class="project-img"
                            data-name="mck" data-fancybox="mck"><img class="img"
                                src="{{ asset('assets/realisations/mck/realizacja-mck_12.webp') }}"
                                alt="realizacja wykonana w MCK Nowy Targ" loading="lazy"></a>

                        <a href="{{ asset('assets/realisations/mck/realizacja-mck_13.webp') }}" class="project-img"
                            data-name="mck" data-fancybox="mck"><img class="img"
                                src="{{ asset('assets/realisations/mck/realizacja-mck_13.webp') }}"
                                alt="realizacja wykonana w MCK Nowy Targ" loading="lazy"></a>

                        <a href="{{ asset('assets/realisations/mck/realizacja-mck_14.webp') }}" class="project-img"
                            data-name="mck" data-fancybox="mck"><img class="img"
                                src="{{ asset('assets/realisations/mck/realizacja-mck_14.webp') }}"
                                alt="realizacja wykonana w MCK Nowy Targ" loading="lazy"></a>

                        <a href="{{ asset('assets/realisations/mck/realizacja-mck_15.webp') }}" class="project-img"
                            data-name="mck" data-fancybox="mck"><img class="img"
                                src="{{ asset('assets/realisations/mck/realizacja-mck_15.webp') }}"
                                alt="realizacja wykonana w MCK Nowy Targ" loading="lazy"></a>

                        <a href="{{ asset('assets/realisations/mck/realizacja-mck_16.webp') }}" class="project-img"
                            data-name="mck" data-fancybox="mck"><img class="img"
                                src="{{ asset('assets/realisations/mck/realizacja-mck_16.webp') }}"
                                alt="realizacja wykonana w MCK Nowy Targ" loading="lazy"></a>

                        <a href="{{ asset('assets/realisations/mck/realizacja-mck_17.webp') }}" class="project-img"
                            data-name="mck" data-fancybox="mck"><img class="img"
                                src="{{ asset('assets/realisations/mck/realizacja-mck_17.webp') }}"
                                alt="realizacja wykonana w MCK Nowy Targ" loading="lazy"></a>

                        <a href="{{ asset('assets/realisations/mck/realizacja-mck_18.webp') }}" class="project-img"
                            data-name="mck" data-fancybox="mck"><img class="img"
                                src="{{ asset('assets/realisations/mck/realizacja-mck_18.webp') }}"
                                alt="realizacja wykonana w MCK Nowy Targ" loading="lazy"></a>

                        <a href="{{ asset('assets/realisations/mck/realizacja-mck_19.webp') }}" class="project-img"
                            data-name="mck" data-fancybox="mck"><img class="img"
                                src="{{ asset('assets/realisations/mck/realizacja-mck_19.webp') }}"
                                alt="realizacja wykonana w MCK Nowy Targ" loading="lazy"></a>

                        {{-- ANTONIO --}}
                        <a href="{{ asset('assets/realisations/antonio/realizacja-antonio_01.webp') }}"
                            class="project-img" data-name="antonio" data-fancybox="antonio"><img class="img"
                                src="{{ asset('assets/realisations/antonio/realizacja-antonio_01.webp') }}"
                                alt="realizacja wykonana w restauracji Antonio" loading="lazy"></a>

                        <a href="{{ asset('assets/realisations/antonio/realizacja-antonio_02.webp') }}"
                            class="project-img" data-name="antonio" data-fancybox="antonio"><img class="img"
                                src="{{ asset('assets/realisations/antonio/realizacja-antonio_02.webp') }}"
                                alt="realizacja wykonana w restauracji Antonio" loading="lazy"></a>

                        {{-- DWOREK --}}
                        <a href="{{ asset('assets/realisations/dworek/realizacja-dworekZaGoscincem_01.webp') }}"
                            class="project-img" data-name="dworek" data-fancybox="dworek"><img class="img"
                                src="{{ asset('assets/realisations/dworek/realizacja-dworekZaGoscincem_01.webp') }}"
                                alt="realizacja wykonana w restauracji Dworek za Gościncem" loading="lazy"></a>

                        <a href="{{ asset('assets/realisations/dworek/realizacja-dworekZaGoscincem_02.webp') }}"
                            class="project-img" data-name="dworek" data-fancybox="dworek"><img class="img"
                                src="{{ asset('assets/realisations/dworek/realizacja-dworekZaGoscincem_02.webp') }}"
                                alt="realizacja wykonana w restauracji Dworek za Gościncem" loading="lazy"></a>

                        <a href="{{ asset('assets/realisations/dworek/realizacja-dworekZaGoscincem_03.webp') }}"
                            class="project-img" data-name="dworek" data-fancybox="dworek"><img class="img"
                                src="{{ asset('assets/realisations/dworek/realizacja-dworekZaGoscincem_03.webp') }}"
                                alt="realizacja wykonana w restauracji Dworek za Gościncem" loading="lazy"></a>

                        {{-- GOSPODA --}}
                        <a href="{{ asset('assets/realisations/gospodaTargowa/realizacja-gospodaTargowa_01.webp') }}"
                            class="project-img" data-name="gospoda" data-fancybox="gospoda"><img class="img"
                                src="{{ asset('assets/realisations/gospodaTargowa/realizacja-gospodaTargowa_01.webp') }}"
                                alt="realizacja wykonana w gospodzie Targowej w Nowym Targu" loading="lazy"></a>

                        <a href="{{ asset('assets/realisations/gospodaTargowa/realizacja-gospodaTargowa_02.webp') }}"
                            class="project-img" data-name="gospoda" data-fancybox="gospoda"><img class="img"
                                src="{{ asset('assets/realisations/gospodaTargowa/realizacja-gospodaTargowa_02.webp') }}"
                                alt="realizacja wykonana w gospodzie Targowej w Nowym Targu" loading="lazy"></a>

                        {{-- GOSCINNE PROGI --}}
                        <a href="{{ asset('assets/realisations/goscinneProgi/realizacja-goscinneProgi_01.webp') }}"
                            class="project-img" data-name="goscinneProgi" data-fancybox="goscinneProgi"><img
                                class="img"
                                src="{{ asset('assets/realisations/goscinneProgi/realizacja-goscinneProgi_01.webp') }}"
                                alt="realizacja wykonana w Gościnnych Progach w Zakopanem" loading="lazy"></a>

                        <a href="{{ asset('assets/realisations/goscinneProgi/realizacja-goscinneProgi_02.webp') }}"
                            class="project-img" data-name="goscinneProgi" data-fancybox="goscinneProgi"><img
                                class="img"
                                src="{{ asset('assets/realisations/goscinneProgi/realizacja-goscinneProgi_02.webp') }}"
                                alt="realizacja wykonana w Gościnnych Progach w Zakopanem" loading="lazy"></a>

                        <a href="{{ asset('assets/realisations/goscinneProgi/realizacja-goscinneProgi_03.webp') }}"
                            class="project-img" data-name="goscinneProgi" data-fancybox="goscinneProgi"><img
                                class="img"
                                src="{{ asset('assets/realisations/goscinneProgi/realizacja-goscinneProgi_03.webp') }}"
                                alt="realizacja wykonana w Gościnnych Progach w Zakopanem" loading="lazy"></a>

                        <a href="{{ asset('assets/realisations/goscinneProgi/realizacja-goscinneProgi_04.webp') }}"
                            class="project-img" data-name="goscinneProgi" data-fancybox="goscinneProgi"><img
                                class="img"
                                src="{{ asset('assets/realisations/goscinneProgi/realizacja-goscinneProgi_04.webp') }}"
                                alt="realizacja wykonana w Gościnnych Progach w Zakopanem" loading="lazy"></a>
                    </div>

                </div>
            </section>
        </main>



    </x-layouts.master>
