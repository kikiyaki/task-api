<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TaskController extends Controller
{
    public function index()
    {
        $taskList = Task::where('user_id', Auth::id())
            ->get()
            ->toArray();

        return response()->json($taskList);
    }

    public function create(Request $request)
    {
        $params = $request->all();
        $newTask = new Task();
        $newTask->title = $params['title'];
        $newTask->ready = false;
        $newTask->user_id = Auth::id();
        $newTask->save();

        return response(null, 201);
    }

    public function update($id)
    {
        $task = Task::find($id);
        if ($task->user_id !== Auth::id()) {
            return response(null, 403);
        }
        $task->ready = !$task->ready;
        $task->update();

        return response(null, 200);
    }

    public function delete($id)
    {
        $task = Task::find($id);
        if ($task->user_id !== Auth::id()) {
            return response(null, 403);
        }
        $task->delete();

        return response(null, 204);
    }
}
