<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdateUserRequest;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{
	public function edit()
	{
		$avatar = $this::retrieveUserAvatar();
		$cover = LoginController::retrieveCover();
		return view('profile.edit', ['user' => auth()->user(), 'avatar'=>$avatar, 'cover'=>$cover]);
	}

	public function update(UpdateUserRequest $request): RedirectResponse
	{
		$user = User::find(auth()->id());
		if (!empty($request['avatar'])) {
			if (Storage::disk()->exists('avatar/user-' . $user->id)) {
				Storage::disk()->deleteDirectory('avatar/user-' . $user->id);
			}
			Storage::disk()->makeDirectory('avatar/user-' . $user->id);
			$user->avatar = $request->file('avatar')->store('avatar/user-' . $user->id);
			$user->save();
		}
		if (!empty($request['cover'])) {
			if (Storage::disk()->exists('cover')) {
				Storage::disk()->deleteDirectory('cover');
			}
			Storage::disk()->makeDirectory('cover');
			$request->file('cover')->store('cover');
		}
		if (!empty($request['new_password'])) {
			$user->password = bcrypt($request['new_password']);
			$user->save();
		}

		return redirect(route('dashboard'));
	}

	public static function retrieveUserAvatar(): String
	{
		$path = auth()->user()->avatar ? 'storage/' . auth()->user()->avatar : 'images/avatar.png';
		return asset($path);
	}
}
