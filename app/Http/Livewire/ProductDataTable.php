<?php

namespace App\Http\Livewire;

use App\Models\Product;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Facades\DB;
use Livewire\Event;
use Mediconesystems\LivewireDatatables\Column;
use Mediconesystems\LivewireDatatables\Http\Livewire\LivewireDatatable;

class ProductDataTable extends LivewireDatatable
{
    /** @var array<string, mixed> $listeners */
    protected $listeners = [
        'refreshComponent' => '$refresh',
    ];

    /**
     * Destroy the Product.
     *
     * @param string $id
     * @return \Livewire\Event
     */
    public function destroy(string $id): Event
    {
        try {
            DB::beginTransaction();

            Product::destroy($id);
        } catch (\Throwable $th) {
            DB::rollBack();

            return $this->emit('error', 'Gagal menghapus produk: ' . $th->getMessage());
        }

        DB::commit();

        return $this->emit('success', 'Berhasil menghapus produk.');
    }

    /**
     * Emit the event to show the edit form.
     *
     * @param string $id
     * @return void
     */
    public function edit(string $id): void
    {
        $this->emitTo('dashboard.master.product.edit', 'edit_product', $id);
    }

    /**
     * Return the Product builder.
     *
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function builder(): Builder
    {
        return Product::query()
            ->with(['category']);
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

            Column::name('name')
                ->label('Nama Produk'),

            Column::name('category.name')
                ->label('Kategori'),

            Column::name('description')
                ->label('Deskripsi'),

            Column::name('price')
                ->label('Harga')
                ->view('dashboard.master.product.price')
                ->alignRight(),

            Column::callback(
                    ['id'],
                    fn ($id) => view('dashboard.master.product.option', [
                        'id' => $id
                    ])
                )
                ->width(250)
                ->label('Opsi'),
        ];
    }
}
