<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Task>
 */
class TaskFactory extends Factory
{
	/**
	 * Define the model's default state.
	 *
	 * @return array<string, mixed>
	 */
	public function definition(): array
	{
		return [
			'user_id'     => User::first(),
			'name'        => ['en' => $this->faker->sentence(), 'ka' => $this->faker->sentence()],
			'description' => ['en' => $this->faker->paragraph(), 'ka' => $this->faker->paragraph()],
			'due_date'    => $this->faker->date(),
			'created_at'  => $this->faker->date(),
		];
	}
}
