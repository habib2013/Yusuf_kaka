<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Blog;
use App\Event;
use App\Comment;
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
       $blog_id = $blog['id'];
        $comment = Comment::where('postid','=',$blog_id)->first();

        $mycomment = new Comment();
        $countcomm = $mycomment->all()->where('postid','=',$blog_id);


        return view('blog_single',compact('blog','countcomm'));
        // return view('blog_single',compact('blog'));
    }

    public function countComment(Request $request,$blogid){
        //  $input = $request->all();
        //  $myblogid = $input['id'];
        $blog = Blog::where('id','=',1)->first();
        $blog_id = $blog['id'];
        $mycomment = new Comment();
        $countcomm = $mycomment->all()->where('postid','=',1)->count();;
        print_r($countcomm);
    }

}
