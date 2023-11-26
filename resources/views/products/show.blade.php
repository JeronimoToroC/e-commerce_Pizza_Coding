{{-- resources/views/products/show.blade.php --}}

<x-app-layout> {{-- Asume que tienes un layout llamado app --}}
    {{-- header  --}}
    <header class="bg-blue-logo shadow-lg pt-24 pb-8">
        <h1 class="text-6xl text-center font-medium text-white">
            {{ $product->name }}
        </h1>

        <div class="text-center text-xl font-medium text-gray-200">
            <p>
                Disfruta de la auténtica {{ $product->name }},<br>
                preparada con {{ strtolower($product->description) }}.<br>
                ¡Haz tu pedido y deléitate!
            </p>
        </div>
    </header>

    <div class="container mx-auto px-4 py-8">
        <div class="max-w-2xl mx-auto">
            <div class="bg-blue-logo shadow overflow-hidden rounded-lg">
                <img src="{{ asset($product->image) }}" alt="{{ $product->name }}"
                    class="w-full h-80 object-cover object-center rounded-t-lg">

                <div class="p-4 md:p-6">
                    <h2 class="text-2xl font-bold text-white">{{ $product->name }}</h2>
                    <p class="mt-2 text-gray-600 dark:text-gray-400">{{ $product->description }}</p>
                    <div class="mt-4 mb-2 flex justify-between items-center">
                        <span class="text-xl font-bold text-red-logo">$ {{ number_format($product->price, 2) }}</span>
                        <!-- Aquí podrías añadir botones de acción como añadir al carrito, etc. -->
                        <a href="#"
                            class="text-white bg-blue-600 hover:bg-blue-700 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">Añadir
                            al Carrito</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
