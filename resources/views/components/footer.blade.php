<footer class="bg-gray-300   w-full">
    {{-- CONTAINER --}}
    <div class="w-full max-w-screen-xl mx-auto p-6">
        <div class="flex flex-col lg:flex-row gap-6  lg:gap-0 justify-between items-center">
            {{-- LOGO HEADING --}}
            
            <x-nav.logoTitle />
              <div class="flex justify-center items-center text-white gap-4">
                    <a href="" class="hover:scale-110 transition-transform"><img
                            src="{{ asset('assets/icons/facebook.png') }}" alt=""></a>
                    <a href="" class="hover:scale-110 transition-transform"><img
                            src="{{ asset('assets/icons/instagram.png') }}" alt=""></a>
                </div>

          
            
        </div>
        <hr class="my-6 border-black mx-auto w-1/2 h-px" />
        
            <div class="grid xs:grid-cols-3 max-w-[450px] mx-auto mt-6">
                <div class=" flex flex-col items-center justify-center py-2 gap-2">
                    <img src="{{ asset('assets/icons/phone--red.png') }}" alt="" width="30px">
                    <h4 class="text-base uppercase font-semibold">telefon</h4>
                    <a href="tel:602270903">602-270-903</a>
                </div>
                <div class="flex flex-col items-center justify-center py-2  gap-2">
                    <img src="{{ asset('assets/icons/home--red.png') }}" alt="" width="30px">
                    <h4 class="text-base uppercase font-semibold">adres</h4>
                    <a href="https://maps.app.goo.gl/mdGSQZudksZmWha16" target="_blank" class="text-center">Szaflarska 61 <br>Nowy Targ</a>
                </div>
                <div class=" flex flex-col items-center justify-center py-2  gap-2">
                    <img src="{{ asset('assets/icons/envelope--red.png') }}" alt="" width="30px">
                    <h4 class="text-base uppercase font-semibold">email</h4>
                    <a href="mailto:bentto@op.pl">bentto@op.pl</a>
                </div>
            </div>
        
        <hr class="my-6 border-black mx-auto w-1/2 h-px" />
        {{-- AUTHOR --}}
        <div class="flex flex-col  justify-center items-center gap-1 mt-4 font-sans-serif">
            <span class="block text-sm text-black sm:text-center">© <span id="currentYearSpan"></span> <a
                    href="https://bentto.eu/" class="hover:underline">Bentto</a></span>
            <span class="flex justify-center items-center gap-1 text-sm text-black sm:text-center">stworzone przez <a
                    href="https://gorskastrona.pl" target="_blank" class="flex justify-center items-center hover:underline">Górska
                    Strona <img src="{{ asset('assets/avatar_logo.png') }}"
                        alt="logo Górskiej Strony - wykonawcy projektu" width="28px" class="ml-2 "></a></span>
        </div>

    </div>
</footer>
