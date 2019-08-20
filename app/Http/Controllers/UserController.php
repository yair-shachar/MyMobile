<?php

namespace App\Http\Controllers;

use App\Http\Requests\SigninRequest;
use App\Http\Requests\SignupRequest;
use App\User;
use Session;

class UserController extends MainController
{

    public function __construct() {
        parent::__construct();
        $this->middleware('signguard', ['except'=> ['logout']]);
    }

    public function signin ()
    {
        self::$data['page_title'] = 'Sign in Page';
        return view ('forms.signin', self::$data);
    }
    
    public function signup ()
    {
        self::$data['page_title'] = 'Sign up Page';
        return view ('forms.signup', self::$data);
    }

    public function postSignin(SigninRequest $request) 
     {
         $to = !empty($request['to']) ? $request['to'] : ''; 

         if (User::verify($request['email'], $request['password']) ) {

            return redirect($to);
            
         } else {

            self::$data['page_title'] = 'Signin Page';
            self::$data['verify_error'] = 'Email or Password is invalid!';
            return view('forms.signin', self::$data);
         }
    }

    public function postSignup(SignupRequest $request)
    {
       User::save_new($request);
       return redirect ('');   
    }

    public function logout()
    {
        Session::flush();
        return redirect('user/signin');    
    }
}
