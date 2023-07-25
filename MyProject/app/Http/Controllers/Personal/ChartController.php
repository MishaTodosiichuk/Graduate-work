<?php

namespace App\Http\Controllers\Personal;

use App\Http\Controllers\Controller;
use App\Models\Test;
use Illuminate\Support\Facades\Auth;

class ChartController extends Controller
{
    public function __invoke()
    {
        $mark = Test::where('user_id', Auth::user()->id)->get();

        return view('personal.chart', compact( 'mark'));
    }
}
