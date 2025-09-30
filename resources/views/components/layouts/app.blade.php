<x-laratrust-custpanel::layouts.app.sidebar :title="$title ?? null">
    <flux:main>
        {{ $slot }}
    </flux:main>
</x-laratrust-custpanel::layouts.app.sidebar>
