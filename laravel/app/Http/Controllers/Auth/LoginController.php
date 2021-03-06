<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

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
        $this->middleware('guest')
            ->except('logout')
            ->except('logoutAPI');
    }

    public function login(Request $request){

        $data = $request->validate([
            'username' => 'required|max:25',
            'password' => 'required|max:25',
            'remember' => 'min:1',
        ]);

        if(!isset($data['remember'])){
            $data['remember'] = false;
        }

        $credentials = [
            'username' => $data["username"],
            'password' => $data["password"]
        ];

        if(Auth::attempt($credentials, $data["remember"])){
            
            $json['success'] = true;
            $json['token'] = Auth::user()->createToken('hackerToken')->plainTextToken;
            $json['redirect'] = url()->route('index');

            /**
             * Redirecting users based on their roles
             * 
             * In this case I redirect users to same page
             * because I'm lazy.
             * 
             */
            switch(Auth::user()->type){
                case 'user':
                    //$json["redirect"] = route('myaccount');
                break;
                case 'admin':
                    //$json["redirect"] = route('myaccount');
                break;
                case 'developer':
                    //$json["redirect"] = route('myaccount');
                break;
                
            }

        }else{
            $json['success'] = false;
            $json['error'] = '<li>uname or passwd are wrong.</li>';
        }

        return json_encode($json);
    }

    public function logout(Request $request){

        Auth::logout();
 
        $request->session()->invalidate();
     
        $request->session()->regenerateToken();

        return redirect()->route('login');
    }

    public function logoutAPI(Request $request){

        
        auth()->user()->tokens()->delete();

        return [
            'message' => 'logged out.'
        ];
    }
}
