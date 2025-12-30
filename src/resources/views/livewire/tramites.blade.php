<div class="bg-white py-16 mx-auto">
    @section('content')
        <div name="header" class="mx-auto w-full text-center">
            <div class="py-24 sm:py-32 bg-center bg-no-repeat bg-cover"
                style="background-image: url('/banner/slider/BannerSlider.png');">
                <div class="mx-auto px-6 lg:px-8">
                    <h2 class="text-center text-2xl font-semibold text-white">Trámites</h2>
                </div>
            </div>
        </div>

        <div class="py-6 px-12 max-w-6xl mx-auto">
            <div class="mx-auto">
                <div class="overflow-hidden my-5">
                    <div class="rounded-none py-5">
                        <div class="relative overflow-x-auto sm:rounded-lg">
                            <table class="min-w-full rounded-xl table-auto">
                                <thead class="text-center">
                                    <tr class="text-center">
                                        <th scope="col"
                                            class="p-5 text-md font-bold leading-6 font-semibold text-gray-900 capitalize rounded-t-xl">
                                            Concepto
                                        </th>
                                        <th scope="col"
                                            class="p-5 text-md font-bold leading-6 font-semibold text-gray-900 capitalize">
                                            Unidad
                                        </th>
                                        <th scope="col"
                                            class="p-5 text-md font-bold leading-6 font-semibold text-gray-900 capitalize">
                                            Importe con IVA
                                        </th>
                                        <th>

                                        </th>
                                    </tr>
                                </thead>
                                <tbody class="divide-y divide-gray-300 ">
                                    <tr class="bg-white transition-all duration-500 hover:bg-gray-50">
                                        <td class="p-5 whitespace-nowrap leading-6 font-medium text-gray-900 text-justify">
                                            <p class="font-bold text-md">Duplicado de Recibo Notificado</p>
                                            <p class="text-sm">Realizar pago correspondiente en ventanilla de cobro del
                                                servicio.</p>
                                        </td>
                                        <td class="p-5 whitespace-nowrap text-sm leading-6 font-medium text-gray-900 ">
                                            Recibo
                                        </td>
                                        <td class="p-5 whitespace-nowrap text-sm leading-6 font-medium text-gray-900 ">
                                            $ 8.83
                                        </td>
                                        <td class=" p-5 ">
                                            <div class="flex items-center gap-1">
                                                <button
                                                    class="rounded-full group transition-all duration-500 flex item-center bg-jmapaYellow text-white p-3 px-5 hover:bg-jmapaBlueDark">
                                                    Detalles <x-icon class="w-5 h-5 ml-1" name="eye" color="#FFFFFF" />
                                                </button>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr class="bg-white transition-all duration-500 hover:bg-gray-50">
                                        <td class="p-5 whitespace-nowrap leading-6 font-medium text-gray-900 text-justify">
                                            <p class="font-bold text-md">Constancias de NO Adeudo</p>
                                            <p class="text-sm">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed
                                                do...</p>
                                        </td>
                                        <td class="p-5 whitespace-nowrap text-sm leading-6 font-medium text-gray-900 ">
                                            Constancia
                                        </td>
                                        <td class="p-5 whitespace-nowrap text-sm leading-6 font-medium text-gray-900 ">
                                            $ 100.73
                                        </td>
                                        <td class=" p-5 ">
                                            <div class="flex items-center gap-1">
                                                <button
                                                    class="rounded-full group transition-all duration-500 flex item-center bg-jmapaYellow text-white p-3 px-5 hover:bg-jmapaBlueDark">
                                                    Detalles <x-icon class="w-5 h-5 ml-1" name="eye" color="#FFFFFF" />
                                                </button>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr class="bg-white transition-all duration-500 hover:bg-gray-50">
                                        <td class="p-5 whitespace-nowrap leading-6 font-medium text-gray-900 text-justify">
                                            <p class="font-bold text-md">Cambios de titular.</p>
                                            <p class="text-sm">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed
                                                do...</p>
                                        </td>
                                        <td class="p-5 whitespace-nowrap text-sm leading-6 font-medium text-gray-900 ">
                                            Toma
                                        </td>
                                        <td class="p-5 whitespace-nowrap text-sm leading-6 font-medium text-gray-900 ">
                                            $ 100.73
                                        </td>
                                        <td class=" p-5 ">
                                            <div class="flex items-center gap-1">
                                                <button
                                                    class="rounded-full group transition-all duration-500 flex item-center bg-jmapaYellow text-white p-3 px-5 hover:bg-jmapaBlueDark">
                                                    Detalles <x-icon class="w-5 h-5 ml-1" name="eye" color="#FFFFFF" />
                                                </button>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr class="bg-white transition-all duration-500 hover:bg-gray-50">
                                        <td class="p-5 whitespace-nowrap leading-6 font-medium text-gray-900 text-justify">
                                            <p class="font-bold text-md">Suspención voluntaria</p>
                                            <p class="text-sm">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed
                                                do...</p>
                                        </td>
                                        <td class="p-5 whitespace-nowrap text-sm leading-6 font-medium text-gray-900 ">
                                            Cuota
                                        </td>
                                        <td class="p-5 whitespace-nowrap text-sm leading-6 font-medium text-gray-900 ">
                                            $ 468.95
                                        </td>
                                        <td class="p-5">
                                            <div class="flex items-center gap-1">
                                                <button
                                                    class="rounded-full group transition-all duration-500 flex item-center bg-jmapaYellow text-white p-3 px-5 hover:bg-jmapaBlueDark">
                                                    Detalles <x-icon class="w-5 h-5 ml-1" name="eye" color="#FFFFFF" />
                                                </button>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection
</div>
