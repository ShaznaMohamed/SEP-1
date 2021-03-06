<!DOCTYPE HTML>

<html>
<head>
<?php
$specialData = DB::table('packages')->orderBy('id','desc')->first();

?>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Amalya Reach Holiday Resort | Wedding Banquet Halls Sri Lanka | Parties | Events</title>
<link rel="stylesheet" href="/css/global.css">
<link class="colour" rel="stylesheet" href="/css/colour-gold.css">
<link class="pattern" rel="stylesheet" href="/css/pattern-china.css">
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
</head>
<body>
<!-- Navigation | START -->
<div id="nav">
    <div class="centre">
        <a href="/" class="logo"><img alt="" src="/images/logo.png" /></a>
        <nav>
          <ul>
            <li class="mobile"><a href="contact.php" class="navbook">Book Online</a></li>
            <li>{{ Html::link('room', 'Accommodation') }}
              <ul>
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
            <li>{{ Html::link('blog-post', 'Blog') }}</li>
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
        <a href="contact.php" class="book"><span data-hover="Book Online">Book Online</span> <i class="fa fa-check-circle"></i></a>
        <div class="shadow"></div>
    </div>
</div>
<!-- Navigation | END -->
<div id="container">
	<!-- Header | Start -->
	<header>
    	<div id="header">
        	<div class="h1">
                <h1><span>Special Offers</span>
                <span class="tagline">Stay, Relax & Rejuvenate</span></h1>
            </div>
        </div>
        <!-- Check Rates Banner | START -->
        <div id="check">
          <div class="centre">
            <form action="{{route('checkA')}}" method="get">
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
    <!-- Specials | START -->
    <!-- Content | START -->
    <main>
    	<div class="centre">
        	<div class="special">
            	<div class="img">
                	<div class="imgcontainer"><img alt="" src="/images/gallery/specgal.png" width="770" height="400" /></div>
                </div>
                <div class="details">
                	<h2>{{$data}}<br />
                    <span>{{$type}}</span></h2>
                    <p>{{$specialData->descript}}</p>
                    <p><b>Valide from {{$specialData->start_date}} to {{$specialData->end_date}} </b></p>
                    <a href="#" class="button"><span data-hover="Book Special">Book Special</span></a>
                    <p class="terms"><strong>Terms & Conditions:</strong> Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Phasellus hendrerit. Pellentesque aliquet nibh nec urna. In nisi neque, aliquet vel, dapibus id, mattis vel.</p>
                </div>
            </div>
        </div>
    </main>
    <!-- Content | END -->
    <!-- Specials | END -->
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
