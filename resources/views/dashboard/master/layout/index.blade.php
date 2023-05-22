<x-app-layout>
    <div class="prose prose-headings:my-0 max-w-none">
        <div class="flex items-center justify-between">
            <h2>
                Layout
            </h2>

            <label for="layout-create" class="btn">
                <x-phosphor-plus class="w-4 h-4" />
                <span class="ml-2">
                    Tambah Layout
                </span>
            </label>
        </div>

        <livewire:layout-data-table />

        <x-slot name="modals">
            <livewire:dashboard.master.layout.create />
            <livewire:dashboard.master.layout.edit />
        </x-slot>
    </div>
</x-app-layout>
