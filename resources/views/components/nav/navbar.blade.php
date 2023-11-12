{{--Zrobić podczas scrolla tak jak na gorskiej--}}
{{--Dodać active--}}
{{--Jak starczy czasu to jakiś fajny hover--}}

<nav class="header fixed top-0 left-0 right-0 w-full  nav">

    

    <x-nav.topBar/>
    <div class="max-w-screen-xl flex justify-between items-center py-3 sm:px-5 mx-auto">

        

        <x-nav.logoTitle />

        <x-nav.hamburger />

        <ul class="navbar  absolute top-full left-0  w-full text-center h-0 lg:relative flex flex-col lg:flex-row  lg:justify-end items-center justify-center  gap-6 ">
           
            
            <x-nav.link href="{{route('home')}}#o-nas" style="--i:1;" class="normal-link">O nas</x-nav.link>
            <x-nav.link href="{{route('offer')}}" style="--i:2;" class="{{ (request()->is('oferta')) ? 'active-link' : 'normal-link' }}">Oferta</x-nav.link>
            <x-nav.link href="{{route('newses')}}" style="--i:3;" class="{{ (request()->is('aktualności')) ? 'active-link' : 'normal-link' }}">Aktualności</x-nav.link>
            <x-nav.link href="{{route('gallery')}}" style="--i:4;" class="{{ (request()->is('galeria')) ? 'active-link' : 'normal-link' }}">Galeria</x-nav.link>
            <x-nav.link href="{{route('realisations')}} " style="--i:5;" class="{{ (request()->is('realizacje')) ? 'active-link' : 'normal-link' }}">Realizacje</x-nav.link>
            <x-nav.link href="{{route('contact')}}" style="--i:6;" class="{{ (request()->is('kontakt')) ? 'active-link' : 'normal-link' }}">Kontakt</x-nav.link>

            
           
        </ul>
    </div>
</nav>
