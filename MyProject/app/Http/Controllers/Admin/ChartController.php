<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\News;

class ChartController extends Controller
{
    public function __invoke()
    {
        $news = News::all();
        $count_views = [];
        $labels_views = [];
        foreach ($news as $data){
            $count_views[] = $data->getAttribute('count_views');
            $labels_views[] = $data->getAttribute('title');
        }

        return view('admin.chart', compact('count_views', 'labels_views'));
    }
}
