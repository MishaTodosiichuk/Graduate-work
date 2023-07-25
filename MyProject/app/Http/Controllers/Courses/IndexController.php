<?php

namespace App\Http\Controllers\Courses;

use App\Http\Controllers\Controller;
use App\Http\Filters\NewsFilter;
use App\Http\Requests\News\FilterRequest;
use App\Models\Course;
use App\Models\News;

class IndexController extends Controller
{
    public function __invoke()
    {
        $course = Course::orderBy('id')->paginate(6);
        return view('courses.index', compact('course'));
    }
}
