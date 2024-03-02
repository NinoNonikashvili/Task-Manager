<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateTaskRequest extends FormRequest
{
	/**
	 * Determine if the user is authorized to make this request.
	 */
	public function authorize(): bool
	{
		return auth()->check();
	}

	/**
	 * Get the validation rules that apply to the request.
	 *
	 * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
	 */
	public function rules(): array
	{
		return [
			'title_en'       => 'required|min:3|regex:/^[a-zA-Z\s]+$/',
			'title_ka'       => 'required|min:3|regex:/^[ა-ჰ\s]+$/',
			'description_en' => 'required|min:3|regex:/^[a-zA-Z\s]+$/',
			'description_ka' => 'required|min:3|regex:/^[ა-ჰ\s]+$/',
			'due_date'       => 'required|date_format:d/m/y',
		];
	}
}
