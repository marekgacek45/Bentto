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
    <meta property="og:image" content='{{ asset('assets/logo-fb.jpg') }}' />

    @vite(['resources/scss/app.scss', 'resources/js/app.js'])

</head>

<body class="relative">

   <x-preloader/>
    <x-nav.navbar/>
   {{$slot}}
   <x-footer/>


   <x-cookie-bar/>
</body>

</html>