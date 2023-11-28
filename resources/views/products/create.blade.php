<x-app-layout>
    {{-- Encabezado de la página de creación de producto --}}
    <header class="bg-blue-logo shadow-lg pt-24 pb-8">
        <h1 class="text-6xl text-center font-medium text-white">
            Crear Nuevo Producto
        </h1>
        <div class="text-center text-xl font-medium text-gray-200">
            <p>
                Ingresa los detalles del nuevo producto a continuación.<br>
                Asegúrate de que toda la información sea correcta antes de enviarla.<br>
                ¡Tu pizza podría ser la próxima favorita!
            </p>
        </div>
    </header>

    {{-- Formulario para crear un nuevo producto --}}
    <div class="container mx-auto p-6 max-w-2xl">
        <h1 class="text-xl font-semibold mb-4">Crear Nuevo Producto</h1>
        <form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data">
            @csrf {{-- Token CSRF para proteger tu formulario --}}

            <div class="mb-4">
                <label for="name" class="block text-sm font-medium text-gray-700">Nombre</label>
                <input type="text" name="name" id="name" required
                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm">
            </div>

            <div class="mb-4">
                <label for="description" class="block text-sm font-medium text-gray-700">Descripción</label>
                <textarea name="description" id="description" rows="4" required
                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm"></textarea>
            </div>

            <div class="mb-4">
                <label for="price" class="block text-sm font-medium text-gray-700">Precio</label>
                <input type="number" name="price" id="price" required
                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm">
            </div>

            <div class="mb-4">
                <label for="image" class="block text-sm font-medium text-gray-700">Imagen del Producto</label>
                <input type="file" name="image" id="image" class="mt-1 block w-full">
            </div>

            <div class="mb-4">
                <label for="category_id" class="block text-sm font-medium text-gray-700">Categoría</label>
                <select name="category_id" id="category_id" required
                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm">
                    {{-- Suponiendo que tienes una variable $categories disponible --}}
                    @foreach ($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                    @endforeach
                </select>
            </div>

            <div class="flex justify-end">
                <button type="submit" class="px-4 py-2 bg-blue-600 text-white rounded hover:bg-blue-700">Crear
                    Producto</button>
            </div>
        </form>
    </div>
</x-app-layout>
