<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;
use App\Http\Requests\TaskRequest;

class TaskController extends Controller
{
    public function index()
    {
        return view('tasks.index', ['tasks' => Task::latest()->paginate(10)]);
    }

    public function create()
    {
        return view('tasks.create');
    }

    public function store(TaskRequest $request, Task $task)
    {
        $task = Task::create($request->validated());

        return redirect()->route('tasks.show', ['task' => $task->id])->with('success', 'Task created successfully');
    }

    public function show(Task $task)
    {
        return view('tasks.show', ['task' => $task]);
    }

    public function edit(Task $task)
    {
        return view('tasks.edit', ['task' => $task]);
    }

    public function update(TaskRequest $request, Task $task)
    {
        $task->update($request->validated());

        return redirect()->route('tasks.show', ['task' => $task->id])->with('success', 'Task updated successfully');
    }

    public function destroy(Task $task)
    {
        $task->delete();

        return redirect()->route('tasks.index')->with('success', 'Task deleted successfully');
    }

    public function toggleComplete(Task $task)
    {
        $task->completed = !$task->completed;
        $task->save();
    
        return redirect()->back()->with('success', 'Task updated successfully');
    }
}
