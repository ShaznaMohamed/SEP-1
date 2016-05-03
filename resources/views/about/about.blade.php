@extends('layouts.master')

@section('maincontent')
	<!-- Header | Start -->
	<header>
    	<div id="header">
        	<div class="h1">
                <h1><span>About Hotel</span>
                <span class="tagline">Luxurious Facilities & Services</span></h1>
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
    <!-- Content | START -->
    <main>
    	<div class="centre">
        	<!-- Slideshow -->
        	<div id="slideshow">
                <div class="slider">
                    <div class="item"><img alt="" src="images\pagemain\about.png" width="1200" height="600" /></div>
                </div>
                <div class="nav">
                    <a class="prev"><i class="fa fa-chevron-left"></i></a>
                    <a class="next"><i class="fa fa-chevron-right"></i></a>
                </div>
            </div>
            <div id="content">
                <h2><strong>An Experience</strong> Like No Other</h2>
                <p>Amalya Reach guarantees, no matter what your requirement is, we are fully committed to making your stay with us or your event with us, the best expierience you will get from a hotel.</p>
                <ul class="tags">
                    <li>On-site Restaurant</li>
                    <li>24 Hour Concierge</li>
                    <li>Metting Rooms</li>
                    <li>Wedding Planning</li>
                    <li>Local Cuisine</li>
                    <li>Tour Desk</li>
                </ul>
                <!-- Stats | START -->
                <section id="stats">
                	<h3>Last Month at Amalya Reach</h3>
                    <figure>
                    	<strong>266</strong><br />
                        <span>Guests Stayed</span>
                    </figure>
                    <figure>
                    	<strong>478</strong><br />
                        <span>Meals Served</span>
                    </figure>
                    <figure>
                    	<strong>93</strong><br />
                        <span>Tours Booked</span>
                    </figure>
                    <figure>
                    	<strong>122</strong><br />
                        <span>Spa Treatments</span>
                    </figure>
                </section>
                <!-- Stats | END -->
            </div>
        </div>
        <!-- Instagram | START -->
        <div id="instagram">
            <p><a href="#">@AmalyaReach</a> <a href="#">Facebook</a></p>
        </div>
        <!-- Instagram | END -->
        <!-- Feature List | START -->
        <section id="featurelist" style="background-image: url(images/features/about.png">
        	<div class="centre">
            	<h2>Message from the Manager</h2>
                <div class="featurelist">
                    <div class="feature">
                        <img alt="" src="http://dummyimage.com/120x120" width="120" height="120" class="thumb" />
                        <div class="details">
                            <h3>Test Test</h3>
                            <p>Manager, Amalya Reach Holiday Resort<br /><br />

                        </div>
                        <div class="copy">
													<p>Test</p>
													<p>Test</p>
												</div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Feature List | END -->
    </main>
    <!-- Content | END -->
	@endsection
