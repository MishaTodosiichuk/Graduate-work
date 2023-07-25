<?php

namespace App\Http\Controllers\Intensive;

use App\Http\Controllers\Controller;
use App\Models\Intensive;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function __invoke(Request $request)
    {
        $s = $request->s;
        $intensive = Intensive::where('title', 'LIKE', "%{$s}%")->paginate(9);
        return view('intensive.index', compact('intensive'));
    }
}
