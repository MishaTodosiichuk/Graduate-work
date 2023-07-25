<?php

namespace App\Http\Controllers\Admin\Search;

use App\Http\Controllers\Controller;
use App\Models\Test;
use Illuminate\Http\Request;

class TestsController extends Controller
{
    public function __invoke(Request $request)
    {
        $s = $request->s;
        $test = Test::where('title', 'LIKE', "%{$s}%")->paginate(9);
        return view('admin.tests', compact('test'));
    }
}
