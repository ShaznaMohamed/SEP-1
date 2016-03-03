<html>
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
<meta name="csrf-token" content="{{ csrf_token() }}" />
</head>



<body>
  <div class="container">
      <h2>Register Form </h2>

      <div class="row col-lg-5">
      <h2> Get Request </h2>
      <button type="button" class="btn btn-warning" id="getRequest">get Request</button>
      </div>

      <div class="row col-lg-5">
          <h2> Register Form </h2>
          <form method="get" id="register" action="#">
              <label for="firstname"></label>
              <input type="text" id="firstname" class="form-control">

              <label for="lastname"></label>
              <input type="text" id="lastname" class="form-control">

              <input type="submit" value="Register" class="btn btn-primary">
              <input type="hidden" name="_token" value="{{ csrf_token() }}">
          </form>

          <div id="postRequestData">

          </div>
      </div>

  </div>

  <script type="text/javascript">

  $.ajaxSetup({
  	headers: {
  		'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
  	        }
  });



    $(document).ready(function(){
      $('#getRequest').click(function(){
        $.get('getRequest', function(data){
          $('#getRequestData').append(data);
          console.log(data);
        });
      });


      $('#register').submit(function(){
          var fname = $('#firstname').val();
          var lname = $('#lastname').val();

          // $.post('register', {firstname:fname, lastname:lname}, function(data){
          //   console.log(data);
          //   $('postRequestData').html(data);
          // });

          var dataString = "firstname=" + fname + "&lastname=" + lname;
          $.ajax({
            type : "POST",
            url : "register"
            data : dataString,

            success: function(data){
              console.log(data);
              $('#postRequestData').html(data);
            }
          });
      });



    });

  </script>
</body>


</html>
