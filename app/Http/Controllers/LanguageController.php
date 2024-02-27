<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;

class LanguageController extends Controller
{
	public function switchLang($locale): RedirectResponse
	{
		app()->setLocale($locale);
		return redirect()->back()->with('locale', $locale);
	}
}
