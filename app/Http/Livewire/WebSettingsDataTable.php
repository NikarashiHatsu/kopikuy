<?php

namespace App\Http\Livewire;

use App\Models\Setting;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Facades\DB;
use Livewire\Event;
use Mediconesystems\LivewireDatatables\Column;
use Mediconesystems\LivewireDatatables\Http\Livewire\LivewireDatatable;

class WebSettingsDataTable extends LivewireDatatable
{
    /** @var array<string, mixed> $listeners */
    protected $listeners = [
        'refreshComponent' => '$refresh',
    ];

    /**
     * Emit the event to show the edit form.
     *
     * @param string $id
     * @return void
     */
    public function edit(string $id): void
    {
        $this->emitTo('dashboard.settings.web.edit', 'edit_setting', $id);
    }

    /**
     * Return the Category builder.
     *
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function builder(): Builder
    {
        return Setting::query();
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

            Column::name('key'),

            Column::callback(
                    ['id'],
                    fn ($id) => view('dashboard.settings.web.option', [
                        'id' => $id
                    ])
                )
                ->label('Opsi'),
        ];
    }
}
