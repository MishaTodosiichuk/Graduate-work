<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Test;

class TestsController extends Controller
{
    public function __invoke()
    {
        $tests= Test::all();
        return view('admin.test', compact('tests'));
    }
}
