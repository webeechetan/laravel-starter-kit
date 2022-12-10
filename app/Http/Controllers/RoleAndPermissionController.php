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
        $permissions = Permission::all();
        return view('admin.role.list',compact('roles','permissions'));
    }

    public function RoleStore(Request $request){
        Role::create(['name' => $request->name]);
        Session::flash('toast',["type" => "primary","head" =>"Role Created","body" =>"Role Created Successfully"]);
        return redirect()->route('role.list');
    }

    public function DeleteRole($id){
        $role = Role::find($id);
        $role->delete();
        Session::flash('toast',["type" => "danger","head" =>"Role Deleted","body" =>"Role Deleted Successfully"]);
        return redirect()->route('role.list');
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

    public function AssignPermissionToRoleView($RoleId){
        $role = Role::find($RoleId);
        $permissions = Permission::all();
        return view('admin.permission.assign-permission-to-role',compact('permissions','role'));
    }

    public function AssignPermissionToRole(Request $request){
        $role = Role::find($request->RoleId);
        $role->syncPermissions($request->permissions);
        Session::flash('toast',["type" => "primary","head" =>"Permission Assigned","body" =>"Permission Assigned Successfully"]);
        return redirect()->route('role.list');
    }

    public function AssignNewRoleToUserView($UserId){
        $user = User::find($UserId);
        $roles = Role::all();
        return view('admin.user.assign-role',compact('roles','user'));
    }

    public function AssignNewRoleToUser(Request $request){
        $user = User::find($request->UserId);
        $user->syncRoles($request->roles);
        Session::flash('toast',["type" => "primary","head" =>"Role Assigned","body" =>"Role Assigned Successfully"]);
        return redirect()->route('user.list');
    }
}
