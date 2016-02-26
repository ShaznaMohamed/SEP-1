<html xmlns="http://www.w3.org/1999/html" xmlns="http://www.w3.org/1999/html"
      xmlns:padding="http://www.w3.org/1999/xhtml">
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

    <script type="text/javascript">
        function showmessage()
        {
           confirm("succesfully updated");
        }
    </script>
</head>

<body>


<!--retrieving data from room table -->
<div class="centre">
    <table>
        <tr>
            <td>

                <h3>Room Prices</h3>

                <?php $tabledata = DB::table('room')->get(); ?>
                <main>
                    <table>
                        <thead>
                        <th>Room Type</th>
                        <th>Price</th>

                        </thead>
                        <tbody>
                        <?php
                        foreach($tabledata as $row)
                        {
                        ?>
                        <tr>
                            <td><?php echo $row->roomtype; ?></td>
                            <td><?php echo $row->price; ?></td>

                        </tr>
                        <?php
                        }
                        ?>
                        </tbody>

                    </table>
                </main>
</div>

</td>
<!--end of retrieved data showings-->
<!--formstarts-->
<td>
    <div class="centre">

        <h3>Update Room Features</h3>
        <main>
            <table>
                <form action="{{route('adminroom')}}" role="form" method="post" novalidate>
                    <tr>
                        <td>
                            <label for="start_time" class="control-label">Select Room Type</label>
                            <div class="form-group{{ $errors->has('roomtype') ? ' has-error' : ''}}">
                                <div class="field"> <select name="roomtype" id="contact-rooms" class="infants">
                                        <option value="royal" selected="selected">Royal Room</option>
                                        <option value="deluxe" >Deluxe</option>
                                        <option value="premier" >Premier Suite</option>
                                        <option value="junior" >Junior Suite</option>
                                    </select></div>
                                @if ($errors->has('roomtype')) <span class="help-block">{{ $errors->first('roomtype') }}</span> @endif
                            </div>
                        </td>
                        <td>

                            <label for="start_time" class="control-label">Price</label>
                            <div class="form-group{{ $errors->has('price') ? ' has-error' : ''}}">
                                <div class="field"><input name="price" type="text" placeholder="" id="contact-charge" /></div>
                                @if ($errors->has('price')) <span class="help-block">{{ $errors->first('price') }}</span> @endif
                            </div>
                        </td>
                        <td>

                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="start_time" class="control-label">Air Conditioned</label>
                            <div class="form-group{{ $errors->has('airconditioned') ? ' has-error' : ''}}">
                                <div class="field">{!! Form::checkbox('airconditioned', 'added') !!}</div>
                                @if ($errors->has('airconditioned')) <span class="help-block">{{ $errors->first('airconditioned') }}</span> @endif
                            </div>
                        </td>
                        <td>
                            <label for="start_time" class="control-label">Cable TV</label>
                            <div class="form-group{{ $errors->has('cabletv') ? ' has-error' : ''}}">
                                <div class="field">{!! Form::checkbox('cabletv', 'added') !!}</div>
                                @if ($errors->has('cabletv')) <span class="help-block">{{ $errors->first('cabletv') }}</span> @endif
                            </div>
                        </td>
                        <td>
                            <label for="start_time" class="control-label">Telephone</label>
                            <div class="form-group{{ $errors->has('telephone') ? ' has-error' : ''}}">
                                <div class="field">{!! Form::checkbox('telephone', 'added') !!}</div>
                                @if ($errors->has('telephone')) <span class="help-block">{{ $errors->first('telephone') }}</span> @endif
                            </div>
                        </td>
                    </tr>

                    <td>
                        <label for="start_time" class="control-label">Dining Table</label>
                        <div class="form-group{{ $errors->has('diningtable') ? ' has-error' : ''}}">
                            <div class="field">{!! Form::checkbox('diningtable', 'added') !!}</div>
                            @if ($errors->has('diningtable')) <span class="help-block">{{ $errors->first('diningtable') }}</span> @endif
                        </div>
                    </td>
                    <td>
                        <label for="start_time" class="control-label">Wifi</label>
                        <div class="form-group{{ $errors->has('wifi') ? ' has-error' : ''}}">
                            <div class="field">{!! Form::checkbox('wifi', 'added') !!}</div>
                            @if ($errors->has('wifi')) <span class="help-block">{{ $errors->first('wifi') }}</span> @endif
                        </div>
                    </td>
                    <td>
                        <input type="hidden" name="_token" value="{!! csrf_token() !!}">
                        <div class="form-group">
                            <h4><input type="submit" name="sub" value="Update" class="btn btn-default" onclick="showmessage()"/>
                                <span data-hover="Add"></span></h4>
                        </div>
                    </td>
                    </tr>
                </form>
            </table>
        </main>
    </div>
</td>
</tr>
</table>
</body>