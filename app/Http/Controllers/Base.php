<?php

namespace App\Http\Controllers;
use App\Models\Trainer;
use App\Models\Place;


use Illuminate\Http\Request;

class Base extends Controller
{
    public function index(Request $request)
    {

        $trainers = Trainer::all();

        return view('home_page', ["trainers" => $trainers]);
    }

}
