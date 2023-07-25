<?php

namespace App\Http\Controllers\Tests;

use App\Http\Controllers\Controller;
use App\Models\Test;

class DestroyController extends Controller
{
    public function __invoke(Test $test)
    {
        $test->delete();//щоб вернути$post->restore();
        return redirect()->route('tests.index');
    }
}
