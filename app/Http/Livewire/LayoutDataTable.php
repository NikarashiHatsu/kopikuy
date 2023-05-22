<?php

namespace App\Http\Livewire;

use App\Models\Layout;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Facades\DB;
use Livewire\Event;
use Mediconesystems\LivewireDatatables\Column;
use Mediconesystems\LivewireDatatables\Http\Livewire\LivewireDatatable;

class LayoutDataTable extends LivewireDatatable
{
    /** @var array<string, mixed> $listeners */
    protected $listeners = [
        'refreshComponent' => '$refresh',
    ];

    /**
     * Destroy the Layout.
     *
     * @param string $id
     * @return \Livewire\Event
     */
    public function destroy(string $id): Event
    {
        try {
            DB::beginTransaction();

            Layout::destroy($id);
        } catch (\Throwable $th) {
            DB::rollBack();

            return $this->emit('error', 'Gagal menghapus layout: ' . $th->getMessage());
        }

        DB::commit();

        return $this->emit('success', 'Berhasil menghapus layout.');
    }

    /**
     * Emit the event to show the edit form.
     *
     * @param string $id
     * @return void
     */
    public function edit(string $id): void
    {
        $this->emitTo('dashboard.master.layout.edit', 'edit_layout', $id);
    }

    /**
     * Return the Layout builder.
     *
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function builder(): Builder
    {
        return Layout::query();
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

            Column::name('grid_w')
                ->label('Panjang'),

            Column::name('grid_h')
                ->label('Tinggi'),

            Column::name('is_active')
                ->label('Status'),

            Column::callback(
                    ['id'],
                    fn ($id) => view('dashboard.master.layout.option', [
                        'id' => $id
                    ])
                )
                ->label('Opsi'),
        ];
    }
}
