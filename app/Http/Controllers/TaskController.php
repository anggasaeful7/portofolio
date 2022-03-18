<?php

namespace App\Http\Controllers;

use App\Http\Requests\TaskRequest;
use Illuminate\Http\Request;
use App\Models\Task;

class TaskController extends Controller
{
    public function index()
    {
        $tasks = Task::orderBy('id', 'desc')->get();
        return view('task.index', compact('tasks'));
    }
    public function store(TaskRequest $request)
    {
        Task::create([
            'list' => $request->list,
            'mark' => false,
        ]);
        return redirect('task');
    }
    public function edit($id)
    {
        $tasks = Task::find($id);
        return view('task.edit', compact('tasks'));
    }
    public function update(TaskRequest $request, $id)
    {
        Task::find($id)->update([
            'list' => $request->list, 
        ]);
        return redirect('task');
    }
    public function destroy($id)
    {
        Task::find($id)->delete();
        return back();
    }
}
