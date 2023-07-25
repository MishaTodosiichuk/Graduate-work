<?php

namespace App\Http\Controllers\Courses;

use App\Http\Controllers\Controller;
use App\Models\Course;

class EditController extends Controller
{
    public function __invoke(Course $course)
    {
        return view('courses.edit', compact('course'));
    }
}
