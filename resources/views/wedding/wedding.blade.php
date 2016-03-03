@extends('layouts.master')
@section('maincontent')

    <header>
        <div id="header">
            <div class="h1">
                <h1><span>Wedding</span>
                    <span class="tagline">Lapse in Luxuries</span></h1>
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
            <!-- Slideshow | START -->
            <slideshow>
            <div id="slideshow">
                <div class="slider">
                    <div class="item"><img alt="" src="/images/wedimages/wed1.jpg" width="1200" height="600" /></div>
                </div>
                <div class="nav">
                    <a class="prev"><i class="fa fa-chevron-left"></i></a>
                    <a class="next"><i class="fa fa-chevron-right"></i></a>
                </div>
            </div>
            </slideshow>
            <!-- Slideshow | END -->
            <div id="left">
                <div id="content">
                    <h2><strong>Amalya   </strong>Sphere</h2>
                    <p>Toast your new beginning and let the magic of the day continue. Take in the ambiance created just for you. AMALYA helps coordinate every detail of your wedding reception. Our professional planners ensure your event is handled expertly, while our innovative dining options and stylish venues make your party unforgettable. From lush garden parties to grand ballroom dinners, AMALYA Lapse in Luxury provides a stylish, upscale setting for your wedding reception.

                    </p>
                    <p>Tranquilizing atmosphere, elegant modern décor and delectable international cuisines from the finest interier designers &
                        "A salient experience for the romantic atmosphere."

                    </p>
                    <ul class="tags">
                        <li>Traditional Oil Lamp</li>
                        <li>Wedding cake table</li>
                        <li>Cake trays & cane baskets</li>
                        <li>Dancing ballroom</li>
                        <li>Complimentary changing room</li>
                        <li>Registration table</li>
                        <li>Photography spots </li>
                        <li>Band stand</li>
                        <li>Superior Head table</li>
                        <li>Honorable Red Carpet</li>
                        <li>Glittering Gift table</li>
                    </ul>
                    <!-- USP Boxes | START -->
                  <!--  <section class="usp">-->
                        <div class="box">
                           <!-- <i class="fa fa-expand"></i>-->

                            <h3>Amalya Fixture Setups</h3>
                            <table>
                                <tr>
                                    <td><img src="images/wedimages/fac_banquet.gif" height="70px" width="70px"/></td>
                                    <td>Banquet designed arrangment with 6 or 12 seats rounded a table. Best sitting for family gatherings.</td>
                                </tr>
                                <tr>
                                    <td><img src="images/wedimages/fac_classroom.gif" height="70px" width="70px"/></td>
                                    <td>Classroom designed arrangment with 8 or 12 seats assembled in one line of a long table. Best sitting for previledged guests.</td>
                                </tr>
                                <tr>
                                    <td><img src="images/wedimages/fac_reception.gif" height="70px" width="70px"/></td>
                                    <td>Reception designed arrangement with a random manner. Best plan for special ceremonies & receptions. </td>
                                </tr>
                                <tr>
                                    <td><img src="images/wedimages/fac_theater.gif" height="70px" width="70px"/></td>
                                    <td>Theater designed arrangement, pretty structure for a large number of guests.</td>
                                </tr>
                            </table>
                        </div>

                <!-- </section>-->
                    <!-- USP Boxes | END -->
                </div>
            </div>
            <aside class="layout2">
                <div id="scroll">
                    <div id="block">
                        <div class="blocktitle"> <span>Banquet Halls</span></div>
                        <!-- Sub Navigation | START -->
                        <ul class="nav">
                            <li>{{ Html::link('samroreception', 'Samro Reception') }}</li>
                            <li>{{ Html::link('poosideballroom', 'Pool Side Ball Room') }}</li>
                            <li>{{ Html::link('silverballroom', 'Silver Ball Room') }}</li>
                            <li>{{ Html::link('grandballroom', 'Grand Ball Room') }}</li>

                        </ul>
                        <!-- Sub Navigation | END -->
                    </div>
                    <!-- List Items (Specials Slider) | START -->
                    <div id="specials" class="list">
                        <div class="slider">
                            <div class="item">
                                <img alt="" src="/images/wedimages/offer.jpg" width="380" height="250" />
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
                    </div>
                </div>
            </aside>
        </div>
    </main>
@endsection