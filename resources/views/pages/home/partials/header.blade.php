{{-- <header class="pt-18" id="header">
    <section id="headerSlider" class="flex bg-center min-h-[100vh] pt-48 bg-gray-600 bg-blend-multiply bg-cover bg-no-repeat ">

    
        <div class="self-center px-4 pb-28 mx-auto max-w-screen-xl text-center flex flex-col justify-center items-center ">
            <h1 class="mb-4 text-4xl font-extrabold tracking-tight leading-none text-white md:text-5xl lg:text-6xl">
                <strong class="text-mainColor-300">Bentto</strong> - Sprzęt Gastronomiczny Najwyższej Jakości</h1>
            <p class="mb-8 sm:px-16 lg:px-48 text-base xs:text-lg lg:text-xl font-light text-gray-300  " >Posiadamy wszytko, czego
                potrzebujesz do urządzenia swojej kuchni lub restauracji na najwyższym poziomie. Jesteśmy zlokalizowani
                w
                malowniczym Podhalu, w sercu Nowego Targu, ale nasza oferta jest dostępna dla klientów w całej Polsce.
                Dzięki szerokiej gamie produktów i naszemu doświadczeniu, jesteśmy gotowi dostarczyć Ci sprzęt
                gastronomiczny najwyższej jakości, niezależnie od tego, gdzie się znajdujesz.</p>
            
           

                <x-buttons.primary class="lg:mt-12" href="{{route('offer')}}">Sprawdź naszą ofertę</x-buttons.primary>
            </div>
        </div>
    </section>
</header> --}}

<header class="pt-18 flex bg-center min-h-[100vh] relative" >
    
    <div class="bg-black absolute bottom-0 top-0 left-0 right-0  z-10 opacity-50"></div>

<div class=" pt-28 z-50 flex flex-col justify-center items-center max-w-screen-xl mx-auto text-center px-4 md:px-0 mb-12 xs:mb-0">

    <h1 class="mb-4 text-4xl font-extrabold tracking-tight leading-none text-white md:text-5xl lg:text-6xl mt-12">
        <strong class="text-mainColor-300">Bentto</strong> - Sprzęt Gastronomiczny Najwyższej Jakości</h1>
    <p class="mb-8 sm:px-16 lg:px-48 text-base xs:text-lg lg:text-xl font-light text-gray-300  " >Posiadamy wszytko, czego
        potrzebujesz do urządzenia swojej kuchni lub restauracji na najwyższym poziomie. Jesteśmy zlokalizowani
        w
        malowniczym Podhalu, w sercu Nowego Targu, ale nasza oferta jest dostępna dla klientów w całej Polsce.
        Dzięki szerokiej gamie produktów i naszemu doświadczeniu, jesteśmy gotowi dostarczyć Ci sprzęt
        gastronomiczny najwyższej jakości, niezależnie od tego, gdzie się znajdujesz.</p>
    
   

        <x-buttons.primary class="lg:mt-12" href="{{route('offer')}}">Sprawdź naszą ofertę</x-buttons.primary>
    </div>
    
    

    <!-- You can add more ".slideshow-image" elements, but remember to update the "$items" variable on SCSS -->
    <div class="slideshow">
        <div class="slideshow-image" style="background-image: url('{{asset('assets/images/bentto_18.webp')}}')"></div>
        <div class="slideshow-image" style="background-image: url('{{asset('assets/images/bentto_31.webp')}}')"></div>
        <div class="slideshow-image" style="background-image: url('{{asset('assets/images/bentto_33.webp')}}')"></div>
        <div class="slideshow-image" style="background-image: url('{{asset('assets/images/bentto_19.webp')}}')"></div>
        <div class="slideshow-image" style="background-image: url('{{asset('assets/images/bentto_14.webp')}}')"></div>
     
      
    </div>
</header>
