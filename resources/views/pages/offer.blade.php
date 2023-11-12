<x-layouts.master>

    @section('title', 'Oferta | Bentto - Urządzenia Gastonomiczne Nowy Targ')
    @section('description',
        'Nasza oferta | Bentto - Urządzenia Gastronomiczne Nowy Targ. Znajdź kompleksowe rozwiązania w zakresie urządzeń gastronomicznych. Oferujemy produkty najwyższej jakości dostosowane do Twoich potrzeb.')

    <x-header class="header-img--2 pt-52 pb-12">
        <div class="px-4 mx-auto w-full text-center  max-w-screen-2xl">
            <h2 class="mb-4  font-extrabold tracking-tight leading-none text-white text-5xl ">
                Oferta</h2>
        </div>
    </x-header>

    {{-- FIRST --}}
    <x-section>
        <div class="max-w-screen-xl mx-auto">
            <div class="flex flex-col lg:flex-row justify-center items-center gap-12">
                <div class="grid sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-2 gap-6">
                    <img src="{{ asset('assets/realisations/zakatekSmaku/realizacja-zakatekSmaku_09.webp') }}" alt="trzon kuchenny firmy RM Gastro"
                        class=" min-w-[250px] lg:max-w-[250px] min-h-[250px] max-h-[250px] object-cover w-full animation-trigger md:opacity-0">
                    <img src="{{ asset('assets/realisations/zakatekSmaku/realizacja-zakatekSmaku_12.webp') }}" alt=" realizacja w restauracji Zakątek Smaku"
                        class=" min-w-[250px] lg:max-w-[250px] min-h-[250px] max-h-[250px] object-cover w-full animation-trigger md:opacity-0">
                    <img src="{{ asset('assets/realisations/mck/realizacja-mck_14.webp') }}" alt="meble ze stali nierdzewnej w MCK Nowy Targ"
                        class=" min-w-[250px] lg:max-w-[250px] min-h-[250px] max-h-[250px] object-cover w-full animation-trigger md:opacity-0">
                    <img src="{{ asset('assets/images/bentto_23.webp') }}" alt="pakowarka próżniowa i ekspers do kawy w sklepie Bentto"
                        class="hidden sm:block md:hidden lg:block min-w-[250px] lg:max-w-[250px] min-h-[250px] max-h-[250px] object-cover w-full animation-trigger md:opacity-0">
                </div>
                <div class="lg:w-1/2 flex flex-col justify-center items-start gap-6">
                    <h3>Sprzęt Gastronomiczny
                    </h3>
                    <hr class="border">
                    <p> Zapraszamy do sklepu <strong>Bentto</strong>, gdzie znajdziesz szeroki wybór wysokiej jakości
                        sprzętu
                        gastronomicznego, doskonałego dla restauracji i lokali gastronomicznych.</p>
                    <p> Nasza oferta obejmuje wszystko, czego potrzebujesz do urządzenia i efektywnego prowadzenia
                        swojej kuchni. </p>
                    <p> Oferujemy różnorodność sprzętu, począwszy od nowoczesnych pieców konwekcyjnych, które doskonale
                        sprawdzą się w przygotowywaniu smacznych dań, po funkcjonalne meble wykonane ze stali
                        nierdzewnej, gwarantujące trwałość i higienę.</p>
                    <p> To jednak tylko wierzchołek góry lodowej!</p>
                    <p> W <strong>Bentto</strong> mamy o wiele więcej, niż można opisać w jednym paragrafie.</p>
                    <p> Zapraszamy do naszego sklepu, gdzie czeka na Ciebie jeszcze większy wybór profesjonalnego
                        sprzętu i akcesoriów gastronomicznych.</p>
                    <p> Przekonaj się sam, jak możemy ułatwić Ci pracę w kuchni i pomóc osiągnąć doskonałe rezultaty.
                    </p>


                </div>

            </div>
        </div>
        <x-header class="header-img--2 p-6 sm:p-24 mt-24">
            <div
                class="px-4 mx-auto w-full text-center  max-w-screen-2xl flex justify-center items-center gap-10 flex-wrap">
                <x-offerCard src="{{ asset('assets/realisations/zakatekSmaku/realizacja-zakatekSmaku_12.webp') }}" alt="piec konwekcyjno-parowy"
                    title="Piece Konwekcyjno-Parowe" />
                <x-offerCard src="{{asset('assets/realisations/mck/realizacja-mck_02.webp')}}" alt="meble ze stali nierdzewnej"
                    title="Meble ze Stali Nierdzewnej" />
                <x-offerCard src="{{ asset('assets/images/bentto_33.webp') }}" alt="trzony kuchenne"
                    title="Trzony Kuchenne" />
               
            </div>
        </x-header>
    </x-section>
    {{-- SECOND --}}
    <x-section>
        <div class="max-w-screen-xl mx-auto">
            <div class="flex flex-col lg:flex-row justify-center items-center gap-12">

                <div class="lg:w-1/2 flex flex-col justify-center items-start gap-6 order-2 lg:order-none">
                    <h3>Wyposażenie gastronomiczne
                    </h3>
                    <hr class="border">
                    <p> Nasza oferta w zakresie wyposażenia gastronomicznego jest kompletna i starannie dobrana,
                        obejmując wszystko, czego restauracja potrzebuje.</p>
                    <p> Posiadamy szeroki wybór desek, noży, drobnego AGD oraz zastawy stołowej i sztućców, aby sprostać
                        nawet najbardziej wymagającym potrzebom kucharzy i obsługi.</p>
                    <p> Nasze produkty charakteryzują się najwyższą jakością i trwałością, co sprawia, że stanowią
                        doskonałe rozwiązanie dla profesjonalnych kuchni.</p>
                    <p> Niezależnie od tego, czy potrzebujecie nowego wyposażenia czy chcecie uzupełnić istniejący
                        sprzęt, nasza oferta jest gotowa spełnić Wasze oczekiwania.</p>
                    <p> Odkryjcie naszą szeroką gamę produktów i wyposażcie swoją restaurację w najlepsze narzędzia do
                        przygotowywania wyjątkowych dań oraz elegancką zastawę stołową.</p>


                </div>
                <div class="grid sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-2 gap-6 order-1 lg:order-none">
                    <img src="{{ asset('assets/images/bentto_19.webp') }}" alt="zastawa serwisowa w sklepie Bentto"
                        class=" min-w-[250px] lg:max-w-[250px] min-h-[250px] max-h-[250px] object-cover w-full animation-trigger md:opacity-0">
                    <img src="{{ asset('assets/images/bentto_48.webp') }}" alt="akcesoria kuchenne w sklepie Bentto"
                        class=" min-w-[250px] lg:max-w-[250px] min-h-[250px] max-h-[250px] object-cover w-full animation-trigger md:opacity-0">
                    <img src="{{ asset('assets/images/bentto_24.webp') }}" alt="akcesoria kuchenne w sklepie Bentto"
                        class=" min-w-[250px] lg:max-w-[250px] min-h-[250px] max-h-[250px] object-cover w-full animation-trigger md:opacity-0">
                    <img src="{{ asset('assets/images/bentto_54.webp') }}" alt="akcesoria kuchenne w sklepie Bentto"
                        class="hidden sm:block md:hidden lg:block min-w-[250px] lg:max-w-[250px] min-h-[250px] max-h-[250px] object-cover w-full animation-trigger md:opacity-0">
                </div>

            </div>
        </div>
        <x-header class="header-img--2 p-6 sm:p-24 mt-24">
            <div
                class="px-4 mx-auto w-full text-center  max-w-screen-2xl flex justify-center items-center gap-10 flex-wrap">
                <x-offerCard src="{{ asset('assets/images/bentto_52.webp') }}" alt="zastawa stołowa"
                    title="Zastawa Stołowa" />
                <x-offerCard src="{{ asset('assets/images/bentto_57.webp') }}" alt="akcesoria kuchenne"
                    title="Akcesoria Kuchenne" />
                <x-offerCard src="{{ asset('assets/images/bentto_48.webp') }}" alt="garnki i patelnie"
                    title="Garnki i Patelnie" />
            </div>
        </x-header>
    </x-section>

    {{-- THIRD --}}
    <x-section>
        <div class="max-w-screen-xl mx-auto">
            <div class="flex flex-col lg:flex-row justify-center items-center gap-12">

                <div class="grid sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-2 gap-6">
                    <img src="{{ asset('assets/realisations/mck/realizacja-mck_18.webp') }}" alt=" realizacja wykonana w MCK Nowy Targ"
                        class=" min-w-[250px] lg:max-w-[250px] min-h-[250px] max-h-[250px] object-cover w-full animation-trigger md:opacity-0">
                    <img src="{{ asset('assets/realisations/mck/realizacja-mck_10.webp') }}" alt=" realizacja wykonana w MCK Nowy Targ"
                        class=" min-w-[250px] lg:max-w-[250px] min-h-[250px] max-h-[250px] object-cover w-full animation-trigger md:opacity-0">
                    <img src="{{ asset('assets/realisations/mck/realizacja-mck_09.webp') }}" alt=" realizacja wykonana w MCK Nowy Targ"
                        class=" min-w-[250px] lg:max-w-[250px] min-h-[250px] max-h-[250px] object-cover w-full animation-trigger md:opacity-0">
                    <img src="{{ asset('assets/realisations/mck/realizacja-mck_03.webp') }}" alt=" realizacja wykonana w MCK Nowy Targ"
                        class="hidden sm:block md:hidden lg:block min-w-[250px] lg:max-w-[250px] min-h-[250px] max-h-[250px] object-cover w-full animation-trigger md:opacity-0">
                </div>

                <div class="lg:w-1/2 flex flex-col justify-center items-start gap-6">
                    <h3>Projektowanie Kuchni
                    </h3>
                    <hr class="border">
                    <p> Z przyjemnością przedstawiamy naszą ofertę projektowania na stronie sklepu
                        <strong>Bentto</strong>, specjalizującego się w sprzedaży sprzętu gastronomicznego dla
                        restauracji.
                    </p>
                    <p>Nasza firma może pochwalić się wieloma udanymi projektami, które przyniosły naszym klientom
                        sukces i zadowolenie.</p>
                    <p> Jesteśmy gotowi podjąć się wyzwania, pomagając Państwu w profesjonalnym zaprojektowaniu i
                        dostosowaniu strony internetowej, aby sprostać oczekiwaniom branży gastronomicznej.</p>
                    <p> Niezależnie od tego, czy potrzebujecie unikalnego projektu graficznego, zoptymalizowanej
                        nawigacji czy funkcjonalności, które ułatwią zakupy online, jesteśmy gotowi służyć swoją wiedzą
                        i doświadczeniem.</p>
                    <p> Nasz zespół projektowy podejdzie do Waszego projektu z zaangażowaniem i pełnym zaufaniem, byście
                        mogli skoncentrować się na rozwijaniu swojego biznesu. </p>


                </div>


            </div>
        </div>
    </x-section>
    {{-- FOUR --}}
    <x-section>
        <div class="max-w-screen-xl mx-auto">
            <div class="flex flex-col lg:flex-row justify-center items-center gap-12">



                <div class="lg:w-1/2 flex flex-col justify-center items-start gap-6 order-2 lg:order-none">
                    <h3>Serwis Gastronomiczny
                    </h3>
                    <hr class="border">
