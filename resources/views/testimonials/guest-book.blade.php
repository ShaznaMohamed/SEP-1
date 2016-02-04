@extends('layouts.master')

@section('maincontent')
	<header>
    	<div id="header">
        	<div class="h1">
                <h1><span>Guest Book</span>
                <span class="tagline">Testimonials from our Past Guests</span></h1>
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
    <main id="guestbook">
    	<div id="testimonials">
            <figure class="cover">
            	<div class="testimonial">
                	<img alt="" src="images/pagemain/finedining.png" width="770" height="500" />
                    <div class="details">
                        <h2>Read what our past guests have said about us</h2>
                        <p>Your feedback means the world to us, it's how we improve our level of service. Read testimonials from past guests and feel free to share your experience if you've stayed with us before.</p>
                        <a href="testimonialsform" class="button" id="testimonialpop"><span data-hover="Write in Guest Book">Write in Guest Book</span></a>
                    </div>
                </div>
            </figure>
            <figure>
            	<div class="testimonial">
                    <i class="fa fa-quote-left"></i>
                    <h2>Our favourite place to stay</h2>
                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Phasellus hendrerit. Pellentesque aliquet nibh nec urna. In nisi neque, aliquet vel, dapibus id, mattis vel, nisi. Sed pretium, ligula sollicitudin laoreet viverra, tortor libero sodales leo, eget blandit nunc tortor eu nibh. Nullam mollis. Ut justo. Suspendisse potenti. Sed egestas, ante et vulputate volutpat, eros pede semper est, vitae luctus metus libero eu augue. Morbi purus libero, faucibus adipiscing. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Phasellus hendrerit. Pellentesque aliquet nibh nec urna. In nisi neque, aliquet vel, dapibus id, mattis vel, nisi.</p>
                    <p class="name">&ndash; <strong>Sam Owens</strong> <span>(Auckland, New Zealand)</span></p>
                </div>
            </figure>
            <figure>
            	<div class="testimonial">
                    <i class="fa fa-quote-left"></i>
                    <h2>Excellent Restaurant</h2>
                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Phasellus hendrerit. Pellentesque aliquet nibh nec urna. In nisi neque, aliquet vel, dapibus id, mattis vel, nisi. Sed pretium, ligula sollicitudin laoreet.</p>
                    <p class="name">&ndash; <strong>Jess Simpson</strong> <span>(Melbourne, Australia)</span></p>
                </div>
            </figure>
            <figure>
            	<div class="testimonial">
                    <i class="fa fa-quote-left"></i>
                    <h2>Comfortable & spacious apartment</h2>
                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Phasellus hendrerit. Pellentesque aliquet nibh nec urna. In nisi neque, aliquet vel, dapibus id, mattis vel, nisi. Sed pretium, ligula sollicitudin laoreet viverra, tortor libero sodales leo, eget blandit nunc.</p>
                    <p class="name">&ndash; <strong>John Smith</strong> <span>(Sydney, Australia)</span></p>
                </div>
            </figure>
            <figure>
            	<div class="testimonial">
                    <i class="fa fa-quote-left"></i>
                    <h2>Impressive Hotel</h2>
                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Phasellus hendrerit. Pellentesque aliquet nibh nec urna. In nisi neque, aliquet vel, dapibus id, mattis vel, nisi. Sed pretium, ligula sollicitudin laoreet viverra, tortor libero sodales leo, eget blandit nunc tortor eu nibh. Nullam mollis. Ut justo. Suspendisse potenti. Sed egestas, ante et vulputate volutpat, eros pede semper est, vitae luctus metus libero eu augue. Morbi purus libero, faucibus adipiscing. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Phasellus hendrerit. Pellentesque aliquet nibh nec urna. In nisi neque, aliquet vel, dapibus id, mattis vel, nisi.</p>
                    <p class="name">&ndash; <strong>Tammy Winters</strong> <span>(Perth, Australia)</span></p>
                </div>
            </figure>
            <figure>
            	<div class="testimonial">
                    <i class="fa fa-quote-left"></i>
                    <h2>Suites are perfect for families</h2>
                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Phasellus hendrerit. Pellentesque aliquet nibh nec urna. In nisi neque, aliquet vel, dapibus id, mattis vel, nisi. Sed pretium, ligula sollicitudin laoreet viverra, tortor libero sodales leo, eget blandit nunc tortor eu nibh. Nullam mollis. Ut justo. Suspendisse potenti.</p>
                    <p class="name">&ndash; <strong>Ben Peterson</strong> <span>(Melbourne, Australia)</span></p>
                </div>
            </figure>
            <figure>
            	<div class="testimonial">
                    <i class="fa fa-quote-left"></i>
                    <h2>Loved the pool</h2>
                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Phasellus hendrerit. Pellentesque aliquet nibh nec urna. In nisi neque, aliquet vel, dapibus id, mattis vel, nisi. Sed pretium, ligula sollicitudin laoreet.</p>
                    <p class="name">&ndash; <strong>Walter W</strong> <span>(Sydney, Australia)</span></p>
                </div>
            </figure>
        </div>
        <div class="centre">
            <ul class="pagination">
                <li><span>1</span></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">4</a></li>
                <li><a href="#">Next</a></li>
            </ul>
        </div>
    </main>
  @endsection
