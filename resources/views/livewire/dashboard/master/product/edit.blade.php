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

                <div class="grid grid-cols-2 md:grid-cols-4 grid-flow-row gap-4 mt-2">
                    @foreach ($product->images as $image)
                        <div class="aspect-w-1 aspect-h-1 relative">
                            <img
                                src="{{ $image->path }}"
                                alt="{{ $product->name }} Image {{ $loop->iteration }}"
                                class="w-full h-full rounded object-cover"
                            />

                            <button
                                class="btn btn-sm btn-error rounded w-2 h-2 flex items-center justify-center absolute top-0 right-0"
                                wire:click="$emit(
                                    'delete',
                                    'Hapus foto ini?',
                                    () => { @this.call('destroy_image', '{{ $image->id }}') }
                                )"
                                wire:loading.attr="disabled"
                                wire:loading.class="btn-disabled"
                                wire:target="edit"
                            >
                                <x-phosphor-x-bold class="w-4 h-4 text-white flex-shrink-0 p-0" />
                            </button>
                        </div>
                    @endforeach
                </div>

                <form wire:submit.prevent="update" method="post">
                    <div class="form-control">
                        <label for="images" class="label">
                            <span class="label-text">
                                Tambah Foto Produk (Multiple)
                                <span class="text-red-500">*</span>
                            </span>
                        </label>

                        <input
                            id="images"
                            class="input input-bordered w-full"
                            type="file"
                            wire:model="images"
                            multiple
                        />

                        <p wire:loading wire:target="images" class="text-gray-700 text-xs mt-2">
                            Uploading images...
                        </p>

                        @error('images')
                            <p class="text-red-500 mt-2 text-xs">
                                {{ $message }}
                            </p>
                        @enderror
                    </div>

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
                        <button
                            type="submit"
                            class="btn btn-primary"
                            wire:loading.class="btn-disabled"
                            wire:loading.attr="disabled"
                        >
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
