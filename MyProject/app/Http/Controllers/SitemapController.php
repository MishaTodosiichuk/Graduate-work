<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;

class SitemapController extends Controller
{
    public function __invoke()
    {;
        $news = News::all();

        return view('pages.sitemap', compact('news'));
    }
}
