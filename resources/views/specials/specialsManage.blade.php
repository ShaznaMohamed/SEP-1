@extends('layouts.adminmaster')
@section('maincontent')
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
  <header>
    <div id="header">
      <div class="h1">
        <h1><span>Gallery Management</span>
        </div>
      </div>
    </header>
    <main >

<div class="container">
<!--<div class="text-content"> -->
<!--<div class="span7 offset1"> -->

    @if(Session::has('success'))
          <div class="alert-box success">
          <h2>{!! Session::get('success') !!}</h2>
          </div>
    @endif


        <h2>Specials Management</h2>


        <div class="row">
            <div class="col-xs-6 col-md-3">
                <a href="#" class="thumbnail">
                    <img alt="" src="/images/gallery/specgal.png" />
                </a>
            </div>
        </div>



        <div class="control-group">
            <div class="controls">

 {!! Form::open(array('url'=>'apply/spec1','method'=>'POST', 'files'=>true)) !!}

            <div id="success"> </div>
                {!! Form::file('specimage') !!}

                    <p class="errors">{!!$errors->first('specimage')!!}</p>

	@if(Session::has('error'))
	                <p class="errors">{!! Session::get('error') !!}</p>
	@endif
            </div>
        </div>


          {!! Form::submit('Upload Specials Image', array('class'=>'btn btn-sm btn-info upload')) !!}
        {!! Form::close() !!}


    <!-- form for other details -->


<div class="row">
<div class="col-lg-6">
    <form class="form-vertical" role="form" method="post" action="apply/spec2">

        <div class="form-group{{ $errors->has('package_name') ? ' has-error' : ''}}">
        <label for="package_name" class="control-label"><b>Package Name:*</b></label>
        <input type="text" name="package_name" class="form-control" id="package_name" value="">

            @if ($errors->has('package_name'))
                <span class="help-block">{{ $errors->first('package_name') }}</span>
            @endif
        </div>

        <!--<div class="form-group">-->
        <!--<label for="package_type" class="control-label">Package Type:</label> -->
        <!--<input type="text" name="package_type" class="form-control" id="package_type" value=""> -->
        <!--</div>-->

              <div class="form-group{{ $errors->has('package_type') ? ' has-error' : ''}}">
              <label for="package_type" class="control-label">Package Type:</label>
              <select id="package_type" name="package_type" class="form-control">

                      <option value="1">Family Funcation Package 1 Night</option>
                      <option value="2">Premium 1</option>
                      <option value="3">Premium 2</option>
                      <option value="3">Premium 3</option>
                      <option value="3">Premium 4</option>
              </select>

              @if ($errors->has('package_type'))
                  <span class="help-block">{{ $errors->first('package_type') }}</span>
              @endif
              </div>

        <!--
        <div class="form-group">
        <label for="price" class="control-label">Amount per night:</label>
        <input type="text" name="price" class="form-control" id="price" value="">
      </div> -->

        <div class="form-group{{ $errors->has('descrip') ? ' has-error' : ''}}">
        <label for="descrip" class="control-label">Description:</label>
        <!--<input type="text" name="city" class="form-control" id="city" value=""> -->
        <textarea name="descrip" rows="5" id="descrip" cols="40" class="form-control"> </textarea>
        @if ($errors->has('descrip'))
            <span class="help-block">{{ $errors->first('descrip') }}</span>
        @endif
        </div>

        <div class="form-group{{ $errors->has('start_time') ? ' has-error' : ''}}">
        <label for="start_time" class="control-label">Starting Date:</label>
        <input type="date" name="start_time" class="form-control" id="start_time" value="">
        @if ($errors->has('start_time'))
            <span class="help-block">{{ $errors->first('start_time') }}</span>
        @endif
        </div>

        <div class="form-group{{ $errors->has('end_time') ? ' has-error' : ''}}">
        <label for="end_time" class="control-label"><b>End Date:*</b></label>
        <input type="date" name="end_time" class="form-control" id="end_time" value="">
        @if ($errors->has('end_time'))
            <span class="help-block">{{ $errors->first('end_time') }}</span>
        @endif
        </div>


        <!--
        <div class="form-group{{ $errors->has('email') ? ' has-error' : ''}}">
        <label for="email" class="control-label"><b>Email Address:*</b></label>
        <input type="text" name="email" class="form-control" id="email" value="<//?php echo ($get_email); ?>">

             @if ($errors->has('email'))
                <span class="help-block">{{ $errors->first('email') }}</span>
             @endif
        </div>

        <div class="form-group{{ $errors->has('confirm_email') ? ' has-error' : ''}}">
        <label for="confirm_email" class="control-label"><b>Confirm Email Address:*</b></label>
        <input type="text" name="confirm_email" class="form-control" id="confirm_email" value="{{ Request::old('confirm_email') ?: '' }}">

             @if ($errors->has('confirm_email'))
                <span class="help-block">{{ $errors->first('confirm_email') }}</span>
             @endif
        </div> -->

        <div class="form-group">
        <button type="submit" class="button">Update Package</button>
         </div>

        <input type="hidden" name="_token" value="{{ Session::token() }}">

        <!-- vish get testing -->

    </form>
    <!-- Image uploaddd -->





    </div></div></div>@endsection
