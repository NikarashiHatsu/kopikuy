<div>
    <input
        type="checkbox"
        id="layout-create"
        class="modal-toggle"
    />

    <label for="layout-create" class="modal cursor-pointer">
        <label class="modal-box relative" for="">
            <h3 class="text-lg font-bold">
                Tambah Layout
            </h3>

            <form
                wire:submit.prevent="store"
                method="post"
                x-data="{
                    incrementor: @entangle('incrementor').defer,
                    letter: '',
                    tool: '',
                    seats: @entangle('seats').defer,
                    selectGrid(i, j, tool, letter) {
                        let temp_seat = this.seats.find(seat => seat.x == i && seat.y == j)
                        let key = Object.keys(this.seats).find(key => this.seats[key] === temp_seat)

                        if (tool === '') return

                        if (tool === 'chair' && letter === '') return

                        if (temp_seat && temp_seat.tool === tool) {
                            this.seats.splice(key, 1)
                            if (tool === 'chair') this.incrementor[letter] -= 1
                            return
                        }

                        if (this.incrementor[letter] === undefined) this.incrementor[letter] = 0

                        if (tool === 'chair') this.incrementor[letter] += 1

                        const data = {
                            x: i,
                            y: j,
                            tool: tool,
                            letter: tool == 'chair' ? letter : undefined,
                            increment: tool == 'chair' ? this.incrementor[letter] : undefined,
                        }

                        this.seats.push(data);
                    }
                }"
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

                <div class="flex mb-4">
                    <div class="input-group input-group-sm">
                        <button
                            type="button"
                            class="btn btn-sm btn-info"
                            x-bind:class="{ 'btn-ghost btn-outline': tool !== 'chair' }"
                            x-on:click="tool = 'chair'"
                        >
                            Kursi
                        </button>

                        <select
                            name="letter"
                            id="letter"
                            class="select select-bordered select-sm py-0"
                            x-model="letter"
                        >
                            <option value="">-Pilih-</option>
                            <option value="A">A</option>
                            <option value="B">B</option>
                            <option value="C">C</option>
                            <option value="D">D</option>
                            <option value="E">E</option>
                            <option value="F">F</option>
                            <option value="G">G</option>
                            <option value="H">H</option>
                            <option value="I">I</option>
                            <option value="J">J</option>
                            <option value="K">K</option>
                            <option value="L">L</option>
                            <option value="M">M</option>
                            <option value="N">N</option>
                            <option value="O">O</option>
                            <option value="P">P</option>
                            <option value="Q">Q</option>
                            <option value="R">R</option>
                            <option value="S">S</option>
                            <option value="T">T</option>
                            <option value="U">U</option>
                            <option value="V">V</option>
                            <option value="W">W</option>
                            <option value="X">X</option>
                            <option value="Y">Y</option>
                            <option value="Z">Z</option>
                        </select>
                    </div>

                    <div class="btn-group w-full">
                        <button
                            type="button"
                            class="btn btn-sm btn-success"
                            x-bind:class="{ 'btn-ghost btn-outline': tool !== 'table' }"
                            x-on:click="tool = 'table'"
                        >
                            Meja
                        </button>
                    </div>
                </div>

                <div class="aspect-w-1 aspect-h-1">
                    <div
                        style="
                            grid-template-columns: repeat({{ $layout->grid_w ?? 20 }}, minmax(0, 1fr));
                            grid-template-rows: repeat({{ $layout->grid_h ?? 20 }}, minmax(0, 1fr));
                        "
                        class="grid grid-flow-row border-x border-y w-full h-full rounded"
                    >
                        @for ($i = 0; $i < $layout->grid_h; $i++)
                            @for ($j = 0; $j < $layout->grid_w; $j++)
                                <div
                                    x-data="{ temp_seat: seats.find(seat => seat.x == {{ $i }} && seat.y == {{ $j }}) }"
                                    x-html="temp_seat?.tool == 'chair'
                                        ? temp_seat.letter + temp_seat.increment
                                        : ''"
                                    x-on:click="selectGrid({{ $i }}, {{ $j }}, tool, letter); temp_seat = seats.find(seat => seat.x == {{ $i }} && seat.y == {{ $j }});"
                                    x-bind:class="{
                                        'bg-blue-300 border-blue-500': seats.find(seat => seat.x == {{ $i }} && seat.y == {{ $j }})?.tool == 'chair',
                                        'bg-green-300 border-green-500': seats.find(seat => seat.x == {{ $i }} && seat.y == {{ $j }})?.tool == 'table',
                                        'hover:bg-blue-300 hover:border-blue-500': tool === 'chair',
                                        'hover:bg-green-300 hover:border-green-500': tool === 'table',
                                    }"
                                    class="transition duration-300 ease-in-out cursor-pointer border-x border-y flex items-center justify-center"
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
