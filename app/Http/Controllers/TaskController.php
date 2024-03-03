<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateTaskRequest;
use App\Http\Requests\UpdateTaskRequest;
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
		$data = [
			'id'             => $task->id,
			'name.en'        => $task->getTranslation('name', 'en'),
			'name.ka'        => $task->getTranslation('name', 'ka'),
			'description.en' => $task->getTranslation('description', 'en'),
			'description.ka' => $task->getTranslation('description', 'ka'),
			'due_date'       => Carbon::parse($task->due_date)->format('d/m/y'),
		];
		return view('tasks.edit', ['task' => $data]);
	}

	public function update(UpdateTaskRequest $request, Task $task): RedirectResponse
	{
		$data = $request->validated();

		$date = Carbon::createFromFormat('d/m/y', $data['due_date'])->setTime(0, 0, 0)->format('Y-m-d H:i:s');

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
		return view('tasks.create');
	}

	public function store(CreateTaskRequest $request): RedirectResponse
	{
		$data = $request->validated();

		$date = Carbon::createFromFormat('d/m/y', $data['due_date'])->setTime(0, 0, 0)->format('Y-m-d H:i:s');

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
