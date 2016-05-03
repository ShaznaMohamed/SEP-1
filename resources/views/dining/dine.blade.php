@extends('layouts.master')
@section('maincontent')
	<!-- Header | Start -->
	<header>
		<div id="header">
			<div class="h1">
				<h1><span>Dining</span>
					<span class="tagline">Gorgeous views and a world of flavours</span></h1>
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
				<h1> Luxury Dining Experience</h1>
				<p>Our unique Third Dimension Food envisions a philosophy based on a threefold foundation of taste, presentation and health.The restaurants at Amalya Reach Hotel combine the best traditions of international fine dining, with a Sri Lankan touch, making the meals here a unique experience. </p>
				<!-- USP Boxes | START -->
				<section class="usp">
					<div class="box">
						<i class="fa fa-cutlery"></i>
						<h3>Restaurant Dining</h3>
						<p>You can chill out at a cool pool bar, enjoy a casual meal at the restaurant or opt for elegant fine dining at the restaurant, or settle for something unique and enjoy the wonderful signature dining experiences we have in store for you as well.</p>
					</div>
					<div class="box">
						<i class="fa fa-cutlery"></i>
						<h3>Speciality Dining</h3>
						<p>Our specialty dining experience is designed to indulge, inspire and surprise. Treat someone special to a romantic dinner in the perfect setting. Delve into the island’s seafood bounty, cooked precisely to your liking. Picnic on soft powdery sands, or join our chefs for an interactive twist in the kitchen.</p>
					</div>
					<div class="box">
						<i class="fa fa-cutlery"></i>
						<h3>In-Room Dining</h3>
						<p>Enjoy anything you like, any time of the day or night. With in-room dining we take just as much care and attention as if you were dining at our restaurant. Available 24 hours a day at a nominal charge, simply order your choice of snacks, meals and drinks by picking up the phone.</p>
					</div>
				</section>
				<!-- USP Boxes | END -->
			</div>
			<!-- Content | END -->
			<!-- Gallery Slider | START -->
			<div id="galleryslider" class="manual">
				<div class="slidecontainer">
					<div class="slider">
						<img alt="" src="/images/dining/salad.jpg" width="900" height="600" />
						<img alt="" src="/images/dining/soup.jpg" width="900" height="600" />
						<img alt="" src="/images/dining/Caramel.jpg" width="900" height="600" />
						<img alt="" src="/images/dining/squid.jpg" width="900" height="600" />
					</div>
					<div class="centre">
						<div class="nav">
							<a class="prev"><i class="fa fa-chevron-left"></i></a>
							<a class="next"><i class="fa fa-chevron-right"></i></a>
						</div>
					</div>
				</div>

				<!-- Gallery Slider | END -->

				<!-- Content | START -->
				<div class="centre">
					<div id="content">
						<h3><strong>Find Your Base</strong> with our selection of rooms & suites</h3>
					</div>
				</div>
				<!-- Feature List | START -->
			</div>
			<!-- Feature List | END -->
			<!-- Content | END -->
			<!-- Content | START -->

			<div class="centre">
				<!-- Contact Form | START -->
				<div id="contact">
					<h3><strong>Make a Reservation</h3>
						<form name="dining" id="dining" class="form-vertical" role="form" method="post" action="{{route('dining')}}">
							<div class="col">
								<select name="title" id="title" class="field">
									<option value="mr" selected="selected">Mr.</option>
									<option value="mrs" >Mrs.</option>
									<option value="Ms" >Ms.</option>
								</select>
								<br></br>
								<div class="field {{ $errors->has('first_name') ? ' has-error' : ''}}">
									<input name="first_name" type="text" value="" placeholder="Full Name" id="name" required="true"/>
								</div>
								@if ($errors->has('first_name'))
									<span class="help-block">{{ $errors->first('first_name') }}</span>
								@endif

								<div class="field"><input name="email" type="text" value="" placeholder="Email Address" id="email" required="true"/>
								</div>
								@if ($errors->has('email'))
									<span class="help-block">{{ $errors->first('email') }}</span>
								@endif

								<div class="field"><input name="phone" type="text" value="" placeholder="Phone Number" id="phone" required="true"/></div>
								@if ($errors->has('phone'))
									<span class="help-block">{{ $errors->first('phone') }}</span>
								@endif

							</div>
							<div class="col">

								<div class="field calendar"><input name="arrival_date" type="text" placeholder="Date" id="contact-arrival" readonly required="true"/><i class="fa fa-calendar-o"></i></div>
								@if ($errors->has('arrival_date'))
									<span class="help-block">{{ $errors->first('arrival_date') }}</span>
								@endif

								<div class="field"><input name="arrival_time" type="text" placeholder="Time(e.g. 10.00am)" id="arrival_time" required="true"/></div>
								<div class="select">
									<select name="arrival_adults" id="arrival_adults" class="field" required="true" on>
										<option value="1" >1 Adult</option>
										<option value="2" selected="selected">2 Adults</option>
										<option value="3" >3 Adults</option>
										<option value="4" >4 Adults</option>
										<option value="5" >5 Adults</option>
									</select>
									<br></br>
								</div>
								<div class="select">
									<select name="arrival_children" id="arrival_children" class="field" required="true">
										<option value="0" selected="selected">0 Children</option>
										<option value="1" >1 Children</option>
										<option value="2" >2 Children</option>
										<option value="3" >3 Children</option>
										<option value="4" >4 Children</option>
									</select>
									<br></br>
								</div>
							</div>
							<div class="col">
								<div class="field"><textarea name="notes" placeholder="Additional Notes" id="notes"></textarea></div>
							</div>
							<button type="submit" class="btn btn-default"><span data-hover="Send Request">MAKE RESERVATION</span></button>

							<input type="hidden" name="_token" value="{{ Session::token() }}">

						</form>
					</div>
					<!-- Contact Form | END -->
				</div>

				<!-- Google Map | START -->
				<!-- Google Map | END -->
			</main>


		@endsection
