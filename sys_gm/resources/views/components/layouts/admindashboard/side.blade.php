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

        <flux:separator variant="subtle" />
        
        <flux:navlist variant="outline">
            <flux:navlist.item icon="home" href="#" class="hover:bg-blue-50! hover:text-blue-700!  bg-blue-900 text-white!">Tableau de bord</flux:navlist.item>
            <flux:navlist.item icon="folder" badge="14" href="#" class="hover:bg-blue-50! hover:text-blue-700!">Dossier à traiter</flux:navlist.item>
            <flux:navlist.item icon="folder" badge="14" href="#" class="hover:bg-blue-50! hover:text-blue-700!">Faire une Demande</flux:navlist.item>
            <flux:navlist.item icon="document" href="#" class="hover:bg-blue-50! hover:text-blue-700!">Générer un Document</flux:navlist.item>
            <flux:navlist.item icon="inbox" href="#" class="hover:bg-blue-50! hover:text-blue-700!">Liste des Agents</flux:navlist.item>
            <flux:navlist.item icon="inbox" href="#" class="hover:bg-blue-50! hover:text-blue-700!">Affectations</flux:navlist.item>
            <flux:navlist.item icon="document-text" href="#" class="hover:bg-blue-50! hover:text-blue-700!">Historiques</flux:navlist.item>
        </flux:navlist>
        
        <flux:spacer />


        <flux:navlist variant="outline">
            <flux:navlist.item icon="cog-6-tooth" href="#" class="hover:bg-blue-50! hover:text-blue-700!">Settings</flux:navlist.item>
        </flux:navlist>

        <flux:separator variant="subtle" />

        <flux:dropdown position="top" align="start" class="max-lg:hidden border rounded-lg bg-white dark:bg-gray-800">
            <flux:profile avatar="https://fluxui.dev/img/demo/user.png" name="Olivia Martin" />
            <flux:menu>
                <flux:menu.radio.group>
                    <flux:menu.radio checked>Olivia Martin</flux:menu.radio>
                    <flux:menu.radio>Truly Delta</flux:menu.radio>
                </flux:menu.radio.group>
                <flux:menu.separator />
                <flux:menu.item icon="arrow-right-start-on-rectangle" class="hover:bg-blue-50! hover:text-blue-700!">Logout</flux:menu.item>
            </flux:menu>
        </flux:dropdown>
        
    </flux:sidebar>

    
    {{ $slot }}

    @fluxScripts
</body>
</html>
