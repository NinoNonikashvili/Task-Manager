<?php

namespace App\Console\Commands;

use App\Models\User;
use Illuminate\Console\Command;

class CreateUser extends Command
{
	/**
	 * The name and signature of the console command.
	 *
	 * @var string
	 */
	protected $signature = 'create-user {data*}';

	/**
	 * The console command description.
	 *
	 * @var string
	 */
	protected $description = 'validate data. create user and login if does not exist otherwise call login method. pass email and password as space separated arguments';

	/**
	 * Execute the console command.
	 */
	public function handle()
	{
		$data = $this->argument('data');

		User::create(['email'=> $data[0], 'password'=>$data[1]]);
	}
}
