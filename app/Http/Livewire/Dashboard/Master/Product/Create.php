<?php

namespace App\Http\Livewire\Dashboard\Master\Product;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Contracts\View\View;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\Event;
use Livewire\WithFileUploads;

class Create extends Component
{
    use WithFileUploads;

    /** @var \App\Models\Product $product */
    public Product $product;

    /** @var array<\App\Models\Category> $categories */
    public array $categories = [];

    /** @var array<\Illuminate\Http\UploadedFile> $images */
    public $images = [];

    /** @var array<string, mixed> $rules */
    protected $rules = [
        'images.*' => ['image', 'max:2048'],
        'product.category_id' => ['required', 'exists:categories,id'],
        'product.name' => ['required', 'string'],
        'product.description' => ['required', 'string', 'min:8'],
        'product.price' => ['required', 'numeric', 'min:10000'],
    ];

    /**
     * Store the product.
     *
     * @return void
     */
    public function store(): Event
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

            return $this->emit('error', 'Gagal menambahkan produk baru: ' . $th->getMessage());
        }

        DB::commit();

        $this->product = new Product();
        $this->emitTo('product-data-table', 'refreshComponent');

        return $this->emit('success', 'Berhasil menambahkan produk baru.');
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
        return view('livewire.dashboard.master.product.create');
    }
}
