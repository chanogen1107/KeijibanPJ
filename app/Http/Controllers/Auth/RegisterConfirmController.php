<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RegisterConfirmController extends Controller
{
    public function confirm() {
        return view ('Auth.register-confirm');
       }
}
