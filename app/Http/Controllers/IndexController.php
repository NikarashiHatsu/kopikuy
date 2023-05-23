<?php

namespace App\Http\Controllers;

use App\Models\Setting;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    /**
     * Show index view.
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function __invoke(): View
    {
        $settings = Setting::query()
            ->where('key', 'Front Page')
            ->first();

        $reservation_contacts = Setting::query()
            ->where('key', 'Reservation Contact')
            ->first();

        $jadwal = Setting::query()
            ->where('key', 'Jadwal')
            ->first();

        return view('index', [
            'props' => $settings->props,
            'reservation_contacts' => $reservation_contacts->props,
            'jadwal' => $jadwal->props,
        ]);
    }
}
