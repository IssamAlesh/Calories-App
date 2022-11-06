<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StartController extends Controller
{
    public function index()
    {
        return view("files/start");
    }

    public function next()
    {
        return redirect()->route('caloriesSleep');
    }
}
