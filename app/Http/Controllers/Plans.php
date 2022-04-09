<?php

namespace App\Http\Controllers;

use App\Models\User;



use Illuminate\Http\Request;

class Plans extends Controller
{
	public function order_plan(Request $request, $plan_id)
    {
		$user = $request->session()->get('user');
		if (!$user){
			return redirect('/login');
		}
		$user_obj = User::where("id", $user->id)->first();
		$user_obj->plan_id = $plan_id;
		$user_obj->save();
		
        return redirect("profile/".$user->id);
    }

}
