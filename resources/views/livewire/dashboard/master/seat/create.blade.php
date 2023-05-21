<div>
    <input
        type="checkbox"
        id="seat-create"
        class="modal-toggle"
    />

    <label for="seat-create" class="modal cursor-pointer">
        <label class="modal-box relative" for="">
            <h3 class="text-lg font-bold">
                Tambah Seat
            </h3>

            <form wire:submit.prevent="store" method="post">
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
