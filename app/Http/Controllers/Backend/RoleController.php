<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Permission;
use App\Models\Role;
use App\Models\RolePermission;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Throwable;

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
    public function assignPermission($role_id)
    {
        
        //$role=Role::find($role_id);
        
        
        
        $rolePermission = RolePermission::where('role_id',$role_id)->get()->pluck('permission_id')->toArray();
        $permission = Permission::all();
        return view('backend.assignRole',compact('permission','rolePermission','role_id'));
    }

   public function submitPermission(Request $request, $role_id)
   {
    //dd($request->all());
   $validation = Validator::make($request->all(),[
       'permission.*'=>'required',//for array using .*
   ]);
   if($validation->fails())
   {
    notify()->error($validation->getMessageBag());
    return redirect()->back();
   }
    try{
        RolePermission::where('role_id',$role_id)->delete();
        foreach(request()->permission as $permission_id)
        {
           
            RolePermission::create([
                'role_id'=>$role_id,
                'permission_id'=>$permission_id,
            ]);
        }

        notify()->success('Permission is assigned');
        return redirect()->back();
    }catch(Throwable $e)
    {
        notify()->error($e->getMessage());
        return redirect()->back();
    }
    
   }
    public function roleDelete($id)
    {
      $role = Role::find($id)->delete();
      notify()->success("role deleted successfully");
      return redirect()->back();
    }

    
}
