<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request;
use Auth;

class RegisterController extends Controller
{

    use RegistersUsers;

    public function show() {
        // dd("test");
        return view ('Auth.register');
       }

    public function register() {
        return view ('Auth.register');
       }
}
