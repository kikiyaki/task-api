<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index()
    {
        return Task::all();
    }

    public function create(Request $request)
    {
        $params = $request->all();
        $newTask = new Task();
        $newTask->title = $params['title'];
        $newTask->ready = false;
        $newTask->save();

        return response(null, 201);
    }

    public function update(Request $request, $id)
    {
        $params = $request->all();

        $task = Task::find($id);
        $task->update($params);

        return $task;
    }

    public function delete($id)
    {
        $task = Task::find($id);
        $task->delete();

        return response(null, 204);
    }
}
