<?php

namespace App\Http\Controllers;

use App\Category;
use App\Product;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Laravel\Socialite\Facades\Socialite;

use function GuzzleHttp\Promise\all;

class HomeController extends Controller
{


    public function index()
    {

        // $product = Product::all();
        $product = DB::table('products')->paginate(8);
        return view('pages.home',compact('product'));
    }

    public function getLogin()
    {
        return view('login');
    }

    public function postLogin(Request $request)
    {
        $this->validate($request,[
            'email' => 'required',
            'password' => 'required|min:6|max:32',
        ],[
            'email.required' => 'Bạn chưa nhập email',
            'password.required' => 'Bạn chưa nhập password',
            'password.min' => 'Password phải có tối thiểu 6 ký tự',
            'password.max' => 'Password chỉ chứa tối đa 32 ký tự',
        ]);

        if (Auth::attempt(['email' => $request->email, 'password' => $request->password],$request->remember)) {
            return redirect('home');
        }
        else{
            return redirect()->back()->with('warning','Đăng nhập thất bại!!!');
        }
    }
    public function getRegister()
    {
        return view('register');
    }

    public function postRegister(Request $request)
    {
        $this->validate($request,[
            'email' => 'required|min:3',
            'name' => 'required',
            'password' => 'required|min:6|max:32',
            'passwordAgain' =>'required|same:password',
        ],[
            'name.required' => 'Bạn chưa nhập tên',
            'name.min' => 'Password phải có tối thiểu 3 ký tự',
            'email.required' => 'Bạn chưa nhập email',
            'password.required' => 'Bạn chưa nhập password',
            'password.min' => 'Password phải có tối thiểu 6 ký tự',
            'password.max' => 'Password chỉ chứa tối đa 32 ký tự',
            'passwordAgain.required' => 'Bạn chưa nhập lại password',
            'passwordAgain.same' => 'Password nhập lại không chính xác',
            ]);

        $user = new User;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->image = 'love2.jpg';
        $user->save();

        return redirect('login')->with('success','Đăng ký tài khoản thành công');
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->back();
    }

    public function getLoginWithGoogle()
    {
        return Socialite::driver('google')->redirect();
    }

    public function getLoginWithGoogleCallBack()
    {
        $user = Socialite::driver('google')->user();
        $tuser = User::where('email',$user->email)->first();
        if($tuser){
            Auth::attempt(['email' => $tuser->email, 'password' => 123456]);
        }else{
            $db = new User();
            $db->name = $user->name;
            $db->password = bcrypt(123456);
            $db->email = $user->email;
            $db->image = $user->avatar;
            $db->save();
            Auth::attempt(['email' => $user->email, 'password' => 123456],$user->token);
        }
        return redirect('home');
    }

    public function getProductDetail($id)
    {
        $product = Product::find($id);
        return view('pages.detail',compact('product'));
    }

    public function getProfile(){
        $user = Auth::user();
        return view('pages.profile',compact('user'));
    }


}
