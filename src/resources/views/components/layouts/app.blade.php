<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="h-full">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="author" content="SYSGTO" />
        <meta name="description" content="Corresponde a la Junta Muicipal de Agua Potable y Alcantarillado de San Felipe Guanajuato, la detección, extracción, conducción y potabilización del agua..." />
        <meta name="keywords" content="JMAPA, San Felipe, Gto., Agua potable, Alcantarillado, Guanajuato" />
        <meta name="robots" content="all" />


        <!-- Meta para redes sociales -->
        <meta property="og:image" content="https://sitio.jmapa.mx/wp-content/uploads/2020/04/jmapatorre-2-1189x574.jpg" />
        <meta name="og:description" content="Corresponde a la Junta Muicipal de Agua Potable y Alcantarillado de San Felipe Guanajuato, la detección, extracción, conducción y potabilización del agua..." />
        <meta property="og:title" content="JMAPA - San Felipe" />

        <title>{{ $title ?? 'JMAPA - San Felipe' }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
        <link rel="stylesheet" href="{{ asset('build/assets/app-BI-MGgPe.css') }}">

        <!-- Flux -->
        <!-- <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=inter:400,500,600&display=swap" rel="stylesheet" /> -->

        <!-- Scripts -->
        <!-- <script src="https://cdn.jsdelivr.net/npm/@editorjs/editorjs@latest"></script> -->
        <script src="https://unpkg.com/@phosphor-icons/web@2.1.1"></script>
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        @livewireScripts

    </head>
    <body class="font-sans antialiased h-full">
        <div class="">

            @livewire('menu')

            @yield('content')

            @livewire('footer')

            @livewireScripts
            <!-- <script src="{{ asset('build/assets/app-Xaw6OIO1.js') }}" defer></script> -->
        </div>
    </body>
</html>
