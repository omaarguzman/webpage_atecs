<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <meta name="author" content="SYSGTO" />
    <meta name="description" content="Corresponde a la Junta Muicipal de Agua Potable y Alcantarillado de San Felipe Guanajuato, la detección, extracción, conducción y potabilización del agua..." />
    <meta name="keywords" content="JMAPA, San Felipe, Gto., Agua potable, Alcantarillado, Guanajuato" />
    <meta name="robots" content="all" />

    <!-- Meta para redes sociales -->
    <meta property="og:image" content="https://sitio.jmapa.mx/wp-content/uploads/2020/04/jmapatorre-2-1189x574.jpg" />
    <meta name="og:description" content="Corresponde a la Junta Muicipal de Agua Potable y Alcantarillado de San Felipe Guanajuato, la detección, extracción, conducción y potabilización del agua..." />
    <meta property="og:title" content="JMAPA - San Felipe" />

    <title>{{ config('app.name', 'JMAPA - San Felipe') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <link rel="stylesheet" href="{{ asset('build/assets/app-BI-MGgPe.css') }}">
    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-sans antialiased">
    <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-jmapaBlueLight">
        <div>
            <a href="/" wire:navigate>
                <img class="w-auto h-20 fill-current" src="/banner/iconos/jmapa sustentable.png"
                    alt="JMAPA_SustentableLogo">
            </a>
        </div>

        <div class="w-full sm:max-w-md mt-6 px-6 py-4 bg-white shadow-md overflow-hidden sm:rounded-lg">
            {{ $slot }}
        </div>
    </div>
    <!-- <script src="{{ asset('build/assets/app-Xaw6OIO1.js') }}" defer></script> -->
</body>

</html>
