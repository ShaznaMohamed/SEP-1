
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
      <p class="title"><strong>Edit</strong></p>
      <form role="form" method="POST" action="{{ url('adminuseredit') }}">
        {!! csrf_field() !!}
        <div class="col"></div>
        <div class="col">
          <div class="field"><input type="text" class="form-control" name="id" value="{{ $user->id }}"></div>
          <div class="field"><input type="text" class="form-control" name="name" value="{{ $user->name }}" required "></div>
          <div class="field"><input type="text" class="form-control" name="email" value="{{ $user->email }}" required "></div>
          <div class="field"><input type="text" class="form-control" name="address1" value="{{ $user->address1 }}" required "></div>
          <div class="field"><input type="text" class="form-control" name="address2" value="{{ $user->address2 }}" required "></div>
          <div class="field"><input type="text" class="form-control" name="address3" value="{{ $user->address3 }}" required "></div>
          <div class="field"><input type="text" class="form-control" name="mobile" value="{{ $user->mobile }}" required "></div>
          <div class="form-group">
            <div class="col"></div>
            <button type="submit" class="button">Save</button>
          </div>
        </br>
          <button class="button" id="refresh"><span data-hover="Go back">Go Back</span></button>
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
