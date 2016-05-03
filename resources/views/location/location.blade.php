@extends('layouts.master')

@section('maincontent')
<!-- Header | START -->
	<header>
		<!-- Google Map | START -->
		<script>
		function initialize() {
			var latlng = new google.maps.LatLng(6.84026 ,80.021092);
			var myOptions = {
				zoom: 16,
				center: latlng,
				mapTypeId: google.maps.MapTypeId.ROADMAP,
				scrollwheel: false
			};
			var map = new google.maps.Map(document.getElementById('googlemap'), myOptions);
			var marker = new google.maps.Marker({
				position: latlng,
				map: map,
				icon: "/images/point.png"
			});
		}
		function loadScript() {
			var script = document.createElement('script');
			script.type = 'text/javascript';
			script.src = 'https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false&'+'callback=initialize';
			document.body.appendChild(script);
		}
		window.onload = loadScript;
		</script>
		<div id="map">
			<img alt="" src="/images/spacer.png" width="1500" height="700" class="spacer" />
			<div id="googlemap"></div>
		</div>
		<!-- Google Map | END -->
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
			<div id="content">
				<h1><strong>Luxury amidst the rustle of the city</strong></h1>
				<p></p>
				<h2><strong>No:556, Moragahahena, Pitipana North, Homagama, Sri Lanka</strong></h2>
				<a href="https://www.google.com/maps/dir/Current+Location/Amalya Reach Holiday Resort, Homagama, Sri Lanka" target="_blank" class="button"><span data-hover="Get Directions">Get Directions from your location</span></a>
				<!-- Slideshow | START -->
				<div id="slideshow">
					<div class="slider">
						<div class="item"><img alt="" src="images\pagemain\location.png" width="1200" height="600" /></div>
					</div>
					<div class="nav">
						<a class="prev"><i class="fa fa-chevron-left"></i></a>
						<a class="next"><i class="fa fa-chevron-right"></i></a>
					</div>
				</div>
				<!-- Slideshow | END -->
			</div>
		</div>
		<!-- Feature List | START -->
		<section id="featurelist" style="background-image: url(images/features/location.png">
			<div class="centre">
				<h2>Things to do in Homagama</h2>
				<div class="featurelist">
					<div class="feature">
						<img alt="" src="images/zoo.png" width="120" height="120" class="thumb" />
						<div class="details">
							<h3>Dehiwala Zoological Gardens</h3>
							<p>Anagarika Dharmapala Mawatha, Dehiwala<br /><br />
								<a href="http://nationalzoo.gov.lk/en/dehiwala-zoological-gardens"><i class="fa fa-external-link"></i> Visit Website</a></p>
							</div>
							<div class="copy">
								<p>National Zoological Gardens of Sri Lanka (also called Colombo Zoo or Dehiwala Zoo) is a zoological garden in Dehiwala, Sri Lanka, founded in 1936. Its sprawling areas are host to a variety of animals and birds. The zoo exhibits animals but also places an emphasis on animal conservation and welfare, and education.</p>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!-- Feature List | END -->
		</main>

	@endsection
