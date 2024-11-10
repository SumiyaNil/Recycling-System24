<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home()
    {
        return view('frontend.home');
    }
    public function otpPage()
    {
     return view('frontend.page.otp');
    }
    public function otpSubmit(Request $request)
    {

    }
}
