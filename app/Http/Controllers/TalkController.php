<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TalkController extends Controller
{
    public function index()
    {
        return view('talk.roomchoose');
    }

    public function hokubu()
    {
        return view('talk.hokubu');
    }
    
    public function tohoku()
    {
        return view('talk.tohoku');
    }

    public function tobu()
    {
        return view('talk.tobu');
    }

    public function tyubu()
    {
        return view('talk.tyubu');
    }

    public function seibu()
    {
        return view('talk.seibu');
    }
}
