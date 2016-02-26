@extends('layouts.master')

@section('maincontent')
	<!-- Header | Start -->
	<header>
    	<div id="header">
        	<div class="h1">
                <h1><span>Extras</span>
                <span class="tagline">Currency Converter & Weather</span></h1>
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

                <!-- Weather | START -->
                <div class="centre">
                  <a href="http://www.accuweather.com/en/lk/homagama/311407/weather-forecast/311407" class="aw-widget-legal"></a>
                  <div id="awcc1456160109235" class="aw-widget-current"  data-locationkey="" data-unit="c" data-language="en-us" data-useip="true" data-uid="awcc1456160109235"></div>
                  <script type="text/javascript" src="http://oap.accuweather.com/launch.js"></script>
                </div>
                <!-- Weather | END -->

                <div class="centre">
                  <!-- Currency converter | START -->
                    <div id='gcw_mainFY3p67wuE' class=''></div>
                    <a id='gcw_siteFY3p67wuE'></a>
                    <script>
                      function reloadFY3p67wuE()
                      {
                          var sc = document.getElementById('scFY3p67wuE');
                          if (sc) sc.parentNode.removeChild(sc);
                          sc = document.createElement('script');
                          sc.type = 'text/javascript';
                          sc.charset = 'UTF-8';
                          sc.async = true;
                          sc.id='scFY3p67wuE';
                          sc.src = 'http://freecurrencyrates.com/en/widget-vertical?iso=USDEURGBPJPYCNYXUL&df=2&p=FY3p67wuE&v=fits&source=fcr&width=250&width_title=0&firstrowvalue=1&thm=A6C9E2,FCFDFD,4297D7,5C9CCC,FFFFFF,C5DBEC,FCFDFD,2E6E9E,000000&title=Currency%20Converter&tzo=-330';
                          var div = document.getElementById('gcw_mainFY3p67wuE');
                          div.parentNode.insertBefore(sc, div);
                      }
                      reloadFY3p67wuE();
                    </script>
                </div>
                <!-- Currency converter | END -->
        <!-- Feature List | END -->
    </main>
    <!-- Content | END -->

	@endsection
