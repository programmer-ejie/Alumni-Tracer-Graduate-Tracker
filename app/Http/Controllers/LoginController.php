<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    function gotoLogin()
    {
        return view('login');
    }
    function gotoHome()
    {
        return view('index');
    }

    function gotoSuperLogin(){
        return view('superlogin');
    }
}

