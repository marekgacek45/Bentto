 <x-header class="header-img--2">
     <div class="px-4 mx-auto w-full text-center py-24 lg:py-16 max-w-screen-2xl">
         <h2 class="mb-4  font-extrabold tracking-tight leading-none text-white text-4xl">
             Aktualności</h2>
         <p class="mb-8 text-base font-normal text-gray-300  sm:px-16 lg:px-48">Zachęcamy do regularnego
             odwiedzania naszej sekcji aktualności. To miejsce, w którym pojawiają się najnowsze informacje o
             naszym
             sprzęcie gastronomicznym, ciekawe oferty promocyjne oraz wiele innych interesujących treści. Nie
             przegap
             okazji, aby być na bieżąco z naszymi nowościami i korzystać z atrakcyjnych promocji, które
             przygotowaliśmy specjalnie dla Ciebie.</p>
         <div class="flex flex-col space-y-4 lg:flex-row justify-center items-center lg:space-y-0 lg:space-x-4">

@foreach ($newses as $news)
<x-newsCard
src="{{ asset('storage/' . $news->thumbnail) }}"
alt="{{$news->title}}" title="{{$news->title}}"
excerpt="{!! substr($news->content, 0, 125) !!}..."
btnHref="{{route('singleNews',$news->slug)}}" />
@endforeach





         </div>
         <div class="flex flex-col space-y-4 sm:flex-row sm:justify-center sm:space-y-0 sm:space-x-4 mt-12">
             <x-buttons.primary href="{{route('newses')}}">Sprawdź wszystkie aktualności</x-buttons.primary>
         </div>
     </div>
 </x-header>
