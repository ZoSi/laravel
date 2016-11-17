<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    /**
     * Login user
     */
    public function login()
    {
        return view('admin/users/login');
    }
}
