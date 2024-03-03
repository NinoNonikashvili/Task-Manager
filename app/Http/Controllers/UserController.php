<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdateUserRequest;
use App\Models\User;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{
	public function edit()
	{
		$user = auth()->user();
		return view('profile.edit', ['user' => $user]);
	}

	public function update(UpdateUserRequest $request)
	{
		$user = User::find(auth()->id());
		if (isset($request['avatar'])) {
			Storage::deleteDirectory(public_path('storage/avatar'));

			$user->avatar = $request->file('avatar')->store('avatar');
		}
		if (isset($request['cover'])) {
			Storage::deleteDirectory(public_path('storage/cover'));
			$user->cover = $request->file('cover')->store('cover');
		}

		$user->password = bcrypt($request['new_password']);
		$user->save();

		return redirect(route('dashboard'));
	}
}
