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
<body>
<div id="pop" class="popform">
    <div class="container">
        <p class="title"><strong>Send new message</strong></p>
        <form role="form" method="POST" action="{{ route('admincontactusreply')}}">
          <div class="field"><input type="text" class="form-control" name="name" required placeholder="Name"></div>
          <div class="field"><input type="email" class="form-control" name="email" required placeholder="E-mail"></div>
          <div class="field"><input type="text" class="form-control" name="subject" required placeholder="Subject"></div>
          <div class="field"><textarea name="message" class="form-control" required placeholder="Message" id="message"></textarea></div>
          <button type="submit" class="button"><span data-hover="Send">Send</span></button>
					<input type="hidden" name="_token" value="{{ Session::token() }}">
        </form>
    </div>
</div>
</body>
</html>
