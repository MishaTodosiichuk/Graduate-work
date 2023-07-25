<?php

namespace App\Http\Controllers\Reviews\News;

use App\Http\Controllers\Controller;
use App\Http\Requests\Reviews\StoreRequest;
use App\Models\News;
use App\Models\Review;

class StoreController extends Controller
{
    public function __invoke(StoreRequest $request)
    {
        $data = $request->validated();
        Review::create($data);

        $news = News::orderBy('id')->paginate(6);
        return view('news.index', compact('news'));
    }

}
