<?php

namespace App\Http\Controllers;

use App\Http\Filters\NewsFilter;
use App\Http\Requests\News\FilterRequest;
use App\Models\Course;
use App\Models\News;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {

    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $course = Course::orderBy('id')->paginate(6);
        $news = News::orderBy('id')->paginate(6);
        return view('pages.home', compact('news', 'course'));
    }
}
