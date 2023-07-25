<?php

namespace App\Http\Controllers\Admin\Search;

use App\Http\Controllers\Controller;
use App\Models\Task;
use Illuminate\Http\Request;

class TasksController extends Controller
{
    public function __invoke(Request $request)
    {
        $s = $request->s;
        $tasks = Task::where('task', 'LIKE', "%{$s}%");
        return view('admin.tasks', compact('tasks'));
    }
}
