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

	public function login(LoginUserRequest $request, $lang): RedirectResponse
	{
		$validated = $request->validated();

		if (auth()->attempt($validated)) {
			return redirect('/')->with('success', 'successfully signed in!');
		}

		return back()->withErrors(['email'=> 'your credentials could not be verified']);
	}
}
