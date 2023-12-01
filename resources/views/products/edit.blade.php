<x-app-layout>
    {{-- Encabezado de la página de edición de producto --}}
    <header class="bg-blue-logo shadow-lg pt-24 pb-8">
        <h1 class="text-6xl text-center font-medium text-white">
            Editar Producto
        </h1>
        <div class="text-center text-xl font-medium text-gray-200">
            <p>
                Modifica los detalles del producto y guarda los cambios.<br>
                Asegúrate de que toda la información sea correcta antes de actualizar.<br>
                ¡Actualiza tu catálogo de productos!
            </p>
        </div>
    </header>

    {{-- Formulario para editar un producto existente --}}
    <div class="container mx-auto p-6 max-w-2xl">
        <h1 class="text-xl font-semibold mb-4">Editar Producto</h1>
        <form action="{{ route('products.update', $product->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT') {{-- Directiva para especificar el método HTTP PUT --}}

            <div class="mb-4">
                <label for="name" class="block text-sm font-medium text-gray-700">Nombre</label>
                <input type="text" name="name" id="name" value="{{ $product->name }}" required
                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm">
            </div>

            <div class="mb-4">
                <label for="description" class="block text-sm font-medium text-gray-700">Descripción</label>
                <textarea name="description" id="description" rows="4" required
                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm">{{ $product->description }}</textarea>
            </div>

            <div class="mb-4">
                <label for="price" class="block text-sm font-medium text-gray-700">Precio</label>
                <input type="number" name="price" id="price" value="{{ $product->price }}" required
                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm">
            </div>

            <div class="mb-4">
                <label for="image" class="block text-sm font-medium text-gray-700">Imagen del Producto</label>
                <input type="file" name="image" id="image" class="mt-1 block w-full">
                {{-- Si hay una imagen existente, muéstrala aquí --}}
                @if ($product->image)
                    <img src="{{ asset($product->image) }}" alt="Imagen del Producto"
                        class="mt-2 w-32 h-32 object-cover">
                @endif
            </div>

            <div class="mb-4">
                <label for="category_id" class="block text-sm font-medium text-gray-700">Categoría</label>
                <select name="category_id" id="category_id" required
                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm">
                    @foreach ($categories as $category)
                        <option value="{{ $category->id }}"
                            {{ $product->category_id == $category->id ? 'selected' : '' }}>{{ $category->name }}
                        </option>
                    @endforeach
                </select>
            </div>

            <div class="flex justify-end">
                <button type="submit" class="px-4 py-2 bg-blue-600 text-white rounded hover:bg-blue-700">Actualizar
                    Producto</button>
            </div>
        </form>
    </div>
</x-app-layout>
