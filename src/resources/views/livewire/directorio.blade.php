<div class="bg-white mx-auto">
    @section('content')
        <div name="header" class="mx-auto w-full text-center">
            <div class="py-24 sm:py-32 bg-center bg-no-repeat bg-cover"
                style="background-image: url('/banner/slider/BannerSlider.png');">
                <div class="mx-auto px-6 lg:px-8">
                    <h2 class="text-center text-2xl font-semibold text-white">Directorio</h2>
                </div>
            </div>
        </div>

        <div class="py-6 px-12 max-w-6xl mx-auto">
            <div class="mx-auto">
                <div name="header border border-gray-200">
                    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                        {{ __('Directorio del personal') }}
                    </h2>
                </div>

                <div
                    class="grid gap-6 items-center mx-auto max-w-6xl lg:grid-cols-3 md:grid-cols-2 sm:grid-cols-1 bg-white pt-8 pb-8">
                    @if (count($contactos) > 0)
                        @foreach ($contactos as $contacto)
                            @if ($contacto->activo)
                                <div class="gap-1 h-auto">
                                    <div class="flex flex-row py-6 mx-5 h-auto">
                                        <x-icon class="w-10 h-10 ml-1" name="user-circle" solid color="#1a2759" />
                                        <div class="flex-auto text-center">
                                            <p class="text-sm font-semibold text-gray-900">{{ $contacto->nombre }}</p>
                                            <p class="text-sm/6 text-gray-900">{{ $contacto->direccion }}</p>
                                            <p class="text-sm/6 text-gray-900">{{ $contacto->puesto }}</p>
                                            <p class="text-xs text-gray-500">{{ $contacto->email }}</p>
                                            <p class="text-xs/5 text-gray-500">Tel. {{ $contacto->telefono }} - Ext.
                                                {{ $contacto->extension }}</p>
                                        </div>
                                    </div>
                                </div>
                            @endif
                        @endforeach
                    @endif
                </div>
            </div>
        </div>

        <!-- Directorio de áreas -->
        <div class="py-6 px-12 max-w-6xl mx-auto">
            <div class="mx-auto">
                <div name="header border border-gray-200">
                    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                        {{ __('Directorio de las áreas') }}
                    </h2>
                </div>

                <div
                    class="grid gap-6 items-center mx-auto max-w-6xl lg:grid-cols-3 md:grid-cols-2 sm:grid-cols-1 bg-white pt-8 pb-8">
                    <div class="gap-1 h-auto">
                        <div class="flex flex-row py-6 mx-5 h-auto">
                            <x-icon class="w-10 h-10 ml-1" name="briefcase" solid color="#1a2759" />
                            <div class="flex-auto text-center">
                                <p class="text-sm font-semibold text-gray-900">Operación y Mantenimiento</p>
                                <p class="text-xs text-gray-500">prueba@example.com</p>
                                <p class="text-xs text-gray-500">Tel. 428 685 0444 - Ext. 2 ó 107/108</p>
                            </div>
                        </div>
                    </div>
                    <div class="gap-1 h-auto">
                        <div class="flex flex-row py-6 mx-5 h-auto">
                            <x-icon class="w-10 h-10 ml-1" name="briefcase" solid color="#1a2759" />
                            <div class="flex-auto text-center">
                                <p class="text-sm font-semibold text-gray-900">Finanzas</p>
                                <p class="text-xs text-gray-500">prueba@example.com</p>
                                <p class="text-xs text-gray-500">Tel. 428 685 0444 - Ext. 3 ó 106</p>
                            </div>
                        </div>
                    </div>
                    <div class="gap-1 h-auto">
                        <div class="flex flex-row py-6 mx-5 h-auto">
                            <x-icon class="w-10 h-10 ml-1" name="briefcase" solid color="#1a2759" />
                            <div class="flex-auto text-center">
                                <p class="text-sm font-semibold text-gray-900">Área Técnica</p>
                                <p class="text-xs text-gray-500">prueba@example.com</p>
                                <p class="text-xs text-gray-500">Tel. 428 685 0444 - Ext. 4 ó 111</p>
                            </div>
                        </div>
                    </div>
                    <div class="gap-1 h-auto">
                        <div class="flex flex-row py-6 mx-5 h-auto">
                            <x-icon class="w-10 h-10 ml-1" name="briefcase" solid color="#1a2759" />
                            <div class="flex-auto text-center">
                                <p class="text-sm font-semibold text-gray-900">Gestión Social</p>
                                <p class="text-xs text-gray-500">prueba@example.com</p>
                                <p class="text-xs text-gray-500">Tel. 428 685 0444 - Ext. 5 ó 109</p>
                            </div>
                        </div>
                    </div>
                    <div class="gap-1 h-auto">
                        <div class="flex flex-row py-6 mx-5 h-auto">
                            <x-icon class="w-10 h-10 ml-1" name="briefcase" solid color="#1a2759" />
                            <div class="flex-auto text-center">
                                <p class="text-sm font-semibold text-gray-900">Atención a Comités Rurales</p>
                                <p class="text-xs text-gray-500">prueba@example.com</p>
                                <p class="text-xs text-gray-500">Tel. 428 685 0444 - Ext. 6 ó 110</p>
                            </div>
                        </div>
                    </div>
                    <div class="gap-1 h-auto">
                        <div class="flex flex-row py-6 mx-5 h-auto">
                            <x-icon class="w-10 h-10 ml-1" name="briefcase" solid color="#1a2759" />
                            <div class="flex-auto text-center">
                                <p class="text-sm font-semibold text-gray-900">Consejo Directivo</p>
                                <p class="text-xs text-gray-500">prueba@example.com</p>
                                <p class="text-xs text-gray-500">Tel. 428 685 0444 - Ext. 7 ó 112</p>
                            </div>
                        </div>
                    </div>
                    <div class="gap-1 h-auto">
                        <div class="flex flex-row py-6 mx-5 h-auto">
                            <x-icon class="w-10 h-10 ml-1" name="briefcase" solid color="#1a2759" />
                            <div class="flex-auto text-center">
                                <p class="text-sm font-semibold text-gray-900">Área Juridica</p>
                                <p class="text-xs text-gray-500">prueba@example.com</p>
                                <p class="text-xs text-gray-500">Tel. 428 685 0444 - Ext. 8 ó 112</p>
                            </div>
                        </div>
                    </div>
                    <div class="gap-1 h-auto">
                        <div class="flex flex-row py-6 mx-5 h-auto">
                            <x-icon class="w-10 h-10 ml-1" name="briefcase" solid color="#1a2759" />
                            <div class="flex-auto text-center">
                                <p class="text-sm font-semibold text-gray-900">Área Comercial</p>
                                <p class="text-xs text-gray-500">prueba@example.com</p>
                                <p class="text-xs text-gray-500">Tel. 428 685 0444 - Ext. 1 ó 105</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection
</div>
