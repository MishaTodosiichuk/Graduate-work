<?php

namespace App\Http\Controllers\Reviews\Tests;

use App\Http\Controllers\Controller;
use App\Http\Requests\Reviews\StoreRequest;
use App\Models\Test;
use App\Models\Review;

class StoreController extends Controller
{
    public function __invoke(StoreRequest $request)
    {
        $data = $request->validated();
        Review::create($data);

        $test = Test::orderBy('id')->paginate(10);
        return view('tests.index', compact('test'));
    }

}
