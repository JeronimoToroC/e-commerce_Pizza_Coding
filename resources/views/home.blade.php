<x-app-layout>
    <div class="bg-yellow-50 min-h-screen">
        {{-- header  --}}
        <header class="bg-blue-logo shadow-lg pt-24 pb-8">
            <h1 class="text-6xl text-center font-medium text-white">
                Pizza Coding
            </h1>
            <div class="text-center text-xl font-medium text-gray-200">
                <div class="text-center text-xl font-medium text-gray-200">
                    <p>
                        ¡Bienvenido a Pizza Coding!<br>
                        Aquí podrás ordenar tus pizzas favoritas.<br>
                        ¡Bienvenido a Pizza Coding!<br>
                        Aquí podrás ordenar tus pizzas favoritas.<br>
                        ¡Disfruta!
                    </p>
                </div>
            </div>
        </header>
        <section class="m-6 p-4 pb-14 bg-yellow-200 rounded-xl shadow-md">
            <h1 class="mb-4 text-5xl font-bold text-blue-800">
                Categorías
            </h1>
            @livewire('components.card-categories')
        </section>
        <section class="m-6 p-4 pb-14 bg-yellow-200 rounded-xl shadow-md">
            <h1 class="mb-4 text-5xl font-bold text-blue-800">
                <a href="{{ route('menu') }}" class="hover:text-blue-900">
                    Menú
                </a>
            </h1>
            @livewire('components.carousel-products')
        </section>
    </div>

</x-app-layout>
