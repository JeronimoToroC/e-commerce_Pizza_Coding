<x-app-layout>
    {{-- header  --}}
    {{-- TODO Hacer componente para headers --}}
    <header class="bg-blue-logo shadow-lg pt-24 pb-8">
        <h1 class="text-6xl text-center font-medium text-white">
            Menú de Pizzas
        </h1>

        <div class="text-center text-xl font-medium text-gray-200">
            <p>
                Explora nuestra variedad de pizzas artesanales.<br>
                Elige tus favoritas y haz tu pedido en línea.<br>
                ¡Saborea la excelencia!
            </p>
        </div>
    </header>
    <section class="container mx-auto p-4 ml-10">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
            @foreach ($products as $product)
                <div class="max-w-sm bg-blue-logo rounded-lg shadow-md">
                    <a href="{{ route('products.show', $product->slug) }}">
                        <img class="rounded-t-lg" src="{{ asset($product->image) }}" alt="{{ $product->name }}" />
                    </a>
                    <div class="p-5">
                        <a href="{{ route('products.show', $product->slug) }}">
                            <h5 class="text-white text-xl font-medium mb-2">{{ $product->name }}</h5>
                        </a>
                        <p class="text-gray-700 dark:text-gray-400 text-base mb-4">
                            {{ $product->description }}
                        </p>
                        <span class="text-red-logo text-xl font-bold">{{ number_format($product->price, 2) }}</span>
                    </div>
                </div>
            @endforeach
        </div>
    </section>

</x-app-layout>
