<div>
    <div x-data="{ is_open: @entangle('is_open') }">
        <input
            type="checkbox"
            id="product-edit"
            class="modal-toggle"
            x-bind:checked="is_open"
        />

        <label for="product-edit" class="modal cursor-pointer" x-cloak>
            <label class="modal-box relative" for="">
                <h3 class="text-lg font-bold">
                    Edit Kategori
                </h3>

                <form wire:submit.prevent="update" method="post">
                    <div class="form-control">
                        <label for="product.price" class="label">
                            <span class="label-text">
                                Harga
                                <span class="text-red-500">*</span>
                            </span>
                        </label>

                        <div class="input-group w-full">
                            <span class="input-group-text">
                                Rp
                            </span>
                            <input
                                id="product.price"
                                class="input input-bordered w-full"
                                type="number"
                                wire:model.defer="product.price"
                                required
                            />
                        </div>

                        @error('product.price')
                            <p class="text-red-500 mt-2 text-xs">
                                {{ $message }}
                            </p>
                        @enderror
                    </div>

                    <div class="form-control">
                        <label for="product.name" class="label">
                            <span class="label-text">
                                Nama Produk
                                <span class="text-red-500">*</span>
                            </span>
                        </label>

                        <input
                            id="product.name"
                            class="input input-bordered"
                            type="text"
                            wire:model.defer="product.name"
                            required
                        />

                        @error('product.name')
                            <p class="text-red-500 mt-2 text-xs">
                                {{ $message }}
                            </p>
                        @enderror
                    </div>

                    <div class="form-control">
                        <label for="product.category_id" class="label">
                            <span class="label-text">
                                Kategori
                                <span class="text-red-500">*</span>
                            </span>
                        </label>

                        <select
                            id="product.category_id"
                            class="select select-bordered"
                            wire:model.defer="product.category_id"
                            required
                        >
                            <option value="">-Pilih Kategori-</option>
                            @foreach ($categories as $id => $name)
                                <option value="{{ $id }}">
                                    {{ $name }}
                                </option>
                            @endforeach
                        </select>

                        @error('product.category_id')
                            <p class="text-red-500 mt-2 text-xs">
                                {{ $message }}
                            </p>
                        @enderror
                    </div>

                    <div class="form-control mb-4">
                        <label for="product.description" class="label">
                            <span class="label-text">
                                Deskripsi
                                <span class="text-red-500">*</span>
                            </span>
                        </label>

                        <textarea
                            id="product.description"
                            class="textarea textarea-bordered"
                            wire:model.defer="product.description"
                            rows="5"
                            minlength="8"
                            required
                        ></textarea>

                        @error('product.description')
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
</div>
