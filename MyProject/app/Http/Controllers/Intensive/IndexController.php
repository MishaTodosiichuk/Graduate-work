<?php

namespace App\Http\Controllers\Intensive;

use App\Http\Controllers\Controller;
use App\Models\Intensive;
use Illuminate\Validation\Rules\In;

class IndexController extends Controller
{
    public function __invoke()
    {
        $intensive = Intensive::orderBy('id')->paginate(10);
        return view('intensive.index', compact('intensive'));
    }
}
