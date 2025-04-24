<x-layouts.dashboard.side :title="$title ?? null" >
    <flux:main>
        {{ $slot }}
    </flux:main>
</x-layouts.dashboard.side>
