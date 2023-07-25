<?php

namespace App\Http\Controllers\Courses;

use App\Http\Controllers\Controller;
use App\Http\Requests\Courses\StoreRequest;
use App\Models\Course;

class StoreController extends Controller
{
    public function __invoke(StoreRequest $request)
    {
        $data = $request->validated();
        Course::create($data);
        $courses = Course::all();
        return view('admin.courses', compact('courses'));
    }
}
