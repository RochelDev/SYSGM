<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="dark">
<head>
    @include('partials.head')
</head>
<body class="min-h-screen bg-white dark:bg-zinc-800">

    <flux:sidebar sticky stashable class="bg-zinc-50 dark:bg-zinc-900 border-r rtl:border-r-0 rtl:border-l border-zinc-200 dark:border-zinc-700">
        
        <flux:sidebar.toggle class="lg:hidden" icon="x-mark" />
        
        <flux:brand href="#" logo="https://fluxui.dev/img/demo/logo.png" name="Acme Inc." class="px-2 dark:hidden" />
        
        <flux:brand href="#" logo="https://fluxui.dev/img/demo/dark-mode-logo.png" name="Acme Inc." class="px-2 hidden dark:flex" />
        <flux:input as="button" variant="filled" placeholder="Search..." icon="magnifying-glass" />
        
        <flux:navlist variant="outline">
            <flux:navlist.item icon="home" href="#" class="hover:bg-blue-50! hover:text-blue-700!  bg-blue-900 text-white!">Tableau de bord</flux:navlist.item>
            <flux:navlist.item icon="document" href="#" class="hover:bg-blue-50! hover:text-blue-700!">Générer un Document</flux:navlist.item>
            <flux:navlist.item icon="inbox" href="#" class="hover:bg-blue-50! hover:text-blue-700!">Liste des Agents</flux:navlist.item>
            <flux:navlist.item icon="inbox" href="#" class="hover:bg-blue-50! hover:text-blue-700!">Rôles et permissions</flux:navlist.item>
            <flux:navlist.group expandable heading="Pramètres" class="hidden lg:grid">
                <flux:navlist.item href="#" class="hover:bg-blue-50! hover:text-blue-700!">Gestion des Ministères</flux:navlist.item>
                <flux:navlist.item href="#" class="hover:bg-blue-50! hover:text-blue-700!">Gestion des structures</flux:navlist.item>
                <flux:navlist.item href="#" class="hover:bg-blue-50! hover:text-blue-700!">Gestion des Postes</flux:navlist.item>
                <flux:navlist.item href="#" class="hover:bg-blue-50! hover:text-blue-700!">Gestion des Fonctions</flux:navlist.item>
                <flux:navlist.item href="#" class="hover:bg-blue-50! hover:text-blue-700!">Gestion des Mobilités</flux:navlist.item>
            </flux:navlist.group>
            <flux:navlist.item icon="document-text" href="#" class="hover:bg-blue-50! hover:text-blue-700!">Historiques</flux:navlist.item>
        </flux:navlist>
        
        <flux:spacer />
        
    </flux:sidebar>

    
    {{ $slot }}

    @fluxScripts
</body>
</html>
