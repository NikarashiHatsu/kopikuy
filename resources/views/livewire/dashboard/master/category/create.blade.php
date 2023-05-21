<div>
    <input
        type="checkbox"
        id="category-create"
        class="modal-toggle"
    />

    <label for="category-create" class="modal cursor-pointer">
        <label class="modal-box relative" for="">
            <h3 class="text-lg font-bold">
                Tambah Kategori
            </h3>

            <form wire:submit.prevent="store" method="post">
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
                        <p class="text-red-500 mt-2 text-xs">
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
