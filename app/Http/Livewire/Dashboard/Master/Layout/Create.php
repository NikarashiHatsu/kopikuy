<?php

namespace App\Http\Livewire\Dashboard\Master\Layout;

use App\Models\Layout;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\DB;
use Livewire\Component;
use Livewire\Event;

class Create extends Component
{
    /** @var \App\Models\Layout $layout */
    public Layout $layout;

    /** @var array<string, mixed> $rules */
    protected $rules = [
        'layout.name' => ['required', 'string'],
        'layout.grid_w' => ['required', 'numeric'],
        'layout.grid_h' => ['required', 'numeric'],
    ];

    /**
     * Store the layout.
     *
     * @return void
     */
    public function store(): Event
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

        $this->layout = new Layout();
        $this->emitTo('layout-data-table', 'refreshComponent');

        return $this->emit('success', 'Berhasil menambahkan layout baru.');
    }

    /**
     * Mount the component.
     *
     * @return void
     */
    public function mount()
    {
        $this->layout = new Layout([
            'grid_w' => 20,
            'grid_h' => 20,
        ]);
    }

    /**
     * Render the component.
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function render(): View
    {
        return view('livewire.dashboard.master.layout.create');
    }
}
