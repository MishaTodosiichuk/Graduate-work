<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use App\Models\User;

class UserController extends Controller
{
    public function __invoke()
    {
        $roles = User::getRoles();
        $user = User::all();
        return view('admin.users', compact('user', 'roles'));
    }
}
