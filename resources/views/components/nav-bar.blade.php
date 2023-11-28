<div>
    <div class="flex sm:justify-center">
        {{-- TODO Agregar animación de hover a los botones --}}
        <nav x-data="{ showMenu: false, showCart: false, cart: [] }"
            class="fixed top-0 sm:top-2 w-full sm:w-auto lg:w-3/4 p-2 sm:mx-4 bg-yellow-logo text-white opacity-90 sm:rounded-full">
            <section class="w-full grid grid-cols-3 md:grid-cols-6">
                {{-- Logo  --}}
                <article class="col-span-1 md:flex md:justify-center">
                    <a href="/">
                        <x-application-mark class="block h-9 w-auto" />
                    </a>
                </article>
                {{-- Menú --}}
                <article class="hidden sm:flex sm:mx-4 sm:justify-center font-bold col-span-4">
                    <div class="hidden md:flex">
                        <a href="{{ route('menu') }}"
                            class="text-blue-900 text-lg bg-transparent px-3 py-1 rounded self-center">
                            Menú
                        </a>
                        <a class="text-blue-900 text-lg bg-transparent px-3 py-1 rounded self-center">
                            Categorías
                        </a>
                        <a class="text-blue-900 text-xl bg-transparent px-3 py-1 rounded self-center">
                            Nosotros
                        </a>
                    </div>
                </article>
                {{-- Botón menú colapsable --}}
                <article class="col-start-3 sm:col-start-6 flex items-center justify-end sm:justify-center md:hidden">
                    <button @click="showMenu = ! showMenu"
                        class="inline-flex items-center justify-center p-2 rounded-md text-blue-logo bg-yellow-200">
                        <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                            <path :class="{ 'hidden': showMenu, 'inline-flex': !showMenu }" class="inline-flex"
                                stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4 6h16M4 12h16M4 18h16" />
                            <path :class="{ 'hidden': !showMenu, 'inline-flex': showMenu }" class="hidden"
                                stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </article>
                @if (Route::has('login'))
                    @auth
                        <div class="flex justify-start items-center">
                            <div>
                                <button @click="showCart = ! showCart"
                                    class="inline-flex items-center justify-center p-2 rounded-md text-blue-logo bg-yellow-200">
                                    <svg xmlns="http://www.w3.org/2000/svg" height="1.5rem" width="1.5rem"
                                        viewBox="0 0 576 512">
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
                            <article class="hidden sm:flex sm:items-center sm:ms-6">
                                <!-- Settings Dropdown -->
                                <div class="ms-3 relative">
                                    <x-dropdown align="right" width="48">
                                        <x-slot name="trigger">
                                            @if (Laravel\Jetstream\Jetstream::managesProfilePhotos())
                                                <button
                                                    class="flex text-sm border-2 border-transparent rounded-full focus:outline-none focus:border-gray-300 transition">
                                                    <img class="h-8 w-8 rounded-full object-cover"
                                                        src="{{ Auth::user()->profile_photo_url }}"
                                                        alt="{{ Auth::user()->name }}" />
                                                </button>
                                            @else
                                                <span class="inline-flex rounded-md">
                                                    <button type="button"
                                                        class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 bg-white hover:text-gray-700 focus:outline-none focus:bg-gray-50 active:bg-gray-50 transition ease-in-out duration-150">
                                                        {{ Auth::user()->name }}

                                                        <svg class="ms-2 -me-0.5 h-4 w-4" xmlns="http://www.w3.org/2000/svg"
                                                            fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                                            stroke="currentColor">
                                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                                d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                                                        </svg>
                                                    </button>
                                                </span>
                                            @endif
                                        </x-slot>

                                        <x-slot name="content">
                                            <!-- Account Management -->
                                            <div class="block px-4 py-2 text-xs text-gray-400">
                                                {{ __('Manage Account') }}
                                            </div>

                                            <x-dropdown-link href="{{ route('profile.show') }}">
                                                {{ __('Profile') }}
                                            </x-dropdown-link>

                                            @if (Laravel\Jetstream\Jetstream::hasApiFeatures())
                                                <x-dropdown-link href="{{ route('api-tokens.index') }}">
                                                    {{ __('API Tokens') }}
                                                </x-dropdown-link>
                                            @endif

                                            <div class="border-t border-gray-200"></div>

                                            <!-- Authentication -->
                                            <form method="POST" action="{{ route('logout') }}" x-data>
                                                @csrf

                                                <x-dropdown-link href="{{ route('logout') }}"
                                                    @click.prevent="$root.submit();">
                                                    {{ __('Log Out') }}
                                                </x-dropdown-link>
                                            </form>
                                        </x-slot>
                                    </x-dropdown>
                                </div>
                            </article>
                        </div>
                    @else
                        <div class="flex justify-start items-center">
                            <div>
                                <button @click="showCart = ! showCart"
                                    class="inline-flex items-center justify-center p-2 rounded-md text-blue-logo bg-yellow-200">
                                    <svg xmlns="http://www.w3.org/2000/svg" height="1.5rem" width="1.5rem"
                                        viewBox="0 0 576 512">
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
                            <article
                                class="text-center self-center font-bold col-span-1 text-blue-900 text-lg bg-transparent px-3 py-1 rounded">
                                <a href="{{ route('login') }}" class=" hover:text-gray-600">Login</a>
                                @if (Route::has('register'))
                                    <a href="{{ route('register') }}" class="ml-4 hover:text-gray-600">Register</a>
                                @endif
                            </article>
                        </div>
                    @endauth
                @endif
            </section>
            {{-- TODO Componetizar el menú --}}
            {{-- Menú colapsable --}}
            <div :class="{ 'block': showMenu, 'hidden': !showMenu }"
                class="items-center justify-between hidden w-full md:hidden">
                <ul class="flex flex-col mt-4 p-4 bg-blue-logo rounded-lg font-medium">
                    <li>
                        <x-responsive-nav-link href="{{ route('menu') }}" :active="request()->routeIs('menu')">
                            {{ __('Menú') }}
                        </x-responsive-nav-link>
                    </li>
                    <li>
                        <x-responsive-nav-link href="{{ route('home') }}" :active="request()->routeIs('especial')">
                            {{ __('Categorías') }}
                        </x-responsive-nav-link>
                    </li>
                    <li>
                        <x-responsive-nav-link href="{{ route('home') }}" :active="request()->routeIs('traditional')">
                            {{ __('Nosotros') }}
                        </x-responsive-nav-link>
                    </li>
                </ul>
            </div>
            {{-- TODO Componetizar el carrito --}}
            {{-- Carrito colapsable --}}
            <div :class="{ 'relative': showCart, 'hidden': !showCart }" class="w-full">
                <ul class="absolute right-0 top-0 mt-4 mr-20 p-4 bg-yellow-logo rounded-lg font-medium w-1/3 z-10">
                </ul>
            </div>
        </nav>
    </div>
    <script>
        function addToCart(product) {
            // Encuentra el producto en el carrito por ID
            let item = this.cart.find((item) => item.id === product.id);
            if (item) {
                // Si ya existe, incrementa la cantidad
                item.quantity++;
            } else {
                // Si no existe, lo añade al carrito
                this.cart.push({
                    ...product,
                    quantity: 1
                });
            }
        }
    </script>
</div>
