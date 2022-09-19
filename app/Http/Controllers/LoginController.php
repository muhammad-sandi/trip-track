<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class LoginController extends Controller
{
    // login
    public function login(){
        return view('login-regis.login');
    }

    // register
    public function register(){
        return view('login-regis.register');
    }
}
