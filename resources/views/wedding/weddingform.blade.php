

<!DOCTYPE HTML>

<html xmlns="http://www.w3.org/1999/html">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Amalya Reach Holiday Resort | Wedding Banquet Halls Sri Lanka | Parties | Events</title>
    <link rel="stylesheet" href="/css/global.css">
    <link class="colour" rel="stylesheet" href="/css/colour-gold.css">
    <link class="pattern" rel="stylesheet" href="/css/pattern-china.css">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">

    <script type="text/javascript">
        function showmassage()
        {

            confirm("Booking request is sent successfully");
        }

        function calctotal()
        {
            var noofpax = parseInt(document.getElementById("pax").value);
            var halltype =(document.getElementById("halltype").value);
            var hallprice;
            if(halltype="samro")
            {
                hallprice = 15000.00;
            }
            else  if(halltype="poolside")
            {
                hallprice = 18000.00;
            }
            else  if(halltype="silver")
            {
                hallprice = 13000.00;
            }
            else  if(halltype="grand")
            {
                hallprice = 10000.00;
            }

            var total = noofpax * hallprice ;

            confirm("The Total Rate you will have to pay is Rs."+ total);
        }
    </script>
</head>
<body class="fullwidth">
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
                <li>{{ Html::link('about', 'More Pages') }}
                    <ul>
                        <li>{{ Html::link('about', 'About Hotel') }}</li>
                        <li>{{ Html::link('restaurent', 'Restaurent') }}</li>
                        <li>{{ Html::link('specials', 'Special Offers') }}</li>
                        <li>{{ Html::link('gallery', 'Photo Gallery') }}</li>
                        <li>{{ Html::link('locatoin', 'Location') }}</li>
                        <li>{{ Html::link('blog', 'Our Blog') }}<i class="fa fa-chevron-right"></i></a>
                            <ul>
                                <li>{{ Html::link('blog', 'Blog Overview') }}</li>
                                <li>{{ Html::link('blog-post', 'Blog Post') }}</li>
                            </ul>
                        </li>
                        <li>{{ Html::link('guest-book', 'Guest Book') }}</li>
                        <li>{{ Html::link('faqs', 'FAQs') }}</li>
                        <li><a class="promopopup">Promo Popup</a></li>
                    </ul>
                </li>
                <li>{{ Html::link('contact', 'Contact Us') }}</li>
            </ul>
            <a id="pull"><i class="fa fa-bars"></i></a>
        </nav>
        <!-- Languages | START -->

        <!-- Languages | END -->
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
                <h1><span>Plan Your Wedding</span>
                    <span class="tagline">Celebrate with Amalya</span></h1>
            </div>
        </div>
    </header>
    <!-- Header | END -->
    <!-- Content | START -->
    <main>
        <div class="centre">

            <div id="contact">

                <img src=/wedimages/reserv.jpg width="1200" height="400" alt="" />
                <form action="{{route('weddingform')}}" role="form" method="post" novalidate>

                    <div class="col">
                        <div class="form-group{{ $errors->has('name') ? ' has-error' : ''}}">
                        <div class="field"><input name="name" type="text" placeholder="Your Name" id="contact-name" ></div>
                        @if ($errors->has('name')) <span class="help-block">{{ $errors->first('name') }}</span> @endif
                    </div>

                    <div class="form-group{{ $errors->has('email') ? ' has-error' : ''}}">
                    <div class="field"><input name="email" type="text" placeholder="Email Address" id="contact-email" /></div>
                        @if ($errors->has('email')) <span class="help-block">{{ $errors->first('email') }}</span> @endif
                    </div>
                    <div class="form-group{{ $errors->has('phone') ? ' has-error' : ''}}">
                        <div class="field"><input name="phone" type="text" placeholder="Phone Number" id="contact-phone" /></div>
                        @if ($errors->has('phone')) <span class="help-block">{{ $errors->first('phone') }}</span> @endif
                    </div>
                    <div class="form-group{{ $errors->has('halltype') ? ' has-error' : ''}}">
                        <div class="field"> <select name="halltype" id="halltype" class="infants">
                                <option value="samro" selected="selected">Samro Reception</option>
                                <option value="poolside" >Pool side ball room</option>
                                <option value="silver" >Silver ball room</option>
                                <option value="grand" >Grand ball room</option>
                            </select></div>
                        @if ($errors->has('halltype')) <span class="help-block">{{ $errors->first('halltype') }}</span> @endif
                    </div>

            </div>
            <div class="col">
                <div class="form-group {{ $errors->has('arrival') ? ' has-error' : ''}}">
                    <div class="field calendar"><input name="arrival" type="text" placeholder="Arrival Date" id="contact-arrival" readonly /><i class="fa fa-calendar-o"></i></div>
                    @if ($errors->has('arrival')) <span class="help-block">{{ $errors->first('arrival') }}</span> @endif
                </div>
                <div class="form-group{{ $errors->has('departure') ? ' has-error' : ''}}">
                    <div class="field calendar"><input name="departure" type="text" placeholder="Departure Date" id="contact-departure" readonly /><i class="fa fa-calendar-o"></i></div>
                    @if ($errors->has('departure')) <span class="help-block">{{ $errors->first('departure') }}</span> @endif
                </div>
                <div class="form-group{{ $errors->has('pax') ? ' has-error' : ''}}">
                    <div class="field"><input name="pax" type="text" placeholder="Number of Pax" id="pax" /></div>
                    @if ($errors->has('pax')) <span class="help-block">{{ $errors->first('pax') }}</span> @endif
                </div>
                <div class="form-group{{ $errors->has('sessionn') ? ' has-error' : ''}}">
                    <div class="select">
                        <select name="sessionn" id="contact-rrooms" class="infants">
                            <option value="morning" selected="selected">Morning Session (6.00am - 11.00am)</option>
                            <option value="afternoon" >Afternoon Session (11.00am - 4.00pm)</option>
                            <option value="evening" >Evening Session(5.00pm - 11.00pm)</option>
                            <option value="halfday" >Half Day(6.00am - 6.00pm)</option>
                            <option value="fullday" >Full Day</option>
                        </select>
                    </div>
                    @if ($errors->has('sessionn')) <span class="help-block">{{ $errors->first('sessionn') }}</span> @endif
                </div>
            </div>
            <div class="col">
                <div class="form-group{{ $errors->has('message') ? ' has-error' : ''}}">
                    <div class="field"><textarea name="message" placeholder="Message" id="contact-message"></textarea></div>
                    @if ($errors->has('message')) <span class="help-block">{{ $errors->first('message') }}</span> @endif
                </div>
                <div class="form-group{{ $errors->has('flexibility') ? ' has-error' : ''}}">
                    <div class="field"><select name="flexibility" id="contact-adults" class="adults">
                            <option value="unconfirmed" >Firm</option>
                            <option value="unconfirmed" selected="selected">Flexible</option>

                        </select></div>
                    @if ($errors->has('flexibility')) <span class="help-block">{{ $errors->first('message') }}</span> @endif
                </div>
            </div>

                </form>
            <table>
                <form>
                    <tr>
                    <td>  <div class="form-group">
                            <h4><input type="submit" name="sub" value="Calculate Total Rate" class="btn btn-default" onclick="calctotal()">
                                <span data-hover="Add"></span></h4>
                          </div>
                    </td>
                    <td></td>
                    <td>
                        <input type="hidden" name="_token" value="{!! csrf_token() !!}">
                        <div class="form-group">
                            <h4><input type="submit" name="sub" value="Send Booking Request" class="btn btn-default"  >
                                <span data-hover="Add"></span></h4>
                        </div>
                    </td>
                    </tr>
                </form>
            </table>



        </div>
        <!-- Contact Form | END -->
        <h2 style="margin:0;"><strong>+94 11 2748913</strong></h2>
        <p style="margin:0;"><a href="mailto:info@amalyareach.com">info@amalyareach.com</a><br />
            No:556, Moragahahena, Pitipana North, Homagama, Sri Lanka.<br />
            <a href="{{url('location')}}"><i class="fa fa-map-marker"></i> Explore Our Location</a></p>
