<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdateUserRequest;
use App\Models\User;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{
	public function edit()
	{
		$avatar = $this::retrieveUserAvatar();
		$cover = LoginController::retrieveCover();
		return view('profile.edit', ['user' => auth()->user(), 'avatar'=>$avatar, 'cover'=>$cover]);
	}

	public function update(UpdateUserRequest $request)
	{
		$user = User::find(auth()->id());
		if (!empty($request['avatar'])) {
			if (!Storage::disk()->exists('avatar/user-' . $user->id)) {
				Storage::disk()->makeDirectory('avatar/user-' . $user->id);
			} else {
				Storage::disk()->deleteDirectory('avatar/user-' . $user->id);
			}
			$user->avatar = $request->file('avatar')->store('avatar/user-' . $user->id);
		}
		if (!empty($request['cover'])) {
			if (!Storage::disk()->exists('cover')) {
				Storage::disk()->makeDirectory('cover');
			} else {
				Storage::disk()->deleteDirectory('cover');
			}
			$request->file('cover')->store('cover');
		}
		$user->password = bcrypt($request['new_password']);
		$user->save();

		return redirect(route('dashboard'));
	}

	public static function retrieveUserAvatar(): String
	{
		$path = auth()->user()->avatar ? 'storage/' . auth()->user()->avatar : 'images/avatar.png';
		return asset($path);
	}
}
