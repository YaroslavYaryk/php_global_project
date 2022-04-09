<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Trainer;

class Trainers extends Controller
{
    public function index(Request $request)
    {

        $trainers = Trainer::all();
        return view('trainers', ["trainers" => $trainers]);
    }

    public function get_trainer_info($id)
    {

        $trainer = Trainer::where('id', $id)->first();
        return view('trainer_details', ["trainer" => $trainer]);
    }
}
