<?php

namespace App\Http\Controllers\News;


use App\Http\Filters\NewsFilter;
use App\Http\Requests\News\FilterRequest;
use App\Http\Resources\News\NewsResource;
use App\Models\News;

class IndexController extends BaseController
{
    public function __invoke(FilterRequest $request)
    {
        $data = $request->validated();

        $filter = app()->make(NewsFilter::class, ['queryParams' => array_filter($data)]);
        $news = News::filter($filter)->paginate(9);

        return view('news.index', compact('news'));
    }
}
