
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

          <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
            <div class="field"><input type="text" class="form-control" name="name" required placeholder="Name"></div>
            @if ($errors->has('name'))
              <span class="help-block">
                <strong>{{ $errors->first('name') }}</strong>
              </span>
            @endif
          </div>

          <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
            <div class="field"><input type="email" class="form-control" name="email" required placeholder="Email address"></div>
            @if ($errors->has('email'))
              <span class="help-block">
                <strong>{{ $errors->first('email') }}</strong>
              </span>
            @endif
          </div>

          <div class="form-group{{ $errors->has('location') ? ' has-error' : '' }}">
            <div class="field"><input type="text" class="form-control" name="location" required placeholder="Location"></div>
            @if ($errors->has('location'))
              <span class="help-block">
                <strong>{{ $errors->first('location') }}</strong>
              </span>
            @endif
          </div>

          <div class="form-group{{ $errors->has('service') ? ' has-error' : '' }}">
            <div class="field"><input type="text" class="form-control" name="service" required placeholder="Service used"></div>
            @if ($errors->has('service'))
              <span class="help-block">
                <strong>{{ $errors->first('service') }}</strong>
              </span>
            @endif
          </div>

          <div class="form-group{{ $errors->has('title') ? ' has-error' : '' }}">
            <div class="field"><input type="text" class="form-control" name="title" required placeholder="Testimonial title"></div>
            @if ($errors->has('title'))
              <span class="help-block">
                <strong>{{ $errors->first('title') }}</strong>
              </span>
            @endif
          </div>

          <div class="form-group{{ $errors->has('message') ? ' has-error' : '' }}">
            <div class="field">            <textarea name="message" id="name" placeholder="Your Testimonial" required></textarea></div>
            @if ($errors->has('message'))
              <span class="help-block">
                <strong>{{ $errors->first('message') }}</strong>
              </span>
            @endif
          </div>
						<button type="submit" class="btn btn-default" name="vishbtn"><span data-hover="Submit">Submit</span></button>
						<input type="hidden" name="_token" value="{{ Session::token() }}">
        </form>
    </div>
</div>
</body>
</html>
