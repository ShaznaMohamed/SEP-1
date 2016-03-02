<html>
<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="/css/global.css">
  <link class="colour" rel="stylesheet" href="/css/colour-blue.css">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/conclick="window.close()"ss/font-awesome.min.css">
  <script src="system/js/plugins.js"></script>
  <script src="system/js/global.js"></script>
  <script src="preview/js/styler.js"></script>
</head>
<body style="font-family: 'Open Sans';">
  <div id="pop" class="popform">
    <div class="container">
      <p class="title"><strong>Edit Email</strong></p>
      <form role="form" method="POST" action="{{ url('userEmailChange') }}">
        {!! csrf_field() !!}
        <div class="col"></div>

        <div class="field"><input type="text" class="form-control" name="id"  readonly="readonly" value="{{ Auth::user()->id }}"></div>

        <div class="form-group{{ $errors->has('current_email') ? ' has-error' : '' }}">
          <div class="field"><input type="email" class="form-control" name="current_email" required placeholder="Current email"></div>
          @if ($errors->has('current_email'))
            <span class="help-block">
              <strong>{{ $errors->first('current_email') }}</strong>
            </span>
          @endif
        </div>

        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
          <div class="field"><input type="email" class="form-control" name="email" required placeholder="New email"></div>
          @if ($errors->has('email'))
            <span class="help-block">
              <strong>{{ $errors->first('email') }}</strong>
            </span>
          @endif
        </div>

        <div class="form-group{{ $errors->has('email_confirmation') ? ' has-error' : '' }}">
          <div class="field"><input type="email" class="form-control" name="email_confirmation" required placeholder="Confirm new email"></div>
          @if ($errors->has('email_confirmation'))
            <span class="help-block">
              <strong>{{ $errors->first('email_confirmation') }}</strong>
            </span>
          @endif
        </div>
      </br>
        <div class="form-group">
          <div class="col"></div>
          <button type="submit" class="button">Change</button>
        </br></br>
          <button class="button" id="refresh"><span data-hover="Go back">Go Back</span></button>
        </div>
      </div>
        </br>
          <script type="text/javascript">
          document.getElementById("refresh").onclick = function () {
            window.parent.location.reload();
          };
          </script>
        </div>
        <div class="col"></div>
      </form>
    </div>
  </div>
</body>
</html>
