<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Amalya Reach Holiday Resort | Wedding Banquet Halls Sri Lanka | Parties | Events</title>
    <link rel="stylesheet" href="/css/global.css">
    <link class="colour" rel="stylesheet" href="/css/colour-gold.css">
    <link class="pattern" rel="stylesheet" href="/css/pattern-china.css">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
</head>
<body class="fullwidth">
<!-- Navigation | START -->
<div id="nav">
    <div class="centre">
        <a href="index.html" class="logo"><img alt="" src="/images/logo.png" /></a>
        <nav>
            <ul>
                <li class="mobile"><a href="contact.php" class="navbook">Book Online</a></li>
                <li>{{ Html::link('/', 'Home') }}</li>
                <li>{{ Html::link('accommodation', 'Accommodation') }}
                    <ul>
                        <li>{{ Html::link('accommodation', 'Accommodation List 1') }}</li>
                        <li>{{ Html::link('accommodation2', 'Accommodation List 2') }}</li>
                        <li>{{ Html::link('room', 'Room Detail 1') }}</li>
                        <li>{{ Html::link('room2', 'Room Detail 2') }}</li>

                    </ul>
                </li>
                <li>{{ Html::link('gallery', 'Gallery') }}</li>
                <li>{{ Html::link('specials', 'Special Offers') }}</li>
                <li>{{ Html::link('location', 'Location') }}</li>
                <li>{{ Html::link('about', 'About Us') }}</li>
                <li>{{ Html::link('about', 'More') }}
                    <ul>
                        <li>{{ Html::link('guest-book', 'Guest Book') }}</li>
                        <li><a href="blog.html">Our Blog <i class="fa fa-chevron-right"></i></a>
                            <ul>
                                <li>{{ Html::link('blog', 'Blog Overview') }}</li>
                                <li>{{ Html::link('blog-post', 'Blog Post') }}</li>
                            </ul>
                        </li>
                        <li>{{ Html::link('faqs', 'FAQs') }}</li>
                        <li><a class="promopopup">Promo Popup</a></li>
                    </ul>
                </li>
            </ul>
            <a id="pull"><i class="fa fa-bars"></i></a>
        </nav>
        <a href="contact.php" class="book"><span data-hover="Book Online">Book Online</span> <i class="fa fa-check-circle"></i></a>
        <div class="shadow"></div>
    </div>
</div>
<!-- Navigation | END -->
<div id="container">
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
            <section id="rooms" class="list grid">
                <div class="item">
                    <div class="container">
                        <div class="imgcontainer"><img alt="" src="/wedimages/planner8.jpg" width="380" height="380" /></div>
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
                        <div class="imgcontainer"><img alt="" src="/wedimages/planner4.jpg" width="380" height="380" /></div>
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
                        <div class="imgcontainer"><img alt="" src="/wedimages/planner9.jpg" width="380" height="380" /></div>
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
            <!-- Video | START -->
            <div id="video">
                <div class="embed-container"><iframe src="/wedimages/planner10.jpg" width="1200" height="675" allowfullscreen></iframe></div>
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
                            <img alt="" src="/wedimages/wed3.jpg" width="1200" height="400" />
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
            <!-- List Items (Specials Slider) | END -->
            <!-- Recent Blog Posts | START -->
            <div class="recent">
                <a href="blog-post.html">
                    <div class="date">
                        <span class="month">Dec</span>
                        <span class="day">12</span>
                    </div>
                    <p class="title">Our Latest Hotel Awards</p>
                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque...</p>
                </a>
                <a href="blog-post.html">
                    <div class="date">
                        <span class="month">Nov</span>
                        <span class="day">27</span>
                    </div>
                    <p class="title">Free Wi-Fi in all rooms</p>
                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque...</p>
                </a>
            </div>
            <!-- Recent Blog Posts | END -->
            <!-- Footer Testimonial | START -->
            <div class="footertestimonial">
                <i class="fa fa-quote-left"></i>
                <p class="title">Comfortable & spacious apartment</p>
                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Phasellus hendrerit. Pellentesque aliquet nibh nec urna. In nisi neque, aliquet vel, dapibus id, mattis vel, nisi. Sed pretium, ligula sollicitudin laoreet viverra, tortor libero sodales leo, eget blandit nunc tortor eu nibh. Lorem ipsum dolor sit amet...</p>
                <div class="author">&ndash; <strong>John Smith</strong> <span>(Sydney, Australia)</span></div>
                <a href="guest-book.html" class="button"><span data-hover="Read Guest Book">Read Guest Book</span></a>
            </div>
            <!-- Footer Testimonial | END -->
        </div>
    </div>
    <!-- Sitewide Extras | END -->
    <!-- Footer | START -->
    <footer>
        <div id="footer">
            <div class="centre">
                <!-- Subscribe / Social | START -->
                <div class="news">
                    <div class="title"><span>News & Offers</span></div>
                    <div class="subscribe">
                        <form>
                            <input name="email" type="text" placeholder="Your email address" />
                            <button><span data-hover="Sign Up">Sign Up</span></button>
                        </form>
                    </div>
                    <div class="social">
                        <a href="#" title="Facebook"><i class="fa fa-facebook"></i></a>
                        <a href="#" title="Twitter"><i class="fa fa-twitter"></i></a>
                        <a href="#" title="Google+"><i class="fa fa-google-plus"></i></a>
                        <a href="#" title="Pinterest"><i class="fa fa-pinterest-p"></i></a>
                    </div>
                </div>
                <!-- Subscribe / Social | END -->
                <!-- Contact Details | START -->
                <div class="contact">
                    <p><strong class="phone">+61 8 3456 7890</strong><br />
                        <a href="mailto:stay@basehotel.com">stay@basehotel.com</a><br /><br />
                        <i class="fa fa-map-marker"></i> 101 Luxury Street<br />
                        Perth, WA Australia 6000<br />
                        <a href="https://www.google.com/maps/dir/Current+Location/-31.957482,115.856868" target="_blank"><strong>Get Directions</strong></a></p>
                </div>
                <!-- Contact Details | END -->
                <div class="dark"></div>
            </div>
        </div>
        <!-- Footer Links | START -->
        <div id="footerlinks">
            <div class="centre">
                <span>Copyright &copy; <script>var d = new Date(); document.write(d.getFullYear());</script> <strong>Amalya Reach Holiday Resort</strong></span><a href="index.html">Home</a><a href="sitemap.html">Sitemap</a></span>
            </div>
        </div>
        <!-- Footer Links | END -->
    </footer>
    <!-- Footer | END -->
</div>
<!-- Promo Popup | START -->
<div id="pop">
    <img alt="" src="http://dummyimage.com/400x150" width="400" height="150" />
    <div class="container">
        <p class="title"><strong>Our latest special offers,</strong><br />
            straight to your inbox</p>
        <p>Stay up to date with the latest specials from Base Hotel. Subscribe and save on your next stay.</p>
        <form>
            <input name="email" type="text" placeholder="Your email address" />
            <button><span data-hover="Subscribe">Subscribe</span></button>
        </form>
        <p class="close closepop"><a>Continue browsing site</a></p>
        <i class="fa fa-close closepop"></i>
    </div>
</div>
<!-- Promo Popup | END -->
<script src="/js/plugins.js"></script>
<script src="/js/global.js"></script>
</body>
</html>