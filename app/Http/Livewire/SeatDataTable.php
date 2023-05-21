<?php

namespace App\Http\Livewire;

use App\Models\Seat;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Facades\DB;
use Livewire\Event;
use Mediconesystems\LivewireDatatables\Column;
use Mediconesystems\LivewireDatatables\Http\Livewire\LivewireDatatable;

class SeatDataTable extends LivewireDatatable
{
    /** @var array<string, mixed> $listeners */
    protected $listeners = [
        'refreshComponent' => '$refresh',
    ];

    /**
     * Destroy the Seat.
     *
     * @param string $id
     * @return \Livewire\Event
     */
    public function destroy(string $id): Event
    {
        try {
            DB::beginTransaction();

            Seat::destroy($id);
        } catch (\Throwable $th) {
            DB::rollBack();

            return $this->emit('error', 'Gagal menghapus seat: ' . $th->getMessage());
        }

        DB::commit();

        return $this->emit('success', 'Berhasil menghapus seat.');
    }

    /**
     * Emit the event to show the edit form.
     *
     * @param string $id
     * @return void
     */
    public function edit(string $id): void
    {
        $this->emitTo('dashboard.master.seat.edit', 'edit_seat', $id);
    }

    /**
     * Return the Seat builder.
     *
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function builder(): Builder
    {
        return Seat::query();
    }

    /**
     * Render the columns.
     *
     * @return array
     */
    public function columns()
    {
        return [
            Column::index($this)
                ->label('No'),

            Column::name('name'),

            Column::callback(
                    ['id'],
                    fn ($id) => view('dashboard.master.seat.option', [
                        'id' => $id
                    ])
                )
                ->label('Opsi'),
        ];
    }
}
