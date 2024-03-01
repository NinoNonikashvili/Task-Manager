<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class TaskController extends Controller
{
	public function index(Task $tasks, Request $request)
	{
		$column = $request['column'] ?? 'created_at';
		$sort = $request['sort'] ?? 'desc';
		$due_tasks = $request['due_tasks'] ?? 'false';
		$now = Carbon::now();
		return view('dashboard', ['tasks' => $tasks::orderBy($column, $sort)->whereDate('due_date', '<', $now)->paginate(8)->appends(request()->query())]);
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
