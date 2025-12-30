<div>
    <div name="header">
        <div class="max-w-6xl mx-auto py-5 px-5">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Posts') }}
            </h2>
        </div>
    </div>

    <div class="max-w-6xl mx-auto py-4 px-5">
        <div class="mx-auto py-4">
            <x-card-posts />

            <div class=" overflow-hidden my-5">
                <div class="max-w-full border border-gray-200 rounded-none py-5">
                    <div class="relative overflow-x-auto sm:rounded-lg">
                        <table class=" min-w-full rounded-xl">
                            <thead>
                                <tr class="bg-gray-50 text-center">
                                    <th scope="col"
                                        class="p-5 text-sm leading-6 font-semibold text-gray-900 capitalize rounded-t-xl">
                                        Imagen
                                    </th>
                                    <th scope="col"
                                        class="p-5 text-sm leading-6 font-semibold text-gray-900 capitalize">
                                        Título
                                    </th>
                                    <th scope="col"
                                        class="p-5 text-sm leading-6 font-semibold text-gray-900 capitalize">
                                        Descripción
                                    </th>
                                    <th scope="col"
                                        class="p-5 text-sm leading-6 font-semibold text-gray-900 capitalize">
                                        Fecha inicio
                                    </th>
                                    <th scope="col"
                                        class="p-5 text-sm leading-6 font-semibold text-gray-900 capitalize">
                                        Fecha Fin
                                    </th>
                                    <th scope="col"
                                        class="p-5 text-sm leading-6 font-semibold text-gray-900 capitalize">
                                        Estatus
                                    </th>
                                    <th scope="col"
                                        class="p-5 text-sm leading-6 font-semibold text-gray-900 capitalize rounded-t-xl">
                                        Actions
                                    </th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-gray-300 ">
                                @if (count($posts) > 0)
                                    @foreach ($posts as $post)
                                        <tr class="bg-white transition-all duration-500 hover:bg-gray-50">
                                            <td
                                                class="p-5 whitespace-nowrap text-sm leading-6 font-medium text-gray-900 ">
                                                <img src="{{ $post->img }}" class="w-20 rounded mx-auto"
                                                    alt="{{ $post->titulo }}" />
                                            </td>
                                            <td
                                                class="p-5 whitespace-nowrap text-sm leading-6 font-medium text-gray-900 ">
                                                {{ $post->titulo }}
                                            </td>
                                            <td
                                                class="p-5 whitespace-nowrap text-sm leading-6 font-medium text-gray-900 ">
                                                {{ $post->descripcion }}
                                            </td>
                                            <td
                                                class="p-5 whitespace-nowrap text-sm leading-6 font-medium text-gray-900 ">
                                                {{ $post->fecha_inicio }}
                                            </td>
                                            <td
                                                class="p-5 whitespace-nowrap text-sm leading-6 font-medium text-gray-900 ">
                                                {{ $post->fecha_fin }}
                                            </td>
                                            <td class="p-5 whitespace-nowrap text-sm leading-6 font-medium text-white">
                                                @if ($post->activo == 1)
                                                    <span class="bg-jmapaGreen p-2 rounded-full">Activo</span>
                                                @else
                                                    <span class="bg-jmapaRed p-2 rounded-full">Inactivo</span>
                                                @endif
                                            </td>
                                            <td class=" p-5 ">
                                                <div class="flex items-center gap-1">
                                                    <button
                                                        class="p-2 rounded-full group transition-all duration-500 flex item-center bg-jmapaBlueDark">
                                                        <x-icon name="pencil" class="w-5 h-5 inline -mt-1"
                                                            color="#ffffff" />
                                                    </button>
                                                    <button wire:click.prevent="deletePost({{ $post->id }})"
                                                        class="p-2 rounded-full group transition-all duration-500 flex item-center bg-jmapaRed">
                                                        <x-icon name="trash" class="w-5 h-5 inline -mt-1"
                                                            color="#ffffff" />
                                                    </button>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                @else
                                    <tr>
                                        <td colspan="7" class="text-center">
                                            No Posts Found.
                                        </td>
                                    </tr>
                                @endif
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
