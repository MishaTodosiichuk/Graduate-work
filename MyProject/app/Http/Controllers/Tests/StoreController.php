<?php

namespace App\Http\Controllers\Tests;

use App\Http\Controllers\Controller;
use App\Http\Requests\Tests\StoreRequest;
use App\Models\Test;

class StoreController extends Controller
{
    public function __invoke(StoreRequest $request)
    {
        $data = $request->validated();
        Test::create($data);
        $tests = Test::all();
        return view('admin.test', compact('tests'));
    }
}
