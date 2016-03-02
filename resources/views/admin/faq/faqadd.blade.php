
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
        <p class="title"><strong>Add a new FAQ</strong></p>
        <form role="form" method="POST" action="{{ route('faqadd')}}">
          <div class="form-group{{ $errors->has('question') ? ' has-error' : '' }}">
            <div class="field"><textarea name="question" id="question" placeholder="Question" required></textarea></div>
            @if ($errors->has('question'))
              <span class="help-block">
                <strong>{{ $errors->first('question') }}</strong>
              </span>
            @endif
          </div>
          <div class="form-group{{ $errors->has('answer') ? ' has-error' : '' }}">
            <div class="field"><textarea name="answer" id="answer" placeholder="Answer" required></textarea></div>
            @if ($errors->has('answer'))
              <span class="help-block">
                <strong>{{ $errors->first('answer') }}</strong>
              </span>
            @endif
          </div>
    	     <button type="submit" class="button"><span data-hover="Add">Add</span></button>
						<input type="hidden" name="_token" value="{{ Session::token() }}">
        </form>
    </div>
</div>
</body>
</html>