<p>Nasz serwis gastronomiczny to gwarancja spokoju i efektywności w prowadzeniu Twojej restauracji lub
    lokalu gastronomicznego.</p>
<p> Zrozumieć potrzeby naszych klientów to dla nas priorytet. Nasz doświadczony
    zespół specjalistów doskonale zdaje sobie sprawę z tego, jak istotny jest sprawnie działający sprzęt
    w branży gastronomicznej.</p>
<p> Dlatego jesteśmy gotowi zapewnić pełną obsługę techniczną, abyś mógł
    skupić się na tym, co robisz najlepiej - przygotowywaniu wyśmienitych dań.</p>
<p>Nasze usługi serwisu gastronomicznego obejmują nie tylko szybkie naprawy w razie awarii, ale także
    regularne przeglądy techniczne, które pozwalają uniknąć potencjalnych problemów z wyprzedzeniem.</p>
<p>   
    Jesteśmy tu, by wesprzeć Cię w dbaniu o stan techniczny Twojego sprzętu. Działamy sprawnie i
    terminowo, aby Twoje urządzenia zawsze działały bez zarzutu.</p>
                </div>
                <div class="grid sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-2 gap-6 order-1 lg:order-none">
                    <img src="{{ asset('assets/realisations/zakatekSmaku/realizacja-zakatekSmaku_01.webp') }}" alt="sprzet kuchenny firmy rm gastro"
                        class=" min-w-[250px] lg:max-w-[250px] min-h-[250px] max-h-[250px] object-cover w-full animation-trigger md:opacity-0">
                    <img src="{{ asset('assets/realisations/mck/realizacja-mck_19.webp') }}" alt="ekspres do kawy w sklepie Bentto"
                        class=" min-w-[250px] lg:max-w-[250px] min-h-[250px] max-h-[250px] object-cover w-full animation-trigger md:opacity-0">
                    <img src="{{ asset('assets/images/bentto_38.webp') }}" alt="serwis Bentto"
                        class=" min-w-[250px] lg:max-w-[250px] min-h-[250px] max-h-[250px] object-cover w-full animation-trigger md:opacity-0">
                    <img src="{{ asset('assets/images/bentto_35.webp') }}" alt="serwis Bentto"
                        class="hidden sm:block md:hidden lg:block min-w-[250px] lg:max-w-[250px] min-h-[250px] max-h-[250px] object-cover w-full animation-trigger md:opacity-0">
                </div>

            </div>
        </div>
    </x-section>
</x-layouts.master>
