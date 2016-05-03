@extends('layouts.master')
@section('maincontent')    <!-- Header | Start -->
    <header>
        <div id="header">
            <div class="h1">
                <h1><span>Premier Suite</span>
                    <span class="tagline">For Majestic Guests</span></h1>
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
            <div id="left">
                <article>
                    <div class="main">
                        <div class="img"><a href="{{url('gallery')}}"><img alt="" src="images/roomimages/room7.jpg" width="770" height="500" /></a></div>
                        <!-- <div class="details">
                             <div class="date">
                                 <span class="month">Dec</span>
                                 <span class="day">12</span>
                             </div>
                             <h2>Our Latest Hotel Awards</h2>
                             <p><a href="#"><strong>Hotel News</strong></a> <span>|</span> By <a href="#">Base Admin</a> <span>|</span> <a href="#">4 Comments</a></p>
                         </div>-->
                    </div>

                    <p class="intro">Take the stress out of business in a spacious Art Deco-style room offering a seating area with sofa and Executive Lounge access with free breakfast and refreshments. Get to work at the desk, surf the web with internet access or re-energize in the marble bathroom. Some rooms have a sea view.</p>
                    <p>High-floor views, Executive Lounge access, seating area, separate bathtub and shower, bathrobe.

                        Enjoy a stay in this large high-floor suite, complete with scenic views, seating area and range of convenient amenities. Take advantage of Executive Lounge access, offering complimentary breakfast and refreshments.

                        Work away at the desk and browse online with WiFi (fees apply) or unwind with a movie on the TV. Special touches include a plush bathrobe, slippers and daily newspaper.</p>
                </article>
                {{--<ul class="pagination">--}}
                {{--<li><span>1</span></li>--}}
                {{--<li><a href="#">2</a></li>--}}
                {{--<li><a href="#">3</a></li>--}}
                {{--<li><a href="#">4</a></li>--}}
                {{--<li><a href="#">Next</a></li>--}}
                {{--</ul>--}}
            </div>
            <!-- Sidebar | START -->
            <!--price retrieving from database-->
            <?php $tabledata = DB::table('room')->where('roomtype', 'premier')->get(); ?>
            <?php
            foreach($tabledata as $row)
            ?>
            <aside>
                <div id="scroll">
                    <div id="block" class="categories">
                        <div class="blocktitle">Stay for <span><?php echo $row->price; ?></span>per night</div>
                        <ul class="nav">
                            <li>{{ Html::link('room', 'Standard Rooms') }}</li>
                            <li>{{ Html::link('royalsuite', 'Royal Suite') }}</li>
                            <li>{{ Html::link('deluxeroom', 'Deluxe') }}</li>
                            <li>{{ Html::link('juniorsuites', 'Junior Suite') }}</li>
                        </ul>
                    </div>
                    <!--Start of retrieved services showings-->
                    <?php $tabledata = DB::table('room')->where('roomtype', 'premier')->get(); ?>

                    <?php
                    foreach($tabledata as $row)

                        if($row->wifi  == 1)
                            $wifi = "Free Wifi" ;
                        else
                            $wifi = "";
                    if($row->airconditioned  == 1)
                        $air = "Air Conditioned" ;
                    else
                        $air = "";
                    if($row->cabletv  == 1)
                        $cable = "Cable TV" ;
                    else
                        $cable = "";
                    if($row->telephone  == 1)
                        $tel = "Telephone" ;
                    else
                        $tel = "";
                    if($row->diningtable  == 1)
                        $din = "Dining Table" ;
                    else
                        $din = "";

                    ?>
                    <ul class="tags">
                        <li>24 Hour Butler Service</li>
                        <li><?php echo $air ?></li>
                        <li>Cable TV</li>
                        <li><?php echo $wifi ?></li>
                        <li>Coffee Maker</li>
                        <li>Bubble Bath Service</li>
                        <li>Guest Toilet </li>
                        <li>King Bed</li>
                        <li><?php echo $tel ?></li>
                        <li><?php echo $din ?></li>
                        <li>Large Sitting Area</li>
                    </ul>
                    <!-- List Items (Specials Slider) | START -->
                    <div id="specials" class="list">
                        <div class="slider">
                            <div class="item">
                                <img alt="" src="images/roomimages/room9.jpg" width="380" height="250" />
                                <div class="details">
                                    <a href="{{url('specials')}}">
                                        <div class="title">Family Escape<br />
                                            <span>Special Offer</span></div>
                                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Phasellus hendrerit. Pellentesque aliquet nibh nec urna.<br />
                                            <strong>Stay from $249 per night</strong></p>
                                        <div class="button"><span data-hover="View Special">View Special</span></div>
                                    </a>
                                </div>
                            </div>
                        </div>

                    </div>
                 </div>
                </aside>
            </div>
        </main>
                    <!-- List Items (Specials Slider) | END -->
@endsection
