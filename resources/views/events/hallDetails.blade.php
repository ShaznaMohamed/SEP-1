@extends('layouts.master')
@section('maincontent')
    <!-- Header | Start -->
    <header>
        <div id="header">
            <div class="h1">
                <h1><span>About Halls</span>
                    <span class="tagline">Luxurious Facilities & Services</span></h1>
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
            <!-- Slideshow -->
            <div id="slideshow">
                <div class="slider">
                    <div class="item"><img alt="" src="/images/events/meetings.png" width="400" height="400" /></div>
                </div>
                <div class="nav">
                    <a class="prev"><i class="fa fa-chevron-left"></i></a>
                    <a class="next"><i class="fa fa-chevron-right"></i></a>
                </div>
            </div>
            <div id="content">
                <h2><strong>An Experience</strong> Like No Other</h2>
                <p>For meetings and events, a choice of stylish indoor and outdoor conference facilities are fully equipped and you can leave it to our experienced planner to take care of all the details that matter.  If you’re looking to build team spirit and bonding, ask about our inspiring range of team building activities.
                    Celebrating a day well spent is effortless, with a cocktail reception and dinner of customised menus and great entertainment options..</p>
                <ul class="tags">
                    <li>On-site Restaurant</li>
                    <li>24 Hour Concierge</li>
                    <li>50m Lap Pool</li>
                    <li>Day Spa & Sauna</li>
                    <li>Tour Desk</li>
                </ul>
                <!-- Stats | START -->
                <!-- Stats | END -->
            </div>
        </div>
        <!-- Instagram | START -->
        <!-- Feature List | START -->
        <section id="">
                <h2>Hall Details</h2>
                <div class="featurelist">
                    <table>
                        <tr>
                            <td>
                    <div class="feature">
                        <img alt="" src="/images/events/meetings.png" width="200" height="300" class="thumb" />
                        <div class="details">
                            <h3>Pool Side Ballroom</h3>
                            <p>No of Pax : 150-300<br /><br />
                            <h3>Silver Ballroom</h3>
                            <p>No of Pax : 150-300<br /><br />
                            <h3>Samaro Ballroom</h3>
                            <p>No of Pax : 150-300<br /><br />
                            <h3>Grand Ballroom</h3>
                            <p>No of Pax : 200-400<br /><br />
                                </p>
                        </div>
                    </div>
                            </td>
                            <td>
                                <div class="copy" align="100">
                                  @foreach($halldata as $halldata)
                                    <p>{{ $halldata->topic }}{{ $halldata->value }}</p>
                                  @endforeach

                                </div>
                            </td>
                        </tr>
                    </table>

                </div>
        </section>
        <!-- Feature List | END -->
        <!-- Stats | START -->
        <div class="centre">
            <div id="content">
        <section id="stats">
            <h3>Last Month at Amalya Reach Hotel</h3>
            <figure>
                <strong>26</strong><br />
                <span>Guests Stayed</span>
            </figure>
            <figure>
                <strong>478</strong><br />
                <span>Meals Served</span>
            </figure>
            <figure>
                <strong>10</strong><br />
                <span>Events Booked</span>
            </figure>
            <figure>
                <strong>10</strong><br />
                <span>Meetings Booked</span>
            </figure>
        </section>
            </div>
        </div>
        <!-- Stats | END -->

    </main>
    @endsection
