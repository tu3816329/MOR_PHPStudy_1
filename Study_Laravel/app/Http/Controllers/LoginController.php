<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use Auth;
use Illuminate\Support\MessageBag;

class LoginController extends Controller
{
    public function showLogin()
    {
        return view('test');
    }
    public function doLogin(Request $request)
    {
        $rules = ["txtUsername"=>"required|min:3","txtPassword"=>"required|min:6"];
        $message=[
        'txtUsername.required'=>'Bắt buộc phải có tên đăng nhập',
        'txtUsername.min'=>'Tên đăng nhập phải có ít nhất 3 ký  tự',
        'txtPassword.required'=>'Bắt buộc phải có mật khẩu',
        'txtPassword.min'=>'Mật khẩu phải có ít nhất 6 ký  tự',
      ];
        // return redirect('https://giaphiep.com/blog/tao-trang-dang-nhap-su-dung-laravel-1460349133.html');
        $validator = Validator::make($request->all(), $rules, $message);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        } else {
            // dd($request->all());
            $user =$request->all()['txtUsername'];
            $pass =$request->all()['txtPassword'];
            if (Auth::attempt(['username'=>$user,'password'=>$pass])) {
                return redirect()->route('home');
                // return redirect()->intended('/');

            } else {
              $error = new MessageBag(['errLogin'=>"Incorrect Username or Password"]);
                return redirect()->back()->withErrors($error);
            }
        }
    }
}
