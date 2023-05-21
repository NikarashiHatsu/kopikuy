<?php

namespace App\Http\Livewire\Dashboard\Master\Seat;

use App\Models\Seat;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\DB;
use Livewire\Component;
use Livewire\Event;

class Edit extends Component
{
    /** @var \App\Models\Seat $seat */
    public Seat $seat;

    /** @var bool $is_open */
    public bool $is_open = false;

    /** @var array<string, mixed> $rules */
    protected $rules = [
        'seat.name' => ['required', 'string', 'unique:seats,name'],
    ];

    /** @var array<string, mixed> $listeners */
    protected $listeners = [
        'edit_seat' => 'edit_seat',
    ];

    /**
     * Set the seat model to the corresponding model.
     *
     * @param string $id
     * @return void
     */
    public function edit_seat(string $id)
    {
        $this->seat = Seat::find($id);
        $this->is_open = true;
    }

    /**
     * Update the seat.
     *
     * @return void
     */
    public function update(): Event
    {
        $this->validate();

        try {
            DB::beginTransaction();

            $this->seat->save();
        } catch (\Throwable $th) {
            DB::rollBack();

            return $this->emit('error', $th->getMessage());
        }

        DB::commit();

        $this->emitTo('seat-data-table', 'refreshComponent');

        return $this->emit('success', 'Berhasil memperbarui seat.');
    }

    /**
     * Mount the component.
     *
     * @return void
     */
    public function mount()
    {
        $this->seat = new Seat();
    }

    /**
     * Render the component.
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function render(): View
    {
        return view('livewire.dashboard.master.seat.edit');
    }
}
