<x-layouts.dashboard.sidebar :title="$title ?? null" >
    @include('components.layouts.dashboard.header')

    <flux:main class="overflow-y-auto h-[calc(100vh-4rem)]">
        <div class="container mx-auto h-full">
            {{ $slot }}
        </div>
    </flux:main>
</x-layouts.dashboard.sidebar>
