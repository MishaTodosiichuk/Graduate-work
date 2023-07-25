<?php

namespace App\Http\Controllers\Courses;

use App\Http\Controllers\Controller;
use App\Models\Course;
use App\Models\Review;
use App\Models\Test;

class ShowController extends Controller
{
    public function __invoke(Course $course)
    {
        $get_id = $course->getAttribute('id');
        $test = Test::orderBy('id')->paginate(3);
        $reviews = Review::where('course_id', $get_id)->get();
        return view('courses.show', compact('course', 'test', 'reviews'));
    }
}
