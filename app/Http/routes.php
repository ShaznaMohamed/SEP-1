<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('about', function()
{
    return View::make('about');
});

Route::get('contact', function()
{
    return View::make('contact/contact');
});

Route::get('accommodation', function()
{
    return View::make('accommodation/accommodation');
});

Route::get('accommodation2', function()
{
    return View::make('accommodation/accommodation2');
});

Route::get('blog', function()
{
    return View::make('blog/blog');
});

Route::get('blog-post', function()
{
    return View::make('blog/blog-post');
});

Route::get('faqs', function()
{
    return View::make('faqs');
});

Route::get('gallery', function()
{
    return View::make('gallery');
});

Route::get('guest-book', function()
{
    return View::make('guest-book');
});

Route::get('location', function()
{
    return View::make('location');
});

Route::get('restaurant', function()
{
    return View::make('restaurant/restaurant');
});

Route::get('room', function()
{
    return View::make('room/room');
});

Route::get('room2', function()
{
    return View::make('room/room2');
});

Route::get('single', function()
{
    return View::make('single');
});

Route::get('sitemap', function()
{
    return View::make('sitemap');
});

Route::get('specials', function()
{
    return View::make('specials');
});


/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {
    Route::get('/newsletter',[
    'uses' => '\App\Http\Controllers\subscribeController@getSubscribe',
    'as' => 'newsletter',
]);

    Route::post('/newsletter',[
    'uses' => '\App\Http\Controllers\subscribeController@postSubscribe',
]);
    
/*
**
gallery control route
*/

    Route::get('upload', function() {
      return View::make('galleryUpload');
    });
    Route::post('apply/upload', 'galleryController@upload');
});


Route::group(['middleware' => 'web'], function () {
    Route::auth();
    
    Route::get('/', function () {
        return view('index');
    });

    Route::get('/home', 'HomeController@index');
});
