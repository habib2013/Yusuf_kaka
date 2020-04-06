<?php

namespace App\Http\Controllers;
use App\Blog;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $show_blog = new Blog();
        $allblogs = $show_blog::all();
        return view('home',compact('allblogs'));
        // return view('home');
    }

    public function notification()
    {
        session()->set('success','Item created successfully.');


        return view('notification-check');
    }
}
