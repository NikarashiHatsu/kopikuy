<?php

namespace App\Http\Livewire\Dashboard\Master\Product;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\DB;
use Livewire\Component;
use Livewire\Event;

class Edit extends Component
{
    /** @var \App\Models\Product $product */
    public Product $product;

    /** @var array $categories */
    public array $categories = [];

    /** @var bool $is_open */
    public bool $is_open = false;

    /** @var array<string, mixed> $rules */
    protected $rules = [
        'product.category_id' => ['required', 'exists:categories,id'],
        'product.name' => ['required', 'string'],
        'product.description' => ['required', 'string', 'min:8'],
        'product.price' => ['required', 'numeric', 'min:10000'],
    ];

    /** @var array<string, mixed> $listeners */
    protected $listeners = [
        'edit_product' => 'edit_product',
    ];

    /**
     * Set the product model to the corresponding model.
     *
     * @param string $id
     * @return void
     */
    public function edit_product(string $id)
    {
        $this->product = Product::find($id);
        $this->is_open = true;
    }

    /**
     * Update the product.
     *
     * @return void
     */
    public function update(): Event
    {
        $this->validate();

        try {
            DB::beginTransaction();

            $this->product->save();
        } catch (\Throwable $th) {
            DB::rollBack();

            return $this->emit('error', $th->getMessage());
        }

        DB::commit();

        $this->emitTo('product-data-table', 'refreshComponent');

        return $this->emit('success', 'Berhasil memperbarui kategori.');
    }

    /**
     * Mount the component.
     *
     * @return void
     */
    public function mount()
    {
        $this->product = new Product();
        $this->categories = Category::all()->pluck('name', 'id')->toArray();
    }

    /**
     * Render the component.
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function render(): View
    {
        return view('livewire.dashboard.master.product.edit');
    }
}
