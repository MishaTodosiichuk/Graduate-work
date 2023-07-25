<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\News\BaseController;
use App\Http\Requests\User\UpdateRequest;
use App\Models\User;

class UpdateController extends BaseController
{
    public function __invoke(UpdateRequest $request,User $user)
    {
        $data = $request->validated();

        $user->update($data);

        return redirect()->route('admin.users', compact('user'));
    }
}
