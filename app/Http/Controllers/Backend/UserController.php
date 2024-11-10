<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function userList()
    {
        $user = User::with('role')->get();
      return view('backend.userlist',compact('user'));
    }
    public function userForm()
    {
        // $role = Role::where('role_id','!=','admin')->get();
        $role = Role::all();
        return view('backend.userform',compact('role'));
    }
    public function userStore(Request $request)
    {
        $user = User::all();
        User::create([
         'name'=>$request->name,
         'email'=>$request->email,
         'password'=>bcrypt($request->password),
         'role_id'=>$request->role_id,
        ]);
        return redirect()->back();
    }
}
