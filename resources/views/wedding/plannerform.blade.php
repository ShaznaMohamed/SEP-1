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
            var hallprice;
            if(halltype="samro")
            {
                hallprice = 15000.00;
            }
            else  if(halltype="poolside")
            {
                hallprice = 18000.00;
            }
            else  if(halltype="silver")
            {
                hallprice = 13000.00;
            }
            else  if(halltype="grand")
            {
                hallprice = 10000.00;
            }

            var total = noofpax * hallprice ;

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

                <img src=images/wedimages/wed3.jpg width="1200" height="400" alt="" />
                <form action="{{route('plannerform')}}" role="form" method="post" novalidate>

                    <div class="col">
                        <div class="form-group{{ $errors->has('name') ? ' has-error' : ''}}">
                            <label for="start_time" class="control-label">Name</label>
                            <div class="field"><input name="name" type="text" placeholder="Your Name" id="contact-name" ></div>
                            @if ($errors->has('name')) <span class="help-block">{{ $errors->first('name') }}</span> @endif
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : ''}}">
                            <label for="start_time" class="control-label">Email Address</label>
                            <div class="field"><input name="email" type="text" placeholder="Email Address" id="contact-email" /></div>
                            @if ($errors->has('email')) <span class="help-block">{{ $errors->first('email') }}</span> @endif
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group{{ $errors->has('phone') ? ' has-error' : ''}}">
                            <label for="start_time" class="control-label">Phone Number</label>
                            <div class="field"><input name="phone" type="text" placeholder="Phone Number" id="contact-phone" /></div>
                            @if ($errors->has('phone')) <span class="help-block">{{ $errors->first('phone') }}</span> @endif
                        </div>
                        <div class="form-group{{ $errors->has('planner') ? ' has-error' : ''}}">
                            <label for="start_time" class="control-label">Select Planner</label>
                            <div class="field"> <select name="planner" id="halltype" class="infants">
                                    <option value="sarah" selected="selected">Sarah Jane</option>
                                    <option value="louise" >Louise Perry</option>
                                    <option value="kelly" >Kelly Chandler</option>
                                </select></div>
                            @if ($errors->has('planner')) <span class="help-block">{{ $errors->first('planner') }}</span> @endif
                        </div>
                    </div>
                    <div class="col">
                        <div></div>
                        <input type="hidden" name="_token" value="{!! csrf_token() !!}">
                        <div class="form-group">
                            <h4><input type="submit" name="sub" value="Book Wedding Planner" class="btn btn-default"  >
                                <span data-hover="Add"></span></h4>
                        </div>
                   </div>
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
                            <img alt="" src="images/wedimages/granddd.jpg" width="1200" height="400" />
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
