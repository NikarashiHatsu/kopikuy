<?php

namespace App\Http\Livewire\Dashboard\Master\Category;

use App\Models\Category;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\DB;
use Livewire\Component;
use Livewire\Event;

class Create extends Component
{
    /** @var \App\Models\Category $category */
    public Category $category;

    /** @var array<string, mixed> $rules */
    protected $rules = [
        'category.name' => ['required', 'string', 'unique:categories,name'],
    ];

    /**
     * Store the category.
     *
     * @return void
     */
    public function store(): Event
    {
        $this->validate();

        try {
            DB::beginTransaction();

            $this->category->save();
        } catch (\Throwable $th) {
            DB::rollBack();

            return $this->emit('error', $th->getMessage());
        }

        DB::commit();

        $this->category = new Category();
        $this->emitTo('category-data-table', 'refreshComponent');

        return $this->emit('success', 'Berhasil menambahkan kategori baru.');
    }

    /**
     * Mount the component.
     *
     * @return void
     */
    public function mount()
    {
        $this->category = new Category();
    }

    /**
     * Render the component.
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function render(): View
    {
        return view('livewire.dashboard.master.category.create');
    }
}
