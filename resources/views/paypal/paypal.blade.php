@extends('layouts.master')
@section('maincontent')
    <!-- Header | Start -->
	<header>
    	<div id="header">
        	<div class="h1">
                <h1><span>Payments</span>
                <span class="tagline"></span></h1>
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

            <form name="paypal" id="paypal" class="form-vertical" role="form" method="post" action="https://www.sandbox.paypal.com/cgi-bin/webscr">

                <input type="hidden" name="cmd" value="_cart">

                <input type="hidden" name="upload" value="{{$quantity}}">

                <input type="hidden" name="business" value="chamalsilva321-facilitator@gmail.com">

								<input type="hidden" name="return" value="http://www.douknow.asia/paycomplete">
								<input type="hidden" name="cancel_return" value="http://www.douknow.asia/paypal">

                <input type="hidden" name="item_name_1" value="{{$type}}">

                <input type="hidden" name="amount_1" value="{{$amount}}">
                <!-- <input type="hidden" name="shipping_1" value="1.75"> -->

                <!-- <input type="hidden" name="item_name_2" value="Item Name 2">

                <input type="hidden" name="amount_2" value="2.00">
                <input type="hidden" name="shipping_2" value="2.50"> -->

								<div class="centre">
					        <h3>Payment Summary</h3>
					            <div id="contact">
					                <table>
					                    <tr>
																<th>Item</th>
																<th>Quantity</th>
					                      <th>Amount(Rs.)</th>
					                    </tr>

					                    <tr>
																<td>{{$type}}</td>
																<td>{{$quantity}}</td>
																<td>{{$amount}}</td>
					                    </tr>

					                </table>
													<button type="submit" class="btn btn-default"><span data-hover="Payment">Continue</span></button>
					            </div>
					        </div>

            </form>
				</div>

  </main>


@endsection
