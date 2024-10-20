<?php

use App\Models\Permission;
use App\Models\RolePermission;
use Illuminate\Support\Facades\Auth;

function checkPermission($routeName)
{
 // dd($routeName);
  if(auth()->user()->role->name == "admin")
  {
    return true;
  }
$thisUserRole = auth()->user()->role_id;

$getPermission = Permission::where('slug',$routeName)->first();
if($getPermission)
{

  $checkHasPermission=RolePermission::where('role_id',$thisUserRole)
  ->where('permission_id',$getPermission->id)->first();
//dd($checkHasPermission);
  
  if($checkHasPermission)
  {
    return true;
  }
}

return false;


}
?>