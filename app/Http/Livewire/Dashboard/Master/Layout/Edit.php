<?php

namespace App\Http\Livewire\Dashboard\Master\Layout;

use App\Models\Layout;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\DB;
use Livewire\Component;
use Livewire\Event;

class Edit extends Component
{
    /** @var \App\Models\Layout $layout */
    public Layout $layout;

    /** @var bool $is_open */
    public bool $is_open = false;

    /** @var array<string, mixed> $rules */
    protected $rules = [
        'layout.name' => ['required', 'string'],
        'layout.grid_w' => ['required', 'numeric'],
        'layout.grid_h' => ['required', 'numeric'],
    ];

    /** @var array<string, mixed> $listeners */
    protected $listeners = [
        'edit_layout' => 'edit_layout',
    ];

    /**
     * Set the layout model to the corresponding model.
     *
     * @param string $id
     * @return void
     */
    public function edit_layout(string $id)
    {
        $this->layout = Layout::find($id);
        $this->is_open = true;
    }

    /**
     * Update the layout.
     *
     * @return void
     */
    public function update(): Event
    {
        $this->validate();

        try {
            DB::beginTransaction();

            $this->layout->save();
        } catch (\Throwable $th) {
            DB::rollBack();

            return $this->emit('error', $th->getMessage());
        }

        DB::commit();

        $this->emitTo('layout-data-table', 'refreshComponent');

        return $this->emit('success', 'Berhasil memperbarui layout.');
    }

    /**
     * Mount the component.
     *
     * @return void
     */
    public function mount()
    {
        $this->layout = new Layout();
    }

    /**
     * Render the component.
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function render(): View
    {
        return view('livewire.dashboard.master.layout.edit');
    }
}
