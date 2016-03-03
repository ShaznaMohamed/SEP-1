
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
      <form role="form" method="POST" action="{{ url('menuupdatelunch') }}">
        {!! csrf_field() !!}
        <div class="col"></div>
        <div class="col">
          <div class="field"><input type="text" class="form-control" name="type" value="{{ $user->type }}" required="true"></div>
          <div class="field"><input type="text" class="form-control" name="details" value="{{ $user->details }}" required="true"></div>
          <div class="field"><input type="text" class="form-control" name="price" value="{{ $user->price }}" required="true"></div>
          <div class="field"><input type="text" hidden="hidden" class="form-control" name="id" value="{{ $user->id }}" required="true"></div>
          <div class="form-group">
            <div class="col"></div>
            <button type="submit" class="button">Save</button>
          </div>
        </br>
        </div>
        <div class="col"></div>
      </form>
    </div>
  </div>
</body>
</html>
