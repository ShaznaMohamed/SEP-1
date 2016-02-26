
<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" href="/css/global.css">
<link class="colour" rel="stylesheet" href="/css/colour-gold.css">
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/conclick="window.close()"ss/font-awesome.min.css">
<script src="system/js/plugins.js"></script>
<script src="system/js/global.js"></script>
<script src="preview/js/styler.js"></script>
</head>
<body>
<div id="pop" class="popform">
    <div class="container">
        <p class="title"><strong>Share your Experience</strong></p>
        <p>Your feedback means the world to us, it's how we improve our level of service. Feel free to share your experience if you've stayed with us before.</p>
        <form role="form" method="POST" action="{{ route('testimonialsform')}}">
            <input name="name" id="name" type="text" placeholder="Your Name" required/>
            <input name="email" id="name" type="text" placeholder="Email Address" required/>
            <input name="location" id="name" type="text" placeholder="Location (Town / Country)" required />
            <input name="title" id="name" type="text" placeholder="Testimonial Title" required />
            <textarea name="message" id="name" placeholder="Your Testimonial" required></textarea>
						<button type="submit" class="btn btn-default" name="vishbtn"><span data-hover="Submit">Submit</span></button>
						<input type="hidden" name="_token" value="{{ Session::token() }}">
        </form>
    </div>
</div>
</body>
</html>
