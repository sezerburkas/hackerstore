<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function login(Request $request){

        $data = $request->validate([
            'username' => 'required|max:25',
            'password' => 'required|max:25'
        ]);

        if(auth()->attempt($data)){

            /**
             * Redirecting users based on their roles
             * 
             * In this case I redirect users to same page
             * because I'm lazy.
             * 
             */
            switch(auth()->user()->type){
                case 'user':
                    return redirect()->route('myaccount');
                break;
                case 'admin':
                    return redirect()->route('myaccount');
                break;
                case 'developer':
                    return redirect()->route('myaccount');
                break;
            }

        }else{
            return back()->with('error', 'uname or passwd are wrong.');
        }

    }
}
