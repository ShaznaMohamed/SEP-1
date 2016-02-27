
@extends('panelViews::mainTemplate')
@section('page-wrapper')

@if (!empty($message))
    <div class="alert-box success">
        <h2>{{ $message }}</h2>
    </div>
@endif

<div class="row">
    <div class="col-xs-4" >

{!!
 Form::model($admin, array( $admin->id))
!!}

{!! Form::label('first_name', \Lang::get('panel::fields.FirstName')) !!}
{!! Form::text('first_name', $admin->first_name, array('class' => 'form-control')) !!}
<br />
{!! Form::label('last_name', \Lang::get('panel::fields.LastName')) !!}
{!! Form::text('last_name', $admin->last_name, array('class' => 'form-control')) !!}
<br />
<!-- email -->
{!! Form::label('email', 'Email') !!}
{!! Form::email('email', $admin->email, array('class' => 'form-control')) !!}
<br />
{!! Form::submit(\Lang::get('panel::fields.updateProfile'), array('class' => 'btn btn-primary')) !!}

{!! Form::close() !!}

@endif

  </div>
</div>

@stop