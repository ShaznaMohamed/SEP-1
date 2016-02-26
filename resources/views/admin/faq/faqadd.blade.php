
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
            <textarea name="question" id="question" placeholder="Question" required></textarea>
            <textarea name="answer" id="answer" placeholder="Answer" required></textarea>
						<button type="submit" class="button"><span data-hover="Add">Add</span></button>
						<input type="hidden" name="_token" value="{{ Session::token() }}">
        </form>
    </div>
</div>
</body>
</html>
