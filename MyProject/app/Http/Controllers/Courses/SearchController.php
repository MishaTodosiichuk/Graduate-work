<?php

namespace App\Http\Controllers\Courses;

use App\Http\Controllers\Controller;
use App\Models\Course;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function __invoke(Request $request)
    {
        $s = $request->s;
        $course = Course::where('name', 'LIKE', "%{$s}%")->paginate(9);
        return view('courses.index', compact('course'));
    }
}
