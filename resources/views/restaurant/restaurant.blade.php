@extends('layouts.master')
@section('maincontent')

	<header>
    	<div id="header">
        	<div class="h1">
                <h1><span>Restaurant</span>
                <span class="tagline">A Gourmet Dining Experience</span></h1>
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
        	<div id="slideshow">
                <div class="slider">
                    <div><img alt="" src="/images/dining/banner.jpg" width="900" height="600" /></div>
                </div>
                <div class="nav">
                    <a class="prev"><i class="fa fa-chevron-left"></i></a>
                    <a class="next"><i class="fa fa-chevron-right"></i></a>
                </div>
            </div>
            <!-- Slideshow | END -->
        	<div id="center">
                <div id="content">
                    <h2><strong>Award-Winning</strong> Restaurant</h2>
                    <p>Our unique Third Dimension Food envisions a philosophy based on a threefold foundation of taste, presentation and health.The restaurants at Amalya Reach Hotel combine the best traditions of international fine dining, with a Sri Lankan touch, making the meals here a unique experience.</p>
                    <!-- Menu | START -->


										<a href=#breakfast class="button"><span data-hover="Breakfast">Breakfast</span></a>
										<a href=#lunch class="button"><span data-hover="Lunch">Lunch</span></a>
										<a href=#dinner class="button"><span data-hover="Dinner">Dinner</span></a>
										<a href=#nonalcoholic class="button"><span data-hover="Drinks(Non-alcoholic)">Drinks(Non-alcoholic)</span></a>
										<a href=#coffee class="button"><span data-hover="Coffee">Coffee</span></a>
										<a href=#alcoholic class="button"><span data-hover="Drinks(Alcoholic)">Drinks(Alcoholic)</span></a>

										<section id="menu">
                    	<h3><i class="fa fa-cutlery"></i> Dining Menu</h3>
                    	<div class="menu">
												<section id ="breakfast">
                            <h4>
                            	Breakfast <span>7.30am &ndash; 12.00pm</span>
                            	<img alt="" src="/images/dining/hamburger.jpg" width="120" height="120" />
                            </h4>
                            <ul>

                                @foreach($breakfastdata as $breakfastdata)
																<li>
                                    <h5>{{ $breakfastdata->type }}</h5>
                                    <p>{{ $breakfastdata->details }}</p>
                                    <div class="price">
                                    	<div>{{ $breakfastdata->price }}</div>
                                    </div>
                                </li>
												        @endforeach
                            </ul>
													</section>
                        </div>
                        <div class="menu">
													<section id ="lunch">
                            <h4>
                            	Lunch <span>12.00pm &ndash; 3.30pm</span>
                            	<img alt="" src="/images/dining/food1.jpg" width="120" height="120" />
                            </h4>
                            <ul>

															@foreach($luncdata as $luncdata)
															<li>
																	<h5>{{ $luncdata->type }}</h5>
																	<p>{{ $luncdata->details }}</p>
																	<div class="price">
																		<div>{{ $luncdata->price }}</div>
																	</div>
															</li>
															@endforeach

                            </ul>
													</section>
                        </div>
                        <div class="menu">
													<section id ="dinner">
                            <h4>
                            	Dinner <span>5.00pm &ndash; 10.00pm</span>
                            	<img alt="" src="/images/dining/food.jpg" width="120" height="120" />
                            </h4>
                            <ul>

															@foreach($dinnerdata as $dinnerdata)
															<li>
																	<h5>{{ $dinnerdata->type }}</h5>
																	<p>{{ $dinnerdata->details }}</p>
																	<div class="price">
																		<div>{{ $dinnerdata->price }}</div>
																	</div>
															</li>
															@endforeach

                            </ul>
													</section>
                        </div>
                        <h3><i class="fa fa-glass"></i> Drinks Menu</h3>
                    	<div class="menu">
												<section id ="nonalcoholic">
                            <h4>
                            	Non-Alcoholic<span>Refresh yourself.</span>
                            	<img alt="" src="/images/dining/drink1.jpg" width="120" height="120" />
                            </h4>
                            <ul>

															@foreach($nonalcoholicdata as $nonalcoholicdata)
															<li>
																	<h5>{{ $nonalcoholicdata->type }}</h5>
																	<p>{{ $nonalcoholicdata->details }}</p>
																	<div class="price">
																		<div>{{ $nonalcoholicdata->price }}</div>
																	</div>
															</li>
															@endforeach

                            </ul>
													</section>
                        </div>
												<div class="menu">
													<section id ="coffee">
	                            <h4>
	                            	Coffee<span>From finest baristas.</span>
	                            	<img alt="" src="/images/dining/drink3.jpg" width="120" height="120" />
	                            </h4>
	                            <ul>

																@foreach($coffeedata as $coffeedata)
																<li>
																		<h5>{{ $coffeedata->type }}</h5>
																		<p>{{ $coffeedata->details }}</p>
																		<div class="price">
																			<div>{{ $coffeedata->price }}</div>
																		</div>
																</li>
																@endforeach

	                            </ul>
														</section>
	                        </div>
                        <div class="menu">
													<section id ="alcoholic">
                            <h4>
                            	Alcoholic <span>Local/Foreign</span>
                            	<img alt="" src="/images/dining/drink2.jpg" width="120" height="120" />
                            </h4>
                            <ul>

															@foreach($alcoholicdata as $alcoholicdata)
															<li>
																	<h5>{{ $alcoholicdata->type }}</h5>
																	<p>{{ $alcoholicdata->details }}</p>
																	<div class="price">
																		<div>{{ $alcoholicdata->price }}</div>
																	</div>
															</li>
															@endforeach

                            </ul>
													</section>
                        </div>
                    </section>
                    <!-- Menu | END -->
                </div>
            </div>

        </div>
    </main>
@endsection
