<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class LoginTopController extends Controller
{
    public function index(Request $request)
    {
        $user = Auth::user();
        $param = ['user' => $user];
        return view('top.logintop', $param);
    }
}
