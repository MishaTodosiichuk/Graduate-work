<?php

namespace App\Http\Controllers\Tasks;

use App\Http\Controllers\Controller;
use App\Models\Task;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function __invoke(Request $request)
    {
        $s = $request->s;
        $tasks = Task::where('task', 'LIKE', "%{$s}%");
        return view('tasks.index', compact('tasks'));
    }
}
