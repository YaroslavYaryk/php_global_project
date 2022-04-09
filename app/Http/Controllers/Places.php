<?php

namespace App\Http\Controllers;

use App\Models\Place;
use Illuminate\Http\Request;

class Places extends Controller
{
    
    public function get_place_info($id)
    {

        $place = Place::where('id', $id)->first();
        return view('place_info', ["place" => $place, "footer_needed" => 0]);
    }
}
