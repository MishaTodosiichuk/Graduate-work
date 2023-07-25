<?php

namespace App\Http\Controllers\Intensive;

use App\Http\Controllers\Controller;
use App\Models\Intensive;
use Illuminate\Validation\Rules\In;

class ShowController extends Controller
{
    public function __invoke(Intensive $intensive)
    {
        return view('intensive.show', compact('intensive'));
    }
}
