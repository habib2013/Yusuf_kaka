<?php
use App\User;
use App\Blog;
use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
         $show_blog = new Blog();
        $allblogs = $show_blog::all()->take(3);
    return view('welcome',compact('allblogs'));
});

Route::post('/writecomment', 'AdminsController@makeComment');


Auth::routes();
Route::get('auth/google', 'Auth\GoogleController@redirectToGoogle');
Route::get('auth/google/callback', 'Auth\GoogleController@handleGoogleCallback');



Route::get('/adminhome','AdminsController@homepage')->name('adminhome')->middleware('is_admin');
Route::get('/about','DummyPagesController@about_kaka');
Route::get('/contactme','DummyPagesController@contactme');
Route::get('/comingsoon','DummyPagesController@comingsoon');
Route::get('/events','DummyPagesController@events');

Route::get('/blogs', 'DummyPagesController@posts')->name('posts');
Route::post('ajaxRequest', 'AdminsController@ajaxRequest')->name('ajaxRequest');

Route::get('/aboutkaka', 'AdminsController@aboutkaka');
Route::get('notification', 'HomeController@notification');
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/blogpost', 'AdminsController@blog')->name('blog');
Route::get('/post_events', 'EventController@post_events')->name('post_events');
Route::post('/create_events', 'EventController@create_events')->name('create_events');
Route::get('pages/check_slug', 'AdminsController@check_slug')->name('pages.check_slug');

Route::post('/createblog', 'AdminsController@createblog')->name('createblog');
Route::post('/updateblog', 'AdminsController@updateblog')->name('updateblog');
Route::post('/deleteblog', 'AdminsController@deleteblog')->name('deleteblog');
Route::post('/submitcomment','AdminsController@submitcomment');
Route::get('/seen/{blogid}','DummyPagesController@countComment')->name('seencomment');

Route::get('/showsingle/{slug}','DummyPagesController@showsingle');
Route::get('/auth/redirect/{provider}', 'SocialController@redirect');
Route::get('/callback/{provider}', 'SocialController@callback');

Route::post('/autocomplete/fetch', 'AutocompleteController@fetch')->name('autocomplete.fetch');
Route::post('follow/{user}','FollowsController@store');



Route::get('/blog/{blog_id?}', function ($blog_id) {
    $blog = Blog::find($blog_id);
    return Response::json($blog);
});







