<?php

namespace App\Http\Controllers\News;

use App\Models\News;

class EditController extends BaseController
{
    public function __invoke(News $news)
    {
        return view('news.edit', compact('news'));
    }
}
