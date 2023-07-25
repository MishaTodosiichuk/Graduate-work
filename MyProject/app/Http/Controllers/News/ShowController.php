<?php

namespace App\Http\Controllers\News;

use App\Models\Course;
use App\Models\News;
use App\Models\Review;

class ShowController extends BaseController
{
    public function __invoke(News $news)
    {
        $count_views = $news->getAttribute('count_views');
        $get_id = $news->getAttribute('id');

        $news->update(['count_views' => $count_views + 1]);

        $courses = Course::orderBy('id')->paginate(3);

        $reviews = Review::where('news_id', $get_id)->get();
        return view('news.show', compact('news', 'courses', 'reviews'));

    }
}
