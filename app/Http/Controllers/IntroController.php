<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IntroController extends Controller
{
    public function index() 
    {
     }
    public function root()
    {
        return view('introducing.root');

    }

    public function company()
    {
        return view('introducing.company');
    }
}
