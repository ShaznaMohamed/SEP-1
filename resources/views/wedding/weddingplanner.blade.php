@extends('layouts.master')
@section('maincontent')

    <!-- Header | Start -->
    <header>
        <div id="header">
            <div class="h1">
                <h1><span>Wedding Planner</span>
                    <span class="tagline">Plan your Wedding with Amalya</span></h1>
            </div>
        </div>
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
            <!-- List Items (Rooms) | START -->
            <section id="rooms" class="list grid">
                <div class="item">
                    <div class="container">
                        <div class="imgcontainer"><img alt="" src="/images/wedimages/planner8.jpg" width="380" height="380" /></div>
                        <div class="details">
                            <a href="{{url('plannerform')}}">
                                <h3 class="title">Sarah Jane<br />
                                    <span>For fantastic Celebration</span></h3>
                                <p>Weddings by Sara Jane specialises in creating exclusive-use weddings at some of the most beautiful castle and historical venues across the UK for clients both here and overseas. Each Sara Jane wedding creates a full guest experience, often to include a full weekend of activities and memorable moments for yourself and your guests. Sara splits her time between London and Edinburgh and enjoys relationships with the most beautiful, romantic venues all over Sri Lanka</p>
                                <div class="button"><span data-hover="Book Planner">Book Planner</span></div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="container">
                        <div class="imgcontainer"><img alt="" src="/images/wedimages/planner4.jpg" width="380" height="380" /></div>
                        <div class="details">
                            <a href="{{url('plannerform')}}">
                                <h3 class="title">Louise Perry<br />
                                    <span>For Gorgeous arrangments</span></h3>
                                <p>A boutique event management agency that expertly envision, inspire, manage exclusive and refined weddings. Thus our clients can, stress-free, indulge in the excitement of the preparations, and enjoy the day of their dreams. In addition, we offer specialised services for couples wishing to celebrate their event in Amalya.</p>
                                <div class="button"><span data-hover="Book Planner">Book Planner</span></div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="container">
                        <div class="imgcontainer"><img alt="" src="/images/wedimages/planner9.jpg" width="380" height="380" /></div>
                        <div class="details">
                            <a href="{{url('plannerform')}}">
                                <h3 class="title">Kelly Chandler<br />
                                    <span>For Fabulous decorations</span></h3>
                                <p>The Bespoke Wedding Company specialises in the full planning and design of weddings for a discerning and astute client base, quite often undertaking logistically complex events or planning their weddings from overseas. Recommended by many unique venues such as Highclere Castle, Syon Park & Spencer House, we have become synonymous, over more than a decade in business, with elegant weddings and expert planning</p>
                                <div class="button"><span data-hover="Book Planner">Book Planner</span></div>
                            </a>
                        </div>
                    </div>
                </div>
            </section>
            <!-- List Items (Rooms) | END -->
            <div id="content">
                <h2><strong>Plan your Wedding</strong> with our Experts.</h2>
                <p>Beautifully styled, professionally planned and flawlessly executed weddings reflecting you and your personality create spectacular memories of one of life’s most intimate moments.  But if you don’t have a spare 250+ hours to devote to the planning, then the chances of sourcing the finest suppliers, and co-ordinating them to ensure that the day unfolds seamlessly is small.Simply Elegant offers a very personal planning service, meticulous attention to detail and a down to earth friendly approach.  We will work with you to design an exquisite wedding, within budget but without the stress, allowing you to relax and cherish every moment.</p>
                <p>Amalya's specialises in unique, individual and meticulously planned weddings and parties. With over ten years experience working in the wedding industry, we love nothing more than helping you turn your ideas into the most memorable day for you, your family and friends and helping you create a wedding that say’s something about you as a couple. We don’t offer packages because we don’t believe that you are a package. Every bride we work with has different requirements, so our planning services are totally bespoke to suit your needs after our initial, no obligation consultation. By working this way you can hire a wedding planner at any point in the planning process. It’s all about exceeding your expectations and creating the wedding of your dreams.</p>

                <!--Start of retrieved planner details showings-->
                <?php $tabledata = DB::table('planner')->where('name', 'sarah')->get(); ?>
                <?php $tabledataa = DB::table('planner')->where('name', 'louise')->get(); ?>
                <?php $tabledataaa = DB::table('planner')->where('name', 'kelly')->get(); ?>
                <table>
                    <?php
                    foreach($tabledata as $row)
                    ?>
                    <?php
                    foreach($tabledataa as $roww)
                    ?>
                    <?php
                    foreach($tabledataaa as $rowww)
                    ?>
                    <tr>
                        <th>Days</th>
                        <th>Sarah Jane</th>
                        <th>Louise Perry</th>
                        <th>Kelly Chandler</th>
                    </tr>
                    <tr>
                        <td><strong>Monday</strong></td>
                        <td><?php echo $row->monday; ?></td>
                        <td><?php echo $roww->monday; ?></td>
                        <td><?php echo $rowww->monday; ?></td>
                    </tr>
                    <tr>
                        <td><strong>Tuesday</strong></td>
                        <td><?php echo $row->tuesday; ?></td>
                        <td><?php echo $roww->tuesday; ?></td>
                        <td><?php echo $rowww->tuesday; ?></td>
                    </tr>
                    <tr>
                        <td><strong>Wednesday</strong></td>
                        <td><?php echo $row->wednesday; ?></td>
                        <td><?php echo $roww->wednesday; ?></td>
                        <td><?php echo $rowww->wednesday; ?></td>
                    </tr>
                    <tr>
                        <td><strong>Thursday</strong></td>
                        <td><?php echo $row->thursday; ?></td>
                        <td><?php echo $roww->thursday; ?></td>
                        <td><?php echo $rowww->thursday; ?></td>
                    </tr>
                    <tr>
                        <td><strong>Friday</strong></td>
                        <td><?php echo $row->friday; ?></td>
                        <td><?php echo $roww->friday; ?></td>
                        <td><?php echo $rowww->friday; ?></td>
                    </tr>
                    <tr>
                        <td><strong>Saturday</strong></td>
                        <td><?php echo $row->saturday; ?></td>
                        <td><?php echo $roww->saturday; ?></td>
                        <td><?php echo $rowww->saturday; ?></td>
                    </tr>
                </table>
                <a href="{{url('wedding')}}" class="button"><span data-hover="View Halls">View Halls</span></a>
            </div>
            {{--<!-- Video | START -->--}}
            {{--<div id="video">--}}
                {{--<div class="embed-container"><iframe src="/images/wedimages/planner10.jpg" width="1200" height="675" allowfullscreen></iframe></div>--}}
            {{--</div>--}}
            {{--<!-- Video | END -->--}}
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
            <!-- List Items (Specials Slider) | END -->

@endsection
