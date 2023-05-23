<?php

namespace App\View\Components;

use App\Models\Setting;
use Illuminate\View\Component;
use Illuminate\View\View;

class GuestLayout extends Component
{
    /**
     * Get the view / contents that represents the component.
     */
    public function render(): View
    {
        $jadwal = Setting::query()
            ->where('key', 'Jadwal')
            ->first();

        $kontak = Setting::query()
            ->where('key', 'Kontak')
            ->first();

        $about_us_short_description = Setting::query()
            ->where('key', 'About Us Short Description')
            ->first();

        return view('layouts.guest', [
            'jadwal' => $jadwal->props,
            'kontak' => $kontak->props,
            'about_us_short_description' => $about_us_short_description->props,
        ]);
    }
}
