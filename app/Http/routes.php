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

// Test Email
use Illuminate\Support\Facades\Mail;

Route::get('testemail', function () {
  Mail::send('emails.test', ['name' => 'Novica'], function ($message) {
    $message->to('dsr931108@gmail.com', 'Some guy')->subject('Welcome');
  });
});

/*
|**************************************************************************
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|**************************************************************************
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {

  Route::auth();

  Route::get('/', [
    'uses' => '\App\Http\Controllers\HomeController@index',
    'as' => 'home',
  ]);

  Route::get('profile', [
    'uses' => '\App\Http\Controllers\ProfileController@index',
    'as' => 'profile',
  ]);

  Route::get('about', function () {
    return View::make('about/about');
  });

  Route::get('gallery', function () {
    return View::make('gallery/gallery');
  });

  Route::get('location', function () {
    return View::make('location/location');
  });

  Route::get('restaurant', function () {
    return View::make('restaurant/restaurant');
  });

  Route::get('sitemap', function () {
    return View::make('sitemap');
  });

  Route::get('hallDetails', function () {
    return View::make('events/hallDetails');
  });

  Route::get('diningsummary', function () {
    return View::make('dining/diningsummary');
  });

  Route::get('home', function () {
    return View::make('index');
  });

  Route::get('local', function () {
    return View::make('misc/local');
  });

  /*
  |--------------------------------------------------------------------------
  | Blog posts and comments
  |--------------------------------------------------------------------------
  |
  */
  Route::get('blog', function () {
    return View::make('blog/blog');
  });

  Route::get('blog-post', function () {
    return View::make('blog/blog-post');
  });

  Route::get('/leavcom', [
    'uses' => '\App\Http\Controllers\TestController@com',
    'as' => 'leavecom',
  ]);

  Route::post('/leavcom', [
    'uses' => '\App\Http\Controllers\TestController@postcom',
    'as' => 'leavecom',
  ]);

  Route::get('/leavrep', [
    'uses' => '\App\Http\Controllers\TestController@rep',
    'as' => 'leaverep',
  ]);

  Route::post('/leavrep', [
    'uses' => '\App\Http\Controllers\TestController@postreply',
    'as' => 'leaverep',
  ]);

  Route::get('/blog-post', [
    'uses' => '\App\Http\Controllers\TestController@blogF',
    'as' => 'blog-post',
  ]);

  /*
  |--------------------------------------------------------------------------
  | Contact Us Routes
  |--------------------------------------------------------------------------
  |
  */

  Route::get('contact', [
    'uses' => '\App\Http\Controllers\ContactController@getContact',
    'as' => 'contact',
  ]);

  Route::post('contact', [
    'uses' => '\App\Http\Controllers\ContactController@postContact',
  ]);

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
  | Testimonials Routes
  |--------------------------------------------------------------------------
  |
  */
  Route::get('admintestimonials', [
    'uses' => '\App\Http\Controllers\TestimonialsController@getReviewAdmin',
    'as' => 'AdminTestimonials',
  ]);

  Route::get('/testimonials', [
    'uses' => '\App\Http\Controllers\TestimonialsController@getReview',
    'as' => 'testimonials',
  ]);

  Route::get('/testimonialsform', [
    'uses' => '\App\Http\Controllers\TestimonialsController@getForm',
    'as' => 'testimonialsform',
  ]);

  Route::post('/testimonialsform', [
    'uses' => '\App\Http\Controllers\TestimonialsController@postReview',
  ]);

  /*
  |--------------------------------------------------------------------------
  | FAQ Routes
  |--------------------------------------------------------------------------
  |
  */

  Route::get('/faq', [
    'uses' => '\App\Http\Controllers\FaqController@getFaq',
    'as' => 'faq',
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
  | Dining Routes
  |--------------------------------------------------------------------------
  |
  */
  Route::get('/dining', [
    'uses' => '\App\Http\Controllers\DiningController@getEvents',
    'as' => 'dining',
  ]);

  Route::post('/dining', [
    'uses' => '\App\Http\Controllers\DiningController@postEvents',
  ]);

  Route::get('/restaurant', [
    'uses' => '\App\Http\Controllers\RestaurantController@getMenu',
    'as' => 'restaurant',
  ]);

  Route::post('/test', [
    'uses' => '\App\Http\Controllers\DiningController@posttest',
    'as' => 'testv',
  ]);


  /*
  |--------------------------------------------------------------------------
  | Halls,Events,Dining Control Routes
  |--------------------------------------------------------------------------
  |
  */
  Route::get('eventupload', function () {
    return View::make('events/event_hallupload');
  });
  Route::post('apply/upload1', 'event_halluploadController@eventuploadImg1');
  Route::post('apply/upload2', 'event_halluploadController@eventuploadImg2');

  /*
  |--------------------------------------------------------------------------
  | Specials Control Routes
  |--------------------------------------------------------------------------
  |
  */
  Route::get('specadd', [
    'uses' => '\App\Http\Controllers\packageController@editPackages',
    // return View::make('specialsManage');
  ]);

  Route::get('specials', [
    'uses' => '\App\Http\Controllers\packageController@getPackages',
    // return View::make('specialsManage');
  ]);

  Route::post('apply/spec2', 'packageController@postPackUpdate');
  Route::post('apply/spec1', 'galleryController@uploadspecials');

  /*
  |--------------------------------------------------------------------------
  | Weddings and Rooms
  |--------------------------------------------------------------------------
  |
  */
  if ( Request::input('btnn') === 'Check Availability' )
   {
       Route::post('/managereservation',[
           'uses' => '\App\Http\Controllers\LostFoundController@checkhallavailability',
           'as' => 'managereservation',
       ]);
   }
   elseif ( Request::input('btton') === 'Confirm Reservation' )
   {
       Route::post('/managereservation',[
           'uses' => '\App\Http\Controllers\LostFoundController@confirmreservation',
           'as' => 'managereservation',
       ]);
   }
   elseif ( Request::input('btnm') === 'Send Email' )
   {
       Route::post('/managereservation',[
           'uses' => '\App\Http\Controllers\LostFoundController@myemailsendingg',
           'as' => 'managereservation',
       ]);
   }
   elseif ( Request::input('abtton') === 'Assign Planner' )
   {
       Route::post('/managereservation',[
           'uses' => '\App\Http\Controllers\LostFoundController@assignplanner',
           'as' => 'managereservation',
       ]);
   }

   Route::get('managereservation', function()
{
    return View::make('admin/wedding/managereservation');
});



  Route::post('weddingform', [
    'uses' => '\App\Http\Controllers\WedreservationController@insertdata',
    'as' => 'weddingform',
  ]);

  Route::get('weddingform', [
    'uses' => '\App\Http\Controllers\WedreservationController@getdata',
    'as' => 'weddingform',
  ]);

  Route::get('wedding', [
    'uses' => '\App\Http\Controllers\WedreservationController@getwedding',
    'as' => 'wedding',
  ]);

  Route::get('samroreception', [
    'uses' => '\App\Http\Controllers\weddingservicesController@getdatafortable',
    'as' => 'samroreception',
  ]);

  Route::get('deluxe', [
    'uses' => '\App\Http\Controllers\roomController@getdatafortable',
    'as' => 'deluxe',
  ]);

  Route::get('samroreception', [
    'uses' => '\App\Http\Controllers\weddingservicesController@index',
    'as' => 'samroreception',
  ]);

  Route::post('roomform', [
    'uses' => '\App\Http\Controllers\RoomreservationController@insertdata',
    'as' => 'roomform',
  ]);

  Route::get('room', [
    'uses' => '\App\Http\Controllers\RoomreservationController@getroom',
    'as' => 'room',
  ]);

  Route::get('roomform', [
    'uses' => '\App\Http\Controllers\RoomreservationController@getdataa',
    'as' => 'roomform',
  ]);

  Route::get('plannerform', [
    'uses' => '\App\Http\Controllers\plannerbookingController@getdataa',
    'as' => 'plannerform',
  ]);

  Route::post('plannerform', [
    'uses' => '\App\Http\Controllers\plannerbookingController@insertdata',
    'as' => 'plannerform',
  ]);


  Route::get('wedding', function () {
    return View::make('wedding/wedding');
  });

  Route::get('samroreception', function () {
    return View::make('wedding/samroreception');
  });

  Route::get('weddingform', function () {
    return View::make('wedding/weddingform');
  });

  Route::get('poosideballroom', function () {
    return View::make('wedding/poosideballroom');
  });

  Route::get('silverballroom', function () {
    return View::make('wedding/silverballroom');
  });

  Route::get('specialform', function () {
    return View::make('wedding/specialform');
  });

  Route::get('grandballroom', function () {
    return View::make('wedding/grandballroom');
  });

  Route::get('weddingplanner', function () {
    return View::make('wedding/planner');
  });
  Route::get('plannerform', function () {
    return View::make('wedding/plannerform');
  });
  //Rooms
  Route::get('royalsuite', function () {
    return View::make('royalsuite');
  });

  Route::get('deluxeroom', function () {
    return View::make('room/deluxeroom');
  });

  Route::get('premiersuite', function () {
    return View::make('room/premiersuite');
  });

  Route::get('juniorsuites', function () {
    return View::make('room/juniorsuites');
  });

  Route::get('roomform', function () {
    return View::make('room/roomform');
  });

  Route::get('/adminroomconfirmsub.php', function () {
    return View::make('rooms/roomconfirmsub');
  });

  Route::post('wedding', [
    'uses' => '\App\Http\Controllers\WedreservationController@insertdata',
    'as' => 'wedding',
  ]);

  Route::post('room', [
    'uses' => '\App\Http\Controllers\RoomreservationController@insertdata',
    'as' => 'room',
  ]);

  Route::get('room', function () {
    return View::make('room');
  });
  /*
  |--------------------------------------------------------------------------
  | Application Routes Endf
  |--------------------------------------------------------------------------
  */
  // });
  //
  // /*
  // /**************************************************************************
  // |--------------------------------------------------------------------------
  // | Administrator Routes
  // |--------------------------------------------------------------------------
  // |**************************************************************************
  // */
  //
  // Route::group(['middleware' => ['auth', 'admin','web']], function(){

  Route::get('/dashboard', 'AdminController@index');

  /*
  |--------------------------------------------------------------------------
  | Adminitrator Control
  |--------------------------------------------------------------------------
  |
  */

  Route::get('/adminlist', [
    'uses' => '\App\Http\Controllers\AdminUsers@getAdminList',
    'as' => 'adminlist',
  ]);

  Route::get('/adminadd', [
    'uses' => '\App\Http\Controllers\AdminUsers@getForm',
    'as' => 'adminadd',
  ]);

  Route::get('/adminadded', [
    'uses' => '\App\Http\Controllers\AdminUsers@getAdded',
    'as' => 'adminadded',
  ]);

  Route::post('/adminadd', [
    'uses' => '\App\Http\Controllers\AdminUsers@postadmin',
  ]);

  /*
  |--------------------------------------------------------------------------
  | FAQ
  |--------------------------------------------------------------------------
  |
  */

  Route::get('/adminfaq', [
    'uses' => '\App\Http\Controllers\FaqController@getFaqAdmin',
    'as' => 'adminfaq',
  ]);

  Route::get('/faqadd', [
    'uses' => '\App\Http\Controllers\FaqController@getForm',
    'as' => 'faqadd',
  ]);

  Route::get('/faqadded', [
    'uses' => '\App\Http\Controllers\FaqController@getAdded',
    'as' => 'faqadded',
  ]);

  Route::post('/faqadd', [
    'uses' => '\App\Http\Controllers\FaqController@postFaq',
  ]);

  Route::get('/faqdel/{id}', [
    'uses' => '\App\Http\Controllers\FaqController@faqdel',
    'as' => 'faqdel',
  ]);

  Route::post('/faqedit', [
    'uses' => '\App\Http\Controllers\FaqController@savefaqEdit',
  ]);

  /*
  |--------------------------------------------------------------------------
  | Users
  |--------------------------------------------------------------------------
  |
  */

  Route::get('/adminusers', [
    'uses' => '\App\Http\Controllers\UserController@getuserAdmin',
    'as' => 'adminusers',
  ]);

  Route::get('/adminuseradd', [
    'uses' => '\App\Http\Controllers\UserController@getForm',
    'as' => 'adminuseradd',
  ]);

  Route::get('/adminuseradded', [
    'uses' => '\App\Http\Controllers\UserController@getAdded',
    'as' => 'adminuseradded',
  ]);

  Route::post('/adminuseradd', [
    'uses' => '\App\Http\Controllers\UserController@userAdd',
  ]);

  Route::get('/adminuseredit/{id}', [
    'uses' => '\App\Http\Controllers\UserController@getuserEdit',
    'as' => 'adminuseredit',
  ]);

  Route::post('/adminuseredit', [
    'uses' => '\App\Http\Controllers\UserController@userEdit',
  ]);

  Route::get('/adminuserdel/{id}', [
    'uses' => '\App\Http\Controllers\UserController@adminuserdel',
    'as' => 'adminuserdel',
  ]);

  Route::get('/admintestimonialhide/{id}', [
    'uses' => '\App\Http\Controllers\TestimonialsController@adminhide',
    'as' => 'admintestimonialhide',
  ]);

  Route::get('/admintestimonialshow/{id}', [
    'uses' => '\App\Http\Controllers\TestimonialsController@adminshow',
    'as' => 'admintestimonialshow',
  ]);

  //Edit Email
  Route::get('userEmailChange', [
    'uses' => '\App\Http\Controllers\UserController@userEmailChangeForm',
    'as' => 'userEmailChange',
  ]);

  Route::post('/userEmailChange', [
    'uses' => '\App\Http\Controllers\UserController@userEmailChange',
  ]);

  //Edit Password
  Route::get('/userPasswordChange', [
    'uses' => '\App\Http\Controllers\UserController@userPasswordChangeForm',
    'as' => 'userpasswordChange',
  ]);

  Route::post('/userPasswordChange', [
    'uses' => '\App\Http\Controllers\UserController@userPasswordChange',
  ]);

  //Edit Profile
  Route::get('/userProfileChange/{id}', [
    'uses' => '\App\Http\Controllers\UserController@userProfileChangeForm',
    'as' => 'userProfileChange',
  ]);

  Route::post('/userProfileChange', [
    'uses' => '\App\Http\Controllers\UserController@userProfileChange',
  ]);

  /*
  |--------------------------------------------------------------------------
  | Contact Us
  |--------------------------------------------------------------------------
  |
  */

  Route::get('/admincontactus', [
    'uses' => '\App\Http\Controllers\ContactController@index',
    'as' => 'admincontactus',
  ]);

  Route::get('/admincontactsent', [
    'uses' => '\App\Http\Controllers\ContactController@indexSent',
    'as' => 'admincontactussent',
  ]);

  Route::get('/admincontactusreply', [
    'uses' => '\App\Http\Controllers\ContactController@adminSendForm',
    'as' => 'admincontactusreply',
  ]);

  Route::get('/admincontactusreplyuser/{id}', [
    'uses' => '\App\Http\Controllers\ContactController@adminSendFormUser',
    'as' => 'admincontactusreplyuser',
  ]);

  Route::post('/admincontactusreply', [
    'uses' => '\App\Http\Controllers\ContactController@adminSend',
    'as' => 'admincontactusreply',
  ]);

  Route::get('/admincontactusreplied', [
    'uses' => '\App\Http\Controllers\ContactController@adminSent',
    'as' => 'admincontactusreplied',
  ]);


  /*
  |--------------------------------------------------------------------------
  | Wedding and Room
  |--------------------------------------------------------------------------
  |
  */


  Route::post('adminroom', [
    'uses' => '\App\Http\Controllers\roomController@insertdataa',
    'as' => '/admin/adminroom',
  ]);

  Route::post('/adminspecialform', [
    'uses' => '\App\Http\Controllers\WedreservationController@index',
    'as' => '/adminspecialform',
  ]);

  Route::get('/adminspecialform', [
    'uses' => '\App\Http\Controllers\WedreservationController@getspecialform',
    'as' => '/adminspecialform',
  ]);

  Route::get('/adminroomconfirm', [
    'uses' => '\App\Http\Controllers\RoomreservationController@getroomconfirm',
    'as' => '/adminroomconfirm',
  ]);

  Route::get('/adminadminweddingpage', [
    'uses' => '\App\Http\Controllers\weddingservicesController@getdataa',
    'as' => '/adminadminweddingpage',
  ]);

  Route::post('/adminadminweddingpage', [
    'uses' => '\App\Http\Controllers\WedreservationController@getLeague',
    'as' => '/adminadminweddingpage',
  ]);

  Route::post('/adminadminweddingpage', [
    'uses' => '\App\Http\Controllers\weddingservicesController@insertdata',
    'as' => '/adminadminweddingpage',
  ]);

  Route::get('/adminadminweddingpage', function () {
    return View::make('/adminadminweddingpage');
  });

  Route::get('/adminadminroom', [
    'uses' => '\App\Http\Controllers\roomController@getdataaa',
    'as' => '/adminadminroom',
  ]);

  Route::get('/adminadminroom', function () {
    return View::make('/adminadminroom');
  });

  Route::get('/adminadminplanner', [
    'uses' => '\App\Http\Controllers\plannerController@getdataa',
    'as' => '/adminadminplanner',
  ]);
  Route::post('/adminadminplanner', [
    'uses' => '\App\Http\Controllers\plannerController@insertdata',
    'as' => '/adminadminplanner',
  ]);

  /*
  |--------------------------------------------------------------------------
  | Gallery Control Routes
  |--------------------------------------------------------------------------
  |
  */

  Route::get('upload', function () {
    return View::make('gallery/galleryUpload');
  });
  Route::post('apply/upload1', 'galleryController@uploadImg1');
  Route::post('apply/upload2', 'galleryController@uploadImg2');
  Route::post('apply/upload3', 'galleryController@uploadImg3');
  Route::post('apply/upload4', 'galleryController@uploadImg4');
  Route::post('apply/upload5', 'galleryController@uploadImg5');
  Route::post('apply/upload6', 'galleryController@uploadImg6');
  Route::post('apply/upload7', 'galleryController@uploadImg7');
  Route::post('apply/upload8', 'galleryController@uploadImg8');

});
