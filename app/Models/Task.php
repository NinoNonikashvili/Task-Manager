<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Task extends Model
{
	use HasFactory;

	use HasTranslations;

	public $translatable = ['name', 'description'];

	protected $guarded = [];

	public function author()
	{
		return $this->belongsTo(User::class, 'user_id');
	}
}
