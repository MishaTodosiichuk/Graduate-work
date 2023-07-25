<?php

namespace App\Http\Controllers\Courses;

use App\Http\Controllers\Controller;
class CreateController extends Controller
{
    public function __invoke()
    {
        return view('courses.create');
    }
}
