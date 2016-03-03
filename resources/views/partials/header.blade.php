<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" href="/css/global.css">
  <link class="colour" rel="stylesheet" href="/css/colour-gold.css">
  <link class="pattern" rel="stylesheet" href="/css/pattern-china.css">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">

</head>



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
