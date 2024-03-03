<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdateUserRequest;
use App\Models\User;
use Illuminate\Http\RedirectResponse;

class UserController extends Controller
{
	public function edit(User $user)
	{
		return view('profile.edit', ['user' => $user]);
	}

	public function update(UpdateUserRequest $request, User $user): RedirectResponse
	{
		return redirect(route('dashboard'));
	}
}
