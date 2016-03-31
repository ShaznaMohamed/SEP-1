@extends('layouts.master')
@section('maincontent')
<?php
  $roomId = $_REQUEST['rid'];
  $arrivalDate = $_REQUEST['arr'];
  $departureDate = $_REQUEST['dep'];

  $resultSet = DB::table('room')->where('id', $roomId)->first();

  if(Auth::user())
  {
     $loggedUser = Auth::user();

  }

?>
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
            var child = noofchildren / 2.0 ;
            var people = child + noofadult ;
            //var price = document.getElementById("priceh").value;
            var price = {{$resultSet->price}};
                price = parseInt(price);
            var total = noofrooms * people * price ;
            //alert(pp);
           //document.getElementById("mytotal").innerHTML = total;
           document.getElementById("mytotal").value = total;
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
                    @if(Auth::user())

                    <div class="col">
                        <div class="form-group{{ $errors->has('name') ? ' has-error' : ''}}">
                        <div class="field"><input name="name" type="text" value="{{$loggedUser->name}}" id="contact-name" /></div>
                        @if ($errors->has('name')) <span class="help-block">{{ $errors->first('name') }}</span> @endif
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : ''}}">
                        <div class="field"><input name="email" type="text" value="{{$loggedUser->email}}" id="contact-email" /></div>
                            @if ($errors->has('email')) <span class="help-block">{{ $errors->first('email') }}</span> @endif
                        </div>

                        <div class="form-group{{ $errors->has('phone') ? ' has-error' : ''}}">
                        <div class="field"><input name="phone" type="text" value="{{$loggedUser->mobile}}" id="contact-phone" /></div>
                            @if ($errors->has('phone')) <span class="help-block">{{ $errors->first('phone') }}</span> @endif
                        </div>

                        <div class="form-group{{ $errors->has('type') ? ' has-error' : ''}}">
                        <div class="field"><input name="type" type="text" id="type" value="{{$resultSet->roomtype}}" readonly /></div>
                            @if ($errors->has('type')) <span class="help-block">{{ $errors->first('type') }}</span> @endif
                        </div>


                    </div>

                    @else
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


                    </div>
                  @endif
                    <div class="col">

                        <div class="form-group{{ $errors->has('arrival') ? ' has-error' : ''}}">
                        <div class="field"><input name="arrival" type="text" id="arr-ival" value="{{$arrivalDate}}" readonly /></div>
                            @if ($errors->has('arrival')) <span class="help-block">{{ $errors->first('arrival') }}</span> @endif
                        </div>

                        <div class="form-group{{ $errors->has('departure') ? ' has-error' : ''}}">
                        <div class="field"><input name="departure" type="text" id="dep-arture" value="{{$departureDate}}" readonly /></div>
                            @if ($errors->has('departure')) <span class="help-block">{{ $errors->first('departure') }}</span> @endif
                        </div>


                        <div class="form-group{{ $errors->has('noofrooms') ? ' has-error' : ''}}">
                        <div class="field" ><select name="noofrooms" id="noofrooms">
                                <option value="0" selected="selected">Rooms</option>
                                @for($i=1 ; $i<=$resultSet->norooms ; $i++)
                                <option value="{{$i}}">{{$i}}</option>
                                @endfor

                            </select></div>
                            @if ($errors->has('noofrooms')) <span class="help-block">{{ $errors->first('noofrooms') }}</span> @endif
                        </div>

                        <div class="form-group{{ $errors->has('adult') ? ' has-error' : ''}}">
                        <div class="select">
                            <select name="adult" id="noofadult" class="infants">
                                <option value="0" selected="selected">Adults</option>
                                @for($i=1 ; $i<=$resultSet->noadults ; $i++)
                                <option value="{{$i}}">{{$i}}</option>
                                @endfor
                            </select>
                        </div>
                            @if ($errors->has('adult')) <span class="help-block">{{ $errors->first('adult') }}</span> @endif
                        </div>

                        <div class="form-group{{ $errors->has('children') ? ' has-error' : ''}}">
                        <div class="field"><select name="children" id="noofchildren" class="adults">
                                <option value="0" selected="selected">Children</option>
                                @for($i=1 ; $i<=$resultSet->nochildren ; $i++)
                                <option value="{{$i}}">{{$i}}</option>
                                @endfor
                            </select></div>
                            @if ($errors->has('children')) <span class="help-block">{{ $errors->first('children') }}</span> @endif
                        </div>
                    </div>
                    <div class="col">

                        <div class="form-group{{ $errors->has('message') ? ' has-error' : ''}}">
                        <div class="field"><textarea name="message" placeholder="Message" id="contact-message"></textarea></div>
                            @if ($errors->has('message')) <span class="help-block">{{ $errors->first('message') }}</span> @endif
                        </div>


                    </div>





                               <label for="mytotal" style="font-size:20px;">Total(Rs.)</label>
                               <input style="font-size:20px;  float:left;" readonly id="mytotal" name="mytotal"/>
                                <div class="form-group">
                                    <button type="button" class="btn btn-default" onclick="calctotalrate()"><span data-hover="Total">CALCULATE</span></button>
                                    <button type="submit" class="btn btn-default"><span data-hover="Payment">PROCEED</span></button>
                                </div>




                    <input type="hidden" name="_token" value="{!! csrf_token() !!}">







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
