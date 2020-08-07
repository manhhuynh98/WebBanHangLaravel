<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function getList(){
        $user = User::all();
        return view('admin.pages.user.list',['user'=>$user]);
    }

    public function getAddList(){
        return view('admin.pages.user.add');
    }

    public function postAddList(Request $request){
        $this->validate($request,[
            'name'          => 'required|unique:users,name|min:3|max:32',
            'password'      => 'required|min:6|max:32',
            'email'         => 'required|min:3|max:32',
        ]);

        $user = new User;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->address = $request->address;
        $user->password = bcrypt($request->password);
        $user->phone = $request->phone;
        $user->status = $request->status;
        $user->sex = $request->sex;
        $user->save();

        return redirect('admin\user\list')->with('thongbao','thêm thành công');
    }

    public function getEditList($id){
        $user = User::find($id);
        return view('admin.pages.user.edit',['user'=>$user]);
    }

    public function postEditList(Request $request,$id){
        $this->validate($request,[
            'name'          => 'required|min:3|max:32',
            'email'         => 'required|min:3|max:32',
        ]);

        $user = User::find($id);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->address = $request->address;
        if ($request->changPW == "on") {
            $this->validate($request,[
                'password'      => 'required|min:6|max:32',
            ]);

            $user->password = bcrypt($request->password);
        }

        $user->phone = $request->phone;
        $user->status = $request->status;
        $user->sex = $request->sex;
        $user->save();
        return redirect('admin\user\list')->with('thongbao','sửa thành công');
    }

    public function getDelete($id){
        $user = User::find($id);
        $user->delete();
        return redirect('admin/user/list')->with('thongbao','Xóa thành công');
    }
}
