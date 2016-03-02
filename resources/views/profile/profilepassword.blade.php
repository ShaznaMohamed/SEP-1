
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
      <p class="title"><strong>Edit Password</strong></p>
      <form role="form" method="POST" action="{{ url('userPasswordChange') }}">
        {!! csrf_field() !!}
        <div class="col"></div>

        <div class="field"><input type="text" class="form-control" name="id"  readonly="readonly" value="{{ Auth::user()->id }}"></div>

        <div class="form-group{{ $errors->has('current_password') ? ' has-error' : '' }}">
          <div class="field"><input type="password" class="form-control" name="current_password" required placeholder="Current password"></div>
          @if ($errors->has('current_password'))
            <span class="help-block">
              <strong>{{ $errors->first('current_password') }}</strong>
            </span>
          @endif
        </div>

        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
          <div class="field"><input type="password" class="form-control" name="password" required placeholder="New password"></div>
          @if ($errors->has('password'))
            <span class="help-block">
              <strong>{{ $errors->first('password') }}</strong>
            </span>
          @endif
        </div>

        <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
          <div class="field"><input type="password" class="form-control" name="password_confirmation" required placeholder="Confirm new password"></div>
          @if ($errors->has('password_confirmation'))
            <span class="help-block">
              <strong>{{ $errors->first('password_confirmation') }}</strong>
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
