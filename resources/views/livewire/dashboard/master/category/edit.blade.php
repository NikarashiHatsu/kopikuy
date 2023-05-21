<div>
    <div x-data="{ is_open: @entangle('is_open') }">
        <input
            type="checkbox"
            id="category-edit"
            class="modal-toggle"
            x-bind:checked="is_open"
        />

        <label for="category-edit" class="modal cursor-pointer" x-cloak>
            <label class="modal-box relative" for="">
                <h3 class="text-lg font-bold">
                    Edit Kategori
                </h3>

                <form wire:submit.prevent="update" method="post">
                    <div class="form-control mb-4">
                        <label for="category.name" class="label">
                            <span class="label-text">Nama Kategori</span>
                        </label>

                        <input
                            type="text"
                            class="input input-bordered"
                            wire:model.defer="category.name"
                            id="category.name"
                        />

                        @error('category.name')
                            <p class="text-red-500 text-xs mt-2">
                                {{ $message }}
                            </p>
                        @enderror
                    </div>

                    <div class="flex justify-end">
                        <button type="submit" class="btn btn-primary">
                            <x-phosphor-floppy-disk class="w-4 h-4 mr-2" />
                            <span>
                                Simpan
                            </span>
                        </button>
                    </div>
                </form>
            </label>
        </label>
    </div>
</div>
