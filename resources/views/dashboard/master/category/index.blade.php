<x-app-layout>
    <div class="prose prose-headings:my-0 max-w-none">
        <div class="flex items-center justify-between">
            <h2>
                Kategori
            </h2>

            <label for="category-create" class="btn">
                <x-phosphor-plus class="w-4 h-4" />
                <span class="ml-2">
                    Tambah Kategori
                </span>
            </label>
        </div>

        <livewire:category-data-table />

        <x-slot name="modals">
            <livewire:dashboard.master.category.create />
            <livewire:dashboard.master.category.edit />
        </x-slot>
    </div>
</x-app-layout>
