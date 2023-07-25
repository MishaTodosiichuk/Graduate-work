<?php

namespace App\Http\Controllers\Reviews\News;

use App\Http\Filters\NewsFilter;
use App\Http\Requests\News\FilterRequest;
use App\Models\News;
use App\Models\Review;
use App\Http\Controllers\Controller;

class DestroyController extends Controller
{
    public function __invoke(Review $reviews, FilterRequest $request)
    {
        $reviews->delete();//щоб вернути$post->restore();
        $data = $request->validated();

        $filter = app()->make(NewsFilter::class, ['queryParams' => array_filter($data)]);
        $news = News::filter($filter)->paginate(9);

        return redirect()->route('news.index', compact('news'));
    }
}
