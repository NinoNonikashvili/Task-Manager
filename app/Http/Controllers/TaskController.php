<?php

namespace App\Http\Controllers;

use App\Models\Task;

class TaskController extends Controller
{
	public function index(Task $task)
	{
		return view('dashboard', ['tasks' => $task::latest()->paginate(8)]);
	}

	public function show(Task $task)
	{
		var_dump($task);
		return 'hello show';
	}

	public function create()
	{
		return 'hello create';
	}
}
