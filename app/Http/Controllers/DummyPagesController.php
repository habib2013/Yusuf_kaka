<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DummyPagesController extends Controller
{

    public function about_kaka(){
        return view('about');
    }
    public function contactme(){
        return view ('contactme');
    }

    public function comingsoon(){
        return view('comingsoon');
    }
    public function events(){
        return view('events');
    }
}
