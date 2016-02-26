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

										<section id="menu">
                    	<h3><i class="fa fa-cutlery"></i> Dining Menu</h3>
                    	<div class="menu">
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
                        </div>
                        <div class="menu">
                            <h4>
                            	Lunch <span>12.00pm &ndash; 3.30pm</span>
                            	<img alt="" src="/images/dining/food1.jpg" width="120" height="120" />
                            </h4>
                            <ul>
															@foreach($lunchdata as $lunchdata)
															<li>
																	<h5>{{ $lunchdata->type }}</h5>
																	<p>{{ $lunchdata->details }}</p>
																	<div class="price">
																		<div>{{ $lunchdata->price }}</div>
																	</div>
															</li>
															@endforeach                                
                            </ul>
                        </div>
                        <div class="menu">
                            <h4>
                            	Dinner <span>5.00pm &ndash; 10.00pm</span>
                            	<img alt="" src="/images/dining/food.jpg" width="120" height="120" />
                            </h4>
                            <ul>
                                <li>
																	<h5>Local Cusine<span class="tag" title="Spicy">S</span></h5>
																	<p>Rice and Curry - With Meat or Vegetarian.</p>
                                    <div class="price">
                                    	<div>$25</div>
                                    </div>
                                </li>
                                <li>
                                    <h5>Asian Meal <span class="tag" title="Spicy">S</span></h5>
                                    <p>Fried Rice/Nasi Goreng/Etc.</p>
                                    <div class="price">
                                    	<div>$27.5</div>
                                    </div>
                                </li>
                                <li class="featured">
                                    <h5>Western<span class="tag">Chef's Pick</span></h5>
                                    <p>Fish and Chips/Chicken and Chips/Meat with Veggie.</p>
                                    <div class="price">
                                    	<div>$29</div>
                                    </div>
                                </li>
                                <li>
                                    <h5>Special Meals</h5>
                                    <p>Customize Your Meal.</p>
                                    <div class="price">
                                    	<div>$28</div>
                                        <div><span>+ Potato</span> $30</div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <h3><i class="fa fa-glass"></i> Drinks Menu</h3>
                    	<div class="menu">
                            <h4>
                            	Non-Alcoholic
                            	<img alt="" src="/images/dining/drink1.jpg" width="120" height="120" />
                            </h4>
                            <ul>
                                <li>
                                    <h5>Soft Drinks</h5>
                                    <p>Fanta/Sprite/Coca cola/Fresh Fruit Jucie.</p>
                                    <div class="price">
                                    	<div>$10</div>
                                    </div>
                                </li>
                                <li>
                                    <h5>Milkshakes</h5>
                                    <p>Chocolate/Vanilla/Strawberry.</p>
                                    <div class="price">
                                    	<div>$10</div>
                                    </div>
                                </li>
                                <li>
                                    <h5>Bottled Spring Water</h5>
                                    <div class="price">
                                    	<div>$6</div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="menu">
                            <h4>
                            	Coffee <span>By Experienced Baristas</span>
                            	<img alt="" src="/images/dining/drink3.jpg" width="120" height="120" />
                            </h4>
                            <ul>
                                <li>
                                    <h5>Cappuccino</h5>
                                    <div class="price">
                                    	<div>$4.5</div>
                                    </div>
                                </li>
                                <li>
                                    <h5>Flat White</h5>
                                    <div class="price">
                                    	<div>$4.5</div>
                                    </div>
                                </li>
                                <li>
                                    <h5>Latte</h5>
                                    <div class="price">
                                    	<div>$4.5</div>
                                    </div>
                                </li>
                                <li>
                                    <h5>Macchiato</h5>
                                    <div class="price">
                                    	<div>$4</div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="menu">
                            <h4>
                            	Alcoholic <span>Local/Foreign</span>
                            	<img alt="" src="/images/dining/drink2.jpg" width="120" height="120" />
                            </h4>
                            <ul>
                                <li>
                                    <h5>Local</h5>
                                    <p>Arrack/Whiskey/Vodka/Etc.</p>
                                    <div class="price">
                                    	<div><span>Glass</span> $10</div>
                                        <div><span>Bottle</span> $59</div>
                                    </div>
                                </li>
                                <li>
                                    <h5>Whiskey - Red/Black Label</h5>
                                    <p>J/Walker.</p>
                                    <div class="price">
                                    	<div><span>Glass</span> $12</div>
                                        <div><span>Bottle</span>Starting From $65</div>
                                    </div>
                                </li>
                                <li>
                                    <h5>Wine</h5>
                                    <p>World Of Fine Wine.</p>
                                    <div class="price">
                                    	<div><span>Glass</span> $18</div>
                                        <div><span>Bottle</span>Starting From $96</div>
                                    </div>
                                </li>
                                <li>
                                    <h5>Vodka</h5>
                                    <p>Russian/Sweden/Australia.</p>
                                    <div class="price">
                                    	<div><span>Glass</span> $22</div>
                                        <div><span>Bottle</span>Starting From $115</div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </section>
                    <!-- Menu | END -->
                </div>
            </div>

        </div>
    </main>
@endsection
