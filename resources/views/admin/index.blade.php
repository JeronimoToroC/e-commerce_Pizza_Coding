<x-app-layout>
    {{-- Encabezado de la página de creación de producto --}}
    <header class="bg-blue-logo shadow-lg pt-24 pb-8">
        <h1 class="text-6xl text-center font-medium text-white">
            Panel de Administración
        </h1>
        <div class="text-center text-xl font-medium text-gray-200">
            <p>
                Administra productos, categorías y usuarios.<br>
                Utiliza las pestañas para navegar entre las secciones.<br>
                ¡Gestiona tu tienda eficientemente!
            </p>
        </div>
    </header>


    <div class="md:flex content max-w-full p-6 min-h-screen"x-data="{ tab: 'productos' }">
        <ul
            class="flex-column space-y space-y-1 text-sm font-medium text-white dark:text-gray-400 md:me-4 mb-4 md:mb-0 pr-4">
            <li>
                <a href="#" @click.prevent="tab = 'productos'" :class="{ 'bg-blue-800': tab === 'productos' }"
                    class="inline-flex items-center px-4 py-3 rounded-lg text-white bg-blue-logo hover:bg-blue-800">
                    <svg class="w-4 h-4 me-2 text-white dark:text-gray-400" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 18 18">
                        <path style="fill:#fdc074"
                            d="M6.143 0H1.857A1.857 1.857 0 0 0 0 1.857v4.286C0 7.169.831 8 1.857 8h4.286A1.857 1.857 0 0 0 8 6.143V1.857A1.857 1.857 0 0 0 6.143 0Zm10 0h-4.286A1.857 1.857 0 0 0 10 1.857v4.286C10 7.169 10.831 8 11.857 8h4.286A1.857 1.857 0 0 0 18 6.143V1.857A1.857 1.857 0 0 0 16.143 0Zm-10 10H1.857A1.857 1.857 0 0 0 0 11.857v4.286C0 17.169.831 18 1.857 18h4.286A1.857 1.857 0 0 0 8 16.143v-4.286A1.857 1.857 0 0 0 6.143 10Zm10 0h-4.286A1.857 1.857 0 0 0 10 11.857v4.286c0 1.026.831 1.857 1.857 1.857h4.286A1.857 1.857 0 0 0 18 16.143v-4.286A1.857 1.857 0 0 0 16.143 10Z" />
                    </svg>
                    Productos
                </a>
            </li>
            <li>
                <a href="#" @click.prevent="tab = 'usuarios'" :class="{ 'bg-blue-800': tab === 'usuarios' }"
                    class="inline-flex items-center px-4 py-3 rounded-lg text-white bg-blue-logo hover:bg-blue-800 w-full"
                    aria-current="page">
                    <svg class="w-4 h-4 me-2 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                        fill="currentColor" viewBox="0 0 20 20">
                        <path style="fill:#fdc074"
                            d="M10 0a10 10 0 1 0 10 10A10.011 10.011 0 0 0 10 0Zm0 5a3 3 0 1 1 0 6 3 3 0 0 1 0-6Zm0 13a8.949 8.949 0 0 1-4.951-1.488A3.987 3.987 0 0 1 9 13h2a3.987 3.987 0 0 1 3.951 3.512A8.949 8.949 0 0 1 10 18Z" />
                    </svg>
                    Usuarios
                </a>
            </li>
            <li>
                <a href="#" @click.prevent="tab = 'categorias'" :class="{ 'bg-blue-800': tab === 'categorias' }"
                    class="inline-flex items-center px-4 py-3 rounded-lg text-white bg-blue-logo hover:bg-blue-800 w-full">
                    <svg class="w-4 h-4 me-2 text-gray-500 dark:text-gray-400" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                        <path style="fill:#fdc074"
                            d="M18 7.5h-.423l-.452-1.09.3-.3a1.5 1.5 0 0 0 0-2.121L16.01 2.575a1.5 1.5 0 0 0-2.121 0l-.3.3-1.089-.452V2A1.5 1.5 0 0 0 11 .5H9A1.5 1.5 0 0 0 7.5 2v.423l-1.09.452-.3-.3a1.5 1.5 0 0 0-2.121 0L2.576 3.99a1.5 1.5 0 0 0 0 2.121l.3.3L2.423 7.5H2A1.5 1.5 0 0 0 .5 9v2A1.5 1.5 0 0 0 2 12.5h.423l.452 1.09-.3.3a1.5 1.5 0 0 0 0 2.121l1.415 1.413a1.5 1.5 0 0 0 2.121 0l.3-.3 1.09.452V18A1.5 1.5 0 0 0 9 19.5h2a1.5 1.5 0 0 0 1.5-1.5v-.423l1.09-.452.3.3a1.5 1.5 0 0 0 2.121 0l1.415-1.414a1.5 1.5 0 0 0 0-2.121l-.3-.3.452-1.09H18a1.5 1.5 0 0 0 1.5-1.5V9A1.5 1.5 0 0 0 18 7.5Zm-8 6a3.5 3.5 0 1 1 0-7 3.5 3.5 0 0 1 0 7Z" />
                    </svg>
                    Categorías
                </a>
            </li>
        </ul>
        <div class="bg-blue-logo text-medium text-white rounded-lg w-full ml-4">
            <div x-show="tab === 'productos'">
                <div class="overflow-x-auto shadow-md sm:rounded-lg">
                    <table class="w-full text-sm text-left text-gray-50">
                        <thead class="text-xs text-white uppercase bg-blue-logo">
                            <tr>
                                <th scope="col" class="px-6 py-3">
                                    Nombre del Producto
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Descripción
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Precio
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Categoría
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Disponible
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Acciones
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($products as $product)
                                <tr class="bg-blue-700 border-b hover:bg-blue-500 ">
                                    <td class="px-6 py-4">
                                        {{ $product->name }}
                                    </td>
                                    <td class="px-6 py-4">
                                        {{ $product->description }}
                                    </td>
                                    <td class="px-6 py-4">
                                        {{ $product->price }}
                                    </td>
                                    <td class="px-6 py-4">
                                        {{ $product->category->name }}
                                    </td>
                                    <td class="px-6 py-4">
                                        {{ $product->available ? 'Sí' : 'No' }}
                                    </td>
                                    <td class="flex items-center px-6 py-4">
                                        <a href="{{ route('products.edit', $product->id) }}"
                                            class="font-medium text-blue-50 hover:underline">Editar</a>
                                        <form action="{{ route('products.destroy', $product->id) }}" method="POST"
                                            class="ms-3">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit"
                                                class="font-medium text-red-logo hover:underline">Eliminar</button>
                                        </form>
                                        <a href="{{ route('products.create') }}"
                                            class="font-medium text-green-500 hover:underline ms-3">Crear</a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>

            <div x-show="tab === 'usuarios'" style="display: none;">
                <div x-show="tab === 'usuarios'">
                    <div class="overflow-x-auto shadow-md sm:rounded-lg">
                        <table class="w-full text-sm text-left text-gray-50">
                            <thead class="text-xs text-white uppercase bg-blue-logo">
                                <tr>
                                    <th scope="col" class="px-6 py-3">
                                        Nombre
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Correo Electrónico
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Rol
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Acciones
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($users as $users)
                                    <tr class="bg-blue-700 border-b hover:bg-blue-500 ">
                                        <td class="px-6 py-4">
                                            {{ $users->name }}
                                        </td>
                                        <td class="px-6 py-4">
                                            {{ $users->email }}
                                        </td>
                                        <td class="px-6 py-4">
                                            {{ $users->role }}
                                        </td>
                                        <td class="flex items-center px-6 py-4">
                                            {{-- <a href="{{ route('userss.edit', $users->id) }}"
                                            class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Editar</a>
                                        <form action="{{ route('userss.destroy', $users->id) }}" method="POST"
                                            class="ms-3">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit"
                                                class="font-medium text-red-600 dark:text-red-500 hover:underline">Eliminar</button>
                                        </form> --}}
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <div x-show="tab === 'categorias'" style="display: none;">
                <div x-show="tab === 'categorias'">
                    <div class="overflow-x-auto shadow-md sm:rounded-lg">
                        <table class="w-full text-sm text-left text-gray-50">
                            <thead class="text-xs text-white uppercase bg-blue-logo">
                                <tr>
                                    <th scope="col" class="px-6 py-3">
                                        Nombre
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Descripción
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Acciones
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($categories as $category)
                                    <tr class="bg-blue-700 border-b hover:bg-blue-500 ">
                                        <td class="px-6 py-4">
                                            {{ $category->name }}
                                        </td>
                                        <td class="px-6 py-4">
                                            {{ $category->description }}
                                        </td>
                                        <td class="flex items-center px-6 py-4">
                                            {{-- <a href="{{ route('categorys.edit', $category->id) }}"
                                            class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Editar</a>
                                        <form action="{{ route('categorys.destroy', $category->id) }}" method="POST"
                                            class="ms-3">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit"
                                                class="font-medium text-red-600 dark:text-red-500 hover:underline">Eliminar</button>
                                        </form> --}}
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
