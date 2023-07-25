<?php

namespace App\Http\Controllers\Tests;

use App\Http\Controllers\Controller;
use App\Models\Review;
use App\Models\Task;
use App\Models\Test;

class ShowController extends Controller
{
    public function __invoke(Test $test)
    {
        $get_id = $test->getAttribute('id');
        $reviews = Review::where('test_id', $get_id)->get();
        $tasks = Task::where('test_id', $get_id)->get();

        return view('tests.show', compact('test', 'reviews', 'tasks'));
    }
}
