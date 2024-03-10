<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateTaskRequest;
use App\Http\Requests\UpdateTaskRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Redirect;
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
		$avatar = UserController::retrieveUserAvatar();

		$taskQuery = $tasks::orderBy($column, $sort);
		if ($request['due_tasks']) {
			$taskQuery->whereDate('due_date', '<', $now);
		}
		$tasks = $taskQuery->paginate(8)->appends(request()->query());

		if (count($tasks) === 0 && $tasks->currentPage() > 1) {
			return Redirect::to($tasks->previousPageUrl());
		}

		return view('dashboard', ['tasks' => $tasks, 'avatar' =>$avatar]);
	}

	public function show(Task $task)
	{
		$avatar = UserController::retrieveUserAvatar();
		return view('tasks.show', ['task' => $task, 'avatar' =>$avatar]);
	}

	public function edit(Task $task)
	{
		$data = [
			'id'             => $task->id,
			'name.en'        => $task->getTranslation('name', 'en'),
			'name.ka'        => $task->getTranslation('name', 'ka'),
			'description.en' => $task->getTranslation('description', 'en'),
			'description.ka' => $task->getTranslation('description', 'ka'),
			'due_date'       => Carbon::parse($task->due_date)->format('d/m/y'),
		];
		$avatar = UserController::retrieveUserAvatar();
		return view('tasks.edit', ['task' => $data, 'avatar' => $avatar]);
	}

	public function update(UpdateTaskRequest $request, Task $task): RedirectResponse
	{
		$data = $request->validated();

		$date = Carbon::createFromFormat('Y-m-d', $data['due_date'])->setTime(0, 0, 0)->format('Y-m-d H:i:s');

		$task->replaceTranslations('name', $data['name']);
		$task->replaceTranslations('description', $data['description']);

		$task->update(['due_date'=>$date]);
		return redirect(route('dashboard'));
	}

	public function destroy(Request $request): RedirectResponse
	{
		Task::find($request['id'])->delete();

		return redirect()->back();
	}

	public function create()
	{
		$avatar = UserController::retrieveUserAvatar();
		return view('tasks.create', ['avatar'=>$avatar]);
	}

	public function store(CreateTaskRequest $request): RedirectResponse
	{
		$data = $request->validated();

		$date = Carbon::createFromFormat('Y-m-d', $data['due_date'])->setTime(0, 0, 0)->format('Y-m-d H:i:s');

		$data['due_date'] = $date;
		$data['user_id'] = auth()->id();

		$task = Task::create($data);

		$task->save();

		return redirect(route('dashboard'));
	}

	public function destroyOld(Request $request): RedirectResponse
	{
		Task::whereDate('due_date', '<', Carbon::now())->delete();
		return redirect(route('dashboard'));
	}
}
