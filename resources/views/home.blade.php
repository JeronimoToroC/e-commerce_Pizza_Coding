<x-app-layout>
    {{-- header  --}}
    <div class="bg-yellow-50 min-h-screen">
        <header class="pt-24 pb-8 bg-blue-logo shadow-lg">
            <h1 class="text-6xl font font-medium text-white text-center">
                Pizza Coding
            </h1>

            <section class="text-xl font-medium text-gray-200 text-center">
                <p>
                    ¡Bienvenido a Pizza Coding!
                </p>
                <p>
                    Aquí podrás ordenar tus pizzas favoritas.
                </p>
                <p>
                    ¡Disfruta!
                </p>
        </header>
        <section class="m-6 p-4 pb-14 bg-yellow-200 rounded-xl shadow-md">
            <h1 class="mb-4 text-5xl font-bold text-blue-800">
                Categorías
            </h1>
            <div class="flex justify-between items-center px-8">
                @livewire('components.card-categories', ['title' => 'Pizzas Tradicionales', 'description' => 'Las pizzas tradicionales son las que todos conocemos, las que tienen los ingredientes más comunes y que son las más populares.'])
                @livewire('components.card-categories', ['title' => 'Pizzas Especiales', 'description' => 'Las pizzas especiales son las que tienen ingredientes más exóticos y que no son tan populares.'])
                @livewire('components.card-categories', ['title' => 'Adicionales', 'description' => 'Los adicionales son los ingredientes que puedes agregar a tu pizza.'])
            </div>
        </section>
    </div>

</x-app-layout>
