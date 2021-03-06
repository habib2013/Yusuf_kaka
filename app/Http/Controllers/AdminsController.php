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
use Illuminate\Support\Str;
use Validator;
use App\AjaxImage;

use DB;

class AdminsController extends Controller
{
    public function __construct(){
        return $this->middleware('auth');
}
public function aboutkaka(){
  return view('admin.admin_about');
}

public function check_slug(Request $request)
{
    $slug = str_slug($request->title);
    return response()->json(['slug' => $slug]);
}


public function submitcomment(Request $request)
{
 $validator = Validator::make($request->all(),[
    'comment' => '',
    'username' => '',
    'postid' => '',

 ]);

if ($validator->passes()) {
$input = $request->all();
Comment::create($input);

return response()->json(['status' => 'success']);
}
else{
    return response()->json(['error' => $validator->errors()->all()]);
}
}


public function makeComment(Request $request){
  if ($request->ajax()){
      $user = Auth::user();
      $comment = new Comment;

      $comment->userid = $user->id;
      $comment->postid = $request->postid;
      $comment->comment = $request->commenttext;

      $comment->save();

      return response($comment);
  }
}


public function homepage(){
  $allblogs = new Blog();
  $blog = $allblogs::all();

  $myblogs = new Blog();
  $show_three = $myblogs->take(3)->get();
    return view('admin.admin_dashboard',compact('blog','show_three'));
}



public function blog(){
    $allblogs = new Blog();
    $blog = $allblogs::all();
    return view('admin.blogpost',compact('blog'));
}

public function createblog(Request $request){
    $validator = Validator::make($request->all(),[
        'body'=>'required',
        'title'=>'required',
        'post_type'=>'required',
        'blog_image'=>'required|mimes:pdf,doc,jpeg,png,jpg,gif,svg|max:6144',
        'slug'=>'required',
        'user_id'=>'required'

    ]);
            if($validator->passes()){
$input = $request->all();
// $input['slug'] = time().rand(10,1000);
// $input['blog_image'] = time().'.'.$request->blog_image->extension();
// $request->blog_image->move(public_path('/myassets/images'),$input['blog_image']);

// $imagepath = request('blog_image')->store('blogs','public');
// $image = Image::make(public_path("storage/{$imagepath}"))->resize(550,400);
// $image->save();

// $input['blog_image'] = $imagepath;

$filenameWithExt = $request->file('blog_image')->getClientOriginalName();
$filename = pathInfo($filenameWithExt,PATHINFO_FILENAME);
$extension = $request->file('blog_image')->getClientOriginalExtension();
$filenameToStore = $filename.'_'.time().'.'.$extension;
$path = $request->file('blog_image')->storeAs('public/blogs',$filenameToStore);
$input['blog_image'] = $filenameToStore;
Blog::create($input);

//session()->set('success','Post created successfully.');
return response()->json(['success'=>'done']);
            }
            else{
                return response()->json(['error'=>$validator->errors()->all()]);
            }


}

public function updateblog(Request $request){

    $validator = Validator::make($request->all(), [
        'utitle'=>'required',
        'ubody'=>'required',
        'upost_type'=>'required',
        'blog_id'=>'',
        'ublog_image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
      ]);


      $input = $request->all();
   //  dd($input);
     $title = $input['utitle'];
     $body = $input['ubody'];
     $post_type = $input['upost_type'];
  $id = $input['blog_id'];


 $blog_image = $input['ublog_image'] ?? '';
                        if($input['ublog_image'] != ''){
//                                 $blog_image = $input['ublog_image'];
//                                 $blog_image = time().'.'.$request->ublog_image->extension();
//   $request->ublog_image->move(public_path('images'), $blog_image);

$filenameWithExt = $request->file('ublog_image')->getClientOriginalName();
$filename = pathInfo($filenameWithExt,PATHINFO_FILENAME);
$extension = $request->file('ublog_image')->getClientOriginalExtension();
$filenameToStore = $filename.'_'.time().'.'.$extension;
$path = $request->file('ublog_image')->storeAs('public/blogs',$filenameToStore);
$blog_image = $filenameToStore;


  $result = DB::update(DB::raw("update blogs set title=:title,body=:body,blog_image=:blog_image,post_type=:post_type where id=:id"),array('title'=>$title,'body'=>$body,'id'=>$id,'blog_image'=>$blog_image,'post_type'=>$post_type));

  if($result){
        return response()->json(['success'=>'done']);


      }
      else{
        return response()->json(['error'=>$validator->errors()->all()]);
      }

                        }

                        $result2 = DB::update(DB::raw("update blogs set title=:title,body=:body,post_type=:post_type where id=:id"),array('title'=>$title,'body'=>$body,'id'=>$id,'post_type'=>$post_type));

                        if($result2){
                              return response()->json(['success'=>'done']);

                            }
                            else{
                              return response()->json(['error'=>$validator->errors()->all()]);
                            }
}



public function deleteblog(Request $request){

    $blog_id = $request->delete_id;
    //dd($course_id);

    $result3 = DB::delete(DB::raw("delete from blogs where id=:blog_id"),array('blog_id'=>$blog_id));
          // dd($result3);

    if($result3){
      return response()->json(['success'=>'done']);

    }
    else{
      return response()->json(['error'=>$validator->errors()->all()]);
    }


}



public function ajaxRequest(Request $request){
  $post = Blog::find($request->id);
  $response = auth()->user()->toggleLike($post);
  return response()->json(['success'=>$response]);
}



// Start about Controller



// End about controller
}
