<?php

namespace App\Http\Controllers\Intensive;

use App\Http\Controllers\Controller;
use App\Http\Requests\News\UpdateRequest;
use App\Models\Intensive;

class UpdateController extends Controller
{
    public function __invoke(UpdateRequest $request,Intensive $intensive)
    {
        $data = $request->validated();

        $intensive = Intensive::update($data);

        return redirect()->route('intensive.show', $intensive->id);
    }
}
