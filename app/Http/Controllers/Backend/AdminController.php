<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
   public function admin()
   {
      $admin = User::all();
      return view('backend.admin',compact('admin'));
   }
   public function adminForm()
   {
      return view('backend.adminform');
   }
   public function adminStore(Request $request)
   {
      $admin = User::all();
      User::create([
         'name'=>$request->name,
         'email'=>$request->email,
         'password'=>$request->password,
         'role_id'=>$request->role
         
      ]);
      return redirect()->back();
   }

}
