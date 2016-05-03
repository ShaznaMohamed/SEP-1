<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Amalya Reach Holiday Resort | Wedding Banquet Halls Sri Lanka | Parties | Events</title>
<link rel="stylesheet" href="/css/global.css">
<link class="colour" rel="stylesheet" href="/css/colour-gold.css">
<link class="pattern" rel="stylesheet" href="/css/pattern-china.css">
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">

<!-- getting data for the comments and posts sections -->
<?php
$specialData = DB::table('packages')->get();


$reply_data = DB::table('comments')
                    ->join('users', 'users.id', '=', 'comments.user_id')
                    ->select('users.name', 'comments.body', 'comments.post_id', 'comments.created_at','comments.parent_id' , 'comments.user_id')
                    ->whereNotNull('comments.parent_id')
                    ->get();


$comment_data = DB::table('comments')
                    ->join('users', 'users.id', '=', 'comments.user_id')
                    ->select('users.name', 'comments.body', 'comments.post_id', 'comments.created_at', 'comments.user_id', 'comments.id')
                    ->where('comments.parent_id', '=', null)
                    ->get();

$count = count($comment_data);
$replycount = count($reply_data);

?>

</head>
<body class="page-blogpost page-sidebar">
<!-- Navigation | START -->
<div id="nav">
  <div class="centre">
    <a href="/" class="logo"><img alt="" src="/images/logo.png" /></a>
    <nav>
      <ul>
        <li class="mobile"><a href="contact.php" class="navbook">Book Online</a></li>
        <li>{{ Html::link('accommodation', 'Accommodation') }}
          <ul>
            <li>{{ Html::link('room', 'Rooms') }}</li>
            <li>{{ Html::link('dining', 'Dining') }}</li>
            <li>{{ Html::link('restaurant', 'Restaurant') }}</li>
          </ul>
        </li>
        <li>{{ Html::link('wedding', 'Weddings') }}</li>

        <li>{{ Html::link('events', 'Events') }}
          <ul>
          <li>{{ Html::link('hallDetails', 'Hall Details') }}</li>
          </ul>
          </li>


        <li>{{ Html::link('gallery', 'Gallery') }}</li>
        <li>{{ Html::link('specials', 'Offers') }}</li>
        <li>{{ Html::link('location', 'Location') }}</li>
        <li>{{ Html::link('reviews', 'Testimonials') }}</li>
        <li>{{ Html::link('blog', 'Blog') }}</li>
        <li>{{ Html::link('contact', 'Contact Us') }}
        <ul>
          <li>{{ Html::link('about', 'About Us') }}</li>
        </ul>
        </li>
        <li>{{ Html::link('faq', 'FAQ') }}</li>

        <li>{{ Html::link('#', 'More') }}
          <ul>
            @if(Auth::check())
              <li>{{ Html::link('profile', 'Profile') }}</li>
              <li>{{ Html::link('logout', 'Logout') }}</li>
            @endif

            @if(!Auth::check())
              <li>{{ Html::link('login', 'Login') }}</li>
              <li>{{ Html::link('register', 'Register') }}</li>
            @endif
            <li>{{ Html::link('local', 'Local Information') }}</li>
            <li>{{ Html::link('staff', 'Our Staff') }}</li>
            <li><a class="promopopup">Promo Popup</a></li>
          </ul>
        </li>
      </ul>
      <a id="pull"><i class="fa fa-bars"></i></a>
    </nav>
    @if(Auth::check())
      <a href="profile" class="book"><span data-hover="Profile">Profile</span> <i class="fa fa-check-circle"></i></a>
    @endif
    @if(!Auth::check())
      <a href="login" class="book"><span data-hover="Login">Login</span> <i class="fa fa-check-circle"></i></a>
    @endif
    <div class="shadow"></div>
  </div>
