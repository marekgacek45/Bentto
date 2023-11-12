<x-layouts.master>

    @section('title', 'Galeria | Bentto - Urządzenia Gastonomiczne Nowy Targ')
    @section('description',
        'Odkryj naszą galerię | Bentto - Urządzenia Gastronomiczne Nowy Targ. Zaufaj profesjonalistom od sprzętu gastronomicznego. Gotowi do prezentacji, odpowiedzi na pytania i znalezienia najlepszych rozwiązań dla Twojego biznesu.')

    <x-header class="header-img--2 pt-52 pb-12">
        <div class="px-4 mx-auto w-full text-center  max-w-screen-2xl">
            <h2 class="mb-4  font-extrabold tracking-tight leading-none text-white text-5xl ">
                Galeria</h2>
        </div>
    </x-header>

<main class="px-4 lg:px-0 max-w-screen-xl mx-auto py-16">
    
        <<div class="grid-wrapper">
                @php
                    $imageFiles = File::files(public_path('/assets/images'));
                    shuffle($imageFiles); // Przetasuj listę zdjęć
                    $availableClasses = ['tall', 'wide', 'big', ""];
                @endphp
            
                @foreach ($imageFiles as $image)
                    @php
                        $randomClass = $availableClasses[array_rand($availableClasses)];
                    @endphp
            
                    <a href="{{ asset('/assets/images/' . $image->getFilename()) }}" data-fancybox="gallery" class="{{ $randomClass }}">
                        <img src="{{ asset('/assets/images/' . $image->getFilename()) }}" alt="Zdjęcie przedstawiające sklep Bentto" loading="lazy">
                    </a>
                @endforeach
            </div>

</main>

</x-layouts.master>