<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateTaskRequest extends FormRequest
{
	/**
	 * Get the validation rules that apply to the request.
	 *
	 * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
	 */
	public function rules(): array
	{
		return [
			'name.en'        => 'required|min:3|regex:/^[a-zA-Z0-9.,!?"()@$%:*\-\s]+$/',
			'name.ka'        => 'required|min:3|regex:/^[ა-ჰ0-9.,!?"()@$%:*\-\s]+$/',
			'description.en' => 'required|min:3|regex:/^[a-zA-Z0-9.,!?"()@$%:*\-\s]+$/',
			'description.ka' => 'required|min:3|regex:/^[ა-ჰ0-9.,!?"()@$%:*\-\s]+$/',
			'due_date'       => 'required',
		];
	}
}