</div>
<!-- Navigation | END -->
<div id="container" class="post">
	<!-- Header | Start -->
	<header>
    	<div id="header">
        	<div class="h1">
                <div><h1>Our Christmas</h1>
                <span class="tagline"><strong>Hotel News</strong> &ndash; December 25, 2015</span></div>
            </div>
        </div>
        <!-- Check Rates Banner | START -->
        <div id="check">
        	<div class="centre">
            	<form action="contact.php" method="post">
                	<div class="field calendar"><input name="arrival" type="text" placeholder="Arrival" id="arrival" readonly /><i class="fa fa-calendar-o"></i></div>
                    <div class="field calendar"><input name="departure" type="text" placeholder="Departure" id="departure" readonly /><i class="fa fa-calendar-o"></i></div>
                    <div class="field select">
                        <select name="rooms">
                            <option value="1 Room">1 Room</option>
                            <option value="2 Rooms">2 Rooms</option>
                            <option value="3 Rooms">3 Rooms</option>
                        </select>
                        <i class="fa fa-chevron-down"></i>
                    </div>
                    <div class="field select">
                        <select name="adults">
                            <option value="1 Adult">1 Adult</option>
                            <option value="2 Adults">2 Adults</option>
                            <option value="3 Adults">3 Adults</option>
                            <option value="4 Adults">4 Adults</option>
                            <option value="5 Adults">5 Adults</option>
                        </select>
                        <i class="fa fa-chevron-down"></i>
                    </div>
                    <div class="field select">
                        <select name="children">
                        	<option value="0 Children">0 Children</option>
                            <option value="1 Child">1 Child</option>
                            <option value="2 Children">2 Children</option>
                            <option value="3 Children">3 Children</option>
                            <option value="4 Children">4 Children</option>
                        </select>
                        <i class="fa fa-chevron-down"></i>
                    </div>
                    <button><span data-hover="Book a Room">Book a Room</span></button>
                </form>
            </div>
        </div>
        <!-- Check Rates Banner | END -->
    </header>
    <!-- Header | END -->
    <!-- Content | START -->
    <main>
    	<div class="centre">
            <div id="left">
            	<!-- Slideshow | START -->
            	<div id="slideshow">
                	<div class="slider">
                    	<img alt="" src="/images/blogs/blog1.jpg" width="770" height="500" />
                    </div>
                </div>
                <!-- Slideshow | END -->
                <p>Share the joy in Belfast this Christmas. Find that special hand-picked gift with big shopping brands, unique stores and market stands. Bring the family or spend time with friends.

Belfast has great places to meet, eat and sleep with festive offers and great winter hotel deals. Come by car, bus or train. Join us and celebrate the fantastic festive lights! </p>
                <blockquote>Christmas Celebrations at AmalayReach.</blockquote>
                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Phasellus hendrerit. Pellentesque aliquet nibh nec urna. In nisi neque, aliquet vel, dapibus id, mattis vel, nisi. Sed pretium, ligula sollicitudin laoreet viverra, tortor libero sodales leo, eget blandit nunc tortor eu nibh. Nullam mollis. Ut justo. Suspendisse potenti. Sed egestas, ante et vulputate volutpat, eros pede semper est, vitae luctus metus libero eu augue. Morbi purus libero, faucibus adipiscing, commodo quis, gravida id, est.</p>
                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Phasellus hendrerit. Pellentesque aliquet nibh nec urna. In nisi neque, aliquet vel, dapibus id, mattis vel, nisi. Sed pretium, ligula sollicitudin laoreet viverra, tortor libero sodales leo, eget blandit nunc tortor eu nibh. Nullam mollis. Ut justo. Suspendisse potenti.</p>
                <p class="fine credit"><i class="fa fa-edit"></i> Posted by <a href="#">Base Admin</a></p>
                <hr />
                <!-- Comments | START -->
                <a href="{{route('leavecom')}}" class="button commentpop"><span data-hover="Leave a Comment">Leave a Comment</span></a>
                <h2><i class="fa fa-comments-o"></i> {{$count}} Comments</h2>
