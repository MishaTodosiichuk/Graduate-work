<?php

namespace App\Http\Controllers\Admin\Search;

use App\Http\Controllers\Controller;
use App\Models\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function __invoke(Request $request)
    {
        $s = $request->s;
        $news = News::where('title', 'LIKE', "%{$s}%");
        return view('admin.index', compact('news'));
    }
}
