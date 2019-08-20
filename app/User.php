<?php

namespace App;

use DB;
use Hash;
use Session;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    public static function verify ($email, $password)
    {
        $valid = false;

       $user = DB::table('users as u')
        ->join('users_roles as ur', 'u.id', '=', 'ur.user_id')
        ->where('u.email', '=', $email)
        ->first();

        if ( $user) {
            
            if(Hash::check($password, $user->password))
            {
                $valid = true;
                Session::put('user_id', $user->id);
                Session::put('user_name', $user->name);

                if( $user->permission_id == 1) {
                    Session::put('is_admin', true);
                }

                Session::flash('sm', 'Welcome, ' . $user->name);
            
            }

        }

        return $valid;

    }

    public static function save_new($request) {
        $user = new self();
        $user->name = $request['name'];
        $user->email = $request['email'];
        $user->password = bcrypt($request['password']);
        $user->save();
        DB::insert("INSERT INTO users_roles VALUES(?, ?)", [$user->id, 2]);
        Session::put('user_id', $user->id);
        Session::put('user_name', $user->name);
        Session::flash('sm', 'Welcome' . $user->name);
    }
}
