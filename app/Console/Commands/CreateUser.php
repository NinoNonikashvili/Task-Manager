<?php

namespace App\Console\Commands;

use App\Models\User;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Validator;

class CreateUser extends Command
{
	/**
	 * The name and signature of the console command.
	 *
	 * @var string
	 */
	protected $signature = 'task-manager:create-user';

	/**
	 * The console command description.
	 *
	 * @var string
	 */
	protected $description = 'validate data. create user and login if does not exist otherwise call login method. pass email and password as space separated arguments';

	/**
	 * Execute the console command.
	 */
	public function handle(): void
	{
		$email = $this->ask('Type email: (email is required to create user) ');
		$password = $this->secret('Type password: (min 4 chars');
		$data = [
			'email'    => $email ?? '',
			'password' => $password ?? '',
		];
		$validator = Validator::make(
			$data,
			[
				'email'   => 'required|email|unique:users,email',
				'password'=> 'required|min:4',
			]
		);

		$this->line($validator->validated());

		if (User::create($validator->validated())) {
			$this->line('user created successfully!');
		}
	}
}
