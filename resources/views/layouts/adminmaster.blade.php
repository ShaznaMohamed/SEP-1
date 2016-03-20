<!DOCTYPE HTML>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Amalya Reach Holiday Resort | Wedding Banquet Halls Sri Lanka | Parties | Events</title>
  <link rel="stylesheet" href="/css/global.css">
  <link class="colour" rel="stylesheet" href="/css/colour-blue.css">
  <link class="pattern" rel="stylesheet" href="/css/pattern-horns.css">
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css"></head>
<body class="fullwidth">
  <!-- Navigation | START -->
  <div id="nav">
    <div class="centre">
      <a href="dashboard" class="logo"><img alt="" src="/images/logoadmin.png" /></a>
      <nav>
        <ul>
          <li>{{ Html::link('http://localhost/phpmyadmin', 'phpMyAdmin') }}</li>
          <li>{{ Html::link('home', 'Back to Website') }}</li>
        </ul>
        <a id="pull"><i class="fa fa-bars"></i></a>
      </nav>
        <a href="dashboard" class="book"><span data-hover="Dashboard">Dashboard</span> <i class="fa fa-check-circle"></i></a>
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
 </div>

    <!-- Footer | START -->
    <footer>
    	<div id="footerlinks">
        <div class="centre">
          <span>Copyright &copy; <script>var d = new Date(); document.write(d.getFullYear());</script> <strong>Amalya Reach Holiday Resort</strong></span><a href="index.html">Home</a><a href="sitemap.html">Sitemap</a><a href="faq">FAQ</a><span>
        </div>
      </div>
        <!-- Footer Links | END -->
    </footer>
    <!-- Footer | END -->
    <script src="/js/plugins.js"></script>
    <script src="/js/global.js"></script>
  </body>
  </html>
