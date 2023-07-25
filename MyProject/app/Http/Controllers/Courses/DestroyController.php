<?php

namespace App\Http\Controllers\Courses;

use App\Http\Controllers\Controller;
use App\Models\Course;

class DestroyController extends Controller
{
    public function __invoke(Course $courses)
    {
        $courses->delete();//щоб вернути$post->restore();
        return redirect()->route('admin.courses');
    }
}
