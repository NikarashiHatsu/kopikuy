<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Menu extends Component
{
    /** @var array $menu */
    public array $menu = [];

    /**
     * Mount the component.
     *
     * @param array $menu
     * @return void
     */
    public function mount(array $menu)
    {
        $this->menu = $menu;
    }

    public function render()
    {
        return view('livewire.menu');
    }
}
