<?php

namespace App\Http\Controllers;

use App\local_customer;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Users;

class UserController extends Controller
{
    public function getLogin()
    {
        return view('login');
    }
    public function postLogin(Request $request)
    {
        $arr=[
            'email'=>$request->email,
            'password'=>$request->password,
        ];
        if ($request->remember == trans('remember.Remember Me')) {
            $remember = true;
        } else {
            $remember = false;
        };
        if(Auth::attempt($arr)){
            return redirect('home');
        }
        else return back()->with('error','Sai tài khoản hoặc mật khẩu');
    }
    public function logout(){
        Auth::logout();
        return redirect('/login');
    }
    public function detail(){
        $user=Auth::user();
        return view('profile',compact('user'));
    }
    public function changePassword(Request $request){
        $id=Auth::user()->id;
        $user=User::find($id);
        if($user){
            $user->password=$request->password;
            $user->save();
            return back()->with('success','Thay đổi mật khẩu thành công');
        }
    }
}
