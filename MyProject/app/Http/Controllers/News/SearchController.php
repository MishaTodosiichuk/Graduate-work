<?php

namespace App\Http\Controllers\News;

use App\Http\Controllers\Controller;
use App\Models\News;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function __invoke(Request $request)
    {
        $s = $request->s;
        $news = News::where('title', 'LIKE', "%{$s}%")->paginate(9);
        return view('news.index', compact('news'));
    }
}
