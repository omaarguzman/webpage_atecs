<div class="max-w-6xl bg-white border border-gray-200 rounded-none shadow">
    <div class="p-5">
        <h5 class="mb-2 text-2xl font-bold tracking-tight text-jmapaBlueDark">Nuevo Contacto</h5>
        <form wire:submit.prevent="save">

            <!-- Nombre -->
            <div class="px-2">
                <x-input-label for="nombre" class="text-black" :value="__('Nombre')" />
                <x-text-input wire:model="nombre" id="nombre" class="block mt-1 w-full" type="text" name="nombre"
                    autofocus autocomplete="nombre" required />
                <x-input-error :messages="$errors->get('nombre')" class="mt-2" />
            </div>

            <!-- Puesto -->
            <div class="px-2 mt-4">
                <x-input-label for="puesto" class="text-black" :value="__('Puesto')" />
                <x-text-input wire:model="puesto" id="puesto" class="block mt-1 w-full" type="text" name="puesto"
                    autofocus autocomplete="puesto" required />
                <x-input-error :messages="$errors->get('puesto')" class="mt-2" />
            </div>

            <!-- Departamento -->
            <div class="px-2 mt-4">
                <x-input-label for="departamento" class="text-black" :value="__('Departamento')" />
                <x-text-input wire:model="departamento" id="departamento" class="block mt-1 w-full" type="text"
                    name="departamento" autofocus autocomplete="departamento" required />
                <x-input-error :messages="$errors->get('departamento')" class="mt-2" />
            </div>

            <div class="mt-4">
                <div class="flex flex-row items-center">
                    <!-- Telefono -->
                    <div class="w-full basis-3/4 px-2">
                        <div>
                            <x-input-label for="telefono" :value="__('Telefono')" />
                            <x-text-input wire:model="telefono" id="telefono" class="block mt-1 w-full" type="text"
                                name="telefono" autocomplete="telefono" mask="(444) ### ####" required />
                            <x-input-error :messages="$errors->get('telefono')" class="mt-2" />
                        </div>
                    </div>

                    <!-- Extensión -->
                    <div class="w-full basis-1/4 px-2">
                        <div>
                            <x-input-label for="extension" :value="__('Extensión')" />
                            <x-text-input wire:model="extension" id="extension" class="block mt-1 w-full" type="number"
                                name="extension" autocomplete="extension" />
                            <x-input-error :messages="$errors->get('extension')" class="mt-2" />
                        </div>
                    </div>
                </div>
            </div>

            <!-- Email -->
            <div class="px-2 mt-4">
                <x-input-label for="email" class="text-black" :value="__('E-mail')" />
                <x-text-input wire:model="email" id="email" class="block mt-1 w-full" type="text" name="email"
                    autofocus autocomplete="email" required />
                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>

            <div class="mt-4">
                <div class="flex flex-row items-center">
                    <!-- Fecha Alta -->
                    <div class="w-full basis-1/2 px-2">
                        <div>
                            <x-input-label for="fecha_alta" :value="__('Fecha Alta')" />
                            <x-text-input wire:model="fecha_alta" id="fecha_alta" class="block mt-1 w-full"
                                type="date" name="fecha_alta" autocomplete="fecha_alta" required />
                            <x-input-error :messages="$errors->get('fecha_alta')" class="mt-2" />
                        </div>
                    </div>

                    <!-- Fecha Baja -->
                    <div class="w-full basis-1/2 px-2">
                        <div>
                            <x-input-label for="fecha_baja" :value="__('Fecha Baja')" />
                            <x-text-input wire:model="fecha_baja" id="fecha_baja" class="block mt-1 w-full"
                                type="date" name="fecha_baja" autocomplete="fecha_baja" required />
                            <x-input-error :messages="$errors->get('fecha_baja')" class="mt-2" />
                        </div>
                    </div>
                </div>
            </div>

            <!-- Activo -->
            <div class="mt-4 px-2">
                <label for="activo" class="inline-flex items-center">
                    <input wire:model="activo" id="activo" type="checkbox"
                        class="rounded border-gray-800 text-blue-600 shadow-sm focus:ring-blue-500" name="activo"
                        required />
                    <span class="ms-2 text-sm text-gray-600">{{ __('¿Contacto activo?') }}</span>
                </label>

                <x-input-error :messages="$errors->get('activo')" class="mt-2" />
            </div>

            <div class="mt-4 flex justify-end">
                <!-- Boton guardar -->
                <div class="mr-2">
                    <!-- <x-primary-button class="ms-3 bottom-0 right-0" wire:click.prevent="store()">
                        {{ __('Guardar') }}
                    </x-primary-button> -->
                    <button wire:click.prevent="save"
                        class="ms-3 bottom-0 right-0 inline-flex items-center px-2 py-1 bg-jmapaBlueDark border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 focus:bg-gray-700 active:bg-gray-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150">
                        Guardar <x-icon name="check-circle" class="w-5 h-5 inline -mt-1" solid color="#ffffff" />
                    </button>
                </div>
                <!-- Boton limpiar -->
                <div>
                    <x-secondary-button class="" wire:click.prevent="resetFields()">
                        Limpiar <x-icon name="x-circle" class="w-5 h-5 inline -mt-1" solid color="#ffffff" />
                    </x-secondary-button>
                </div>
            </div>

        </form>
    </div>
</div>
