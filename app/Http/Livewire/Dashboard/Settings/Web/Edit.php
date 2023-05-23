<?php

namespace App\Http\Livewire\Dashboard\Settings\Web;

use App\Models\Setting;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\DB;
use Livewire\Component;
use Livewire\Event;

class Edit extends Component
{
    /** @var \App\Models\Setting $setting */
    public Setting $setting;

    /** @var bool $is_open */
    public bool $is_open = false;

    /** @var array<string, mixed> $listeners */
    protected $listeners = [
        'edit_setting' => 'edit_setting',
    ];

    /**
     * Validation rules.
     *
     * @return array<string, mixed>
     */
    protected function rules(): array
    {
        $base_rules = [
            'setting.key' => ['required', 'string'],
        ];

        $additional_rules = collect($this->setting->coltypes)
            ->flatMap(function($col, $key) {
                return [
                    "setting.props.*.$key" => ['nullable'],
                ];
            })
            ->toArray();

        return array_merge($base_rules, $additional_rules);
    }

    /**
     * Add a property into the setting.
     *
     * @return void
     */
    public function add_prop()
    {
        // Prepare an empty prop.
        $empty_setting = $this->setting->props[0];

        foreach ($empty_setting as $key => $value) {
            $empty_setting[$key] = null;
        }

        $this->setting->props = array_merge($this->setting->props, [$empty_setting]);
    }

    /**
     * Remove a property from the setting.
     *
     * @param int $index
     * @return void
     */
    public function remove_prop(int $index)
    {
        $new_props = $this->setting->props;
        array_splice($new_props, $index, 1);

        $this->setting->props = $new_props;
    }

    /**
     * Set the setting model to the corresponding model.
     *
     * @param string $id
     * @return void
     */
    public function edit_setting(string $id)
    {
        $this->setting = Setting::find($id);
        $this->is_open = true;
    }

    /**
     * Update the setting.
     *
     * @return void
     */
    public function update(): Event
    {
        $this->validate();

        try {
            DB::beginTransaction();

            $this->setting->save();
        } catch (\Throwable $th) {
            DB::rollBack();

            return $this->emit('error', $th->getMessage());
        }

        DB::commit();

        $this->emitTo('setting-data-table', 'refreshComponent');

        return $this->emit('success', 'Berhasil memperbarui pengaturan.');
    }

    /**
     * Render the component.
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function render(): View
    {
        return view('livewire.dashboard.settings.web.edit');
    }
}
