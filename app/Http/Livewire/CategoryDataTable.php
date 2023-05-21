<?php

namespace App\Http\Livewire;

use App\Models\Category;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Facades\DB;
use Livewire\Event;
use Mediconesystems\LivewireDatatables\Column;
use Mediconesystems\LivewireDatatables\Http\Livewire\LivewireDatatable;

class CategoryDataTable extends LivewireDatatable
{
    /** @var array<string, mixed> $listeners */
    protected $listeners = [
        'refreshComponent' => '$refresh',
    ];

    /**
     * Destroy the Category.
     *
     * @param string $id
     * @return \Livewire\Event
     */
    public function destroy(string $id): Event
    {
        try {
            DB::beginTransaction();

            Category::destroy($id);
        } catch (\Throwable $th) {
            DB::rollBack();

            return $this->emit('error', 'Gagal menghapus kategori: ' . $th->getMessage());
        }

        DB::commit();

        return $this->emit('success', 'Berhasil menghapus kategori.');
    }

    /**
     * Emit the event to show the edit form.
     *
     * @param string $id
     * @return void
     */
    public function edit(string $id): void
    {
        $this->emitTo('dashboard.master.category.edit', 'edit_category', $id);
    }

    /**
     * Return the Category builder.
     *
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function builder(): Builder
    {
        return Category::query();
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

            Column::name('slug'),

            Column::name('name'),

            Column::callback(
                    ['id'],
                    fn ($id) => view('dashboard.master.category.option', [
                        'id' => $id
                    ])
                )
                ->label('Opsi'),
        ];
    }
}
