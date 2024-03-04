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
		$files = glob(public_path('storage/avatar/avatar' . '.*'));
		$path = explode('public', $files[0]);
		$avatar = $files ? asset($path[1]) : asset('images/avatar.png');
		return view('profile.edit', ['user' => $user, 'avatar'=>$avatar]);
	}

	public function update(UpdateUserRequest $request)
	{
		$user = User::find(auth()->id());
		if (!empty($request['avatar'])) {
			Storage::disk()->deleteDirectory('avatar');
			$user->avatar = $request->file('avatar')->storeAs('avatar', 'avatar.' . $request->file('avatar')->extension());
		}
		if (!empty($request['cover'])) {
			Storage::disk()->deleteDirectory('cover');
			$user->cover = $request->file('cover')->storeAs('cover', 'cover.' . $request->file('cover')->extension());
		}

		$user->password = bcrypt($request['new_password']);
		$user->save();

		return redirect(route('dashboard'));
	}
}
