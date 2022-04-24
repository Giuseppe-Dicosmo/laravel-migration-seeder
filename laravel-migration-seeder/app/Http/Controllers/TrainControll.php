<?php

namespace App\Http\Controllers;

use App\Train;

use Illuminate\Http\Request;

class TrainControll extends Controller
{
    public function index() {
        $trains = Train::all();
        return view('welcome', compact('trains'));
    }
}
