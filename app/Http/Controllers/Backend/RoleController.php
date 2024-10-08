<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Role;
use Illuminate\Http\Request;

class RoleController extends Controller
{
    //
    public function roleList()
    {
        $role = Role::all();
        return view('backend.rolelist',compact('role'));
    }
    public function roleForm()
    {
        
        return view('backend.roleform');
    }
    public function roleStore(Request $request)
    {
        $role = Role::all();
        Role::create([
            'name'=>$request->name,
            'status'=>$request->status,
        ]);
        return redirect()->back();
        
    }
    
}
