<?php

namespace App\Http\Controllers\Tests;

use App\Http\Controllers\Controller;
use App\Models\Test;

class IndexController extends Controller
{
    public function __invoke()
    {
        $test = Test::orderBy('id')->paginate(10);
        return view('tests.index', compact('test'));
    }
}
