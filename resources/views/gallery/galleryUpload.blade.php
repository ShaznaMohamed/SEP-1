@extends('layouts.adminmaster')
@section('maincontent')
  <header>
    <div id="header">
      <div class="h1">
        <h1><span>Gallery Management</span>
        </div>
      </div>
    </header>
    <main >
<div class="container">
    @if(Session::has('success'))
          <div class="alert-box success">
          <h2>{!! Session::get('success') !!}</h2>
          </div>
    @endif
</br>
<h1> Refer to this image for uploading </h1>
    <center><img alt="" src="images/gallery/galpreview.png" /></center>

<table border="0">
<tr> <td><h4>Image 1</h4></td>
<td>
        <div class="row">
            <div class="col-xs-6 col-md-3">
                <a href="#" class="thumbnail">
                    <img alt="" src="images/gallery/gal1.png" width="500" height="300" />
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

        {!! Form::submit('Upload', array('class'=>'btn btn-sm btn-info upload')) !!}
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
                    <img alt="" src="images/gallery/gal2.png" width="500" height="300" />
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

<!-- Vish image 3 -->

<tr>    <td><h4>Image 3</h4></td>
<td>
        <div class="row">
            <div class="col-xs-6 col-md-3">
                <a href="#" class="thumbnail">
                    <img alt="" src="images/gallery/gal3.png" width="500" height="300"/>
                </a>
            </div>
        </div>

</td>

<td>
        <div class="control-group">
            <div class="controls">
{!! Form::open(array('url'=>'apply/upload3','method'=>'POST', 'files'=>true)) !!}

            <div id="success"> </div>
                {!! Form::file('image3') !!}

                    <p class="errors">{!!$errors->first('image3')!!}</p>

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


<!-- Vish Image 4 -->

<tr>    <td><h4>Image 4</h4></td>
<td>
        <div class="row">
            <div class="col-xs-6 col-md-3">
                <a href="#" class="thumbnail">
                    <img alt="" src="images/gallery/gal4.png" width="500" height="300" />
                </a>
            </div>
        </div>

</td>

<td>
        <div class="control-group">
            <div class="controls">
{!! Form::open(array('url'=>'apply/upload4','method'=>'POST', 'files'=>true)) !!}

            <div id="success"> </div>
                {!! Form::file('image4') !!}

                    <p class="errors">{!!$errors->first('image4')!!}</p>

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


<!-- Vish Image 5 -->

<tr>    <td><h4>Image 5</h4></td>
<td>
        <div class="row">
            <div class="col-xs-6 col-md-3">
                <a href="#" class="thumbnail">
                    <img alt="" src="images/gallery/gal5.png" width="500" height="300" />
                </a>
            </div>
        </div>

</td>

<td>
        <div class="control-group">
            <div class="controls">

{!! Form::open(array('url'=>'apply/upload5','method'=>'POST', 'files'=>true)) !!}

            <div id="success"> </div>
                {!! Form::file('image5') !!}

                    <p class="errors">{!!$errors->first('image5')!!}</p>

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


<!-- Vish Image 6 -->

<tr>    <td><h4>Image 6</h4></td>
<td>
        <div class="row">
            <div class="col-xs-6 col-md-3">
                <a href="#" class="thumbnail">
                    <img alt="" src="images/gallery/gal6.png" width="500" height="300" />
                </a>
            </div>
        </div>

</td>

<td>
        <div class="control-group">
            <div class="controls">

{!! Form::open(array('url'=>'apply/upload6','method'=>'POST', 'files'=>true)) !!}

            <div id="success"> </div>
                {!! Form::file('image6') !!}

                    <p class="errors">{!!$errors->first('image6')!!}</p>

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


<!-- Vish image 7 -->

<tr>    <td><h4>Image 7</h4></td>
<td>
        <div class="row">
            <div class="col-xs-6 col-md-3">
                <a href="#" class="thumbnail">
                    <img alt="" src="images/gallery/gal7.png" width="500" height="300" />
                </a>
            </div>
        </div>

</td>

<td>
        <div class="control-group">
            <div class="controls">

{!! Form::open(array('url'=>'apply/upload7','method'=>'POST', 'files'=>true)) !!}

            <div id="success"> </div>
                {!! Form::file('image7') !!}

                    <p class="errors">{!!$errors->first('image7')!!}</p>

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

<!-- Vish image 8 -->

<tr>    <td><h4>Image 8</h4></td>
<td>
        <div class="row">
            <div class="col-xs-6 col-md-3">
                <a href="#" class="thumbnail">
                    <img alt="" src="images/gallery/gal8.png" width="500" height="300"/>
                </a>
            </div>
        </div>

</td>

<td>
        <div class="control-group">
            <div class="controls">
{!! Form::open(array('url'=>'apply/upload8','method'=>'POST', 'files'=>true)) !!}

            <div id="success"> </div>
                {!! Form::file('image8') !!}

                    <p class="errors">{!!$errors->first('image8')!!}</p>

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

<!--</div> -->
<!--</div> -->

</tr></td>
</table>
</div>
</main>
@endsection
