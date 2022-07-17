<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    
    /**
     * Create a new controller instance
     *
     * @return void
     */
    public function __construct(){
        
        $this->middleware('auth');
    }

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


