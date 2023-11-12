<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <title>@yield('title', 'Bentto')</title>
    <meta name="description" content='@yield('description')'>

    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('assets/favicon/apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('assets/favicon/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('assets/favicon/favicon-16x16.png') }}">
    <link rel="manifest" href="{{ asset('assets/favicon/site.webmanifest') }}">

    <meta property=”og:url” content=”https://bentto.eu” />
    <meta property="og:type" content="website" />
    <meta property=”og:title” content='@yield('title')' />
    <meta property="og:description" content='@yield('description')' />
    <meta property="og:image" content='{{ asset('assets/logo.png') }}' />

    @vite(['resources/scss/app.scss', 'resources/js/app.js'])

</head>

<body class="flex flex-col justify-between min-h-screen">

   <x-preloader/>
    <x-nav.navbar/>
    <main class="flex flex-col items-center justify-center flex-grow max-w-screen-xl mx-auto px-12 md:px-0 text-center mt-48 mb-12">
        <h2 class="text-2xl md:text-3xl mb-6">Niestety nie ma takiej strony</h2>
        <img src="{{ asset('assets/404.svg') }}" alt="błąd 404" width="150px">
        
        
           <img src="{{asset('images/assets/404.png')}}" alt="" width="150px">
        
       
        <a href="{{ route('home') }}" class="text-sm text-mainColor-400 mt-12 ">Powrót na stronę główną</a>
    </main>
   <x-footer/>

</body>

</html>