<div>
    <div class="flex sm:justify-center">
        {{-- TODO Agregar animación de hover a los botones --}}
        <nav x-data="{ showMenu: false }"
            class="fixed top-0 sm:top-2 w-full sm:w-auto lg:w-3/4 p-2 sm:mx-4 bg-yellow-logo text-white opacity-90 sm:rounded-full">
            <section class="w-full grid grid-cols-3 md:grid-cols-6">
                {{-- Logo  --}}
                <article class="col-span-1 md:flex md:justify-center">
                    <a href="{{ route('home') }}">
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

                                            <x-dropdown-link href="{{ route('logout') }}" @click.prevent="$root.submit();">
                                                {{ __('Log Out') }}
                                            </x-dropdown-link>
                                        </form>
                                    </x-slot>
                                </x-dropdown>
                            </div>
                        </article>
                    @else
                        <article
                            class="text-right self-center font-bold col-span-1 text-blue-900 text-lg bg-transparent px-3 py-1 rounded">
                            <a href="{{ route('login') }}" class=" hover:text-gray-600">Login</a>
                            @if (Route::has('register'))
                                <a href="{{ route('register') }}" class="ml-4 hover:text-gray-600">Register</a>
                            @endif
                        </article>
                    @endauth
                @endif

            </section>
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
        </nav>
    </div>
</div>
