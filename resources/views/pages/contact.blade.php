<x-layouts.master>
    @section('title', 'Kontakt | Bentto - Urządzenia Gastonomiczne Nowy Targ')
    @section('description',
        'Skontaktuj się z nami | Bentto - Urządzenia Gastronomiczne Nowy Targ. Zaufaj profesjonalistom od sprzętu gastronomicznego. Gotowi do pomocy, odpowiedzi na pytania i znalezienia najlepszych rozwiązań dla Twojego biznesu.')

    <x-header class="header-img--2 pt-52 pb-12">
        <div class="px-4 mx-auto w-full text-center  max-w-screen-2xl">
            <h2 class="mb-4  font-extrabold tracking-tight leading-none text-white text-5xl ">
                Kontakt</h2>
        </div>
    </x-header>

    <main class="px-4 lg:px-0">
<section class="lg:my-12">
       

        <div class="grid sm:grid-cols-3 max-w-screen-lg mx-auto mt-6 lg:mt-12">
            <div class="border-b-4 sm:border-b-0 sm:border-r-4 border-red-600 flex flex-col items-center justify-evenly py-6 lg:py-16 gap-4">
                <img src="{{ asset('assets/icons/phone--red.png') }}" alt="" width="45px">
                <h4 class="text-lg uppercase font-semibold">telefon</h4>
                <a href="tel:602270903">602-270-903</a>
            </div>
            <div class="flex flex-col items-center justify-evenly py-6 lg:py-14 gap-4">
                <img src="{{ asset('assets/icons/home--red.png') }}" alt="" width="45px">
                <h4 class="text-lg uppercase font-semibold">adres</h4>
                <a href="https://maps.app.goo.gl/mdGSQZudksZmWha16" target="_blank" class="text-center">Szaflarska 61 <br>Nowy Targ</a>
            </div>
            <div class="border-t-4 sm:border-t-0 sm:border-l-4 border-red-600 flex flex-col items-center justify-evenly py-6 lg:py-16 gap-4">
                <img src="{{ asset('assets/icons/envelope--red.png') }}" alt="" width="45px">
                <h4 class="text-lg uppercase font-semibold">email</h4>
                <a href="mailto:bentto@op.pl">bentto@op.pl</a>
            </div>
        </div>
</section>

<section class="max-w-screen-sm mx-auto my-8 lg:my-16">
<h3 class="mb-4  text-center uppercase">
   Masz do nas jakieś pytania?</h3>
<h3 class="mb-8 lg:mb-4 font-semibold tracking-tight leading-none  text-lg text-center uppercase ">
   Napisz do nas za pomocą formularza!</h3>

   <x-contactForm/>
   @if (isset($formSubmitted))
   <div class=" flex flex-col text-center mt-6">

       <span class="text-xl font-bold mb-2">Dziękujemy za wiadomość!</span>
       <span class="text-xl font-bold">Odpowiemy najszybciej jak to możliwe!</span>
   </div>
@endif
</section>

<section>
    <h3 class="mb-4 font-normal tracking-tight leading-none text-primaryColor-400 text-2xl text-center my-12 uppercase">
        Odwiedź nasze social media</h3>
        <div class="flex items-center justify-center gap-6 my-12">
            <a href=""><img src="{{asset('assets/icons/facebook--red.png')}}" alt="" width="42px" class="hover:scale-110 transition-all"></a>
            <a href=""><img src="{{asset('assets/icons/instagram--red.png')}}" alt="" width="42px" class="hover:scale-110 transition-all"></a>
        </div>
</section>



    </main>
<div class="flex justify-center items-center">

    <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-4 gap-6 max-w-screen-2xl mx-auto px-12">
        <a data-name='contact' data-fancybox='contact' href="{{asset('assets/images/bentto_04.webp')}}" class="animation-trigger md:opacity-0"><img src="{{asset('assets/images/bentto_04.webp')}}" alt="sklep Bentto z zewnątrz" class="h-[300px] object-cover" loading="lazy"></a>
        <a data-name='contact' data-fancybox='contact' href="{{asset('assets/images/bentto_06.webp')}}" class="animation-trigger md:opacity-0"><img src="{{asset('assets/images/bentto_06.webp')}}" alt="sklep Bentto z zewnątrz" class="h-[300px] object-cover" loading="lazy"></a>
       <a data-name='contact' data-fancybox='contact' href="{{asset('assets/images/bentto_07.webp')}}" class="animation-trigger md:opacity-0"><img src="{{asset('assets/images/bentto_07.webp')}}" alt="sklep Bentto z zewnątrz" class="h-[300px] object-fill" loading="lazy"></a>
        <a data-name='contact' data-fancybox='contact' href="{{asset('assets/images/bentto_09.webp')}}" class="animation-trigger md:opacity-0"><img src="{{asset('assets/images/bentto_09.webp')}}" alt="sklep Bentto z zewnątrz" class="h-[300px] object-fill" loading="lazy"></a> 
    </div>
</div>


    <section class="mt-12 ">
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2592.504183804341!2d20.028751076789558!3d49.474982457117434!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4715e51364bbaf2d%3A0xf26e8c025b4b5307!2sBentto%20Urz%C4%85dzenia%20gastronomiczne!5e0!3m2!1spl!2spl!4v1697571682435!5m2!1spl!2spl"
            class="w-full mx-auto" height="350" style="border:0;" allowfullscreen="" loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"></iframe>
    </section>



</x-layouts.master>
