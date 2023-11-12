

<x-section>
<div class="max-w-screen-xl mx-auto">
<div class="flex flex-col lg:flex-row justify-center items-center gap-12">
    <div class="grid sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-2 gap-6">
        <img src="{{asset('assets/realisations/zakatekSmaku/realizacja-zakatekSmaku_01.webp')}}" alt="zdjęcie przedstawiajace wnętrze sklepu Bentto" class=" min-w-[250px] lg:max-w-[250px] min-h-[250px] max-h-[250px] object-cover w-full animation-trigger md:opacity-0">
        <img src="{{asset('assets/realisations/zakatekSmaku/realizacja-zakatekSmaku_02.webp')}}" alt="zdjęcie przedstawiajace wnętrze sklepu Bentto" class=" min-w-[250px] lg:max-w-[250px] min-h-[250px] max-h-[250px] object-cover w-full animation-trigger md:opacity-0">
        <img src="{{asset('assets/realisations/mck/realizacja-mck_05.webp')}}" alt="zdjęcie przedstawiajace wnętrze sklepu Bentto" class=" min-w-[250px] lg:max-w-[250px] min-h-[250px] max-h-[250px] object-cover w-full animation-trigger md:opacity-0">
        <img src="{{asset('assets/realisations/zakatekSmaku/realizacja-zakatekSmaku_07.webp')}}" alt="zdjęcie przedstawiajace wnętrze sklepu Bentto" class="hidden sm:block md:hidden lg:block min-w-[250px] lg:max-w-[250px] min-h-[250px] max-h-[250px] object-cover w-full animation-trigger md:opacity-0">
    </div>
    <div class="lg:w-1/2 flex flex-col justify-center items-start gap-6">
        <h3 >Nasza Bogata Oferta Sprzętu Gastronomicznego, Serwisu i Projektowania Kuchni dla Twojej Restauracji
        </h3>
        <hr class="h-px w-1/4 border-primaryColor-400 border-2 ">
        <p class="text-lg">Z dumą prezentujemy naszą wszechstronną ofertę sprzętu gastronomicznego, kompleksowego serwisu oraz projektowania kuchni, specjalnie dostosowaną do Twojej restauracji. </p>
        <p>Ułatwiamy Ci nie tylko zakup niezbędnego wyposażenia, ale także zapewniamy profesjonalny serwis i projektujemy kuchnie, które spełnią Twoje oczekiwania.</p>
        <x-buttons.primary class=" text-black" href="{{route('offer')}}">Dowiedz się więcej</x-buttons.primary>

    </div>
</div>
</div>
</x-section>

<x-section>

    <div class="max-w-screen-xl mx-auto grid grid-cols-1 lg:grid-cols-3 gap-12 text-center">

        <div class="bg__offer--one h-[300px] lg:h-[500px] flex justify-end items-center flex-col pb-16 bg-blend-multiply bg-cover bg-no-repeat bg-gray-500 animation-trigger--2 md:opacity-0"> <h3 class=" font-medium  text-white">Sprzęt Gastronomiczny
        </h3> <hr class="border-2 w-1/4 mt-2 border-primaryColor-400"></div>
        <div class="bg__offer--two h-[300px] lg:h-[500px] flex justify-end items-center flex-col pb-16 bg-blend-multiply bg-cover bg-no-repeat bg-gray-500 animation-trigger md:opacity-0"><h3 class=" font-medium text-white" >Projektowanie
        </h3> <hr class="border-2 w-1/4 mt-2 border-primaryColor-400"></div>
        <div class="bg__offer--three h-[300px] lg:h-[500px] flex justify-end items-center flex-col pb-16 bg-blend-multiply  bg-cover bg-no-repeat bg-gray-500 animation-trigger--2 md:opacity-0"><h3 class=" font-medium text-white" >Serwis
        </h3> <hr class="border-2 w-1/4 mt-2 border-primaryColor-400"></div>
    </div>
</x-section>