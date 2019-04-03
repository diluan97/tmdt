<?php

namespace App\Http\Controllers\Guest;

use App\User;
use Validator;
use Hash;
use Auth;
use Cart;
use Illuminate\Support\MessageBag;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class LoginRegisterController extends Controller
{
    function guestLogin(Request $req)
    {
        $rules = [
            'email' => 'required|email',
            'password' => 'required|min:6'
        ];
        $message = [
            'email.required' => 'Email là trường bắt buộc',
            'email.email' => 'Email không đúng định dạng',
            'password.required' => 'Mật khẩu là trường bắt buộc',
            'password.min' => 'Mật khẩu phải chứa ít nhất 6 ký tự',
        ];
        $validator = Validator::make($req->all(), $rules, $message);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();


        } else {
            $email = $req->input('email');
            $password = $req->input('password');

            if (Auth::attempt(['email' => $email, 'password' => $password])) {

                return redirect()->back()->with('errorlogin', "Email hoặc mật khẩu sai vui lòng nhập lại");
            }
        }
    }
}
