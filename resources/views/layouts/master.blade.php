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

    @yield('maincontent')

    <div id="extras">
      <div class="centre">

        @yield('extracontent')

      </div>
    </div>

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
            <span>Copyright &copy; <script>var d = new Date(); document.write(d.getFullYear());</script> <strong>Base Hotel</strong></span><a href="index.html">Home</a><a href="sitemap.html">Sitemap</a><span><a href="http://themeforest.net/item/base-hotel-responsive-booking-gallery-template/10517095?ref=Klayemore" target="_blank">Template By KM</a></span><span></span>
          </div>
        </div>
        <!-- Footer Links | END -->
      </footer>
      <!-- Footer | END -->
    </div>

    <script src="/js/plugins.js"></script>
    <script src="/js/global.js"></script>
  </body>
  </html>
