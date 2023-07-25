<?php

namespace App\Http\Controllers\Tasks;

use App\Http\Controllers\Controller;
use App\Models\Task;
use App\Models\Test;

class ShowController extends Controller
{
    public function __invoke(Test $test)
    {
        $task = Task::all();
        return view('tasks.show', compact('task'));
    }
}
