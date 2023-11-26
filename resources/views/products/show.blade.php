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
                        <button
                            @click="window.dispatchEvent(new CustomEvent('cart:add', { detail: { id: {{ $product->id }}, name: '{{ $product->name }}' } }))"
                            class="flex justify-start px-2 bg-blue-600 hover:bg-blue-700 focus:ring-4 py-2.5 focus:to-blue-400 rounded-lg items-center text-white font-medium text-sm ">
                            Añadir al Carrito
                            <svg xmlns="http://www.w3.org/2000/svg" height="1rem" width="1rem" viewBox="0 0 576 512">
                                <style>
                                    svg {
                                        fill: #011e2d
                                    }
                                </style>
                                <path
                                    d="M0 24C0 10.7 10.7 0 24 0H69.5c22 0 41.5 12.8 50.6 32h411c26.3 0 45.5 25 38.6 50.4l-41 152.3c-8.5 31.4-37 53.3-69.5 53.3H170.7l5.4 28.5c2.2 11.3 12.1 19.5 23.6 19.5H488c13.3 0 24 10.7 24 24s-10.7 24-24 24H199.7c-34.6 0-64.3-24.6-70.7-58.5L77.4 54.5c-.7-3.8-4-6.5-7.9-6.5H24C10.7 48 0 37.3 0 24zM128 464a48 48 0 1 1 96 0 48 48 0 1 1 -96 0zm336-48a48 48 0 1 1 0 96 48 48 0 1 1 0-96z" />
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
