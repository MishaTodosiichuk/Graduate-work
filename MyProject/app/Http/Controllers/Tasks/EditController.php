<?php

namespace App\Http\Controllers\Tasks;

use App\Http\Controllers\Controller;
use App\Models\Task;

class EditController extends Controller
{
    public function __invoke(Task $tasks)
    {
        return view('tasks.edit', compact('tasks'));
    }
}
