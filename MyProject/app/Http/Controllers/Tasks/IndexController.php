<?php

namespace App\Http\Controllers\Tasks;

use App\Http\Controllers\Controller;
use App\Models\Task;

class IndexController extends Controller
{
    public function __invoke()
    {
        $tasks = Task::all();
        return view('tests.index', compact('tasks'));
    }
}
