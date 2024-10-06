<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserAuthenticationController extends Controller
{
    
    public function login()
    {
        return view('backend.signin');
    }

}
