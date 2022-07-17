<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MainController extends Controller
{

    public function myAccount(){
        return view('account.index');
    }

    public function index() {
        return view('index');
    }

    public function login(){
        if(Auth::check()){
            return redirect()->route('index');
        }
        return view('auth.login');
    }

    public function register(){
        if(Auth::check()){
            return redirect()->route('index');
        }
        return view('auth.register');
    }
    public function cart()
    { 
        return view('pages.cart'); 
    }
}


