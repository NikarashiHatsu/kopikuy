<x-app-layout>
    <div class="prose prose-headings:my-0 max-w-none">
        <div class="flex items-center justify-between">
            <h2>
                Produk
            </h2>

            <label for="product-create" class="btn">
                <x-phosphor-plus class="w-4 h-4" />
                <span class="ml-2">
                    Tambah Produk
                </span>
            </label>
        </div>

        <livewire:product-data-table />

        <x-slot name="modals">
            <livewire:dashboard.master.product.create />
            <livewire:dashboard.master.product.edit />
        </x-slot>
    </div>
</x-app-layout>
