<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Amalya Reach Holiday Resort | Wedding Banquet Halls Sri Lanka | Parties | Events</title>
<link rel="stylesheet" href="/css/global.css">
<link class="colour" rel="stylesheet" href="/css/colour-gold.css">
<link class="pattern" rel="stylesheet" href="/css/pattern-china.css">
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
</head>


<?php
$specialData = DB::table('packages')->get();


$reply_data = DB::table('comments')
                    ->join('users', 'users.id', '=', 'comments.user_id')
                    ->select('users.name', 'comments.body', 'comments.post_id', 'comments.created_at','comments.parent_id')
                    ->get();


$comment_data = DB::table('comments')
                    ->join('users', 'users.id', '=', 'comments.user_id')
                    ->select('users.name', 'comments.body', 'comments.post_id', 'comments.created_at', 'comments.user_id', 'comments.id')
                    ->where('comments.parent_id', '=', null)
                    ->get();


?>



<a href="form-comments.php?post=blog-post.html" class="button commentpop"><span data-hover="Leave a Comment">Leave a Comment</span></a>
                <h2><i class="fa fa-comments-o"></i> 4 Comments</h2>
@foreach ($comment_data as $rs)

                 <ol id="comments">
                    <li class="comment parent">
                        <div class="quote">
                            <p>{{$rs->body}}</p>
                        </div>
                        <a href="form-comments.php?post=blog-post.html" class="comment-reply-link commentpop">Reply to {{$rs->name}}</a><div class="comment-author">{{$rs->name}} <span>on {{$rs->created_at}}</span></div>
                        
                        @foreach($reply_data as $res)
                        @if($rs->id === $res->parent_id)
                        <ol class="children">
                            <li class="comment">
                                <div class="quote">
                                    <p>{{$res->body}}</p>
                                </div>
                                <a href="form-comments.php?post=blog-post.html" class="comment-reply-link commentpop">Reply to Terry</a><div class="comment-author">{{$res->name}} <span>on {{$res->created_at}}</span></div>
                            </li>
                        </ol>
                        @endif
                        @endforeach
                        
                    </li>
                  
                </ol>
@endforeach