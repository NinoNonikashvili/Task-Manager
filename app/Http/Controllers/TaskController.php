<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
	public function index(Task $tasks, Request $request)
	{
		$column = $request['column'] ?? 'created_at';
		$sort = $request['sort'] ?? 'desc';
		return view('dashboard', ['tasks' => $tasks::orderBy($column, $sort)->paginate(8)->appends(request()->query())]);
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
