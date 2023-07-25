<?php

namespace App\Http\Controllers\News;

use App\Models\News;

class DestroyController extends BaseController
{
    public function __invoke(News $news)
    {
        $news->delete();//щоб вернути$post->restore();
        return redirect()->route('admin.index');
    }
}
