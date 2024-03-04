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
	public function rules(): array
	{
		return [
			'current_pass'       => 'required|current_password:web',
			'new_password'       => 'required|min:4',
			'duplicate_password' => 'required|same:new_password',
			'avatar'             => 'image',
			'cover'              => 'image',
		];
	}
}
