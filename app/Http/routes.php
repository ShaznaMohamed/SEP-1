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

use Illuminate\Support\Facades\Mail;

Route::get('email', function () {
  Mail::send('emails.test', ['name' => 'Novica'], function ($message) {
      $message->to('dsr931108@gmail.com', 'Some guy')->subject('Welcome');
    });
});

Route::get('profile', function () {
    return View::make('profile');
});

Route::get('profile', function () {
    return View::make('profile');
});

Route::get('testimonialsform', function () {
    return View::make('testimonials/form-testimonials');
});

Route::get('about', function () {
    return View::make('about/about');
});

Route::get('contact', function () {
    return View::make('contact');
});

Route::get('accommodation', function () {
    return View::make('accommodation');
});

Route::get('accommodation2', function () {
    return View::make('accommodation2');
});

Route::get('blog', function () {
    return View::make('blog');
});

Route::get('blog-post', function () {
    return View::make('blog-post');
});

Route::get('faqs', function () {
    return View::make('faqs');
});

Route::get('gallery', function () {
    return View::make('gallery');
});

Route::get('testimonials', function () {
    return View::make('testimonials/guest-book');
});

Route::get('location', function () {
    return View::make('location/location');
});

Route::get('restaurant', function () {
    return View::make('restaurant');
});

Route::get('room', function () {
    return View::make('room');
});

Route::get('room2', function () {
    return View::make('room2');
});

Route::get('single', function () {
    return View::make('single');
});

Route::get('sitemap', function () {
    return View::make('sitemap');
});

Route::get('specials', function () {
    return View::make('specials');
});

Route::get('hallDetails', function () {
    return View::make('hallDetails');
});

Route::get('home', function () {
    return View::make('index');
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

/*
|--------------------------------------------------------------------------
| Newsletter Routes
|--------------------------------------------------------------------------
|
*/

Route::get('/newsletter', [
    'uses' => '\App\Http\Controllers\subscribeController@getSubscribe',
    'as' => 'newsletter',
]);

Route::post('/newsletter', [
    'uses' => '\App\Http\Controllers\subscribeController@postSubscribe',
]);

/*
|--------------------------------------------------------------------------
| Events Routes
|--------------------------------------------------------------------------
|
*/

Route::get('/events', [
    'uses' => '\App\Http\Controllers\EventsController@getEvents',
    'as' => 'events',
]);

Route::post('/events', [
    'uses' => '\App\Http\Controllers\EventsController@postEvents',
]);

Route::get('/hallDetails', [
    'uses' => '\App\Http\Controllers\HallController@index',
    'as' => 'hallDetails',
]);

/*
|--------------------------------------------------------------------------
| Gallery Control Routes
|--------------------------------------------------------------------------
|
*/

    Route::get('upload', function () {
      return View::make('galleryUpload');
    });
    Route::post('apply/upload1', 'galleryController@uploadImg1');
    Route::post('apply/upload2', 'galleryController@uploadImg2');
    Route::post('apply/upload3', 'galleryController@uploadImg3');
    Route::post('apply/upload4', 'galleryController@uploadImg4');
    Route::post('apply/upload5', 'galleryController@uploadImg5');
    Route::post('apply/upload6', 'galleryController@uploadImg6');
    Route::post('apply/upload7', 'galleryController@uploadImg7');

/*
|--------------------------------------------------------------------------
| Application Routes End
|--------------------------------------------------------------------------
*/
});

/*
|--------------------------------------------------------------------------
| Authentication Routes
|--------------------------------------------------------------------------
|
*/

Route::group(['middleware' => 'web'], function () {
    Route::auth();

    Route::get('/', [
        'uses' => '\App\Http\Controllers\HomeController@index',
        'as' => 'home',
    ]);

});
