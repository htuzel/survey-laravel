<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use App\Mail\VerifyMail;
use App\Mail\ConfirmAccountMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Lang;


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
    protected $redirectTo = '/home';

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
        return Validator::make($data, [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        $user =  User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'verification_token' => str_random(40)
        ]);      
        $admin_email = config('mail.adminEmail');
        Mail::to($admin_email)->send(new VerifyMail($user));

        return $user;
    }

    public function verifyUser($verification_token)
    {
        $user = User::where('verification_token', $verification_token)->first();
        if(isset($user) ){
            if($user->verification_token != null) {
                $user->verification_token = null;
                $user->save();
                $status = __("Users account is verified.");
            }else{
                $status = __("Users account is verified.");
            }
            Mail::to($user->email)->send(new ConfirmAccountMail($user));
        }else{
            return redirect('/login')->with('warning', __("Sorry user cannot be identified."));
        }

        return redirect('/login')->with('status', $status);
    }

    protected function registered(Request $request, $user)
    {
        $this->guard()->logout();
        return redirect('/login')->with('status',__('You are successfully registered. But your account must confirmed by admin. Please wait, we will mail after confirmation'));
    }
}
