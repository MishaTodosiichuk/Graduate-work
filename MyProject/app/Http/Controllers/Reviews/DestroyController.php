<?php

namespace App\Http\Controllers\Reviews;

use App\Models\Review;
use App\Http\Controllers\Controller;

class DestroyController extends Controller
{
    public function __invoke(Review $review)
    {
        $review->delete();//щоб вернути$post->restore();
        return redirect()->route('pages.home');
    }
}
