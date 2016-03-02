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
<div id="container">
    <header>
        <div id="header">
            <div class="h1">
                <h1><span>Standard Rooms</span>
                    <span class="tagline">Luxurious by Reputation</span></h1>
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
                        <div class="item"><img alt="" src="/roomimages/room6.jpg" width="770" height="500" /></div>
                    </div>
                    <div class="nav">
                        <a class="prev"><i class="fa fa-chevron-left"></i></a>
                        <a class="next"><i class="fa fa-chevron-right"></i></a>
                    </div>
                </div>
                <!-- Slideshow | END -->
                <div id="content">
                    <h2><strong>Standard Rooms</strong> Inclusions</h2>
                    <p>Our rooms are designed with comfort and convenience in mind providing a place to unwind or to catch up on work. Explore the various types of rooms, explore the amenities, and choose the space that's right for you.</p>
                    <p>Choose a spacious room for seating area with sofa and internet access. The Art Deco-style room has large windows. Catch up on work at the desk or pamper yourself in the marble bathroom. Some rooms have a sea view and a fluffy bathrobe. Special touches include magazines and newspapers.</p>
                    <ul class="tags">
                        <li>Spa Bath</li>
                        <li>King Size Bed</li>
                        <li>Air Conditioning</li>
                        <li>CD Player</li>
                        <li>Dishwasher</li>
                        <li>Cable Television</li>
                        <li>Spacious Living Areas</li>
                        <li>Free Unlimited Wi-Fi</li>
                        <li>24 Hour Room Service</li>
                    </ul>
                    <!-- USP Boxes | START -->
                    <section class="usp">
                        <div class="box">
                            <i class="fa fa-expand"></i>
                            <h3>Spacious Living Areas</h3>
                            <p> We provide you a vast living area to relax and enjoy your moments. With luxuries by reputaion and with comforts by arrangments, the living areas provide you the utter most tranquility. </p>
                        </div>
                        <div class="box">
                            <i class="fa fa-wifi"></i>
                            <h3>Free Unlimited Wi-Fi</h3>
                            <p>Amalya is always willing to provide the best of all which you may intensively yearn for everyday. We provide unlimited wifi facilities for you to explore the world and enjoy in your own way.</p>
                        </div>
                        <div class="box">
                            <i class="fa fa-user"></i>
                            <h3>24 Hour Room Service</h3>
                            <p>Our suits and rooms are well organized with all kind of services to be provided 24 hours for your comfort and satisfaction and they are fully facilitated to be experienced at anytime.</p>
                        </div>
                    </section>
                    <!-- USP Boxes | END -->
                </div>
            </div>
            <!-- Sidebar | START -->
            <aside>
                <div id="scroll">
                    <div id="block">
                        <div class="blocktitle"><span>Room  Varieties</span></div>
                        <!-- Sub Navigation | START -->
                        <ul class="nav">
                            <li>{{ Html::link('royalsuite', 'Royal Suite') }}</li>
                            <li>{{ Html::link('deluxeroom', 'Deluxe') }}</li>
                            <li>{{ Html::link('premiersuite', 'Primier Suites') }}</li>
                            <li>{{ Html::link('juniorsuites', 'Junior Suite') }}</li>

                        </ul>
                        <!-- Sub Navigation | END -->
                    </div>
                    <!-- List Items (Specials Slider) | START -->
                    <div id="specials" class="list">
                        <div class="slider">
                            <div class="item">
                                <img alt="" src="/roomimages/room8.jpg" width="380" height="250" />
                                <div class="details">
                                    <a href="{{url('specials')}}">
                                        <div class="title">Family Escape<br />
                                            <span>Special Offers</span></div>
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
</div><!--<img src="http://www.ten28.com/fref.jpg">-->
<!-- Promo Popup | END -->
<script src="/js/plugins.js"></script>
<script src="/js/global.js"></script>
</body>
</html>