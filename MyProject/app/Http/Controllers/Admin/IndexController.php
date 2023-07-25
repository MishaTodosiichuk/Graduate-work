<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Filters\NewsFilter;
use App\Http\Requests\News\FilterRequest;
use App\Models\News;

class IndexController extends Controller
{
    public function __invoke()
    {
        $news = News::all();
        return view('admin.index',compact('news'));
    }
}
