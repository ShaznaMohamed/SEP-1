
<html>
<head>

<?php
$get_email = Request::input('email');
?>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">


<!-- from about us -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Amalya Reach Holiday Resort | Wedding Banquet Halls Sri Lanka | Parties | Events</title>
<link rel="stylesheet" href="/css/global.css">
<link class="colour" rel="stylesheet" href="/css/colour-gold.css">
<link class="pattern" rel="stylesheet" href="/css/pattern-china.css">
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">

</head>
<body class="fullwidth">
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
                <h1><span>Neewsletter Signup</span>
                <span class="tagline">Subscribe to our newsletter today!</span></h1>
            </div>
        </div>
            </header>
    <!-- Header | END -->

<!-- formmmmmmm startsssssssssssssssssssssssss -->
<div class="container">
<div class="row">
<div class="col-lg-6">
    <form class="form-vertical" role="form" method="post" action="{{route('newsletter')}}">

        <div class="form-group{{ $errors->has('first_name') ? ' has-error' : ''}}">
        <label for="first_name" class="control-label"><b>First Name:*</b></label>
        <input type="text" name="first_name" class="form-control" id="first_name" value="">

            @if ($errors->has('first_name'))
                <span class="help-block">{{ $errors->first('first_name') }}</span>
            @endif
        </div>

        <div class="form-group">
        <label for="last_name" class="control-label">Last Name:</label>
        <input type="text" name="last_name" class="form-control" id="last_name" value="">
        </div>

        <div class="form-group">
        <label for="address" class="control-label">Address:</label>
        <input type="text" name="address" class="form-control" id="address" value="">
        </div>

        <div class="form-group">
        <label for="city" class="control-label">City:</label>
        <input type="text" name="city" class="form-control" id="city" value="">
        </div>

        <div class="form-group">
        <label for="province" class="control-label">Province:</label>
        <input type="text" name="province" class="form-control" id="province" value="">
        </div>

        <div class="form-group">
        <label for="zip" class="control-label"><b>Zip:*</b></label>
        <input type="text" name="zip" class="form-control" id="zip" value="">
        </div>

        <div class="form-group">
        <label for="country" class="control-label"><b>Country:*</b></label>
        <input type="text" name="country" class="form-control" id="country" value="">
        </div>

        <div class="form-group{{ $errors->has('email') ? ' has-error' : ''}}">
        <label for="email" class="control-label"><b>Email Address:*</b></label>
        <input type="text" name="email" class="form-control" id="email" value="<?php echo ($get_email); ?>">

             @if ($errors->has('email'))
                <span class="help-block">{{ $errors->first('email') }}</span>
             @endif
        </div>

        <div class="form-group{{ $errors->has('confirm_email') ? ' has-error' : ''}}">
        <label for="confirm_email" class="control-label"><b>Confirm Email Address:*</b></label>
        <input type="text" name="confirm_email" class="form-control" id="confirm_email" value="{{ Request::old('confirm_email') ?: '' }}">

             @if ($errors->has('confirm_email'))
                <span class="help-block">{{ $errors->first('confirm_email') }}</span>
             @endif
        </div>

        <div class="form-group">
        <button type="submit" class="btn btn-default">Sign Up</button>
         </div>

        <input type="hidden" name="_token" value="{{ Session::token() }}">

        <!-- vish get testing -->

    </form>

    </div>

</div>
    </div>    </div></body>
</html>
