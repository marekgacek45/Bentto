
<x-layouts.master>
        @section('title', 'Bentto - Urządzenia Gastonomiczne Nowy Targ')
        @section('description',
            'Bentto - Odkryj najlepsze urządzenia gastronomiczne w Nowym Targu. Jako eksperci w branży, oferujemy rozwiązania, które podniosą jakość Twojego biznesu. Sprawdź naszą ofertę już teraz!')


      {{-- HEADER --}}
    @include('pages.home.partials.header')
    
    <main>
        {{-- OFFER --}}
        @include('pages.home.partials.offer')
        {{-- ABOUT --}}
        @include('pages.home.partials.about')
{{-- LOGO SLIDER --}}
<x-section>
        <x-logoSlider />
</x-section>
        {{-- NEWS HEADER --}}
        @include('pages.home.partials.news')
       
        {{-- GALLERY & REALISATIONS --}}
        @include('pages.home.partials.gallery')
        {{-- CONTACT --}}
        @include('pages.home.partials.contact')
    </main>
</x-layouts.master>
