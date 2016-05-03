<!DOCTYPE html>
<html lang="en">
<head>

<style>
  body {
    font-family: 'HelveticaNeue-Light';
  }
  .msg {
    margin: 15px 500px;
    margin-bottom: 50px;
    padding: 10px;
    width: 400px;
    background-color: #efefef;
  }
  #username, #text {
    margin: 5px 0px;
    
  }
  #post {
    padding: 0.5em 1em;
    background-color: slategrey;
    border: none;
    color: #FFF;
    margin-left: 70px;
    margin-bottom: 15px;
  }

    .iputs{
        margin-left: 600px;
    }
    
    
    
    .input {
    border: 5px solid white; 
    -webkit-box-shadow: 
      inset 0 0 8px  rgba(0,0,0,0.1),
            0 0 16px rgba(0,0,0,0.1); 
    -moz-box-shadow: 
      inset 0 0 8px  rgba(0,0,0,0.1),
            0 0 16px rgba(0,0,0,0.1); 
    box-shadow: 
      inset 0 0 8px  rgba(0,0,0,0.1),
            0 0 16px rgba(0,0,0,0.1); 
    padding: 15px;
    background: rgba(255,255,255,0.5);
    margin: 0 0 10px 0;
}
    
    
    
dateEl {
    color: dimgray;
    display: block;
    font-size: 12px;
    text-align-last: right;
    margin-top: 2px;
    
}
    
unameEl {
    font-size: 30px;
    border-bottom: 10px;
    border-bottom-style: solid;
    border-bottom-width: thin;
    border-bottom-color: darkmagenta;
    color: darkslateblue;
    display: block;
    
}
    
msgEl {
    display: block;
    font-size: 20px;
    margin-top: 8px;
    
}    
</style>

  <script src='https://cdn.firebase.com/js/client/2.4.0/firebase.js'></script>


  <meta charset="UTF-8">
  <title>Firebase Chat</title>
  <link rel="icon" href="data:;base64,iVBORw0KGgo=">
  <?php $luserName = $loggeduser->name; ?>
  
</head>





<body>
    
@extends('layouts.master')
@section('maincontent')
  
  <div id="results"></div>
   
  <div class="iputs">
  <input id="username" type="text" placeholder="Name"  hidden="hidden"><br/>
  <input id="text" type="text" placeholder="Your Message" class="input"><br/>
  <button id="post">Post</button><br/>
      
  </div>
  <script>
  <!--well be adding code here -->
  var myFirebase = new Firebase('https://chatamalya.firebaseio.com/');
   var usernameInput = document.querySelector('#username');
   var textInput = document.querySelector('#text');
   var postButton = document.querySelector('#post');
   var temp = '<?php echo $luserName; ?>' ;
      
   postButton.addEventListener("click", function() {
     var msgUser = usernameInput.value;
     var msgText = textInput.value;
     var msgDate = Date();
       
       
       if(msgText == ""){
           alert('Message Cant be empty');
           
       }
       else{
     myFirebase.push({username:temp, text:msgText, date:msgDate});
     textInput.value = "";
       }
   });


   myFirebase.on('child_added', function(snapshot) {
        var msg = snapshot.val();

        var msgUsernameElement = document.createElement("unameEl");
        msgUsernameElement.textContent = msg.username;

        var msgTextElement = document.createElement("msgEl");
        msgTextElement.textContent = msg.text;
       
        var msgDateElement = document.createElement("dateEl");
        msgDateElement.textContent = msg.date;

        var msgElement = document.createElement("div");
        msgElement.appendChild(msgUsernameElement);
        msgElement.appendChild(msgTextElement);
        msgElement.appendChild(msgDateElement);
        msgElement.className = "msg";
        document.getElementById("results").appendChild(msgElement);
      });
  </script>
    
@endsection

</body>
</html>
