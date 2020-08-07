<?php

namespace App\Http\Controllers;

use App\Category;
use App\Product;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function __construct()
    {
        $category = Category::all();
        return view()->share('category',$category);
    }

    public function getHome(){
        $product = Product::all();
        return view('default.pages.home',['product'=>$product]);
    }

    public function getLogin(){
        return view('default.pages.login');
    }

    public function postLogin(Request $request){
        $this->validate($request,[
            'email' => 'required|min:4|max:32',
            'password' => 'required|min:4|max:32'
        ],[
            'email.required' => 'Bạn chưa nhập tên đăng nhập',
            'email.min' => 'Tên đăng nhập có ít nhât 3 ký tự',
            'email.max' => 'Tên đăng nhập có nhiều nhất 32 ký tự',
            'password.required' => 'Bạn chưa nhập mật khẩu',
            'password.min' => 'Mật khẩu có ít nhât 3 ký tự',
            'password.max' => 'Mật khẩu có nhiều nhất 32 ký tự',
        ]);

        $remember = $request->has('remember') ? true : false;
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password], $remember)) {
            return redirect('/home');
        }
        else{
            return redirect('/login')->with('loi','Đăng nhập không thành công');
        }

    }

    public function getLogout(){
        Auth::logout();
        return redirect('home/');
    }

    public function getRegister(){
        return view('default.pages.register');
    }

    public function postRegister(Request $request){
        $this->validate($request,[
            'email'         => 'required|min:4|max:32',
            'password'      => 'required|min:4|max:32',
            'passwordAgain' => 'required|same:password',
            'name'          => 'required',
            'phone'         => 'min:10|max:10',
        ],[
            'email.required' => 'Bạn chưa nhập tên đăng nhập',
            'email.min' => 'Tên đăng nhập có ít nhât 3 ký tự',
            'email.max' => 'Tên đăng nhập có nhiều nhất 32 ký tự',
            'password.required' => 'Bạn chưa nhập mật khẩu',
            'password.min' => 'Mật khẩu có ít nhât 3 ký tự',
            'password.max' => 'Mật khẩu có nhiều nhất 32 ký tự',
            'passwordAgain.required' => 'Bạn chưa nhập lại mật khẩu',
            'passwordAgain.same' => 'Mật khẩu nhập lại không trùng khớp',
            'name.required' => 'Bạn chưa nhập họ tên',
            'phone.integer' => 'Số điện thoại phải có 10 chữ số'
        ]);

        $user = new User();
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->name = $request->name;
        $user->phone = $request->phone;
        $user->address = $request->address;
        $user->sex = $request->sex;
        $user->status = 0;
        $user->save();

        return redirect('/login')->with('thongbao','Đăng ký thành công');
    }

    public function getProductList(){
        $product = Product::all();
        return view('default.pages.product',['product'=>$product]);
    }

    public function getProductDetail($id){
        $product = Product::find($id);
        return view('default.pages.productdetail',['product'=>$product]);
    }

    public function getAbout(){
        return view('default.pages.about');
    }

    public function getContast(){
        return view('default.pages.contast');
    }
}
