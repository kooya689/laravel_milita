<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Auth\AuthenticationException;
use Illuminate\Support\Facades\Auth;

class TopController extends Controller
{
    public function index() 
    {
        return view('top.militaTop');
    }


}
