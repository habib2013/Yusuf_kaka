<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DummyPagesController extends Controller
{
  
    public function about_kaka(){
        return view('about');
    }
}
