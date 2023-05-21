<div>
    <div x-data="{ is_open: @entangle('is_open') }">
        <input
            type="checkbox"
            id="seat-edit"
            class="modal-toggle"
            x-bind:checked="is_open"
        />

        <label for="seat-edit" class="modal cursor-pointer" x-cloak>
            <label class="modal-box relative" for="">
                <h3 class="text-lg font-bold">
                    Edit Seat
                </h3>

                <form wire:submit.prevent="update" method="post">
                    <div class="form-control mb-4">
                        <label for="seat.name" class="label">
                            <span class="label-text">Nama Seat</span>
                        </label>

                        <input
                            type="text"
                            class="input input-bordered"
                            wire:model.defer="seat.name"
                            id="seat.name"
                        />

                        @error('seat.name')
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
