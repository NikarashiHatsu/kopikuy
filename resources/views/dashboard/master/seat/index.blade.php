<x-app-layout>
    <div class="prose prose-headings:my-0 max-w-none">
        <div class="flex items-center justify-between">
            <h2>
                Seat
            </h2>

            <label for="seat-create" class="btn">
                <x-phosphor-plus class="w-4 h-4" />
                <span class="ml-2">
                    Tambah Seat
                </span>
            </label>
        </div>

        <livewire:seat-data-table />

        <x-slot name="modals">
            <livewire:dashboard.master.seat.create />
            <livewire:dashboard.master.seat.edit />
        </x-slot>
    </div>
</x-app-layout>
