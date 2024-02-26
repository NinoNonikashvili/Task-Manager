<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Artisan;
use Illuminate\View\View;

class LoginController extends Controller
{
	public function index(): View
	{
		return view('login');
	}

	public function login(Request $request): RedirectResponse
	{
		$validated = $request->validate(
			[
				'email'   => 'required|email',
				'password'=> 'required|min:4',
			]
		);

		$validator = Validator::make($request->all(), [
			'email' => 'exists:users,email',
		]);

		if ($validator->fails()) {
			Artisan::call('create-user', ['data'=> [$validated['email'], $validated['password']]]);
		}

		if (auth()->attempt($validated)) {
			return redirect('/')->with('success', 'successfully signed in!');
		}

		return back()->withErrors(['email'=> 'your credentials could not be verified']);
	}
}
