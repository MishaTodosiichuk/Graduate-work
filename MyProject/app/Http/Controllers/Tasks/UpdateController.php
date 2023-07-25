<?php

namespace App\Http\Controllers\Tasks;

use App\Http\Controllers\Controller;
use App\Http\Requests\Tasks\UpdateRequest;
use App\Models\Task;

class UpdateController extends Controller
{
    public function __invoke(UpdateRequest $request,Task $tasks)
    {
        $data = $request->validated();

        $tasks->update($data);

        return redirect()->route('admin.tasks', $tasks->id);
    }
}
