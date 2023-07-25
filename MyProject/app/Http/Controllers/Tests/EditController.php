<?php

namespace App\Http\Controllers\Tests;

use App\Http\Controllers\Controller;
use App\Models\Test;

class EditController extends Controller
{
    public function __invoke(Test $test)
    {
        return view('tests.edit', compact('test'));
    }
}
