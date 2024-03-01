<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginUserRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class LoginController extends Controller
{
	public function index(): View
	{
		return view('login');
	}

	public function login(LoginUserRequest $request): RedirectResponse
	{
		$validated = $request->validated();

		if (auth()->attempt($validated)) {
			return redirect(route('dashboard'))->with('success', 'successfully signed in!');
		}

		return back()->withErrors(['email'=> 'your credentials could not be verified']);
	}

	public function logout(): RedirectResponse
	{
		auth()->logout();
		return redirect(route('login.show'));
	}
}
