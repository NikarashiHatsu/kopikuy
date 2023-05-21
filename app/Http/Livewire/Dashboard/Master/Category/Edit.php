<?php

namespace App\Http\Livewire\Dashboard\Master\Category;

use App\Models\Category;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\DB;
use Livewire\Component;
use Livewire\Event;

class Edit extends Component
{
    /** @var \App\Models\Category $category */
    public Category $category;

    /** @var bool $is_open */
    public bool $is_open = false;

    /** @var array<string, mixed> $rules */
    protected $rules = [
        'category.name' => ['required', 'string', 'unique:categories,name'],
    ];

    /** @var array<string, mixed> $listeners */
    protected $listeners = [
        'edit_category' => 'edit_category',
    ];

    /**
     * Set the category model to the corresponding model.
     *
     * @param string $id
     * @return void
     */
    public function edit_category(string $id)
    {
        $this->category = Category::find($id);
        $this->is_open = true;
    }

    /**
     * Update the category.
     *
     * @return void
     */
    public function update(): Event
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

        $this->emitTo('category-data-table', 'refreshComponent');

        return $this->emit('success', 'Berhasil memperbarui kategori.');
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
        return view('livewire.dashboard.master.category.edit');
    }
}
