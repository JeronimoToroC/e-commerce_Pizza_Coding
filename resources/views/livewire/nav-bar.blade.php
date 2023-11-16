<div>
    <div class="p-10 w-full">
        <div class="grid grid-cols-12 bg-yellow-300 w-full text-white rounded-full">
            <!-- Botón Pizza -->
            <div class="flex pl-6 py-2">
                <a href="{{ route('dashboard') }}">
                    <x-application-mark class="block h-9 w-auto" />
                </a>
            </div>
            <button class="text-blue-900 text-lg bg-transparent hover:text-blue-900 px-3 py-1 rounded col-start-4">
                Pizzas Tradicionales
            </button>

            <!-- Botón Comiige -->
            <button class="text-blue-900 text-lg bg-transparent hover:text-blue-900 px-3 py-1 rounded">
                Pizzas Especiales
            </button>

            <!-- Botón Drenotzine -->
            <button class="text-blue-900 text-xl bg-transparent hover:text-blue-900 px-3 py-1 rounded">
                Adicionales
            </button>

            <!-- Botón Dezíepe -->
            <button class="text-blue-900 text-xl bg-transparent hover:text-blue-900  px-3 py-1 rounded">
                Dezíepe
            </button>

            <!-- Contenedor para el elemento de control con íconos -->
            <div class="ml-auto flex items-center">
                <!-- Botón API -->
                <button class="bg-red-600 hover:bg-red-700 text-white px-3 py-1 rounded-l">
                    API
                </button>
                <!-- Botón Power -->
                <button class="bg-red-600 hover:bg-red-700 text-white px-3 py-1 rounded-r">
                    <!-- Icono de poder, puedes usar un svg o una clase de un icon pack como FontAwesome -->
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M12 3v18m5-5a7 7 0 0 0-10 0" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

</div>
