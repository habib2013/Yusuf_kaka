<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Blog;
use App\Event;
use Comment;
use Illuminate\Support\Facades\Validator;

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

    public function posts()
    {
      // $popularpost = App\Blog::popular()->get();
      // $user->follow($popularpost);

        $posts = Blog::get();
        $posts = Blog::paginate(6);
        return view('blog', compact('posts'));
    }
    public function showsingle($slug){
        $blog = Blog::where('slug','=',$slug)->firstorFail();
        
        return view('blog_single',compact('blog'));
    }

}
