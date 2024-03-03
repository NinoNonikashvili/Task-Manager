<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;
use Faker\Factory as GeorgianFactory;

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
			'name'        => ['en' => $this->faker->sentence(), 'ka' => GeorgianFactory::create('ka_GE')->realText(15)],
			'description' => ['en' => $this->faker->paragraph(), 'ka' => GeorgianFactory::create('ka_GE')->realText(300)],
			'due_date'    => $this->faker->date(),
			'created_at'  => $this->faker->date(),
		];
	}
}
