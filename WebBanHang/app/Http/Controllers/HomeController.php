<?php

namespace App\Http\Controllers;

use App\Category;
use App\Comment;
use App\Product;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class HomeController extends Controller
{
    public function __construct()
    {
        $category = Category::all();
        return view()->share('category',$category);
        $this->middleware('auth');
    }

    public function getHome(){
        $product = Product::all();
        return view('default.pages.home',['product'=>$product]);
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


    public function getProductList(){
        $product = Product::all();
        return view('default.pages.product',['product'=>$product]);
    }

    public function getProductDetail($id){
        $product = Product::find($id);
        return view('default.pages.productdetail',['product'=>$product]);
    }

    public function postComment($id,$iduser,Request $request){
        $this->validate($request,[
            'content' => 'required',
        ]);

        $comment = new Comment;
        $comment->idproduct = $id;
        $comment->iduser= $iduser;
        $comment->content = $request->content;
        $comment->save();
        return redirect('product-detail/'.$id);
    }

    public function getProfile(){
        //dd(Auth::user()->id);
        return view('default.pages.profile');
    }

    public function postEditProfile(Request $request){
        $id = Auth::user()->id;
        $user = User::find($id);
        if ($request->passwordOld!=""&&$request->passwordNew!=""&&$request->passwordAgain!="") {
            if (Hash::check($request->passwordOld, Auth::user()->password)) {
                $this->validate($request,[
                    'passwordNew'      => 'required|min:6|max:32',
                    'passwordAgain'    => 'same:passwordNew',
                    ]);
                    $user->password = bcrypt($request->passwordNew);
                    $user->save();
                    return redirect('profile')->with('thongbao','Đổi mật khẩu thành công thành công');
                }
        }else{
            $this->validate($request,[
                'name'          => 'required|min:3|max:32',
                'email'         => 'required|min:3|max:32',
                'address'         => 'required|min:3|max:32',
                'phone'         => 'required|min:3|max:32',
            ]);
            $user->name = $request->name;
            $user->email = $request->email;
            $user->address = $request->address;
            $user->phone = $request->phone;
            $user->sex = $request->sex;
            $user->save();
            return redirect('profile')->with('thongbao','sửa thành công');
        }

    }

    public function getCart(){
        return view('default.pages.cart');
    }

    public function getAbout(){
        return view('default.pages.about');
    }

    public function getContast(){
        return view('default.pages.contast');
    }

    public function postSearch($key){
        $product = Product::where('name','like',"%$key%")->get();
        if(isset($product)){
            return view('default.pages.search',compact('product'));
        }

    }
    public function postSearchList($key){
        $product = Product::where('name','like',"%$key%")->get();
        if(isset($product)){
            return view('default.pages.searchlist',compact('product'));
        }
    }



    function test(Request $request){
        $user = Auth::user();
        if(Hash::check($request->passwordOld, $user->password)){
            dd(1);
        }else{
            dd(0);
        }
        return redirect()->back();
    }
}
