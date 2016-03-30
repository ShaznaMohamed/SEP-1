@extends('layouts.master')

@section('maincontent')
	<!-- Header | Start -->
	<header>
    	<div id="header">
        	<div class="h1">
                <h1><span>Our Staff</span>
                <span class="tagline"></span></h1>
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

        <!-- Feature List | START -->
        <section id="featurelist" style="background-image: url(images/gallery/gal4.png">
        	<div class="centre">
                <div class="featurelist">
                    <div class="feature">
                        <img alt="" src="images/avatar.png" width="120" height="120" class="thumb" />
                        <div class="details">
                            <h3>General Manager</h3>
                            <a href="mailto:manager@amalyareach.com">manager@amalyareach.com</a>
                        </div>
                    </div>
                </div>
                <br>

                <div class="featurelist">
                    <div class="feature">
                        <img alt="" src="images/avatar.png" width="120" height="120" class="thumb" />
                        <div class="details">
                            <h3>Food & Beverage Manager</h3>
                            <a href="">manager_fb@amalyareach.com</a>
                        </div>
                    </div>
                </div>
                <br>

                <div class="featurelist">
                    <div class="feature">
                        <img alt="" src="images/avatar.png" width="120" height="120" class="thumb" />
                        <div class="details">
                            <h3>Executive Chef</h3>
                            <a href="">chef@amalyareach.com</a>
                        </div>
                    </div>
                </div>
                <br>

                <div class="featurelist">
                    <div class="feature">
                        <img alt="" src="images/avatar.png" width="120" height="120" class="thumb" />
                        <div class="details">
                            <h3>Front Office Manager</h3>
                            <a href="">info@amalyareach.com</a>
                        </div>
                    </div>
                </div>
                <br>

                <div class="featurelist">
                    <div class="feature">
                        <img alt="" src="images/avatar.png" width="120" height="120" class="thumb" />
                        <div class="details">
                            <h3>Service Manager</h3>
                            <a href="">manager_services@amalyareach.com</a>
                        </div>
                    </div>
                </div>
                <br>

                <div class="featurelist">
                    <div class="feature">
                        <img alt="" src="images/avatar.png" width="120" height="120" class="thumb" />
                        <div class="details">
                            <h3>Head of PR</h3>
                            <a href="">careers@amalyareach.com</a>
                        </div>
                    </div>
                </div>
                <br>
            </div>
        </section>
        <!-- Feature List | END -->
    </main>
    <!-- Content | END -->
	@endsection
