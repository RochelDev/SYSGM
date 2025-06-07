<!-- ====== header ====== -->

<header class="bg-white/90 backdrop-blur fixed w-full z-50 top-0 start-0 border-b border-gray-200">
    <nav>
        <div class="max-w-screen-xl flex flex-wrap items-center justify-evenly mx-auto p-4">
            <a href="#" class="flex items-center space-x-3 rtl:space-x-reverse">
                {{-- <img src="https://flowbite.com/docs/images/logo.svg" class="h-8" alt="Flowbite Logo"> --}}
                <span class="self-center text-2xl font-semibold whitespace-nowrap">SYS<span class="text-blue-700">GM</span> </span>
            </a>
            <div class="hidden space-x-32 w-full lg:flex md:w-auto md:order-1" id="navbar-sticky">
            <!-- Bouton burger à ajouter ici pour mobile -->

                <div class="hidden w-full md:flex md:w-auto" id="navbar-sticky">
                    <ul class="flex flex-col md:flex-row md:space-x-8 font-medium">
                        <li><a href="{{ route('home') }}" class="block py-2 px-3 {{ request()->routeIs('home') ? 'text-blue-700!' : '' }}">Accueil</a></li>
                        <li><a href="{{ route('about') }}" class="block py-2 px-3 text-gray-900 hover:text-blue-700 {{ request()->routeIs('about') ? 'text-blue-700!' : '' }}">A propos</a></li>
                        <li><a href="{{ route('services') }}" class="block py-2 px-3 text-gray-900 hover:text-blue-700 {{ request()->routeIs('services') ? 'text-blue-700!' : '' }}">Services</a></li>
                        <li><a href="{{ route('contact') }}" class="block py-2 px-3 text-gray-900 hover:text-blue-700 {{ request()->routeIs('contact') ? 'text-blue-700!' : '' }}">Contact</a></li>
                    </ul>
                </div>

                <div class="flex md:order-2 space-x-3 md:space-x-0 rtl:space-x-reverse">
                    @if (Route::has('login'))
                        @auth
                        <a href="{{ url('/dashboard') }}" class="rounded-md bg-blue-800 px-4 py-2.5 font-semibold text-white shadow-md shadow-blue-500/20 duration-200 hover:bg-blue-600">
                            Dashboard
                        </a>
                        @else
                        <a href="{{ route('login') }}" class="rounded-lg bg-blue-800 px-4 py-2.5 font-semibold text-white shadow-md shadow-blue-500/20 duration-200 hover:bg-blue-600">Se connecter</a>
                        @endauth
                    @endif

                    @if(request()->routeIs('dashboard'))
                    <flux:menu>
                    <flux:menu.radio.group>
                        <div class="p-0 text-sm font-normal">
                            <div class="flex items-center gap-2 px-1 py-1.5 text-start text-sm">
                                <span class="relative flex h-8 w-8 shrink-0 overflow-hidden rounded-lg">
                                    <span
                                        class="flex h-full w-full items-center justify-center rounded-lg bg-neutral-200 text-black"
                                    >
                                        {{ auth()->user()->initials() }}
                                    </span>
                                </span>

                                <div class="grid flex-1 text-start text-sm leading-tight">
                                    <span class="truncate font-semibold">{{ auth()->user()->name }}</span>
                                    <span class="truncate text-xs">{{ auth()->user()->email }}</span>
                                </div>
                            </div>
                        </div>
                    </flux:menu.radio.group>

                    <flux:menu.separator />

                    <flux:menu.radio.group>
                        <flux:menu.item :href="route('settings.profile')" icon="cog" wire:navigate>{{ __('Settings') }}</flux:menu.item>
                    </flux:menu.radio.group>

                    <flux:menu.separator />

                    <form method="POST" action="{{ route('logout') }}" class="w-full">
                        @csrf
                        <flux:menu.item as="button" type="submit" icon="arrow-right-start-on-rectangle" class="w-full">
                            {{ __('Log Out') }}
                        </flux:menu.item>
                    </form>
                    </flux:menu>
                    @endif
                </div>
            </div>
        </div>
    </nav>
</header>
<!-- ====== END header ====== -->
