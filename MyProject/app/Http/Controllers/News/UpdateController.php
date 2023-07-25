<?php

namespace App\Http\Controllers\News;

use App\Http\Requests\News\UpdateRequest;
use App\Models\News;

class UpdateController extends BaseController
{
    public function __invoke(UpdateRequest $request,News $news)
    {
        $data = $request->validated();

        $news->update($data);

        return redirect()->route('admin.index', $news->id);
    }
}
