<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
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
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return $data->validate([
            'username' => ['required', 'string', 'max:2', 'unique:users'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'terms' => ['required', 'numeric', 'max:2'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(array $data)
    {   
        $user = [
            'username' => $data['username'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ];

        User::create($user);

        
        if (Auth::attempt(['username'=>$data['username'],'password'=>$data['password']])) {
            
            return true;
        }
    }

    public function register(Request $request){

        $messages = array(
            'terms.required' => 'Terms & Condition must be checked.',
        );

        $validator = Validator::make($request->all(),[
            'username' => ['required', 'string', 'max:15', 'unique:users'],
            'email' => ['required', 'string', 'email', 'max:50', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'terms' => ['required', 'numeric'],
        ], $messages);

        if ($validator->fails()) {
            $json['errors'] = $validator->errors()->all();
            $json['status'] = false;
        }else if($validator->validated()["terms"] != 1){
            $json['errors'] = 'Terms & Condition must be checked.';
            $json['status'] = false;
        }else{
            if($this->create($validator->validated())){
                $json['redirect'] = url()->route('index'); 
                $json['status'] = true;
            }else{
                $json['errors'] = 'Something went wrong.';
                $json['status'] = false;
            }
           
        }
        return json_encode($json);
    }

}
