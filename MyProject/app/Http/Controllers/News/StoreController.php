<?php

namespace App\Http\Controllers\News;

use App\Http\Requests\News\StoreRequest;
use App\Models\News;

class StoreController extends BaseController
{
    public function __invoke(StoreRequest $request)
    {
        $data = $request->validated();
        News::create($data);
        $news = News::all();
        return view('admin.index', compact('news'));
    }
}
