@extends('layouts.master')
@section('maincontent')

    <script type="text/javascript">
        function showmassage()
        {

            confirm("Booking request is sent successfully");
        }

        function calctotalrate()
        {
            var noofrooms = parseInt(document.getElementById("noofrooms").value);
            var noofadult = parseInt(document.getElementById("noofadult").value);
            var noofchildren = parseInt(document.getElementById("noofchildren").value);
            var halltype =(document.getElementById("roomtype").value);
            var child = noofchildren / 2.0 ;
            var people = child + noofadult ;
            var hallprice;
            if(halltype="royal")
            {
                hallprice = 1500.00;
            }
            else  if(halltype="deluxe")
            {
                hallprice = 1800.00;
            }
            else  if(halltype="junior")
            {
                hallprice = 1300.00;
            }
            else  if(halltype="premiere")
            {
                hallprice = 1000.00;
            }

            var total = noofrooms * people * hallprice ;

            confirm("The Total Rate you will have to pay is Rs."+ total);
        }
    </script>



    <!-- Header | Start -->
    <header>
        <div id="header">
            <div class="h1">
                <h1><span>Plan Your Stay</span>
                    <span class="tagline">Celebrate with Amalya</span></h1>
            </div>
        </div>
    </header>
    <!-- Header | END -->
    <!-- Content | START -->
    <main>
        <div class="centre">

            <div id="contact">
                <img src=images/roomimages/roomform.jpg width="1200" height="400" alt="" />
                <form action="{{route('roomform')}}" role="form" method="post" novalidate>

                    <div class="col">
                        <div class="form-group{{ $errors->has('name') ? ' has-error' : ''}}">
                        <div class="field"><input name="name" type="text" placeholder="Your Name" id="contact-name" /></div>
                        @if ($errors->has('name')) <span class="help-block">{{ $errors->first('name') }}</span> @endif
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : ''}}">
                        <div class="field"><input name="email" type="text" placeholder="Email Address" id="contact-email" /></div>
                            @if ($errors->has('email')) <span class="help-block">{{ $errors->first('email') }}</span> @endif
                        </div>

                        <div class="form-group{{ $errors->has('phone') ? ' has-error' : ''}}">
                        <div class="field"><input name="phone" type="text" placeholder="Phone Number" id="contact-phone" /></div>
                            @if ($errors->has('phone')) <span class="help-block">{{ $errors->first('phone') }}</span> @endif
                        </div>

                        <div class="form-group{{ $errors->has('roomtype') ? ' has-error' : ''}}">
                        <div class="field"> <select name="roomtype" id="roomtype" class="infants">
                                <option value="royal" selected="selected">Royal Suite</option>
                                <option value="deluxe" >Deluxe Suite</option>
                                <option value="junior" >Junior Suite</option>
                                <option value="premiere" >Premiere Suite</option>
                            </select></div>
                            @if ($errors->has('roomtype')) <span class="help-block">{{ $errors->first('roomtype') }}</span> @endif
                        </div>
                    </div>

                    <div class="col">

                        <div class="form-group{{ $errors->has('arrival') ? ' has-error' : ''}}">
                        <div class="field calendar"><input name="arrival" type="text" placeholder="Arrival Date" id="contact-arrival" readonly /><i class="fa fa-calendar-o"></i></div>
                            @if ($errors->has('arrival')) <span class="help-block">{{ $errors->first('arrival') }}</span> @endif
                        </div>

                        <div class="form-group{{ $errors->has('departure') ? ' has-error' : ''}}">
                        <div class="field calendar"><input name="departure" type="text" placeholder="Departure Date" id="contact-departure" readonly /><i class="fa fa-calendar-o"></i></div>
                            @if ($errors->has('departure')) <span class="help-block">{{ $errors->first('departure') }}</span> @endif
                        </div>

                        <div class="form-group{{ $errors->has('noofrooms') ? ' has-error' : ''}}">
                        <div class="field"><input name="noofrooms" type="text" placeholder="Number of Rooms" id="noofrooms" /></div>
                            @if ($errors->has('noofrooms')) <span class="help-block">{{ $errors->first('noofrooms') }}</span> @endif
                        </div>

                        <div class="form-group{{ $errors->has('adult') ? ' has-error' : ''}}">
                        <div class="select">
                            <select name="adult" id="noofadult" class="infants">
                                <option value="1" selected="selected">1 Adult</option>
                                <option value="2" >2 Adult</option>
                                <option value="3" >3 Adult</option>
                                <option value="4" >4 Adult</option>
                                <option value="5" >5 Adult</option>
                            </select>
                        </div>
                            @if ($errors->has('adult')) <span class="help-block">{{ $errors->first('adult') }}</span> @endif
                        </div>
                    </div>
                    <div class="col">

                        <div class="form-group{{ $errors->has('message') ? ' has-error' : ''}}">
                        <div class="field"><textarea name="message" placeholder="Message" id="contact-message"></textarea></div>
                            @if ($errors->has('message')) <span class="help-block">{{ $errors->first('message') }}</span> @endif
                        </div>

                        <div class="form-group{{ $errors->has('children') ? ' has-error' : ''}}">
                        <div class="field"><select name="children" id="noofchildren" class="adults">
                                <option value="1" selected="selected">1 Child</option>
                                <option value="2" >2 Children</option>
                                <option value="3" >3 Children</option>
                                <option value="4" >4 Children</option>
                                <option value="5" >5 Children</option>
                            </select></div>
                            @if ($errors->has('children')) <span class="help-block">{{ $errors->first('children') }}</span> @endif
                        </div>

                    </div>


                    <table>

                        <tr>
                            <td>
                                <div class="form-group">
                                    <h4><input type="submit" name="sub" value="Calculate Total Rate" class="btn btn-default" onclick="calctotalrate()">
                                        <span data-hover="Add"></span></h4>
                                </div>
                            </td>

                            <td>
                    <input type="hidden" name="_token" value="{!! csrf_token() !!}">

                        <input type="submit" name="sub" value="Send Booking Request" />
                        <span data-hover="Send Booking Request"></span>
                            </td>
                        </tr>

                    </table>
                </form>
            </div>

            <!-- Contact Form | END -->
            <h2 style="margin:0;"><strong>+94 11 2748913</strong></h2>
            <p style="margin:0;"><a href="mailto:info@amalyareach.com">info@amalyareach.com</a><br />
                No:556, Moragahahena, Pitipana North, Homagama, Sri Lanka.<br />
                <a href="{{url('location')}}"><i class="fa fa-map-marker"></i> Explore Our Location</a></p>
        </div>

    </main>
    <!-- Content | END -->
    <!-- Sitewide Extras | START -->
    <div id="extras">
        <div class="centre">
            <!-- List Items (Specials Slider) | START -->
            <div id="specials" class="list">
                <div class="back">
                    <div class="slider">
                        <div class="item">
                            <img alt="" src="images/wedimages/wed3.jpg" width="1200" height="400" />
                            <div class="details">
                                <a href="{{url('specials')}}">
                                    <div class="title">Family Escape<br />
                                        <span>Special Offers</span></div>
                                    <p>Now it's time to make an impression.<br />
                                        <strong>Posses your Luck</strong></p>
                                    <div class="button"><span data-hover="View Special">View Special</span></div>
                                </a>
                            </div>
                        </div>
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