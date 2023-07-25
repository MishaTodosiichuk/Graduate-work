<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Task;

class TasksController extends Controller
{
    public function __invoke()
    {
        $tasks = Task::all();
        return view('admin.tasks', compact('tasks'));
    }
}
