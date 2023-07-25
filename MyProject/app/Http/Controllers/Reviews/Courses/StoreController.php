<?php

namespace App\Http\Controllers\Reviews\Courses;

use App\Http\Controllers\Controller;
use App\Http\Requests\Reviews\StoreRequest;
use App\Models\Course;
use App\Models\Review;

class StoreController extends Controller
{
    public function __invoke(StoreRequest $request)
    {
        $data = $request->validated();
        Review::create($data);

        $courses = Course::orderBy('id')->paginate(6);
        return view('courses.index', compact('courses'));
    }

}
