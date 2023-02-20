<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request;
use Auth;
use App\Models\Users\User;

class RegisterController extends Controller
{

    use RegistersUsers;

    public function show() {
        // dd("test");
        return view ('Auth.register');
       }

    public function register(Request $request) {
        //バリデーション
        // dd($request);
        // $this->validate($request,[
        //     'name' => 'required',
        //     'email' => 'email|required|unique:users',
        //     'password' => 'required|min:4',
        //     'password_confirmation' => 'required|confirmed'
        //   ]);
         
          // DBインサート
          $user = new User([
            'username' => $request->input('name'),
            'email' => $request->input('email'),
            'password' => bcrypt($request->input('password')),
          ]);
         
          // 保存
          $user->save();
        
        return view ('Auth.register-added');
       }
}
