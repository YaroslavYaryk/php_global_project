<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Place;


class Auth extends Controller
{
    public function register_user(Request $request)
    {
		session_start();

        $user = new User();
        $user->name = $request->name;
        $user->surname = $request->surname;
        $user->email = $request->email;

        $user->password = md5($request->email.$request->password);
        $user->place_id = $request->training_gym;

        $user->save();

	    $_SESSION["user"] = $user;
        session(['user' => $user]);

        return redirect('/');
    }

    public function register_view(Request $request)
    {
        
        $places = Place::all();
        return view("registration", ["places" => $places]);
    }

    public function login_user(Request $request)
    {
		session_start();

        $email = $request->email;
        $password = $request->password;
        $user = User::where("email", $email)->where("password", md5($email.$password))->first();
        if ( $user){
            $_SESSION["user"] = $user;
            session(['user' => $user]);

            return redirect('/');
        }
        return "ERROR";
        
    }

    public function login_view(Request $request)
    {

        return view('login');
    }

    public function logout(Request $request)
    {

        session_start();
	    unset($_SESSION["user"]);
        $request->session()->forget('user');
        return redirect('/');

    }

    public function get_user_profile(Request $request, $user_id)
    {
        
        $user = User::where("id", $user_id)->first();
        return view("user_profile", ["user" => $user]);
    }
}
