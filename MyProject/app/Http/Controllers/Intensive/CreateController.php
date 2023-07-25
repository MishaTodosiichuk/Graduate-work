<?php

namespace App\Http\Controllers\Intensive;

use App\Http\Controllers\Controller;
use App\Models\Intensive;

class CreateController extends Controller
{
    public function __invoke()
    {
        $intensive = News::all();
        return view('intensive.create', compact('intensive'));
    }
}
