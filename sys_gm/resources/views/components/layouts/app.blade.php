<x-layouts.app.sidebar :title="$title ?? null">
    @include('components.layouts.app.navbar')

    <flux:main class="overflow-y-auto h-[calc(100vh-4rem)]">
        <div class="container mx-auto">
            {{ $slot }}
        </div>
    </flux:main>
</x-layouts.app.sidebar>
