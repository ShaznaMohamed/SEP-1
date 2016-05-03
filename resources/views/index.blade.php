@extends('layouts.master')

@section('maincontent')
  <header>
    <!-- Featured Slider | START -->
    <div id="featured">
      <div class="slider">
        <div class="item">
          <div class="details">
            <div class="title"><span>Your gateaway to the heaven</span></div>
            <div class="buttoncontainer"><a href="gallery" class="button"><span data-hover="Explore The Hotel">Explore The Hotel</span></a></div>
          </div>
          <img alt="" src="images/slideshow/1.png" width="1800" height="800" />
        </div>
        <div class="item">
          <div class="details">
              <div class="title"><span>Heaven is where the food is tasty</span></div>
              <div class="buttoncontainer"><a href="room" class="button"><span data-hover="Explore The Hotel">Explore The Hotel</span></a></div>
          </div>
          <img alt="" src="images/slideshow/2.png" width="1800" height="800" />
        </div>
        <div class="item">
          <div class="details">
            <div class="title"><span>Crunchiness to the crispy yum</span></div>
            <div class="buttoncontainer"><a href="room" class="button"><span data-hover="Explore The Hotel">Explore The Hotel</span></a></div>
          </div>
          <img alt="" src="images/slideshow/3.png" width="1800" height="800" />
        </div>
        <div class="item">
          <div class="details">
            <div class="title"><span>Made with love</span></div>
            <div class="buttoncontainer"><a href="room" class="button"><span data-hover="Explore The Hotel">Explore The Hotel</span></a></div>
          </div>
          <img alt="" src="images/slideshow/4.png" width="1800" height="800" />
        </div>
        <div class="item">
          <div class="details">
            <div class="title"><span>For the color crazy</span></div>
            <div class="buttoncontainer"><a href="gallery" class="button"><span data-hover="Explore The Hotel">Explore The Hotel</span></a></div>
          </div>
          <img alt="" src="images/slideshow/5.png" width="1800" height="800" />
        </div>
        <div class="item">
          <div class="details">
            <div class="title"><span>Minimal elegance</span></div>
            <div class="buttoncontainer"><a href="gallery" class="button"><span data-hover="Explore The Hotel">Explore The Hotel</span></a></div>
          </div>
          <img alt="" src="images/slideshow/6.png" width="1800" height="800" />
        </div>
        <div class="item">
          <div class="details">
            <div class="title"><span>Just the way you like it</span></div>
            <div class="buttoncontainer"><a href="gallery" class="button"><span data-hover="Explore The Hotel">Explore The Hotel</span></a></div>
          </div>
          <img alt="" src="images/slideshow/7.png" width="1800" height="800" />
        </div>
        <div class="item">
          <div class="details">
            <div class="title"><span>For the Vegetarian in you</span></div>
            <div class="buttoncontainer"><a href="gallery" class="button"><span data-hover="Explore The Hotel">Explore The Hotel</span></a></div>
          </div>
          <img alt="" src="images/slideshow/8.png" width="1800" height="800" />
        </div>
      </div>
      <div class="centre">
        <div class="nav">
          <a class="prev"><i class="fa fa-chevron-left"></i></a>
          <a class="next"><i class="fa fa-chevron-right"></i></a>
        </div>
      </div>
    </div>
    <!-- Featured Slider | END -->
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
      <h1>Experience Luxury & <strong>Find Your Peace of Mind</strong></h1>
      <p></p>
      <!-- USP Boxes | START -->
      <section class="usp">
        <div class="box">
          <i class="fa fa-trophy"></i>
          <h3>Rated #1 on TripAdvisor</h3>
          <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Phasellus hendrerit. Pellentesque aliquet nibh nec urna. In nisi neque, aliquet vel, dapibus id.</p>
        </div>
        <div class="box">
          <i class="fa fa-cutlery"></i>
          <h3>Award-Winning Restaurant</h3>
          <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Phasellus hendrerit. Pellentesque aliquet nibh nec urna. In nisi neque, aliquet vel, dapibus id.</p>
        </div>
        <div class="box">
          <i class="fa fa-user"></i>
          <h3>24 Hour Concierge Service</h3>
          <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Phasellus hendrerit. Pellentesque aliquet nibh nec urna. In nisi neque, aliquet vel, dapibus id.</p>
        </div>
      </section>
      <!-- USP Boxes | END -->
    </div>
  </main>
  <!-- Content | END -->

  <!-- Gallery Slider | START -->
  <div id="galleryslider">
    <div class="slidecontainer">
      <div class="slider">
        <img alt="" src="images/gallery/gal1.png" width="900" height="600" />
        <img alt="" src="images/gallery/gal2.png" width="900" height="600" />
        <img alt="" src="images/gallery/gal3.png" width="900" height="600" />
        <img alt="" src="images/gallery/gal4.png" width="900" height="600" />
        <img alt="" src="images/gallery/gal5.png" width="900" height="600" />
        <img alt="" src="images/gallery/gal6.png" width="900" height="600" />
        <img alt="" src="images/gallery/gal7.png" width="900" height="600" />
        <img alt="" src="images/gallery/gal8.png" width="900" height="600" />
        <img alt="" src="images/gallery/gal9.png" width="900" height="600" />
      </div>
      <div class="centre">
        <div class="nav">
          <a class="prev"><i class="fa fa-chevron-left"></i></a>
          <a class="next"><i class="fa fa-chevron-right"></i></a>
        </div>
      </div>
    </div>
    <a href="gallery" class="button"><span data-hover="Browse Our Gallery">Browse Our Gallery</span></a>
  </div>

  <!-- Gallery Slider | END -->

@endsection
