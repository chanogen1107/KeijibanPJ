<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Auth;

class LoginController extends Controller
{
    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/top';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
      protected function redirectTo()
    {
            return '/top';
    }
    public function login(Request $request){
        if($request->isMethod('post')){


            $data=$request->only('email','password');
            // ログインが成功したら、トップページへ
            //↓ログイン条件は公開時には消すこと
            if(Auth::attempt($data)){
                return redirect('/top');
            }
            // dd($data);
        }
        return view("auth.login");
    }

    public function logout(Request $request){
        Auth::logout();
        return redirect('login');
    }

}
