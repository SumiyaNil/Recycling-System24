<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserAuthenticationController extends Controller
{
    public function signup()
    {
        return view("backend.signUp");
    }
    public function login()
    {
        return view();
    }

}
