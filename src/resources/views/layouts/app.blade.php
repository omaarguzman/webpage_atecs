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
    <link rel="stylesheet" type="text/css" href="https://unpkg.com/trix@2.0.8/dist/trix.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/trix/1.3.1/trix.min.css" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script src="https://unpkg.com/@phosphor-icons/web@2.1.1"></script>
    <script type="text/javascript" src="https://unpkg.com/trix@2.0.8/dist/trix.umd.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/trix/1.3.1/trix.min.js"></script>

</head>

<body class="font-sans antialiased h-full">
    <div class="">
        <livewire:layout.navigation />

        <!-- Page Heading -->
        @if (isset($header))
            <header class="bg-white shadow">
                <div class="xl:max-w-2xl mx-auto py-6 px-4">
                    {{ $header }}
                </div>
            </header>
        @endif

        <!-- Page Content -->
        <main>
            {{ $slot }}
        </main>

        <livewire:layout.footer />
    </div>
</body>

</html>
