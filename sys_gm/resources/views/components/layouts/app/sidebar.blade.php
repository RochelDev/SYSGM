<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="dark">
    <head>
        @include('partials.head')
    </head>
    <body class="min-h-screen bg-white dark:bg-zinc-800">
        <flux:sidebar sticky stashable class="border-r border-zinc-200 text-white! bg-blue-900 dark:border-zinc-700 dark:bg-zinc-900">
            <flux:sidebar.toggle class="lg:hidden" icon="x-mark" />

            <div class="flex items-center justify-between px-4 py-5 border-b border-b-blue-800">
                <a class="flex items-center space-x-2" href="{{ route('dashboard') }}" wire:navigate>
                    <div class="bg-white p-1.5 rounded">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-bar-chart2 text-blue-900">
                            <line x1="18" x2="18" y1="20" y2="10"></line><line x1="12" x2="12" y1="20" y2="4"></line>
                            <line x1="6" x2="6" y1="20" y2="14"></line>
                        </svg>
                    </div>
                    <span class="text-xl font-bold text-white">
                        SysGeMob
                    </span>
                </a>
                <button class="md:hidden text-white">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-x ">
                        <path d="M18 6 6 18"></path><path d="m6 6 12 12"></path></svg>
                </button>
            </div>

            {{-- <a href="{{ route('dashboard') }}" class="me-5 flex items-center space-x-2 rtl:space-x-reverse" wire:navigate>
                <x-app-logo />
            </a> --}}

            {{-- <flux:navlist variant="outline">
                <flux:navlist.group :heading="__('Platform')" class="grid">
                    <flux:navlist.item icon="home" :href="route('dashboard')" :current="request()->routeIs('dashboard')" wire:navigate>{{ __('Dashboard') }}</flux:navlist.item>
                </flux:navlist.group>
            </flux:navlist> --}}

            <div class="flex items-center space-x-2 p-2 rounded-md">
                <div class="h-10 w-10 rounded-full bg-[#4CB9E7] flex items-center justify-center">
                    <span class="font-semibold text-lg">A</span>
                </div>
                <div class="flex-1 overflow-hidden">
                    <p class="font-medium truncate">Admin Système</p>
                    <p class="text-xs text-gray-300 truncate">admin</p>
                </div>
            </div>

            <flux:separator variant="subtle" />

            <flux:navlist variant="outline">
                <flux:navlist.item icon="home" class="hover:bg-blue-50! hover:text-blue-700! text-white!   {{ request()->routeIs('dashboard') ? 'bg-blue-800! text-white!' : '' }}" :href="route('dashboard')" wire:navigate>Tableau de bord</flux:navlist.item>
                @if(auth()->user()->profilActif())
                <flux:navlist.item icon="folder" href="#" class="hover:bg-blue-50! hover:text-blue-700! text-white!" wire:navigate>Dossier à traiter</flux:navlist.item>
                {{-- @if(auth()->user()->profilActif()->intitule_profil == 'Agent') Agent @endif
                @if(auth()->user()->profilActif()->intitule_profil == 'Responsable Sectoriel') Responsable Sectoriel @endif
                @if(auth()->user()->profilActif()->intitule_profil == 'Ordonnateur Sectoriel') Ordonnateur Sectoriel @endif
                @if(auth()->user()->profilActif()->intitule_profil == 'Agent DRSC') Agent DRSC @endif
                @if(auth()->user()->profilActif()->intitule_profil == 'DRSC') DRSC @endif
                @if(auth()->user()->profilActif()->intitule_profil == 'Responsable MTFP') Responsable MTFP @endif
                @if(auth()->user()->profilActif()->intitule_profil == 'Service RH') Service RH @endif
                @if(auth()->user()->profilActif()->intitule_profil == 'DGFP') DGFP @endif --}}
                @if(auth()->user()->profilActif()->intitule_profil == 'Agent' || auth()->user()->profilActif()->intitule_profil == 'Service RH' ) 
                    <flux:navlist.item icon="folder-plus" href="#" class="hover:bg-blue-50! hover:text-blue-700! text-white!" wire:navigate>Faire une Demande</flux:navlist.item>
                @endif

                @if(auth()->user()->profilActif()->intitule_profil == 'Ordonnateur Sectoriel' || auth()->user()->profilActif()->intitule_profil == 'Service RH' || auth()->user()->profilActif()->intitule_profil == 'Agent DRSC' ) 
                    <flux:navlist.item icon="users" href="#" class="hover:bg-blue-50! hover:text-blue-700! text-white!" wire:navigate>Liste des Agents</flux:navlist.item>
                @endif

                @if(!auth()->user()->profilActif()->intitule_profil == 'Agent') 
                    <flux:navlist.item icon="users" href="#" class="hover:bg-blue-50! hover:text-blue-700! text-white!" wire:navigate>Dossiers en cours</flux:navlist.item>
                @endif

                @if(auth()->user()->profilActif()->intitule_profil == 'Ordonnateur Sectoriel')
                    <flux:navlist.item icon="document" href="#" class="hover:bg-blue-50! hover:text-blue-700! text-white!" wire:navigate>Générer un Document</flux:navlist.item>
                @endif
                <flux:navlist.item icon="inbox" href="#" class="hover:bg-blue-50! hover:text-blue-700! text-white!" wire:navigate>Affectations</flux:navlist.item>
                <flux:navlist.item icon="document-text" href="#" class="hover:bg-blue-50! hover:text-blue-700! text-white!" wire:navigate>Historiques</flux:navlist.item>
                @endif
            </flux:navlist>

            <flux:spacer />

            <flux:navlist variant="outline" class="border-t border-blue-800 py-1">
                <form method="POST" action="{{ route('logout') }}" class="w-full">
                    @csrf
                    {{-- <flux:navlist.item as="button" type="submit" icon="arrow-right-start-on-rectangle" class="w-full text-white! px-4! py-4!">
                        {{ __('Log Out') }}
                    </flux:navlist.item> --}}
                    <button class="flex items-center px-3 py-3 text-sm font-medium rounded-md text-blue-200 hover:bg-blue-800 hover:text-white w-full transition-colors">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-log-out mr-3">
                            <path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path>
                            <polyline points="16 17 21 12 16 7"></polyline>
                            <line x1="21" x2="9" y1="12" y2="12"></line>
                        </svg>Se déconnecter
                    </button>
                </form>
            </flux:navlist>
        </flux:sidebar>

        <!-- Mobile User Menu -->
        <flux:header class="lg:hidden">
            <flux:sidebar.toggle class="lg:hidden" icon="bars-2" inset="left" />

            <flux:spacer />

            <flux:dropdown position="top" align="end">
                <flux:profile
                    :initials="auth()->user()->initials()"
                    icon-trailing="chevron-down"
                />

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
        </flux:header>

        {{ $slot }}

        @fluxScripts
    </body>
</html>
