<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateUpdateTaskRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use App\Models\Task;

class TaskController extends Controller
{
	public function index(Task $tasks, Request $request)
	{
		$column = $request['column'] ?? 'created_at';
		$sort = $request['sort'] ?? 'desc';
		$now = Carbon::now();
		if ($request['due_tasks']) {
			return view('dashboard', ['tasks' => $tasks::orderBy($column, $sort)->whereDate('due_date', '<', $now)->paginate(8)->appends(request()->query())]);
		}
		return view('dashboard', ['tasks' => $tasks::orderBy($column, $sort)->paginate(8)->appends(request()->query())]);
	}

	public function show(Task $task)
	{
		return view('tasks.show', ['task' => $task]);
	}

	public function edit(Task $task)
	{
		return view('tasks.edit', ['task' => $task]);
	}

	public function update(CreateUpdateTaskRequest $request)
	{
	}

	public function destroy(Request $request)
	{
		var_dump($request['id']);
	}

	public function create()
	{
		return 'hello create';
	}

	public function store()
	{
	}

	public function destroyOld(Request $request): RedirectResponse
	{
		Task::whereDate('due_date', '<', Carbon::now())->delete();
		return redirect(route('dashboard'));
	}
}
