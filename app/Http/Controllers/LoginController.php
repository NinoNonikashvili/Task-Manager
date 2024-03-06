<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginUserRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;
use Illuminate\Support\Facades\Storage;

class LoginController extends Controller
{
	public function index(): View
	{
		$cover = $this::retrieveCover('cover');

		return view('login', ['cover' => $cover]);
	}

	public function login(LoginUserRequest $request): RedirectResponse
	{
		$validated = $request->validated();

		if (auth()->attempt($validated)) {
			return redirect(route('dashboard'))->with('success', 'successfully signed in!');
		}

		return back()->withErrors(['email'=> __('login.wrong_credentials')])->withInput();
	}

	public function logout(): RedirectResponse
	{
		auth()->logout();
		return redirect(route('login.show'));
	}

	public static function retrieveCover(): String
	{
		if (!Storage::disk()->exists('cover')) {
			return asset('images/cover.png');
		} else {
			$pathes = Storage::disk()->files('cover');
			if (!empty($pathes)) {
				return asset('storage/' . $pathes[0]);
			}
		}
	}
}
