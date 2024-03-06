<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateUserRequest extends FormRequest
{
	/**
	 * Get the validation rules that apply to the request.
	 *
	 * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
	 */
	public function rules()
	{
		// If any of the fields has a value, validate all of them
		if ($this->input('current_password') || $this->input('new_password') || $this->input('duplicate_password')) {
			return [
				'current_password'       => 'required|current_password:web',
				'new_password'           => 'required|min:4',
				'duplicate_password'     => 'required|same:new_password',
				'avatar'                 => 'image',
				'cover'                  => 'image',
			];
		}

		// If none of the fields have a value, don't validate any of them
		return [
			'avatar'                 => 'image',
			'cover'                  => 'image',
		];
	}
}
