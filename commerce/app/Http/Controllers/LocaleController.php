<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;

class LocaleController
{
    /**
     * @param $locale
     * @return RedirectResponse
     */
    public function change($locale): RedirectResponse
    {
        app()->setLocale($locale);

        session()->put('locale', $locale);

        return redirect()->back();
    }
}
