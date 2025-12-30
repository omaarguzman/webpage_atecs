<div class="max-w-6xl bg-white border border-gray-200 rounded-none shadow">

    <div class="p-5">
        <h5 class="mb-2 text-2xl font-bold tracking-tight text-jmapaBlueDark">Nuevo Post</h5>
        <form wire:submit.prevent="store">

            <!-- Titulo -->
            <div class="px-2">
                <x-input-label for="titulo" class="text-black" :value="__('Titulo')" />
                <x-text-input wire:model="titulo" id="titulo" class="block mt-1 w-full" type="text" name="titulo"
                    required autofocus autocomplete="titulo" />
                <x-input-error :messages="$errors->get('titulo')" class="mt-2" />
            </div>

            <!-- Descripcion -->
            <div class="px-2 mt-4">
                <x-input-label for="descripcion" class="text-black" :value="__('Descripción')" />
                <x-text-input wire:model="descripcion" id="descripcion" class="block mt-1 w-full" type="text"
                    name="descripcion" required autofocus autocomplete="descripcion" />
                <x-input-error :messages="$errors->get('descripcion')" class="mt-2" />
            </div>

            <!-- Contenido -->
            <div class="px-2 mt-4">
                <div>
                    <x-input-label for="contenido" class="text-black" :value="__('Contenido')" />
                    <trix-editor input="contenido" class="block mt-1 w-full trix-content" required autofocus />

                </div>
                <div>
                    <input id="contenido" type="hidden" name="content" wire:model="contenido" />
                    <x-input-error :messages="$errors->get('contenido')" class="mt-2" />
                </div>
            </div>

            <div class="mt-4">
                <div class="flex flex-row items-center">
                    <!-- Fecha Inicio -->
                    <div class="w-full basis-1/2 px-2">
                        <div>
                            <x-input-label for="fecha_inicio" :value="__('Fecha Inicio')" />
                            <x-text-input wire:model="fecha_inicio" id="fecha_inicio" class="block mt-1 w-full"
                                type="date" name="fecha_inicio" required autocomplete="fecha_inicio" />
                            <x-input-error :messages="$errors->get('fecha_inicio')" class="mt-2" />
                        </div>
                    </div>

                    <!-- Fecha Fin -->
                    <div class="w-full basis-1/2 px-2">
                        <div>
                            <x-input-label for="fecha_fin" :value="__('Fecha Fin')" />
                            <x-text-input wire:model="fecha_fin" id="fecha_fin" class="block mt-1 w-full" type="date"
                                name="fecha_fin" required autocomplete="fecha_fin" />
                            <x-input-error :messages="$errors->get('fecha_fin')" class="mt-2" />
                        </div>
                    </div>
                </div>
            </div>

            <!-- Activo -->
            <div class="mt-4 px-2">
                <div class="flex flex-row items-center">
                    <!-- Upload file -->
                    <div class="w-full basis-1/2 px-2">
                        <div x-data="{ isUploading: false, progress: 0 }" x-on:livewire-upload-start="isUploading = true"
                            x-on:livewire-upload-finish="isUploading = false"
                            x-on:livewire-upload-error="isUploading = false"
                            x-on:livewire-upload-progress="progress = $event.detail.progress">
                            <!-- File Input -->
                            <x-input-label for="img" :value="__('Imagen de portada del post')" />
                            <x-text-input wire:model="img" id="img" class="block mt-1 w-full" type="file"
                                name="img" required />
                            <x-input-error :messages="$errors->get('img')" class="mt-2" />

                            <!-- Progress Bar -->
                            <div x-show="isUploading">
                                <progress max="100" x-bind:value="progress"></progress>
                            </div>
                        </div>
                    </div>

                    <!-- Activo -->
                    <div class="w-full basis-1/2 px-2">
                        <div>
                            <label for="activo" class="inline-flex items-center">
                                <input wire:model="activo" id="activo" type="checkbox"
                                    class="rounded border-gray-800 text-blue-600 shadow-sm focus:ring-blue-500"
                                    name="activo">
                                <span class="ms-2 text-sm text-gray-600">{{ __('¿Post activo?') }}</span>
                            </label>

                            <x-input-error :messages="$errors->get('activo')" class="mt-2" />
                        </div>
                    </div>
                </div>
            </div>

            <div class="mt-4 flex justify-end">
                <!-- Boton guardar -->
                <div class="mr-2">
                    <!-- <x-primary-button class="ms-3 bottom-0 right-0" wire:click.prevent="store()">
                        {{ __('Guardar') }}
                    </x-primary-button> -->
                    <button wire:click.prevent="store"
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
