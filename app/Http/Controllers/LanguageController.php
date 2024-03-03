<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Session;

class LanguageController extends Controller
{
	public function switchLang($locale): RedirectResponse
	{
		Session::put('locale', $locale);
		return redirect()->back();
	}
}
