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
</head>
<body>
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
<div id="container">
	<!-- Header | Start -->
	<header>
    	<div id="header">
        	<div class="h1">
                <h1><span>Photo Gallery</span>
                <span class="tagline">Experience a day at Base Hotel</span></h1>
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
    <main id="gallerycontainer">
        <div id="gallery">

<!-- Feature --><figure class="item-w2 item-h2">
    <a href="http://dummyimage.com/900x600">
        <span>Lorem ipsum dolor sit amet</span>
        <img alt=""  width="900" height="600" src="images/gallery/gal1.png" />
    </a>
</figure>
<figure class="">
    <a href="http://dummyimage.com/900x600">
        <span>Lorem ipsum dolor sit amet</span>
        <img alt="" width="900" height="600" src="images/gallery/gal2.png" />
    </a>
</figure>
<figure class="">
    <a href="http://dummyimage.com/900x600">
        <span>Lorem ipsum dolor sit amet</span>
        <img alt="" width="900" height="600" src="images/gallery/gal3.png" />
    </a>
</figure>
<figure class="">
    <a href="http://dummyimage.com/900x600">
        <span>Lorem ipsum dolor sit amet</span>
        <img alt="" width="900" height="600" src="images/gallery/gal4.png" />
    </a>
</figure>
<figure class="">
    <a href="http://dummyimage.com/900x600">
        <span>Lorem ipsum dolor sit amet</span>
        <img alt="" width="900" height="600" src="images/gallery/gal5.png" />
    </a>
</figure>
<!-- Portrait --><figure class="item-h2">
    <a href="http://dummyimage.com/600x900">
        <span>Lorem ipsum dolor sit amet</span>
        <img alt="" width="600" height="900" src="images/gallery/gal6.png" />
    </a>
</figure>
<!-- Portrait --><figure class="item-h2">
    <a href="http://dummyimage.com/600x900">
        <span>Lorem ipsum dolor sit amet</span>
        <img alt="" width="600" height="900" src="images/gallery/gal7.png" />
    </a>
</figure>

<figure class="item-w2 item-h2">
    <a href="http://dummyimage.com/900x600">
        <span>Lorem ipsum dolor sit amet</span>
        <img alt="" width="900" height="600" src="images/gallery/gal8.png" />
    </a>
</figure>

        </div>
    </main>
    <!-- Content | END -->
    
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
