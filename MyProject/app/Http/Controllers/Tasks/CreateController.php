<?php

namespace App\Http\Controllers\Tasks;

use App\Http\Controllers\Controller;
use App\Models\Task;

class CreateController extends Controller
{
    public function __invoke()
    {
        $tasks = Task::all();
        return view('tests.create', compact('tasks'));
    }
}
