<?php

namespace App\Http\Controllers\News;

use App\Models\News;

class CreateController extends BaseController
{
    public function __invoke()
    {
        return view('news.create');
    }
}
