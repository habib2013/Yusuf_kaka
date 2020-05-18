<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Blog;
use App\Event;

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
        $allevents = new Event();
        $events = $allevents->all();
        return view('events',compact('events'));
    }
}
