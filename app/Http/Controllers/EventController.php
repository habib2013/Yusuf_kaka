<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Profile;
use App\Comment;
use Auth;
use Intervention\Image\Facades\Image;
use App\Course;
use App\Blog;
use App\Event;
use Illuminate\Database\Eloquent\Collection;
use Webpatser\Uuid\Uuid;

use Validator;
use App\AjaxImage;

use DB;

class EventController extends Controller
{
    public function __construct(){
        return $this->middleware('auth');
}

    public function post_events(){
        return view('create_events');
    }


public function create_events(Request $request){

        $validator = Validator::make($request->all(),[
            'title' => 'required',
            'description' => 'required',
            'images' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'video_link' => 'required|url',
            'date' =>'required',
            'address' => 'required'
        ]);

        $input = $request->all();
               


    }
}
