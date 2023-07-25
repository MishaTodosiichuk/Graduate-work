<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\News\BaseController;
use App\Models\User;

class EditController extends BaseController
{
    public function __invoke(User $user)
    {
        return view('users.edit', compact('user'));
    }
}
