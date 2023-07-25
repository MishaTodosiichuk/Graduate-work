<?php

namespace App\Http\Controllers\Intensive;

use App\Http\Controllers\Controller;
use App\Models\Intensive;

class EditController extends Controller
{
    public function __invoke(Intensive $intensive)
    {
        return view('intensive.edit', compact('intensive'));
    }
}
