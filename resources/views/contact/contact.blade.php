@extends('layouts.master')

@section('maincontent')
<!-- Header | START -->
<header>
    	<div id="header">
        	<div class="h1">
                <h1><span>Contact</span>
                <span class="tagline">Get in touch with Amalya Reach</span></h1>
            </div>
        </div>
    </header>
    <!-- Header | END -->
    <!-- Content | START -->
    <main>
    	<div class="centre">
            <!-- Contact Form | START -->
        	<div id="contact">
            	<img src="images/pagemain/contact.png" width="1200" height="400" alt="" />

              <form role="form" method="POST" action="{{ url('/contact') }}">
                {!! csrf_field() !!}
                <div class="col"></div>
                <div class="col">
                  <div class="field"><input type="text" class="form-control" name="name" required placeholder="Name" value="{{ old('name') }}"></div>
                  <div class="field"><input type="email" class="form-control" name="email" required placeholder="E-mail" value="{{ old('email') }}"></div>
                  <div class="field"><input type="text" class="form-control" name="mobile" required placeholder="Mobile number"></div>
                  <div class="field"><textarea name="message" class="form-control" required placeholder="Message" id="message"></textarea></div>
                  <div class="col"></div>
                  <button type="submit"> Send</button>
                </div>
              </div>
              <div class="col"></div>
            </form>

            <!-- Contact Form | END -->
            <h2 style="margin:0;"><strong>+94 11 2748913</strong></h2>
            <h2 style="margin:0;"><strong> +94 77 7743612</strong></h2>

            <p style="margin:0;"><a href="mailto:info@amalyareach.com">info@amalyareach.com</a><br/>
            No: 556, Moragahahena, Pitipana North, Homagama, Sri Lanka<br />
            <a href="location"><i class="fa fa-map-marker"></i> Explore Our Location</a></p>
        </div>
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
            <div id="googlemap"></div>
        </div>
        <!-- Google Map | END -->
      </main>
@endsection
