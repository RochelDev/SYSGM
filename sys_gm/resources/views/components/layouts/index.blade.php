<x-layouts.admindashboard.sidebar :title="$title ?? null" >
    @include('components.layouts.admindashboard.header')

    <flux:main class="overflow-y-auto h-[calc(100vh-4rem)]">
        <div class="container mx-auto h-full">
            {{ $slot }}
        </div>
    </flux:main>
</x-layouts.admindashboard.sidebar>
