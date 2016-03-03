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
        <a href="index.html" class="logo"><img alt="" src="/images/logo.png" /></a>
        <nav>
            <ul>
            	<li class="mobile"><a href="contact.php" class="navbook">Book Online</a></li>
                <li>{{ Html::link('/', 'Home') }}</li>
                <li>{{ Html::link('accommodation', 'Accommodation') }}
                	<ul>
                    	<li>{{ Html::link('accommodation', 'Accommodation List 1') }}</li>
                        <li>{{ Html::link('accommodation2', 'Accommodation List 2') }}</li>
                        <li>{{ Html::link('room', 'Room Detail 1') }}</li>
                        <li>{{ Html::link('room2', 'Room Detail 2') }}</li>
                    </ul>
                </li>
                <li>{{ Html::link('gallery', 'Gallery') }}</li>                
                <li>{{ Html::link('specials', 'Special Offers') }}</li> 
                <li>{{ Html::link('location', 'Location') }}</li>
                <li>{{ Html::link('about', 'About Us') }}</li>
                <li>{{ Html::link('about', 'More') }}
                	<ul>                         
                        <li>{{ Html::link('guest-book', 'Guest Book') }}</li>                                              
                        <li><a href="blog.html">Our Blog <i class="fa fa-chevron-right"></i></a>
                        	<ul>
                                <li>{{ Html::link('blog', 'Blog Overview') }}</li>
                                <li>{{ Html::link('blog-post', 'Blog Post') }}</li>
                            </ul>
                        </li>                        
                        <li>{{ Html::link('faqs', 'FAQs') }}</li>
                        <li><a class="promopopup">Promo Popup</a></li>
                    </ul>
                </li>
            </ul>            
            <a id="pull"><i class="fa fa-bars"></i></a>
        </nav> 
        <a href="contact.php" class="book"><span data-hover="Book Online">Book Online</span> <i class="fa fa-check-circle"></i></a>
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
            <!-- Sidebar | START -->
            <aside>
            	<div id="scroll">
                    <div id="block" class="categories">
                        <ul class="nav">
                            <li><a href="#">Hotel News</a></li>
                            <li><a href="#">What's on in Perth</a></li>
                            <li><a href="#">Functions & Events</a></li>
                            <li><a href="#">Leisure Escapes</a></li>
                        </ul>
                    </div>
                    <ul class="tags blogtags">
                    	<li><a href="#">Accommodation</a></li>
                        <li><a href="#">Dining</a></li>
                        <li><a href="#">Wedding</a></li>
                        <li><a href="#">Perth</a></li>
                        <li><a href="#">Special</a></li>
                        <li><a href="#">Awards</a></li>
                        <li><a href="#">Inspiration</a></li>
                        <li><a href="#">Business</a></li>
                    </ul>
                    <!-- List Items (Specials Slider) | START -->
                    <div id="specials" class="list">
                        <div class="slider">
                        	<div class="item">
                                <img alt="" src="http://dummyimage.com/380x250" width="380" height="250" />
                                <div class="details">
                                    <a href="specials.html">
                                        <div class="title">Family Escape<br />
                                        <span>Activity Package</span></div>
                                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Phasellus hendrerit. Pellentesque aliquet nibh nec urna.<br />
                                        <strong>Stay from $249 per night</strong></p>
                                        <div class="button"><span data-hover="View Special">View Special</span></div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="nav"></div>
                    </div>
                    <!-- List Items (Specials Slider) | END -->
                    <!-- Search | START -->
                    <form id="search">
                        <input name="search" type="text" placeholder="Search..." />
                        <button><i class="fa fa-search"></i></button>
                    </form>
                    <!-- Search | END -->
                </div>
            </aside>
            <!-- Sidebar | END -->
        </div>
    </main>
    <!-- Content | END -->
    <!-- Sitewide Extras | START -->
    <div id="extras">
    	<div class="centre">
        	<!-- Recent Blog Posts | START -->
            <div class="recent">
                <a href="blog-post.html">
                	<div class="date">
                    	<span class="month">Dec</span>
                        <span class="day">12</span>
                    </div>
                    <p class="title">Our Latest Hotel Awards</p>
                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque...</p>
                </a>
                <a href="blog-post.html">
                	<div class="date">
                    	<span class="month">Nov</span>
                        <span class="day">27</span>
                    </div>
                    <p class="title">Free Wi-Fi in all rooms</p>
                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque...</p>
                </a>
            </div>
            <!-- Recent Blog Posts | END -->
        	<!-- Footer Testimonial | START -->
            <div class="footertestimonial">
            	<i class="fa fa-quote-left"></i>
                <p class="title">Comfortable & spacious apartment</p>
                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Phasellus hendrerit. Pellentesque aliquet nibh nec urna. In nisi neque, aliquet vel, dapibus id, mattis vel, nisi. Sed pretium, ligula sollicitudin laoreet viverra, tortor libero sodales leo, eget blandit nunc tortor eu nibh. Lorem ipsum dolor sit amet...</p>
                <div class="author">&ndash; <strong>John Smith</strong> <span>(Sydney, Australia)</span></div>
                <a href="guest-book.html" class="button"><span data-hover="Read Guest Book">Read Guest Book</span></a>
            </div>
            <!-- Footer Testimonial | END -->
        </div>
    </div>
    <!-- Sitewide Extras | END -->
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
                	<p><strong class="phone">+61 8 3456 7890</strong><br />
                    <a href="mailto:stay@basehotel.com">stay@basehotel.com</a><br /><br />
                    <i class="fa fa-map-marker"></i> 101 Luxury Street<br />
                    Perth, WA Australia 6000<br />
                    <a href="https://www.google.com/maps/dir/Current+Location/-31.957482,115.856868" target="_blank"><strong>Get Directions</strong></a></p>
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