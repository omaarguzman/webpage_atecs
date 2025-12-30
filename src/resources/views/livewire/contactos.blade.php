<div>
    <div name="header">
        <div class="max-w-6xl mx-auto py-5 px-5">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Contactos') }}
            </h2>
        </div>
    </div>

    <div class="max-w-6xl mx-auto py-4 px-5">
        <div class="mx-auto py-4">
            <x-card-contactos />

            <div class=" overflow-hidden my-5">
                <div class="max-w-full border border-gray-200 rounded-none py-5">
                    <div class="relative overflow-x-auto sm:rounded-lg">
                        <table class=" min-w-full rounded-xl">
                            <thead>
                                <tr class="bg-gray-50 text-center">
                                    <th scope="col"
                                        class="p-5 text-sm leading-6 font-semibold text-gray-900 capitalize rounded-t-xl">

                                    </th>
                                    <th scope="col"
                                        class="p-5 text-sm leading-6 font-semibold text-gray-900 capitalize">
                                        Nombre
                                    </th>
                                    <th scope="col"
                                        class="p-5 text-sm leading-6 font-semibold text-gray-900 capitalize">
                                        Puesto
                                    </th>
                                    <th scope="col"
                                        class="p-5 text-sm leading-6 font-semibold text-gray-900 capitalize">
                                        Departamento
                                    </th>
                                    <th scope="col"
                                        class="p-5 text-sm leading-6 font-semibold text-gray-900 capitalize">
                                        E-mail
                                    </th>
                                    <th scope="col"
                                        class="p-5 text-sm leading-6 font-semibold text-gray-900 capitalize">
                                        Telefono | Ext.
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
                                @if (count($contactos) > 0)
                                    @foreach ($contactos as $contacto)
                                        <tr class="bg-white transition-all duration-500 hover:bg-gray-50">
                                            <td
                                                class="p-5 whitespace-nowrap text-sm leading-6 font-medium text-gray-900 ">
                                                <x-icon name="user-circle" class="w-10 h-10 inline -mt-1"
                                                    color="#1a2759" />
                                            </td>
                                            <td
                                                class="p-5 whitespace-nowrap text-sm leading-6 font-medium text-gray-900 ">
                                                {{ $contacto->nombre }}
                                            </td>
                                            <td
                                                class="p-5 whitespace-nowrap text-sm leading-6 font-medium text-gray-900 ">
                                                {{ $contacto->puesto }}
                                            </td>
                                            <td
                                                class="p-5 whitespace-nowrap text-sm leading-6 font-medium text-gray-900 ">
                                                {{ $contacto->departamento }}
                                            </td>
                                            <td
                                                class="p-5 whitespace-nowrap text-sm leading-6 font-medium text-gray-900 ">
                                                {{ $contacto->email }}
                                            </td>
                                            <td
                                                class="p-5 whitespace-nowrap text-sm leading-6 font-medium text-gray-900 ">
                                                {{ $contacto->telefono }} | Ext. #{{ $contacto->extension }}
                                            </td>
                                            <td class="p-5 whitespace-nowrap text-sm leading-6 font-medium text-white">
                                                @if ($contacto->activo == 1)
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
                                                    <button wire:click.prevent="deleteContact({{ $contacto->id }})"
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
                                            No Contacts Found.
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
    <script>
        /* function deleteContact(id) {
                if (confirm("Are you sure to delete this record?"))
                {
                    window.livewire.emit('deleteContactListener', id);
                }
                    
            } */
    </script>
</div>
