<div class="bg-white min-h-full">
    <header class="absolute inset-x-0 top-0 z-50">
        <nav class="bg-jmapaBlueLight" x-data="{ open: false }">
            <div class="mx-auto max-w-6xl px-2 sm:px-4 lg:px-4">
                <div class="flex h-16 items-center">

                    <div class="flex flex-1 justify-between">
                        <div class="flex items-start justify-left sm:justify-center mx-auto md:mx-0 ">
                            <a href="/"><img class="h-12 w-auto pl-12 md:pl-0 "
                                    src="/banner/iconos/jmapa sustentable.png" alt="JMAPA-Sustentable-Logo" /></a>
                        </div>

                        <div class="hidden sm:ml-4 md:block inset-y-0 right-0">
                            <div class="flex space-x-2 items-baseline text-gray-900 mt-2">
                                <a href="/transparencia"
                                    class="lg:px-2 py-2 text-xs font-semibold {{ request()->is('transparencia') ? 'text-blue-500 border-b-2 border-blue-500' : '' }}"
                                    wire:navigate>
                                    TRANSPARENCIA
                                </a>
                                <a href="/tramite"
                                    class="lg:px-2 py-2 text-xs font-semibold {{ request()->is('tramite') ? 'text-blue-500 border-b-2 border-blue-500' : '' }}"
                                    wire:navigate>
                                    TRÁMITES
                                </a>
                                <a href="#" class="lg:px-2 py-2 text-xs font-semibold" wire:navigate>
                                    PAGOS
                                </a>
                                <a href="/gestion-social"
                                    class="lg:px-2 py-2 text-xs font-semibold {{ request()->is('gestion-social') ? 'text-blue-500 border-b-2 border-blue-500' : '' }}"
                                    wire:navigate>
                                    GESTIÓN SOCIAL
                                </a>
                                <a href="/contacto"
                                    class="lg:px-2 py-2 text-xs font-semibold {{ request()->is('contacto') ? 'text-blue-500 border-b-2 border-blue-500' : '' }}"
                                    wire:navigate>
                                    CONTACTO
                                </a>

                                <a href="/login"
                                    class="px-2.5 py-1.5 text-sm font-semibold text-white bg-jmapaBlue rounded-lg hover:bg-jmapaBlueDark"
                                    wire:navigate>
                                    <x-icon name="user-circle" class="w-5 inline" /> Iniciar sesión
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- Hamburger -->
                    <div class="-me-2 flex items-center md:hidden">
                        <button @click="open = ! open"
                            class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 transition duration-150 ease-in-out">
                            <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                                <path :class="{ 'hidden': open, 'inline-flex': !open }" class="inline-flex"
                                    stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M4 6h16M4 12h16M4 18h16" />
                                <path :class="{ 'hidden': !open, 'inline-flex': open }" class="hidden"
                                    stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M6 18L18 6M6 6l12 12" />
                            </svg>
                        </button>
                    </div>

                </div>
            </div>

            <!-- Mobile menu, show/hide based on menu state. -->
            <div :class="{ 'block': open, 'hidden': !open }" class="sm:hidden" id="mobile-menu">
                <div class="space-y-1 px-2 pb-3 pt-2 text-gray-900">
                    <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
                    <!-- <a href="#" class="block px-3 py-2 text-xs font-medium font-semibold" wire:navigate>
                        ¿QUIÉNES SOMOS?
                    </a> -->
                    <a href="/transparencia" class="block px-3 py-2 text-xs font-medium font-semibold" wire:navigate>
                        TRANSPARENCIA
                    </a>
                    <a href="/tramite" class="block px-3 py-2 text-xs font-medium font-semibold" wire:navigate>
                        TRÁMITES
                    </a>
                    <a href="#" class="block px-3 py-2 text-xs font-medium font-semibold" wire:navigate>
                        PAGOS
                    </a>
                    <a href="/gestion-social" class="block px-3 py-2 text-xs font-medium font-semibold" wire:navigate>
                        GESTIÓN SOCIAL
                    </a>

                    <a href="/contacto" class="block px-3 py-2 text-xs font-medium font-semibold" wire:navigate>
                        CONTACTO
                    </a>

                    <a href="/login"
                        class="block font-semibold text-white text-center bg-jmapaBlue rounded-lg p-2 px-2 hover:bg-jmapaBlueDark"
                        wire:navigate>
                        <x-icon name="user-circle" class="w-5 inline" /> Iniciar sesión
                    </a>

                </div>
            </div>
        </nav>

    </header>
</div>
