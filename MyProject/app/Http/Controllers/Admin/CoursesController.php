<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Course;

class CoursesController extends Controller
{
    public function __invoke()
    {
        $courses = Course::all();
        return view('admin.courses', compact('courses'));
    }
}
