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
        $allevents = new Event();
        $events = $allevents::all();
        return view('create_events',compact('events'));
    }


public function create_events(Request $request){

        $validator = Validator::make($request->all(),[
            'title' => 'required',
            'description' => 'required',
            'event_image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'video_link' => 'required|url',
            'date' =>'required',
            'address' => 'required'
        ]);

        $input = $request->all();

        if($validator->passes()){
            $input = $request->all();
$input['slug'] = time().rand(10,1000);
// $input['event_image'] = time().'.'.$request->event_image->extension();
// $request->event_image->move(public_path('images'),$input['event_image']);


// $imagepath = request('event_image')->store('events','public');
// $image = Image::make(public_path("storage/{$imagepath}"))->resize(550,400);
// $image->save();

// $input['event_image'] = $imagepath;

$filenameWithExt = $request->file('event_image')->getClientOriginalName();
$filename = pathInfo($filenameWithExt,PATHINFO_FILENAME);
$extension = $request->file('event_image')->getClientOriginalExtension();
$filenameToStore = $filename.'_'.time().'.'.$extension;
$path = $request->file('event_image')->storeAs('public/events',$filenameToStore);
$input['event_image'] = $filenameToStore;


try {
    Event::create($input);
  } catch (\Exception $e) {
    dd($e);
  }


return response()->json(['success'=>'done']);
        }
        else {
            return response()->json(['error'=>$validator->errors()->all()]);
        }

    }
}
