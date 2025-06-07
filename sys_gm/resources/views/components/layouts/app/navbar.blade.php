<flux:header container
    class="block! bg-white lg:bg-yellow-50 dark:bg-zinc-900 border-b border-zinc-200 dark:border-zinc-700 sm:hidden">

    <div class="flex item-centers justify-beetween h16">
        <div class="flex items-center">
            <div class="hidden md:block ml-4">
                <h1 class="text-xl font-semibold text-blue-900">SYSGM</h1>
            </div>
        </div>
        <div class="hidden md:block flex-1 max-w-md mx-4">
            <div class="relative">
                <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-search text-gray-400">
                        <circle cx="11" cy="11" r="8"></circle>
                        <path d="m21 21-4.3-4.3"></path>
                    </svg>
                </div>
                <input type="text" class="block w-full pl-10 pr-3 py-2 border border-gray-300 rounded-md leading-5 bg-gray-50 placeholder-gray-500 focus:outline-none focus:ring-2 focus:ring-blue-600 focus:bg-white focus:border-blue-500 sm:text-sm" placeholder="Rechercher...">
            </div>
        </div>    
    </div>

   
    {{-- <flux:navbar scrollable class="max-lg:hidden">
        <flux:navbar.item href="#" current>Dashboard</flux:navbar.item>
        <flux:navbar.item badge="32" href="#">Orders</flux:navbar.item>
        <flux:navbar.item href="#">Catalog</flux:navbar.item>
        <flux:navbar.item href="#">Configuration</flux:navbar.item>
    </flux:navbar> --}}

    <flux:spacer />

    <flux:navbar class="me-4 max-lg:hidden py-2!">
        {{-- <flux:navbar.item icon="magnifying-glass" href="#" label="Search" />
        <flux:navbar.item class="max-lg:hidden" icon="cog-6-tooth" href="#" label="Settings" />
        <flux:navbar.item class="max-lg:hidden" icon="information-circle" href="#" label="Help" /> --}}

        <flux:dropdown x-data align="end">
            <flux:button variant="subtle" square class="group" aria-label="Preferred color scheme">
                <flux:icon.sun x-show="$flux.appearance === 'light'" variant="mini"
                    class="text-zinc-500 dark:text-white" />
                <flux:icon.moon x-show="$flux.appearance === 'dark'" variant="mini"
                    class="text-zinc-500 dark:text-white" />
                <flux:icon.moon x-show="$flux.appearance === 'system' && $flux.dark" variant="mini" />
                <flux:icon.sun x-show="$flux.appearance === 'system' && ! $flux.dark" variant="mini" />
            </flux:button>
            <flux:menu>
                <flux:menu.item icon="sun" x-on:click="$flux.appearance = 'light'">Light</flux:menu.item>
                <flux:menu.item icon="moon" x-on:click="$flux.appearance = 'dark'">Dark</flux:menu.item>
                <flux:menu.item icon="computer-desktop" x-on:click="$flux.appearance = 'system'">System</flux:menu.item>
            </flux:menu>
        </flux:dropdown>

        <!-- Desktop User Menu -->
        <flux:dropdown position="top" align="end">
            {{-- <flux:profile
                class="cursor-pointer"
                :initials="auth()->user()->name"
            /> --}}

            <flux:button icon:trailing="chevron-down" class="cursor-pointer" >{{ auth()->user()->name }}</flux:button>

            <flux:menu>
                <flux:menu.radio.group>
                    <div class="p-0 text-sm font-normal">
                        <div class="flex items-center gap-2 px-1 py-1.5 text-start text-sm">
                            <span class="relative flex h-8 w-8 shrink-0 overflow-hidden rounded-lg">
                                <span
                                    class="flex h-full w-full items-center justify-center rounded-lg bg-neutral-200 text-black dark:bg-neutral-700 dark:text-white"
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
                    @if (auth()->user()->usertype === 'admin')
                        <flux:menu.item :href="route('admindashboard')" icon="home-modern" wire:navigate>{{ __('Adminitrateur') }}</flux:menu.item>
                    @endif
                    {{-- a ce niveau ajouter le ou les profils de l'agent. Et si possible le profil actif est marquer  --}}
                    @if (auth()->user()->profils->count() > 1)
                        <flux:menu.separator />
                        <div class="px-2 py-1 text-xs text-gray-500 dark:text-gray-400">{{ __('Changer de Profil') }}</div>
                        <form method="POST" action="{{ route('switch.profil') }}" class="space-y-1">
                            @csrf
                            @foreach (auth()->user()->profils as $profil)
                                <button type="submit" name="profil_id" value="{{ $profil->id }}" class="flex items-center px-2 py-1.5 text-sm text-gray-700 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-zinc-700 transition-colors w-full justify-start">
                                    <svg class="h-4 w-4 me-2" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                        @if ($profil->id === auth()->user()->profilActif()->id)
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
                                        @else
                                            <circle cx="12" cy="12" r="6" stroke-linecap="round" stroke-linejoin="round" />
                                        @endif
                                    </svg>
                                    {{ $profil->intitule_profil }}
                                </button>
                            @endforeach
                        </form>
                    @endif
                </flux:menu.radio.group>

                <flux:menu.separator />

                <form method="POST" action="{{ route('logout') }}" class="w-full">
                    @csrf
                    <flux:menu.item as="button" type="submit" icon="arrow-right-start-on-rectangle" class="w-full">
                        {{ __('Log Out') }}
                    </flux:menu.item>
                </form>
            </flux:menu>
        </flux:dropdown>
    </flux:navbar>





</flux:header>
