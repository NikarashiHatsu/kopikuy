<div>
    <div x-data="{ is_open: @entangle('is_open') }">
        <input
            type="checkbox"
            id="layout-edit"
            class="modal-toggle"
            x-bind:checked="is_open"
        />

        <label for="layout-edit" class="modal cursor-pointer" x-cloak>
            <label class="modal-box relative" for="">
                <h3 class="text-lg font-bold">
                    Edit Layout
                </h3>

                <form
                    wire:submit.prevent="update"
                    method="post"
                    x-data="{ tool: '' }"
                >
                    <div class="form-control">
                        <label for="layout.name" class="label">
                            <span class="label-text">
                                Nama Layout
                                <span class="text-red-500">*</span>
                            </span>
                        </label>

                        <input
                            type="text"
                            class="input input-bordered"
                            wire:model.defer="layout.name"
                            id="layout.name"
                            required
                        />

                        @error('layout.name')
                            <p class="text-red-500 mt-2 text-xs">
                                {{ $message }}
                            </p>
                        @enderror
                    </div>

                    <div class="form-control">
                        <label for="layout.grid_w" class="label">
                            <span class="label-text">
                                Panjang Grid
                                <span class="text-red-500">*</span>
                            </span>
                        </label>

                        <input
                            type="number"
                            class="input input-bordered"
                            wire:model="layout.grid_w"
                            id="layout.grid_w"
                            required
                        />

                        @error('layout.grid_w')
                            <p class="text-red-500 mt-2 text-xs">
                                {{ $message }}
                            </p>
                        @enderror
                    </div>

                    <div class="form-control mb-4">
                        <label for="layout.grid_h" class="label">
                            <span class="label-text">
                                Tinggi Grid
                                <span class="text-red-500">*</span>
                            </span>
                        </label>

                        <input
                            type="number"
                            class="input input-bordered"
                            wire:model="layout.grid_h"
                            id="layout.grid_h"
                            required
                        />

                        @error('layout.grid_h')
                            <p class="text-red-500 mt-2 text-xs">
                                {{ $message }}
                            </p>
                        @enderror
                    </div>

                    <div class="alert alert-info mb-4">
                        Anda bisa mengisi informasi lengkap grid ini nanti.
                    </div>

                    <div class="btn-group w-full mb-4">
                        <button
                            type="button"
                            class="btn btn-sm btn-info"
                            x-bind:class="{ 'btn-ghost btn-outline': tool !== 'chair' }"
                            x-on:click="tool = 'chair'"
                        >
                            Kursi
                        </button>

                        <button
                            type="button"
                            class="btn btn-sm btn-success"
                            x-bind:class="{ 'btn-ghost btn-outline': tool !== 'table' }"
                            x-on:click="tool = 'table'"
                        >
                            Meja
                        </button>
                    </div>

                    <div class="aspect-w-1 aspect-h-1">
                        <div
                            x-data="{
                                selected: [],
                                selectGrid(i, j) {
                                    if (this.selected.includes(`${i}-${j}-${tool}`)) {
                                        this.selected = this.selected.filter(item => item !== `${i}-${j}-${tool}`)
                                    } else {
                                        this.selected.push(`${i}-${j}-${tool}`)
                                    }
                                }
                            }"
                            style="
                                grid-template-columns: repeat({{ $layout->grid_w ?? 20 }}, minmax(0, 1fr));
                                grid-template-rows: repeat({{ $layout->grid_h ?? 20 }}, minmax(0, 1fr));
                            "
                            class="grid grid-flow-row border-x border-y w-full h-full rounded"
                        >
                            @for ($i = 0; $i < $layout->grid_h; $i++)
                                @for ($j = 0; $j < $layout->grid_w; $j++)
                                    <div
                                        x-on:click="selectGrid({{ $i }}, {{ $j }})"
                                        x-bind:class="{
                                            'bg-blue-300 border-blue-500': selected.includes({{ $i }} + '-' + {{ $j }} + '-chair'),
                                            'bg-green-300 border-green-500': selected.includes({{ $i }} + '-' + {{ $j }} + '-table'),
                                            'hover:bg-blue-300 hover:border-blue-500': tool === 'chair',
                                            'hover:bg-green-300 hover:border-green-500': tool === 'table',
                                        }"
                                        class="transition duration-300 ease-in-out cursor-pointer border-x border-y"
                                    ></div>
                                @endfor
                            @endfor
                        </div>
                    </div>

                    <div class="flex justify-end mt-4">
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
