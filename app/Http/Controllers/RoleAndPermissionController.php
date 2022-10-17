<?php

namespace App\Http\Controllers;

use Faker\Provider\ar_EG\Person;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App\Models\User;
use Session;

class RoleAndPermissionController extends Controller
{
    public function RoleList(){
        $roles = Role::all();
        return view('admin.role.list',compact('roles'));
    }

    public function RoleStore(Request $request){
        Role::create(['name' => $request->name]);
        Session::flash('toast',["type" => "primary","head" =>"Role Created","body" =>"Role Created Successfully"]);
        return redirect()->route('role.list');
    }

    public function DeleteRole(Request $request){

    }

    public function PermissonList(){
        $permissions = Permission::all();
        return view('admin.permission.list',compact('permissions'));
    }

    public function PermissonStore(Request $request){
        Permission::create(['name' => $request->name]);
        Session::flash('toast',["type" => "primary","head" =>"Permission Created","body" =>"Permission Created Successfully"]);
        return redirect()->route('permission.list');
    }

    public function UserList(){
        $users = User::all();
        return view('admin.user.list',compact('users'));
    }
}
