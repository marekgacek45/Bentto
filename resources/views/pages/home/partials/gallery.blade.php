<x-section>
    <div class="max-w-screen-xl flex flex-col lg:flex-row mx-auto gap-12 px-6">

       

<x-thirdSection.textBox class="lg:w-1/4 lg:mt-20" title="Nasza Realizacje"  btnHref="{{route('realisations')}}">Zachęcamy do przejrzenia naszej galerii, gdzie znajdziecie inspirujące realizacje kuchni sklepu z nowoczesnym sprzętem gastronomicznym. Odkryjcie, jak możemy spełnić Wasze potrzeby!</x-thirdSection.textBox>


        <div class="lg:w-1/2">

            <div class="grid-wrapper">
                <a href="{{route('realisations')}}" class="wide animation-trigger md:opacity-0"><img
                        src="{{asset('assets/realisations/mck/realizacja-mck_08.webp')}}"
                        alt="zdjęcie przedstawiające zawartość galerii"></a>
                <a href="{{route('gallery')}}" class="tall animation-trigger md:opacity-0"><img
                        src="{{asset('assets/images/bentto_39.webp')}}"
                        alt="zdjęcie przedstawiające zawartość galerii"></a>
                <a href="{{route('realisations')}}" class="tall animation-trigger md:opacity-0"><img
                        src="assets/realisations/zakatekSmaku/realizacja-zakatekSmaku_13.webp"
                        alt="zdjęcie przedstawiające zawartość galerii"></a>
                <a href="{{route('gallery')}}" class="wide  animation-trigger md:opacity-0"><img
                        src="{{asset('assets/images/bentto_30.webp')}}"
                        alt="zdjęcie przedstawiające zawartość galerii" ></a>





            </div>

        </div>
     
        <x-thirdSection.textBox class="lg:w-1/4 lg:mt-52" title="Nasza Galeria"  btnHref="{{route('gallery')}}">Zapraszamy do naszej galerii zdjęć wewnętrznych sklepu z wyposażeniem gastronomicznym. Odkryj szeroki wybór sprzętu, który pomoże Ci stworzyć profesjonalną kuchnię marzeń.</x-thirdSection.textBox>
      

    </div>
</x-section>