@foreach ($comment_data as $rs)

                 <ol id="comments">
                    <li class="comment parent">
                        <div class="quote">
                            <p>{{$rs->body}}</p>
                        </div>
                        <a href="{{route('leaverep')}}?id={{$rs->id}}" class="comment-reply-link commentpop">Reply to {{$rs->name}}</a>
                        @if (Auth::user())
                        @if($logvishuser->id == $rs->user_id)
                        <a href="{{route('editcom')}}?cid={{$rs->id}}&" class="comment-reply-link commentpop"> Edit Comment</a>
                        @endif
                        @endif
                        <div class="comment-author">{{$rs->name}} <span>on {{$rs->created_at}}</span></div>

                        @foreach($reply_data as $res)

                        @if($rs->id === $res->parent_id)
                        <ol class="children">
                            <li class="comment">
                                <div class="quote">
                                    <p>{{$res->body}}</p>
                                </div>
                                <!--commented by vish <a href="form-comments.php?post=blog-post.html" class="comment-reply-link commentpop">Reply to Terry</a>--><div class="comment-author">{{$res->name}} <span>on {{$res->created_at}}</span></div>
                            </li>
                        </ol>
                        @endif
                        @endforeach

                    </li>

                </ol>

@endforeach
                <!-- Comments | END -->
            </div>


        </div>
    </main>


    <!-- Footer | START -->
    <footer>
    	<div id="footer">
        	<div class="centre">
                <!-- Subscribe / Social | START -->
                <div class="news">
                	<div class="title"><span>News & Offers</span></div>
                    <div class="subscribe">
                        <form>
                            <input name="email" type="text" placeholder="Your email address" />
                            <button><span data-hover="Sign Up">Sign Up</span></button>
                        </form>
                    </div>
                    <div class="social">
                    	<a href="#" title="Facebook"><i class="fa fa-facebook"></i></a>
                        <a href="#" title="Twitter"><i class="fa fa-twitter"></i></a>
                        <a href="#" title="Google+"><i class="fa fa-google-plus"></i></a>
                        <a href="#" title="Pinterest"><i class="fa fa-pinterest-p"></i></a>
                    </div>
                </div>
                <!-- Subscribe / Social | END -->
            	<!-- Contact Details | START -->
              <div class="contact">
                	<p><strong class="phone">+94 11 2748913, +94 77 7743612</strong><br/>
                    <a href="mailto:info@amalyareach.com">info@amalyareach.com</a><br /><br />
                    <i class="fa fa-map-marker"></i> No: 556, Moragahahena, Pitipana North, Homagama, Sri Lanka<br />
                    <a href="https://www.google.com/maps/dir/Current+Location/Amalya Reach Holiday Resort, Homagama, Sri Lanka" target="_blank"><strong>Get Directions</strong></a></p>
                </div>
                <!-- Contact Details | END -->
                <div class="dark"></div>
            </div>
        </div>
    	<!-- Footer Links | START -->
    	<div id="footerlinks">
        	<div class="centre">
            	<span>Copyright &copy; <script>var d = new Date(); document.write(d.getFullYear());</script> <strong>Base Hotel</strong></span><a href="index.html">Home</a><a href="sitemap.html">Sitemap</a><span><a href="http://themeforest.net/item/base-hotel-responsive-booking-gallery-template/10517095?ref=Klayemore" target="_blank">Template By KM</a></span><span></span>
            </div>
        </div>
        <!-- Footer Links | END -->
    </footer>
    <!-- Footer | END -->
</div>
<!-- Promo Popup | START -->
<div id="pop">
	<img alt="" src="http://dummyimage.com/400x150" width="400" height="150" />
    <div class="container">
        <p class="title"><strong>Our latest special offers,</strong><br />
        straight to your inbox</p>
        <p>Stay up to date with the latest specials from Base Hotel. Subscribe and save on your next stay.</p>
        <form>
            <input name="email" type="text" placeholder="Your email address" />
            <button><span data-hover="Subscribe">Subscribe</span></button>
        </form>
        <p class="close closepop"><a>Continue browsing site</a></p>
        <i class="fa fa-close closepop"></i>
    </div>
</div>
<!-- Promo Popup | END -->
<script src="/js/plugins.js"></script>
<script src="/js/global.js"></script>
</body>
</html>
