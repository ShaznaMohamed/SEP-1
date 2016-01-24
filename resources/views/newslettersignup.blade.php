


<html>
<head>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">    
</head>
<div class="container">
<div class="row">
<div class="col-lg-6">
    <form class="form-vertical" role="form" method="post" action="{{route('newsletter')}}">
        
        <div class="form-group{{ $errors->has('first_name') ? ' has-error' : ''}}">
        <label for="first_name" class="control-label"><b>First Name:*</b></label>
        <input type="text" name="first_name" class="form-control" id="first_name" value="">
            
            @if ($errors->has('first_name'))
                <span class="help-block">{{ $errors->first('first_name') }}</span>
            @endif
        </div>
        
        <div class="form-group">
        <label for="last_name" class="control-label">Last Name:</label>
        <input type="text" name="last_name" class="form-control" id="last_name" value="">
        </div>
        
        <div class="form-group">
        <label for="address" class="control-label">Address:</label>
        <input type="text" name="address" class="form-control" id="address" value="">
        </div>
        
        <div class="form-group">
        <label for="city" class="control-label">City:</label>
        <input type="text" name="city" class="form-control" id="city" value="">
        </div>
        
        <div class="form-group">
        <label for="province" class="control-label">Province:</label>
        <input type="text" name="province" class="form-control" id="province" value="">
        </div>
        
        <div class="form-group">
        <label for="zip" class="control-label"><b>Zip:*</b></label>
        <input type="text" name="zip" class="form-control" id="zip" value="">
        </div>
        
        <div class="form-group">
        <label for="country" class="control-label"><b>Country:*</b></label>
        <input type="text" name="country" class="form-control" id="country" value="">
        </div>
        
        <div class="form-group{{ $errors->has('email') ? ' has-error' : ''}}">
        <label for="email" class="control-label"><b>Email Address:*</b></label>
        <input type="text" name="email" class="form-control" id="email" value="">
            
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
        </div>

        <div class="form-group">
        <button type="submit" class="btn btn-default">Sign Up</button>
         </div>

        <input type="hidden" name="_token" value="{{ Session::token() }}">
    
    </form>
    
    </div>

</div>
    </div>    
</html>