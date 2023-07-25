<?php

namespace App\Http\Controllers\Tests;

use App\Http\Controllers\Controller;
use App\Http\Requests\Tests\UpdateRequest;
use App\Models\Test;

class UpdateController extends Controller
{
    public function __invoke(UpdateRequest $request,Test $test)
    {
        $data = $request->validated();

        $test->update($data);

        return redirect()->route('admin.test', $test->id);
    }
}
