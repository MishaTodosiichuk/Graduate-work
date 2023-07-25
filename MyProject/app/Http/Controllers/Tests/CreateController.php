<?php

namespace App\Http\Controllers\Tests;

use App\Http\Controllers\Controller;
use App\Models\Test;

class CreateController extends Controller
{
    public function __invoke()
    {
        $test = Test::all();
        return view('tests.create', compact('test'));
    }
}
