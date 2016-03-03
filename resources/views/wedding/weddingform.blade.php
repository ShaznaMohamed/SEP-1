@extends('layouts.master')
@section('maincontent')
    <script type="text/javascript">
        function showmassage()
        {

            confirm("Booking request is sent successfully");
        }

        function calctotal()
        {
            var noofpax = parseInt(document.getElementById("pax").value);
            var halltype =(document.getElementById("halltype").value);
            var noofguestroom =(document.getElementById("noofrooms").value);
            var session =(document.getElementById("session").value);
            var roomprice = noofguestroom * 2000.00 ;
            var hallprice;
            var sessionprice;
            if(halltype="samro")
            {
                hallprice = 1500.00;
            }
            else  if(halltype="poolside")
            {
                hallprice = 1800.00;
            }
            else  if(halltype="silver")
            {
                hallprice = 1300.00;
            }
            else  if(halltype="grand")
            {
                hallprice = 1000.00;
            }

            if(session="morning")
            {
                sessionprice = 1500.00;
            }
            else  if(session="afternoon")
            {
                sessionprice = 1800.00;
            }
            else  if(session="evening")
            {
                sessionprice = 1500.00;
            }
            else  if(session="halfday")
            {
                sessionprice = 2000.00;
            }
            else if (session = "fullday")
            {
                sessionprice = 3000.00;
            }

            var totalhall = noofpax * hallprice ;
            var total = sessionprice + totalhall + roomprice ;
            confirm("The Total Rate you will have to pay is Rs."+ total);
        }
    </script>


    <!-- Header | Start -->
    <header>
        <div id="header">
            <div class="h1">
                <h1><span>Plan Your Wedding</span>
                    <span class="tagline">Celebrate with Amalya</span></h1>
            </div>
        </div>
    </header>
    <!-- Header | END -->
    <!-- Content | START -->
    <main>
        <div class="centre">

            <div id="contact">

                <img src="/images/wedimages/reserv.jpg" width="1200" height="400" alt="" />
                <form action="{{route('weddingform')}}" role="form" method="post" novalidate>

                    <div class="col">
                        <h3>Wedding Plan</h3>
                        <div class="form-group {{ $errors->has('eventdate') ? ' has-error' : ''}}">
                            <div class="field calendar"><input name="eventdate" type="text" placeholder="Event Date*" id="contact-arrival"  /><i class="fa fa-calendar-o"></i></div>
                            @if ($errors->has('eventdate')) <span class="help-block">{{ $errors->first('eventdate') }}</span> @endif
                        </div>


                        <div class="form-group{{ $errors->has('eventtype') ? ' has-error' : ''}}">
                            <div class="field"> <select name="eventtype" id="eventtype" class="infants">
                                    <option value="wedding" selected="selected">Wedding</option>
                                    <option value="engagement" >Engagement</option>
                                    <option value="homecoming" >Home Coming</option>
                                    <option value="reception" >Reception</option>
                                </select></div>
                            @if ($errors->has('eventtype')) <span class="help-block">{{ $errors->first('eventtype') }}</span> @endif
                        </div>

                     <br>

                        <br>
                            <div><br><br> <input type="text"  hidden="hidden"  value="" name="id"/>
                            <input type="text"  hidden="hidden"  value="" name="id"/></div>
                        <!--Already have an account? login-->
                     <h4>Contact Information</h4>

                        <div class="form-group{{ $errors->has('firstname') ? ' has-error' : ''}}">
                            <div class="field"><input name="firstname" type="text" placeholder="First Name*" id="firstname" ></div>
                            @if ($errors->has('firstname')) <span class="help-block">{{ $errors->first('firstname') }}</span> @endif
                        </div>

                        <div class="form-group{{ $errors->has('lastname') ? ' has-error' : ''}}">
                            <div class="field"><input name="lastname" type="text" placeholder="Last Name*" id="lastname" ></div>
                            @if ($errors->has('lastname')) <span class="help-block">{{ $errors->first('lastname') }}</span> @endif
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : ''}}">
                            <div class="field"><input name="email" type="text" placeholder="Email Address*" id="contact-email" /></div>
                            @if ($errors->has('email')) <span class="help-block">{{ $errors->first('email') }}</span> @endif
                        </div>


                        <div class="form-group{{ $errors->has('phone') ? ' has-error' : ''}}">
                            <div class="field"><input name="phone" type="text" placeholder="Phone Number*" id="contact-phone" /></div>
                            @if ($errors->has('phone')) <span class="help-block">{{ $errors->first('phone') }}</span> @endif
                        </div>

                        <div class="form-group{{ $errors->has('city') ? ' has-error' : ''}}">
                            <div class="field"><input name="city" type="text" placeholder="City*" id="contact-email" /></div>
                            @if ($errors->has('city')) <span class="help-block">{{ $errors->first('city') }}</span> @endif
                        </div>


            </div>
            <div class="col">

                <input type="text"  hidden="hidden"  value="" name="id"/>
                <input type="text"  hidden="hidden"  value="" name="id"/>
                <br>
                <hr>



                <div class="form-group{{ $errors->has('noofrooms') ? ' has-error' : ''}}">
                    <div class="field"><input name="noofrooms" type="text" placeholder="Number of Guest Rooms" id="noofrooms" /></div>
                    @if ($errors->has('noofrooms')) <span class="help-block">{{ $errors->first('noofrooms') }}</span> @endif
                </div>


                <div class="form-group{{ $errors->has('pax') ? ' has-error' : ''}}">
                    <div class="field"><input name="pax" type="text" placeholder="Number of Pax*" id="pax" /></div>
                    @if ($errors->has('pax')) <span class="help-block">{{ $errors->first('pax') }}</span> @endif
                </div>


                <div class="form-group{{ $errors->has('halltype') ? ' has-error' : ''}}">
                    <div class="field"> <select name="halltype" id="halltype" class="infants">
                            <option value="samro" selected="selected">Samro Reception</option>
                            <option value="poolside" >Pool side ball room</option>
                            <option value="silver" >Silver ball room</option>
                            <option value="grand" >Grand ball room</option>
                        </select></div>
                    @if ($errors->has('halltype')) <span class="help-block">{{ $errors->first('halltype') }}</span> @endif
                </div>

                <div class="form-group{{ $errors->has('sessionn') ? ' has-error' : ''}}">
                    <div class="select">
                        <select name="sessionn" id="session" class="infants">
                            <option value="morning" selected="selected">Morning Session (6.00am - 11.00am)</option>
                            <option value="afternoon" >Afternoon Session (11.00am - 4.00pm)</option>
                            <option value="evening" >Evening Session(5.00pm - 11.00pm)</option>
                            <option value="halfday" >Half Day(6.00am - 6.00pm)</option>
                            <option value="fullday" >Full Day</option>
                        </select>
                    </div>
                    @if ($errors->has('sessionn')) <span class="help-block">{{ $errors->first('sessionn') }}</span> @endif
                </div>

            </div>
            <div class="col">
                <input type="text"  hidden="hidden"  value="" name="id"/>
                <input type="text"  hidden="hidden"  value="" name="id"/>
                <br>
                <hr>

                <div class="form-group{{ $errors->has('message') ? ' has-error' : ''}}">
                    <div class="field"><textarea name="message" placeholder="Message" id="contact-message"></textarea></div>
                    @if ($errors->has('message')) <span class="help-block">{{ $errors->first('message') }}</span> @endif
                </div>
                <div class="form-group{{ $errors->has('flexibility') ? ' has-error' : ''}}">
                    <div class="field"><select name="flexibility" id="contact-adults" class="adults">
                            <option value="unchecked" >Event Date is Firm</option>
                            <option value="unchecked" selected="selected">Event Date is Flexible</option>

                        </select></div>
                    @if ($errors->has('flexibility')) <span class="help-block">{{ $errors->first('flexibility') }}</span> @endif
                </div>


            <br>
            <table>

                    <tr>
                    <td>  <div class="form-group">
                            <input type="hidden" name="_token" value="{!! csrf_token() !!}">
                            <h4><input type="submit" name="sub" value="Request for Quotation" class="btn btn-default" >
                                <span data-hover="Add"></span></h4>
                          </div>
                    </td>

                </tr>
                </table>
            </div>
                </form>
                <table>
                    <tr>
                    <td>
                        <input type="hidden" name="_token" value="{!! csrf_token() !!}">
                        <div class="form-group">
                            <h4><input type="submit" name="sub" value="Calculate Total Rate" class="btn btn-default" onclick="calctotal()" >
                                <span data-hover="Add"></span></h4>
                        </div>
                    </td>
                    </tr>

            </table>



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
                        <img alt="" src="/images/wedimages/wed3.jpg" width="1200" height="400" />
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

    @endsection