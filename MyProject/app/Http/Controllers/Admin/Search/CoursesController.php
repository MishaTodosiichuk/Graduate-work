<?php

namespace App\Http\Controllers\Admin\Search;

use App\Http\Controllers\Controller;
use App\Models\Course;
use Illuminate\Http\Request;

class CoursesController extends Controller
{
    public function __invoke(Request $request)
    {
        $s = $request->s;
        $course = Course::where('name', 'LIKE', "%{$s}%");
        return view('admin.courses', compact('course'));
    }
}
