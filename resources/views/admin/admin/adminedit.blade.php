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
      <p class="title"><strong>Edit Administrator</strong></p>
      <form role="form" method="POST" action="{{ url('adminedit') }}">
        {!! csrf_field() !!}
        <div class="col"></div>
        <div class="col">

          <input type="text" class="form-control" name="id" readonly="readOnly" required value="{{$admin->id}}">

          <div class="form-group{{ $errors->has('first') ? ' has-error' : '' }}">
            <div class="field"><input type="text" class="form-control" name="first" required placeholder="First name" value="{{$admin->first}}"></div>
            @if ($errors->has('first'))
              <span class="help-block">
                <strong>{{ $errors->first('name') }}</strong>
              </span>
            @endif
          </div>

          <div class="form-group{{ $errors->has('last') ? ' has-error' : '' }}">
            <div class="field"><input type="text" class="form-control" name="last" required placeholder="Last name" value="{{$admin->last}}"></div>
            @if ($errors->has('name'))
              <span class="help-block">
                <strong>{{ $errors->first('last') }}</strong>
              </span>
            @endif
          </div>

          <div class="form-group{{ $errors->has('address1') ? ' has-error' : '' }}">
            <div class="field"><input type="text" class="form-control" name="address1" required placeholder="Address Line 1" value="{{$admin->address1}}"></div>
          </div>

          <div class="form-group{{ $errors->has('address2') ? ' has-error' : '' }}">
            <div class="field"><input type="text" class="form-control" name="address2" required placeholder="Address Line 2" value="{{$admin->address2}}"></div>
          </div>

          <div class="form-group{{ $errors->has('address3') ? ' has-error' : '' }}">
            <div class="field"><input type="text" class="form-control" name="address3" placeholder="Address Line 3" value="{{$admin->address3}}"></div>
          </div>

          <div class="form-group{{ $errors->has('mobile') ? ' has-error' : '' }}">
            <div class="field"><input type="text" class="form-control" name="mobile" required placeholder="Mobile number" value="{{$admin->mobile}}"></div>
            @if ($errors->has('mobile'))
              <span class="help-block">
                <strong>{{ $errors->first('mobile') }}</strong>
              </span>
            @endif
          </div>
          <div class="form-group">
            <div class="col"></div>
            <button type="submit" class="button">Save</button>
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
