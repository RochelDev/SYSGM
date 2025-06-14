<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="dark">
<head>
    @include('partials.head')
</head>
<body class="min-h-screen bg-white dark:bg-zinc-800">

    <flux:sidebar sticky stashable class=" bg-green-500 dark:bg-zinc-900 border-r rtl:border-r-0 rtl:border-l border-zinc-200 dark:border-zinc-700">
        
        <flux:sidebar.toggle class="lg:hidden" icon="x-mark" />

        <div class="flex items-center justify-between px-4 py-5 border-b border-b-blue-800">
            <a class="flex items-center space-x-2" href="{{ route('dashboard') }}" wire:navigate>
                <div class="bg-blue-600 p-1.5 rounded">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-bar-chart2 text-white">
                        <line x1="18" x2="18" y1="20" y2="10"></line><line x1="12" x2="12" y1="20" y2="4"></line>
                        <line x1="6" x2="6" y1="20" y2="14"></line>
                    </svg>
                </div>
                <span class="text-xl font-bold ">
                    SYSGM
                </span>
            </a>
            <button class="md:hidden text-white">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-x ">
                    <path d="M18 6 6 18"></path><path d="m6 6 12 12"></path></svg>
            </button>
        </div>
        
        {{-- <flux:brand href="#" logo="https://fluxui.dev/img/demo/logo.png" name="Acme Inc." class="px-2 dark:hidden" /> --}}
        
        
        <flux:navlist variant="outline">
            <flux:navlist.item icon="home" :href="route('admindashboard')" class="text-white! hover:bg-blue-50! hover:text-blue-700! {{ request()->routeIs('admindashboard') ? 'bg-blue-900 text-white!' : '' }}" wire:navigate>Tableau de bord</flux:navlist.item>
            {{-- <flux:navlist.item icon="inbox" :href="route('agent.index')" class="hover:bg-blue-50! hover:text-blue-700! {{ request()->routeIs('agent.index') ? 'bg-blue-900 text-white!' : '' }} " wire:navigate>Liste des Agents</flux:navlist.item> --}}
            <flux:navlist.item icon="users" :href="route('admin.user.index')" class="text-white! hover:bg-blue-50! hover:text-blue-700! {{ request()->routeIs('admin.user.index') ? 'bg-blue-900 text-white!' : '' }} " wire:navigate>Gestion des utilisateurs</flux:navlist.item>
            <flux:navlist.group expandable heading="Pramètres" class="hidden text-white! lg:grid">
                <flux:navlist.item :href="route('admin.ministere.index')" class="text-white! hover:bg-blue-50! hover:text-blue-700! {{ request()->routeIs('admin.ministere.index') ? 'bg-blue-900 text-white!' : '' }} " wire:navigate>Gestion des Ministères</flux:navlist.item>
                <flux:navlist.item :href="route('admin.structure.index')" class="text-white! hover:bg-blue-50! hover:text-blue-700! {{ request()->routeIs('admin.structure.index') ? 'bg-blue-900 text-white!' : '' }} " wire:navigate>Gestion des structures</flux:navlist.item>
                <flux:navlist.item :href="route('admin.poste.index')" class="text-white! hover:bg-blue-50! hover:text-blue-700! {{ request()->routeIs('admin.poste.index') ? 'bg-blue-900 text-white!' : '' }} " wire:navigate>Gestion des Postes</flux:navlist.item>
                <flux:navlist.item :href="route('admin.fonction.index')" class="text-white! hover:bg-blue-50! hover:text-blue-700! {{ request()->routeIs('admin.fonction.index') ? 'bg-blue-900 text-white!' : '' }} " wire:navigate>Gestion des Fonctions</flux:navlist.item>
                <flux:navlist.item :href="route('admin.type_mobilite.index')" class="text-white! hover:bg-blue-50! hover:text-blue-700! {{ request()->routeIs('admin.type_mobilite.index') ? 'bg-blue-900 text-white!' : '' }} " wire:navigate>Gestion des Mobilités</flux:navlist.item>
                <flux:navlist.item :href="route('admin.profil.index')" class="text-white! hover:bg-blue-50! hover:text-blue-700! {{ request()->routeIs('admin.profil.index') ? 'bg-blue-900 text-white!' : '' }} " wire:navigate>Gestion des Profils</flux:navlist.item>
            </flux:navlist.group>
            <flux:navlist.item icon="document-text" href="#" class="text-white! hover:bg-blue-50! hover:text-blue-700!">Historiques</flux:navlist.item>
        </flux:navlist>
        
        <flux:spacer />
        
    </flux:sidebar>

    
    {{ $slot }}

    @fluxScripts
</body>
</html>
