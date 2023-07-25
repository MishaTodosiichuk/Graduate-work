<?php

namespace App\Http\Controllers\Courses;

use App\Http\Controllers\Controller;
use App\Http\Requests\Courses\UpdateRequest;
use App\Models\Course;

class UpdateController extends Controller
{
    public function __invoke(UpdateRequest $request,Course $course)
    {
        $data = $request->validated();

        $course->update($data);

        return redirect()->route('admin.courses', $course->id);
    }
}
