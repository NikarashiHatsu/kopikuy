<div>
    <div x-data="{ is_open: @entangle('is_open') }">
        <input
            type="checkbox"
            id="settings-edit"
            class="modal-toggle"
            x-bind:checked="is_open"
        />

        <label for="settings-edit" class="modal cursor-pointer" x-cloak>
            <label class="modal-box relative" for="">
                <h3 class="text-lg font-bold">
                    Edit Pengaturan
                </h3>

                <form wire:submit.prevent="update" method="post">
                    <div class="form-control mb-4">
                        <label for="setting.key" class="label">
                            <span class="label-text">Nama Pengaturan</span>
                        </label>

                        <input
                            type="text"
                            class="input input-bordered"
                            wire:model.defer="setting.key"
                            id="setting.key"
                        />

                        @error('setting.key')
                            <p class="text-red-500 text-xs mt-2">
                                {{ $message }}
                            </p>
                        @enderror
                    </div>

                    <div class="form-control mb-4">
                        <table class="text-sm">
                            <thead>
                                <tr class="[&>*]:px-2 [&>*]:py-2 [&>*]:border text-left">
                                    <th></th>
                                    @forelse ($setting?->coltypes ?? [] as $key => $col)
                                        <th>
                                            {{ $key }}
                                        </th>
                                    @empty
                                    @endforelse
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($setting?->props ?? [] as $index => $prop)
                                    <tr class="[&>*]:px-2 [&>*]:py-2 [&>*]:border">
                                        <td>
                                            <button
                                                wire:click="remove_prop({{ $index }})"
                                                class="btn btn-sm btn-error tooltip"
                                                data-tip="Hapus"
                                            >
                                                <x-phosphor-trash class="w-4 h-4" />
                                            </button>
                                        </td>
                                        @forelse ($prop as $key => $value)
                                            <td>
                                                @switch($setting->coltypes[$key])
                                                    @case("string")
                                                        <input
                                                            type="text"
                                                            class="input input-sm input-bordered"
                                                            wire:model.defer="setting.props.{{ $loop->parent->index }}.{{ $key }}"
                                                            id="setting.props.{{ $loop->parent->index }}.{{ $key }}"
                                                        />
                                                        @break
                                                    @case("boolean")
                                                        <input
                                                            type="checkbox"
                                                            class="toggle toggle-sm"
                                                            wire:model.defer="setting.props.{{ $loop->parent->index }}.{{ $key }}"
                                                            id="setting.props.{{ $loop->parent->index }}.{{ $key }}"
                                                        />
                                                        @break
                                                    @default
                                                        @switch(gettype($setting->coltypes[$key]))
                                                            @case('array')
                                                                <select
                                                                    wire:model.defer="setting.props.{{ $loop->parent->index }}.{{ $key }}"
                                                                    id="setting.props.{{ $loop->parent->index }}.{{ $key }}"
                                                                    class="select select-sm select-bordered py-0"
                                                                >
                                                                    <option value="">-Pilih-</option>
                                                                    @foreach ($setting->coltypes[$key] as $option)
                                                                        <option value="{{ $option }}">{{ $option }}</option>
                                                                    @endforeach
                                                                </select>
                                                                @break
                                                            @default
                                                        @endswitch
                                                    @endswitch
                                            </td>
                                        @empty
                                        @endforelse
                                    </tr>
                                @empty
                                    <p>
                                        Pengaturan belum dibuat.
                                    </p>
                                @endforelse

                                <tr class="[&>*]:px-2 [&>*]:py-2 [&>*]:border">
                                    <td colspan="{{ count($setting?->coltypes ?? []) + 1 }}">
                                        <div class="flex justify-end">
                                            <button
                                                class="btn btn-primary btn-sm"
                                                type="button"
                                                wire:click="add_prop"
                                            >
                                                <x-phosphor-plus class="w-4 h-4 mr-2" />
                                                <span>
                                                    Tambah
                                                </span>
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
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
