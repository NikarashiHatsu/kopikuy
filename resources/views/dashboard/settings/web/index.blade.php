<x-app-layout>
    <div class="prose prose-headings:my-0 max-w-none">
        <div class="flex items-center justify-between">
            <h2>
                Pengaturan Web
            </h2>
        </div>

        <livewire:web-settings-data-table />

        @push('modals')
            <livewire:dashboard.settings.web.edit />
        @endpush
    </div>
</x-app-layout>
