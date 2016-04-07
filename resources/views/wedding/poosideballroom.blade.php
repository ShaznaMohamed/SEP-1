@extends('layouts.master')
@section('maincontent')

    <header>
        <div id="header">
            <div class="h1">
                <h1><span>Pool side Ball room</span>
                    <span class="tagline">Romantic Atmosphere</span></h1>
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
            <!-- List Items (Rooms) | START -->
            <section id="rooms" class="list">
                <div class="item">
                    <div class="imgcontainer"><img alt="" src=images/wedimages/poolside.jpg  width="1200" height="400" /></div>
                    <div class="details">
                        <a href="{{url('weddingplanner')}}">
                            <h3 class="title">Pool Side Ball Room<br />
                                <span>Stay with 150-300 guests</span></h3><br>
                            <p>Feel be loved in your big day at the Pool side with a romantic illusion.</p>
                            <div class="button"><span data-hover="Plan Wedding">Plan Wedding</span></div>
                        </a>
                    </div>
                </div>
            </section>
            <!-- List Items (Rooms) | END -->
            <div id="content">
                <h2>Express your love with <strong>Amalya </strong></h2>
                <p>Make your dream come true. Begin your new episode with us. It's the time to make the rest be the best. Feel the magic a little closer to your heart at Pool Side Ball Room.
                    Enjoy the magical miracle of your big day celebrations. Let Amalya bid the love of you and your spouce for a last long enrichment. Gather with all your invitees at Pool Side. We are always ready to provide irreplacable backdrops of paradise.</p>
                <!--Start of retrieved services showings-->
                <?php $tabledata = DB::table('weddingservices')->where('halltype', 'poolside')->get(); ?>
                <table>
                    <?php
                    foreach($tabledata as $row)
                    ?>
                    <tr>
                        <th>Services</th>
                        <th>Charges</th>

                    </tr>
                    <tr>
                        <td><strong>Advance Payment</strong></td>
                        <td><?php echo $row->advancepayment; ?></td>

                    </tr>
                    <tr>
                        <td><strong>Minimum Pax</strong></td>
                        <td><?php echo $row->minimumpax; ?></td>

                    </tr>
                    <tr>
                        <td><strong>Additional Hour</strong></td>
                        <td><?php echo $row->additionalhour; ?></td>

                    </tr>
                    <tr>
                        <td><strong>Hall price per plate</strong></td>
                        <td><?php echo $row->fullpayment; ?></td>

                    </tr>
                    <tr>
                        <td><strong>Corkage</strong></td>
                        <td><?php echo $row->corkage; ?></td>

                    </tr>
                    <tr>
                        <td><strong>Beer Local</strong></td>
                        <td><?php echo $row->beerlocal; ?></td>

                    </tr>
                    <tr>
                        <td><strong>Iced Coffee</strong></td>
                        <td><?php echo $row->icedcoffee; ?></td>

                    </tr>
                    <tr>
                        <td><strong>Cutlery</strong></td>
                        <td><?php echo $row->cutlery; ?></td>

                    </tr>
                </table>
                <!--end of retrieved sevices showing-->

                <a href="{{url('weddingform')}}" class="button"><span data-hover="Request for Quotation">Request for Quotation</span></a>


            </div>
            <!-- Video | START -->
            <div id="video">
                <div class="imgcontainer"><img alt="" src="images/wedimages/wedd.jpg" width="1150" height="575" > </div>
            </div>
            <!-- Video | END -->
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
                            <img alt="" src="images/wedimages/img.jpg" width="1200" height="400" />
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
                <div class="nav"></div>
            </div>
        </div>
    </div>
            <!-- List Items (Specials Slider) | END -->

@endsection