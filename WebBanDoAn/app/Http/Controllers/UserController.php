<?php

namespace App\Http\Controllers;

use App\Role;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function list(){
        $this->authorize('view', 'App\User');
        $user = User::all();
        return view('admin.user.list',compact('user'));

    }

    public function getEdit($id){
        $user = User::find($id);
        return view('admin.user.edit',compact('user'));
    }

    public function postEdit($id){
        $user = User::find($id);
        $user->name = $_POST['name'];
        $user->email = $_POST['email'];
        $user->image = $_POST['image'];
        $user->save();
        return view('admin.user.edit',compact('user'));
    }

    public function postAdd(){
        $user = new User;
        $user->name = $_POST['name'];
        $user->email = $_POST['email'];
        $user->image = $_POST['image'];
        $user->password = bcrypt($_POST['password']);
        $user->save();
        return view('admin.user.add',compact('user'));
    }

    public function getDelete($id){
        $user = User::find($id);
        $user->delete();
        return redirect('admin/user/list');
    }

    public function listRole(){
        // $this->authorize('App\Role');
        $user = User::all();
        return view('admin.user.role',compact('user'));
    }

    public function addRole($id){
        // $this->authorize('App\Role');
        $user = User::find($id);
        $role = Role::all();
        $roleOfUser = DB::table('role_user')->where('user_id',$id)->pluck('role_id');
        return view('admin.user.addrole',compact('user', 'role', 'roleOfUser'));
    }

    public function postAddRole($id, Request $request){
        // $this->authorize('App\Role');
        $user = User::find($id);
        DB::table('role_user')->where('user_id',$id)->delete();
        $user->roles()->attach($request->role);
        return redirect('admin/role/list');
    }

}
