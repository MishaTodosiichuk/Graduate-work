<?php

namespace App\Http\Controllers\Intensive;

use App\Http\Controllers\Controller;
use App\Http\Requests\News\StoreRequest;

class StoreController extends Controller
{
    public function __invoke(StoreRequest $request)
    {
        $data = $request->validated();

        $intensive = $this->service->store($data);

        return redirect()->route('intensive.index', compact('intensive'));
    }
}
