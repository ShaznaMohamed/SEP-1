@extends('layouts.master')
@section('maincontent')

    <header>
        <div id="header">
            <div class="h1">
                <h1><span>Standard Rooms</span>
                    <span class="tagline">Luxurious by Reputation</span></h1>
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
                <!-- Slideshow | START -->
                <div id="slideshow">
                    <div class="slider">
                        <div class="item"><img alt="" src="images/roomimages/room6.jpg" width="770" height="500" /></div>
                    </div>
                    <div class="nav">
                        <a class="prev"><i class="fa fa-chevron-left"></i></a>
                        <a class="next"><i class="fa fa-chevron-right"></i></a>
                    </div>
                </div>
                <!-- Slideshow | END -->
                <div id="content">
                    <h2><strong>Standard Rooms</strong> Inclusions</h2>
                    <p>Our rooms are designed with comfort and convenience in mind providing a place to unwind or to catch up on work. Explore the various types of rooms, explore the amenities, and choose the space that's right for you.</p>
                    <p>Choose a spacious room for seating area with sofa and internet access. The Art Deco-style room has large windows. Catch up on work at the desk or pamper yourself in the marble bathroom. Some rooms have a sea view and a fluffy bathrobe. Special touches include magazines and newspapers.</p>
                    <ul class="tags">
                        <li>Spa Bath</li>
                        <li>King Size Bed</li>
                        <li>Air Conditioning</li>
                        <li>CD Player</li>
                        <li>Dishwasher</li>
                        <li>Cable Television</li>
                        <li>Spacious Living Areas</li>
                        <li>Free Unlimited Wi-Fi</li>
                        <li>24 Hour Room Service</li>
                    </ul>
                    <!-- USP Boxes | START -->
                    <section class="usp">
                        <div class="box">
                            <i class="fa fa-expand"></i>
                            <h3>Spacious Living Areas</h3>
                            <p> We provide you a vast living area to relax and enjoy your moments. With luxuries by reputaion and with comforts by arrangments, the living areas provide you the utter most tranquility. </p>
                        </div>
                        <div class="box">
                            <i class="fa fa-wifi"></i>
                            <h3>Free Unlimited Wi-Fi</h3>
                            <p>Amalya is always willing to provide the best of all which you may intensively yearn for everyday. We provide unlimited wifi facilities for you to explore the world and enjoy in your own way.</p>
                        </div>
                        <div class="box">
                            <i class="fa fa-user"></i>
                            <h3>24 Hour Room Service</h3>
                            <p>Our suits and rooms are well organized with all kind of services to be provided 24 hours for your comfort and satisfaction and they are fully facilitated to be experienced at anytime.</p>
                        </div>
                    </section>
                    <!-- USP Boxes | END -->
                </div>
            </div>
            <!-- Sidebar | START -->
            <aside>
                <div id="scroll">
                    <div id="block">
                        <div class="blocktitle"><span>Room  Varieties</span></div>
                        <!-- Sub Navigation | START -->
                        <ul class="nav">
                            <li>{{ Html::link('royalsuite', 'Royal Suite') }}</li>
                            <li>{{ Html::link('deluxeroom', 'Deluxe') }}</li>
                            <li>{{ Html::link('premiersuite', 'Primier Suites') }}</li>
                            <li>{{ Html::link('juniorsuites', 'Junior Suite') }}</li>

                        </ul>
                        <!-- Sub Navigation | END -->
                    </div>
                    <!-- List Items (Specials Slider) | START -->
                    <div id="specials" class="list">
                        <div class="slider">
                            <div class="item">
                                <img alt="" src="images/roomimages/room8.jpg" width="380" height="250" />
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
