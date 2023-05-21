<?php

namespace App\Http\Livewire\Dashboard\Master\Seat;

use App\Models\Seat;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\DB;
use Livewire\Component;
use Livewire\Event;

class Create extends Component
{
    /** @var \App\Models\Seat $seat */
    public Seat $seat;

    /** @var array<string, mixed> $rules */
    protected $rules = [
        'seat.name' => ['required', 'string', 'unique:seats,name'],
    ];

    /**
     * Store the seat.
     *
     * @return void
     */
    public function store(): Event
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

        $this->seat = new Seat();
        $this->emitTo('seat-data-table', 'refreshComponent');

        return $this->emit('success', 'Berhasil menambahkan kategori baru.');
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
        return view('livewire.dashboard.master.seat.create');
    }
}
