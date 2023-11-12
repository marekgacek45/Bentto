<x-section id="o-nas">
    <div class="max-w-screen-xl mx-auto">
        <div class="flex flex-col lg:flex-row justify-center items-center gap-12">
            <div class="lg:w-1/2 flex flex-col justify-center items-start gap-6">
                <h3> <strong>Bentto</strong>: Twój Partner w Świecie Gastronomii
                </h3>
                <hr class=" w-1/4 border-primaryColor-400 border-2 ">
                <p class="text-lg">Jesteśmy firmą <strong>Bentto</strong>, specjalizującą się w sprzedaży, projektowaniu i serwisie
                    sprzętu gastronomicznego. </p>
                <p class="text-lg">Nasza siedziba mieści się w malowniczym Nowym Targu, gdzie łączymy pasję do gastronomii z
                    profesjonalizmem. </p>
                <p class="text-lg">Naszym celem jest dostarczanie wysokiej jakości rozwiązań dla branży gastronomicznej, a nasza wiedza
                    i doświadczenie pozwalają nam sprostać nawet najbardziej wymagającym potrzebom klientów.</p>
                <p class="text-lg">Jesteśmy dumni z tego, że możemy wspierać restauracje, kawiarnie, hotele i inne placówki
                    gastronomiczne w urzeczywistnianiu ich kulinarnych marzeń.</p>
                <p class="text-lg">Niezależnie od tego, czy potrzebujesz nowego sprzętu, kompleksowego projektu kuchni czy wsparcia
                    serwisowego, jesteśmy tu, aby ci pomóc.</p>
                <p class="text-lg">Nasza pasja do gastronomii jest naszą motywacją, a zadowolenie klientów naszą nagrodą.</p>
                <x-buttons.primary class=" text-black" href="{{route('contact')}}">Skontaktuj się z nami</x-buttons.primary>

            </div>

            <div class="grid sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-2 gap-6">
                <img src="{{ asset('assets/images/bentto_66.webp') }}" alt="wnętrze sklepu Bentto w Nowym Targu"
                    class=" min-w-[250px] lg:max-w-[250px] min-h-[250px] max-h-[250px] object-cover animation-trigger md:opacity-0">
                <img src="{{ asset('assets/images/bentto_52.webp') }}" alt="wnętrze sklepu Bentto w Nowym Targu"
                    class=" min-w-[250px] lg:max-w-[250px] min-h-[250px] max-h-[250px] object-cover animation-trigger md:opacity-0">
                <img src="{{ asset('assets/images/bentto_42.webp') }}" alt="wnętrze sklepu Bentto w Nowym Targu"
                    class=" min-w-[250px] lg:max-w-[250px] min-h-[250px] max-h-[250px] object-cover animation-trigger md:opacity-0">
                <img src="{{ asset('assets/images/bentto_73.webp') }}" alt="wnętrze sklepu Bentto w Nowym Targu"
                    class="hidden sm:block md:hidden lg:block min-w-[250px] lg:max-w-[250px] min-h-[250px] max-h-[250px] object-cover animation-trigger md:opacity-0">
            
            </div>

        </div>
    </div>
</x-section>
