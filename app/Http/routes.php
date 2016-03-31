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

  Route::get('eventassigned', function () {
    return View::make('events/eventassigned');
  });

  Route::get('menuadded', function () {
    return View::make('restaurant/menuadded');
  });

  Route::get('hallu', function () {
    return View::make('events/hallu');
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

  Route::get('home', function () {
    return View::make('index');
  });

  Route::get('local', function () {
    return View::make('misc/local');
  });

  Route::get('paypal', function () {
    return View::make('paypal/paypal');
  });

  Route::get('paycomplete', function () {
    return View::make('paypal/paycomplete');
  });

  Route::get('staff', function () {
    return View::make('about/staff');
  });

  Route::get('blog-post-crud', function () {
    return View::make('blog-post-crud');
  });

  /*
|--------------------------------------------------------------------------
| Reservation history Routes
|--------------------------------------------------------------------------
|
*/
  Route::get('/reservationhistory/{id}', [
    'uses' => '\App\Http\Controllers\HistoryController@getRooms',
    'as' => 'reservationhistory',
]);

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

  Route::get('/leavcom',[
    'uses' => '\App\Http\Controllers\TestController@com',
    'as' => 'leavecom',

  ]);

  Route::post('/leavcom',[
    'uses' => '\App\Http\Controllers\TestController@postcom',
    'as' => 'leavecom',

  ]);

  Route::get('/leavrep',[
    'uses' => '\App\Http\Controllers\TestController@rep',
    'as' => 'leaverep',

  ]);

  Route::post('/leavrep',[
    'uses' => '\App\Http\Controllers\TestController@postreply',
    'as' => 'leaverep',

  ]);
  Route::get('/blog-post', [
    'uses' => '\App\Http\Controllers\TestController@blogF',
    'as' => 'blog-post',

  ]);

  Route::get('/editcom',[
    'uses' => '\App\Http\Controllers\TestController@editcomment',
    'as' => 'editcom',

  ]);

  Route::post('/editcom',[
    'uses' => '\App\Http\Controllers\TestController@posteditcomment',
    'as' => 'editcom',

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

  Route::post('/sendnewsletter', [
    'uses' => '\App\Http\Controllers\subscribeController@postSendNewsletter',
    'as' => 'sendnewsletter',
  ]);

  Route::get('/sendnewsletter', [
    'uses' => '\App\Http\Controllers\subscribeController@getSendNewsletter',
    'as' => 'sendnewsletter',
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

  Route::get('/events',[
    'uses' => '\App\Http\Controllers\EventsController@getEvents',
    'as' => 'events',
  ]);

  Route::post('/events',[
    'uses' => '\App\Http\Controllers\EventsController@postEvents',
  ]);

  Route::get('/hallDetails',[
    'uses' => '\App\Http\Controllers\HallController@index',
    'as' => 'hallDetails',
  ]);

  //getting items to Dining manage
  Route::get('/eventmanage', [
    'uses' => '\App\Http\Controllers\EventsController@getEventinfo',
    'as' => 'eventmanage',
  ]);

  //deleting items from Breakfast menu
  Route::get('/eventmanage/{id}', [
    'uses' => '\App\Http\Controllers\EventsController@eventdel',
    'as' => 'eventmanage',
  ]);

  //updating event manage
  Route::get('/eventassign/{id}', [
    'uses' => '\App\Http\Controllers\EventsController@eventEdit',
    'as' => 'eventassign',
  ]);

  Route::post('/eventassign', [
    'uses' => '\App\Http\Controllers\EventsController@eEdit',
  ]);

  //getting data to hallDetails view
      Route::get('/hallDetails',[
        'uses' => '\App\Http\Controllers\HallEditController@getDetails',
        'as' => 'hallDetails',
      ]);

    //getting data to hall management view
    Route::get('/halledit', [
        'uses' => '\App\Http\Controllers\HallEditController@getHallDetails',
        'as' => 'halledit',
    ]);

    //adding new elements to hallDetails
    Route::post('/hallDetailAdd', [
      'uses' => '\App\Http\Controllers\HallEditController@detailAdd',
      'as' => 'hallDetailAdd',
    ]);

    Route::get('/hallDetailAdd', [
      'uses' => '\App\Http\Controllers\HallEditController@getsAdd',
      'as' => 'hallDetailAdd',
    ]);

    //updating hallDetails
    Route::get('/hallDetailUpdate/{id}', [
      'uses' => '\App\Http\Controllers\HallEditController@hallDetailsEdit',
      'as' => 'hallDetailUpdate',
    ]);

    Route::post('/hallDetailUpdate', [
      'uses' => '\App\Http\Controllers\HallEditController@hEdit',
    ]);

    //deleting items from hallDetails
    Route::get('/halledit/{id}', [
      'uses' => '\App\Http\Controllers\HallEditController@detailDelete',
      'as' => 'halledit',
    ]);

  /*
  |--------------------------------------------------------------------------
  | Dining Routes
  |--------------------------------------------------------------------------
  |
  */
  Route::get('/dining',[
    'uses' => '\App\Http\Controllers\DiningController@getEvents',
    'as' => 'dining',
  ]);

  Route::post('/dining',[
    'uses' => '\App\Http\Controllers\DiningController@postEvents',
  ]);
  //getting items to Dining manage
  Route::get('/diningmanage', [
    'uses' => '\App\Http\Controllers\DiningController@getDining',
    'as' => 'diningmanage',
  ]);

  //deleting items from Breakfast menu
  Route::get('/diningmanage/{id}', [
    'uses' => '\App\Http\Controllers\DiningController@dinningdel',
    'as' => 'diningmanage',
  ]);


  /*
  |--------------------------------------------------------------------------
  | Restaurant Routes
  |--------------------------------------------------------------------------
  |
  */
  //getting data to restaurant view
  Route::get('/restaurant',[
    'uses' => '\App\Http\Controllers\RestaurantController@getMenu',
    'as' => 'restaurant',
  ]);
  //getting data to menu management view
  Route::get('/menueditb', [
    'uses' => '\App\Http\Controllers\MenuEditController@getBreakfast',
    'as' => 'menueditb',
  ]);

  Route::get('/menueditl', [
    'uses' => '\App\Http\Controllers\MenuEditController@getLunch',
    'as' => 'menueditl',
  ]);

  Route::get('/menueditd', [
    'uses' => '\App\Http\Controllers\MenuEditController@getDinner',
    'as' => 'menueditd',
  ]);

  Route::get('/menueditn', [
    'uses' => '\App\Http\Controllers\MenuEditController@getNonAlcoholic',
    'as' => 'menueditn',
  ]);

  Route::get('/menueditc', [
    'uses' => '\App\Http\Controllers\MenuEditController@getCoffee',
    'as' => 'menueditc',
  ]);

  Route::get('/menuedita', [
    'uses' => '\App\Http\Controllers\MenuEditController@getAlcoholic',
    'as' => 'menuedita',
  ]);


  //Breakfast
  //updating Breakfast menu
  Route::get('/menuupdate/{id}', [
    'uses' => '\App\Http\Controllers\MenuEditController@breakfastEdit',
    'as' => 'menuupdate',
  ]);

  Route::post('/menuupdate', [
    'uses' => '\App\Http\Controllers\MenuEditController@bEdit',
  ]);
  //adding new elements for Breakfast menu
  Route::post('/menuadd', [
    'uses' => '\App\Http\Controllers\MenuEditController@breakfastAdd',
    'as' => 'menuadd',
  ]);

  Route::get('/menuadd', [
    'uses' => '\App\Http\Controllers\MenuEditController@getAdd',
    'as' => 'menuadd',
  ]);
  //deleting items from Breakfast menu
  Route::get('/menueditb/{id}', [
    'uses' => '\App\Http\Controllers\MenuEditController@breakfastdel',
    'as' => 'menueditb',
  ]);

  //Lunch
  //updating Lunch menu
  Route::get('/menuupdatelunch/{id}', [
    'uses' => '\App\Http\Controllers\MenuEditController@lunchEdit',
    'as' => 'menuupdatelunch',
  ]);

  Route::post('/menuupdatelunch', [
    'uses' => '\App\Http\Controllers\MenuEditController@lEdit',
  ]);
  //adding new elements for Lunch menu
  Route::post('/menuaddlunch', [
    'uses' => '\App\Http\Controllers\MenuEditController@lunchAdd',
    'as' => 'menuaddlunch',
  ]);

  Route::get('/menuaddlunch', [
    'uses' => '\App\Http\Controllers\MenuEditController@getlunchAdd',
    'as' => 'menuaddlunch',
  ]);
  //deleting items from Lunch menu
  Route::get('/menueditl/{id}', [
    'uses' => '\App\Http\Controllers\MenuEditController@lunchdel',
    'as' => 'menueditl',
  ]);


  //dinner
  //updating dinner menu
  Route::get('/menuupdatedinner/{id}', [
    'uses' => '\App\Http\Controllers\MenuEditController@dinnerEdit',
    'as' => 'menuupdatedinner',
  ]);

  Route::post('/menuupdatedinner', [
    'uses' => '\App\Http\Controllers\MenuEditController@dEdit',
  ]);
  //adding new elements for dinner menu
  Route::post('/menuadddinner', [
    'uses' => '\App\Http\Controllers\MenuEditController@dinnerAdd',
    'as' => 'menuadddinner',
  ]);

  Route::get('/menuadddinner', [
    'uses' => '\App\Http\Controllers\MenuEditController@getdinnerAdd',
    'as' => 'menuadddinner',
  ]);
  //deleting items from dinner menu
  Route::get('/menueditd/{id}', [
    'uses' => '\App\Http\Controllers\MenuEditController@dinnerdel',
    'as' => 'menueditd',
  ]);


  //dinner
  //updating dinner menu
  Route::get('/menuupdatenonalcoholic/{id}', [
    'uses' => '\App\Http\Controllers\MenuEditController@nonalcoholicEdit',
    'as' => 'menuupdatenonalcoholic',
  ]);

  Route::post('/menuupdatenonalcoholic', [
    'uses' => '\App\Http\Controllers\MenuEditController@nEdit',
  ]);
  //adding new elements for dinner menu
  Route::post('/menuaddnonalcoholic', [
    'uses' => '\App\Http\Controllers\MenuEditController@nonalcoholicAdd',
    'as' => 'menuaddnonalcoholic',
  ]);

  Route::get('/menuaddnonalcoholic', [
    'uses' => '\App\Http\Controllers\MenuEditController@getnonalcoholicAdd',
    'as' => 'menuaddnonalcoholic',
  ]);
  //deleting items from dinner menu
  Route::get('/menueditn/{id}', [
    'uses' => '\App\Http\Controllers\MenuEditController@nonalcoholicdel',
    'as' => 'menueditn',
  ]);

  //coffee
  //updating coffee menu
  Route::get('/menuupdatecoffee/{id}', [
    'uses' => '\App\Http\Controllers\MenuEditController@coffeeEdit',
    'as' => 'menuupdatecoffee',
  ]);

  Route::post('/menuupdatecoffee', [
    'uses' => '\App\Http\Controllers\MenuEditController@cEdit',
  ]);
  //adding new elements for coffee menu
  Route::post('/menuaddcoffee', [
    'uses' => '\App\Http\Controllers\MenuEditController@coffeeAdd',
    'as' => 'menuaddcoffee',
  ]);

  Route::get('/menuaddcoffee', [
    'uses' => '\App\Http\Controllers\MenuEditController@getcoffeeAdd',
    'as' => 'menuaddcoffee',
  ]);
  //deleting items from coffee menu
  Route::get('/menueditc/{id}', [
    'uses' => '\App\Http\Controllers\MenuEditController@coffeedel',
    'as' => 'menueditc',
  ]);

  //alcoholic
  //updating alcoholic menu
  Route::get('/menuupdatealcoholic/{id}', [
    'uses' => '\App\Http\Controllers\MenuEditController@alcoholicEdit',
    'as' => 'menuupdatealcoholic',
  ]);

  Route::post('/menuupdatealcoholic', [
    'uses' => '\App\Http\Controllers\MenuEditController@aEdit',
  ]);
  //adding new elements for alcoholic menu
  Route::post('/menuaddalcoholic', [
    'uses' => '\App\Http\Controllers\MenuEditController@alcoholicAdd',
    'as' => 'menuaddalcoholic',
  ]);

  Route::get('/menuaddalcoholic', [
    'uses' => '\App\Http\Controllers\MenuEditController@getalcoholicAdd',
    'as' => 'menuaddalcoholic',
  ]);
  //deleting items from alcoholic menu
  Route::get('/menuedita/{id}', [
    'uses' => '\App\Http\Controllers\MenuEditController@alcoholicdel',
    'as' => 'menuedita',
  ]);

  /*
  |--------------------------------------------------------------------------
  | Halls,Events,Dining Control Routes1
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
  elseif ( Request::input('betnm') === 'Send Notification Email' )
  {
    Route::post('/managereservation',[
      'uses' => '\App\Http\Controllers\LostFoundController@planneremailsendingg',
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
    'uses' => '\App\Http\Controllers\RoomreservationController@paypalstart',
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
    return View::make('wedding/weddingplanner');
  });
  Route::get('plannerform', function () {
    return View::make('wedding/plannerform');
  });
  //Rooms
  Route::get('royalsuite', function () {
    return View::make('room/royalsuite');
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

  // Route::get('roomform', function () {
  //   return View::make('room/roomform');
  // });

  Route::get('/roomconfirmsub.php', function () {
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
    return View::make('room/room');
  });


  /*
  |--------------------------------------------------------------------------
  | Check Availability and Advanced Search
  |--------------------------------------------------------------------------
  |
  */

  /*check availability */


  Route::get('/checkA',[
    'uses' => '\App\Http\Controllers\AvailController@indexGet',
    'as' => 'checkA',

  ]);

  Route::post('/checkA',[
    'uses' => '\App\Http\Controllers\AvailController@indexPost',
    'as' => 'checkA',

  ]);


  Route::post('/check',[
    'uses' => '\App\Http\Controllers\AvailController@check',
    'as' => 'check',

  ]);
  /* Search
  ***
  */
  Route::get('/inter',[
    'uses' => '\App\Http\Controllers\WelcomeController@PostsearchRedirect',
    'as' => 'inter',

  ]);

  Route::get('/getRequest', function()
  {
    if(Request::ajax())
    {
      return 'Get request has been loaded completely';
    }
  });

  Route::post('/advanced-search', function()
  {
    if(Request::ajax())
    {
      return Response::json(Request::all());
    }
  });

  /* Check Avaialbility and Search finish here */

  /*
  |--------------------------------------------------------------------------
  | Application Routes Endf
  |--------------------------------------------------------------------------
  */
  });

  /*
  /**************************************************************************
  |--------------------------------------------------------------------------
  | Administrator Routes
  |--------------------------------------------------------------------------
  |**************************************************************************
  */

  Route::group(['middleware' => 'admin'], function(){

  Route::get('/dashboard', 'AdminController@index');

  Route::get('/menudashboard', 'AdminController@menu');

  /*
  |--------------------------------------------------------------------------
  | Adminitrator Control
  |--------------------------------------------------------------------------
  |
  */
  Route::get('/adminbackup', [
    'uses' => '\App\Http\Controllers\BackupController@index',
    'as' => 'adminbackup',
  ]);

  Route::get('/adminbackedup', [
    'uses' => '\App\Http\Controllers\BackupController@index',
    'as' => 'adminbackedup',
  ]);


  Route::get('/adminbackupnow', [
    'uses' => '\App\Http\Controllers\BackupController@BackupNow',
    'as' => 'adminbackupnow',
  ]);

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

  Route::get('/admindel/{id}', [
    'uses' => '\App\Http\Controllers\AdminUsers@admindel',
    'as' => 'admindel',
  ]);

  Route::get('/adminedit/{id}', [
    'uses' => '\App\Http\Controllers\AdminUsers@getAdminEdit',
    'as' => 'adminedit',
  ]);

  Route::post('/adminedit', [
    'uses' => '\App\Http\Controllers\AdminUsers@adminEdit',
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

  Route::get('adminroom', function () {
    return View::make('admin/room/adminroom');
  });

  Route::post('/adminroom', [
    'uses' => '\App\Http\Controllers\roomController@insertdataa',
    'as' => '/adminroom',
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

  Route::get('/adminweddingpage', [
    'uses' => '\App\Http\Controllers\weddingservicesController@getdataa',
    'as' => '/adminweddingpage',
  ]);

  Route::post('/adminweddingpage', [
    'uses' => '\App\Http\Controllers\WedreservationController@getLeague',
    'as' => '/adminweddingpage',
  ]);

  Route::post('/adminweddingpage', [
    'uses' => '\App\Http\Controllers\weddingservicesController@update',
    'as' => '/adminweddingpage',
  ]);

  Route::post('/adminplanner', [
    'uses' => '\App\Http\Controllers\plannerController@insertdata',
    'as' => '/adminplanner',
  ]);

  Route::get('/weddingdashboard', [
    'uses' => '\App\Http\Controllers\AdminController@wedding',
    'as' => '/weddingdashboard',
  ]);

  Route::get('/roomdashboard', [
    'uses' => '\App\Http\Controllers\AdminController@room',
    'as' => '/roomdashboard',
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
