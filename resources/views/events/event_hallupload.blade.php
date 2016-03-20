<html>
<head>
  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">


  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Amalya Reach Holiday Resort | Wedding Banquet Halls Sri Lanka | Parties | Events</title>
  <link rel="stylesheet" href="/css/global.css">
  <link class="colour" rel="stylesheet" href="/css/colour-gold.css">
  <link class="pattern" rel="stylesheet" href="/css/pattern-china.css">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
</head>



<div class="container">
  <!--<div class="text-content"> -->
  <!--<div class="span7 offset1"> -->

  @if(Session::has('success'))
    <div class="alert-box success">
      <h2>{!! Session::get('success') !!}</h2>
    </div>
  @endif


  <div class="secure"><h2>Hall Management</h2></div>


  <table border="0">
    <tr> <td><h4>Image 1</h4></td>
      <td>
        <div class="row">
          <div class="col-xs-6 col-md-3">
            <a href="#" class="thumbnail">
              <img alt="" src="/hallsDiningEvents/gal1.png" />
            </a>
          </div>
        </div>

      </td>

      <td>
        <div class="control-group">
          <div class="controls">

            {!! Form::open(array('url'=>'apply/upload1','method'=>'POST', 'files'=>true)) !!}

            <div id="success"> </div>
            {!! Form::file('image') !!}

            <p class="errors">{!!$errors->first('image')!!}</p>

            @if(Session::has('error'))
              <p class="errors">{!! Session::get('error') !!}</p>
            @endif
          </div>
        </div>

      </td>

      <td>

        {!! Form::submit('upload', array('class'=>'btn btn-sm btn-info upload')) !!}
        {!! Form::close() !!}

        <!-- preview -->
      </td>


      <!--</div> -->
      <!--</div> -->

    </tr>

    <!-- Vish Image 2 -->
    <tr>  <td><h4>Image 2</h4></td>
      <td>
        <div class="row">
          <div class="col-xs-6 col-md-3">
            <a href="#" class="thumbnail">
              <img alt="" src="/hallsDiningEvents/gal2.png" />
            </a>
          </div>
        </div>

      </td>

      <td>
        <div class="control-group">
          <div class="controls">
            {!! Form::open(array('url'=>'apply/upload2','method'=>'POST', 'files'=>true)) !!}

            <div id="success"> </div>
            {!! Form::file('image2') !!}

            <p class="errors">{!!$errors->first('image2')!!}</p>

            @if(Session::has('error'))
              <p class="errors">{!! Session::get('error') !!}</p>
            @endif
          </div>
        </div>

      </td>

      <td>

        {!! Form::submit('Upload', array('class'=>'btn btn-sm btn-info upload')) !!}
        {!! Form::close() !!}

        <!-- preview -->
      </td>


      <!--</div> -->
      <!--</div> -->

    </tr>


  </tr></td>







</table>
<center><img alt="" src="/hallsDiningEvents/gal1.png" /></center>

</div>
