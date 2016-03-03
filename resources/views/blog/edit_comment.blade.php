<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Edit Comment</title>
<link rel="stylesheet" href="/css/global.css">
<link class="colour" rel="stylesheet" href="/css/colour-gold.css">
<link class="pattern" rel="stylesheet" href="/css/pattern-china.css">
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    
    
<!-- session logics -->
<?php
        
        

        Session::put('user_id', $loggeduser->id);
        Session::put('post_id', '1');
        Session::put('parent_id', '1');


        // retrieving post edit comment data
        $post_comment_data = DB::table('comments')                    
                    ->select('id','body')
                    ->where('id' , '=' , $tempcommentid)
                    ->first();
?>
</head>


<body>
<div class="container">
    
    @if(Session::has('success'))
          <div class="alert-box success">
          <h2>{!! Session::get('success') !!}</h2>
          </div>
    @endif

    <form action="{{route('editcom')}}" method="post">
     
        
        
        
        <h2><i class="fa fa-comments-o"></i> Edit Comment</h2>
                <ol id="comments">
                    <li class="comment parent">
                        <div class="quote">
                            <textarea class="quote" placeholder="{{$post_comment_data->body}}" name="body" id="body"></textarea>
                        </div>
                         @if ($errors->has('body'))
                            <span class="help-block">{{ $errors->first('body') }}</span>
                        @endif
                        
            <button type="submit">Comment</button>
                        
            <input type="hidden" name="_token" value="{{ Session::token() }}">
    </form>
</div>    
</body>