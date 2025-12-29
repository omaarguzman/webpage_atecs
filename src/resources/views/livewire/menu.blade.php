<div class="bg-jmapaBlueLight">
    <header class="z-50">
        <nav class="flex items-center justify-between p-4 lg:px-8" aria-label="Global">
            <div class="flex lg:flex-1">
                <a href="#" class="-m-1.5 p-1.5">
                <span class="sr-only">JMAPA</span>
                <img class="h-12 w-auto" src="/img/logo.png" alt="">
                </a>
            </div>
            <div class="flex lg:gap-x-12 align-middle">
                <a href="#" class="text-sm/6 font-semibold text-gray-900 mt-2">
                    <x-icon name="users-four" class="w-5 inline -mt-1" duotone color="#0096ff" /> Plantilla
                </a>
                <a href="#" class="text-sm/6 font-semibold text-gray-900 mt-2">
                    <x-icon name="handshake" class="w-5 inline -mt-1" duotone color="#0096ff" /> Gestión Social
                </a>
                <a href="#" class="text-sm/6 font-semibold text-gray-900 mt-2">
                    <x-icon name="credit-card" class="w-5 inline -mt-1" duotone color="#0096ff" /> Pagos
                </a>
                <a href="#" class="text-sm/6 font-semibold text-gray-900 mt-2">
                    <x-icon name="chats-circle" class="w-5 inline -mt-1" duotone color="#0096ff" /> Contacto
                </a>
                <a href="#" class="text-sm/6 font-semibold text-gray-900 mt-2">
                    <x-icon name="folders" class="w-5 inline -mt-1" duotone color="#0096ff" /> Transparencia
                </a>
                <a href="/login" class="text-sm/6 font-semibold text-white bg-jmapaBlue rounded-lg p-2 px-4 hover:bg-jmapaBlueDark">
                    Inicio de sesión <x-icon name="user-circle" class="w-5 inline -mt-1" color="#fff" />
                </a>
            </div>
        </nav>
    </header>
</div>
<script>
    function toggleMenu() {
        const menu = document.getElementById('menu-dropdown');
        menu.classList.toggle('hidden');
    }
</script>