</div>

</main>
<!-- Content | END -->
<!-- Sitewide Extras | START -->
<div id="extras">
    <div class="centre">
        <!-- List Items (Specials Slider) | START -->
        <div id="specials" class="list">
            <div class="back">
                <div class="slider">
                    <div class="item">
                        <img alt="" src="/wedimages/wed3.jpg" width="1200" height="400" />
                        <div class="details">
                            <a href="{{url('specials')}}">
                                <div class="title">Family Escape<br />
                                    <span>Special Offers</span></div>
                                <p>Now it's time to make an impression.<br />
                                    <strong>Posses your Luck</strong></p>
                                <div class="button"><span data-hover="View Special">View Special</span></div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="nav"></div>
        </div>
        <!-- List Items (Specials Slider) | END -->
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
                <p><strong class="phone">+94 11 2748913, +94 77 7743612</strong><br />
                    <a href="mailto:info@amalyareach.com">info@amalyareach.com</a><br /><br />
                    <i class="fa fa-map-marker"></i>No:556, Moragahahena, Pitipana North,<br />
                    Homagama, Sri Lanka.<br />
                    <a href="https://www.google.com/maps/dir/Current+Location/Amalya Reach Holiday Resort, Homagama, Sri Lanka" target="_blank"><strong>Get Directions</strong></a></p>
            </div>
            <!-- Contact Details | END -->
            <div class="dark"></div>
        </div>
    </div>
    <!-- Footer Links | START -->
    <div id="footerlinks">
        <div class="centre">
            <span>Copyright &copy; <script>var d = new Date(); document.write(d.getFullYear());</script> <strong>Amalya Reach Holiday Resort</strong></span><a href="index.html">Home</a><a href="sitemap.html">Sitemap</a><span></span>
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

