@extends('layouts.master')
@section('maincontent')
  <header>
      <div id="header">
          <div class="h1">
              <h1><span>Meetings and Events</span>
                  <span class="tagline">Modern Rooms & Spacious Suites</span></h1>
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

  <!-- Intro | START -->
  <!-- intro | END -->
  
  <!-- Content | START -->
  <main>
      <div class="centre">
          <!-- List Items (Halls) | START -->
          <section id="rooms" class="list grid">
              <h3>CORPORATE EVENTS</h3>
              <p>
                  In our aspiration to offer a myriad of services that will encompass a true experience, we are also prepared to assist you, with your corporate requirements. We spare no effort in ensuring that all corporate retreats, outings and events are carried out with the zest and professionalism required to ensure all your events a veritable success. Join us, as we conjure the ideal combination of rest and relaxation along with the corporate requirements of today’s fast paced lifestyle.
              </p>
              <h3>OTHER FUNCTIONS</h3>
              <p>
                  Be it a wedding anniversary, batch reunion, private dinner or a birthday party, all arrangements from the start of the event to the conclusion are carried out with absolute aplomb. From the assortment of cuisine, to the cocktail function, we make it our responsibility to deliver on all fronts.
                  It is our passion and aim to ensure that you, our valued guest have the chance to experience the way of life.
              </p>
              <div class="item">
                  <div class="container">
                      <div class="imgcontainer"><img alt="" src="/images/events/hall.png" width="200" height="200" /></div>
                      <div class="details">
                          <a href="hallDetails">
                              <h3 class="title">Pool Side Ballroom<br /></h3>
                              <p>There are some events that are just meant to be held at Pool Side Ballroom, with its larger-than-life appeal and grand finishes.</p>
                              <div class="button"><span data-hover="View Hall">View Hall</span></div>
                          </a>
                      </div>
                  </div>
              </div>
              <div class="item">
                  <div class="container">
                      <div class="imgcontainer"><img alt="" src="/images/events/hall.png" width="380" height="380" /></div>
                      <div class="details">
                          <a href="hallDetails">
                              <h3 class="title">Silver Ballroom<br /></h3>
                              <p>There are some events that are just meant to be held at Pool Side Ballroom, with its larger-than-life appeal and grand finishes.</p>
                              <div class="button"><span data-hover="View Hall">View Hall</span></div>
                          </a>
                      </div>
                  </div>
              </div>
              <div class="item">
                  <div class="container">
                      <div class="imgcontainer"><img alt="" src="/images/events/hall.png" width="380" height="380" /></div>
                      <div class="details">
                          <a href="hallDetails">
                              <h3 class="title">Samaro Ballroom<br /></h3>
                              <p>There are some events that are just meant to be held at Pool Side Ballroom, with its larger-than-life appeal and grand finishes.</p>
                              <div class="button"><span data-hover="View Hall">View Hall</span></div>
                          </a>
                      </div>
                  </div>
              </div>
              <div class="item">
                  <div class="container">
                      <div class="imgcontainer"><img alt="" src="/images/events/hall.png" width="380" height="380" /></div>
                      <div class="details">
                          <a href="hallDetails">
                              <h3 class="title">Grand Ballroom<br /></h3>
                              <p>There are some events that are just meant to be held at Pool Side Ballroom, with its larger-than-life appeal and grand finishes.</p>
                              <div class="button"><span data-hover="View Hall">View Hall</span></div>
                          </a>
                      </div>
                  </div>
              </div>
          </section>
          <br></br>
          <br></br>
          <!-- newform | start -->
          <div class="centre">
              <!-- Contact Form | START -->
            <div id="contact">
                <h3><strong>MAKE A REQUEST</h3>
                  <form name="form1" id="form1" class="form-vertical" role="form" method="post" action="{{route('events')}}">
                      <div class="col">
                        <select name="title" id="title" class="field">
                          <option value="mr" selected="selected">Mr.</option>
                          <option value="mrs" >Mrs.</option>
                          <option value="Ms" >Ms.</option>
                        </select>
                        <br></br>
                          <div class="field {{ $errors->has('first_name') ? ' has-error' : ''}}">
                            <input name="first_name" type="text" placeholder="First Name" id="name" />
                          </div>
                          @if ($errors->has('first_name'))
                              <span class="help-block">{{ $errors->first('first_name') }}</span>
                          @endif

                          <div class="field"><input name="last_name" type="text" placeholder="Last Name" id="name" /></div>
                          <div class="select">
                            <select name="venue" class="field" id="venue" value="">
                                <option value="Pool Side Ballroom">Pool Side Ballroom (150-300 pax)</option>
                                <option value="Silver Ballroom">Silver Ballroom (150-300 pax)</option>
                                <option value="Samaro Ballroom">Samaro Ballroom (150-300 pax)</option>
                                <option value="Grand Ballroom">Grand Ballroom (200-400 pax)</option>
                            </select>
                              <br></br>
                          </div>
                          <div class="field"><input type="text" name="pax" placeholder="No of Pax" id="pax" /></div>
                      </div>
                      <div class="col">

                          <div class="field calendar"><input name="arrival_date" type="text" placeholder="Date" id="contact-arrival" readonly /><i class="fa fa-calendar-o"></i></div>
                          <div class="field"><input type="text" name="start" placeholder="Starting Time" id="start" /></div>
                          <div class="field"><input type="text" name="end" placeholder="Ending Time" id="end" /></div>
                          <div class="field {{ $errors->has('contact_number') ? ' has-error' : ''}}"><input type="text" name="contact_number" placeholder="Contact Number" id="contact_number" /></div>
                          @if ($errors->has('contact_number'))
                              <span class="help-block">{{ $errors->first('contact_number') }}</span>
                          @endif

                          <div class="field"><input type="text" name="type_of_event" placeholder="Type of Event" id="type_of_event" /></div>


                      </div>
                      <div class="col">
                        <div class="field"><input type="text" name="preferred_time" placeholder="Preferred time to receive call" id="preferred_time" /></div>
                        <div class="field"><input name="email" type="text" placeholder="Email Address" id="email" />
                        </div>
                        @if ($errors->has('email'))
                            <span class="help-block">{{ $errors->first('email') }}</span>
                        @endif

                        <div class="field"><input type="text" name="confirm_email" placeholder="Confirm Email Address" id="confirm_email" value="{{ Request::old('confirm_email') ?: '' }}" />
                        </div>
                        @if ($errors->has('email'))
                          <span class="help-block">{{ $errors->first('email') }}</span>
                        @endif

                      </div>
                      <button type="submit" class="btn btn-default"><span data-hover="Send Request">SUBMIT</span></button>

                      <input type="hidden" name="_token" value="{{ Session::token() }}">

                  </form>
              </div>
              <!-- Contact Form | END -->
          </div>
          <!-- newform | end -->


          </div>



      </main>
@endsection
