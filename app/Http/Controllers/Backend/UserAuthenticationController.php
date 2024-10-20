<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserAuthenticationController extends Controller
{
 
    
    public function login()
    {
        return view('backend.page.userauthentication.login');
    }
    public function form(Request $request)
    {
        $credentials = $request->except("_token");
        $check = Auth::attempt($credentials);
        if($check)
        {
            
            notify()->success("login successful");
            return redirect()->route('dashboard.home');
        }
        else{
            return redirect()->back();
        }
    }
    public function logout()
    {
        Auth::logout();
        notify()->success('logout successfully');
        return redirect()->route('login');
    }
}
