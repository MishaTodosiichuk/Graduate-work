<?php

namespace App\Http\Controllers\Intensive;

use App\Http\Controllers\Controller;
use App\Models\Intensive;

class DestroyController extends Controller
{
    public function __invoke(Intensive $intensive)
    {
        $intensive->delete();//щоб вернути$post->restore();
        return redirect()->route('intensive.index');
    }
}
