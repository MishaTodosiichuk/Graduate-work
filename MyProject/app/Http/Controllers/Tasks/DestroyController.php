<?php

namespace App\Http\Controllers\Tasks;

use App\Http\Controllers\Controller;
use App\Models\Task;

class DestroyController extends Controller
{
    public function __invoke(Task $tasks)
    {
        $tasks->delete();//щоб вернути$post->restore();
        return redirect()->route('tasks.index');
    }
}
