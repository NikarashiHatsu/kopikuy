<?php

namespace App\Http\Livewire\Dashboard\Master\Product;

use App\Models\Category;
use App\Models\Image;
use App\Models\Product;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\Event;
use Livewire\WithFileUploads;

class Edit extends Component
{
    use WithFileUploads;

    /** @var \App\Models\Product $product */
    public Product $product;

    /** @var array $categories */
    public array $categories = [];

    /** @var array<\Illuminate\Http\UploadedFile> $images */
    public $images = [];

    /** @var bool $is_open */
    public bool $is_open = false;

    /** @var array<string, mixed> $rules */
    protected $rules = [
        'images.*' => ['image', 'max:2048'],
        'product.category_id' => ['required', 'exists:categories,id'],
        'product.name' => ['required', 'string'],
        'product.description' => ['required', 'string', 'min:8'],
        'product.price' => ['required', 'numeric', 'min:10000'],
    ];

    /** @var array<string, mixed> $listeners */
    protected $listeners = [
        'edit_product' => 'edit_product',
        'destroy_image' => 'destroy_image,'
    ];

    /**
     * Delete the product's image.
     *
     * @param string $id
     * @return void
     */
    public function destroy_image(string $id)
    {
        try {
            DB::beginTransaction();

            Image::destroy($id);
        } catch (\Throwable $th) {
            DB::rollBack();

            return $this->emit('error', 'Gagal menghapus foto produk: ' . $th->getMessage());
        }

        DB::commit();

        $this->product->refresh();

        return $this->emit('success', 'Berhasil menghapus foto produk.');
    }

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
     * @return \Livewire\Event;
     */
    public function update(): Event
    {
        $this->validate();

        try {
            DB::beginTransaction();

            $this->product->save();

            foreach ($this->images as $image) {
                $this->product->images()->create([
                    'filename' => $image->getClientOriginalName(),
                    'path' => url(Storage::url($image->store('public/' . date('Y-m-d')))),
                    'extension' => $image->getClientOriginalExtension(),
                    'name' => $image->getClientOriginalName(),
                    'size' => $image->getSize(),
                ]);
            }
        } catch (\Throwable $th) {
            DB::rollBack();

            return $this->emit('error', 'Gagal memperbarui produk baru: ' . $th->getMessage());
        }

        DB::commit();

        $this->emitTo('product-data-table', 'refreshComponent');
        $this->product->refresh();

        return $this->emit('success', 'Berhasil memperbarui produk.');
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
