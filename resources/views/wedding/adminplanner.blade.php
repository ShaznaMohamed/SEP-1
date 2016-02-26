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
<!--retrieving data from weddingservices table -->
<div class="centre">
    <h2>Wedding Planner Details</h2>

    <?php $tabledata = DB::table('planner')->get(); ?>
    <main>
        <table>
            <thead>
            <th>ID </th>
            <th>Name</th>
            <th>Email Address</th>
            <th>Phone</th>
            <th>Monday</th>
            <th>Tuesday</th>
            <th>Wednesday</th>
            <th>Thursday</th>
            <th>Friday</th>
            <th>Saturday</th>
            </thead>
            <tbody>
            <?php
            foreach($tabledata as $row)
            {
            ?>
            <tr>
                <td><?php echo $row->id; ?></td>
                <td><?php echo $row->name; ?></td>
                <td><?php echo $row->email; ?></td>
                <td><?php echo $row->phone; ?></td>
                <td><?php echo $row->monday; ?></td>
                <td><?php echo $row->tuesday; ?></td>
                <td><?php echo $row->wednesday; ?></td>
                <td><?php echo $row->thursday; ?></td>
                <td><?php echo $row->friday; ?></td>
                <td><?php echo $row->saturday; ?></td>

            </tr>
            <?php
            }
            ?>
            </tbody>

        </table>
    </main>
</div>
<!--end of retrieved data showings-->
<!--formstarts-->
<div class="centre">

    <h3>Update Hall Facilities</h3>
    <main>
        <table>
            <form action="{{route('adminplanner')}}" role="form" method="post" novalidate>
                <tr>
                    <td>
                        <label for="start_time" class="control-label">Select Planner</label>
                        <div class="form-group{{ $errors->has('name') ? ' has-error' : ''}}">
                            <div class="field"> <select name="name" id="contact-rooms" class="infants">
                                    <option value="sarah" selected="selected">Sarah Jane</option>
                                    <option value="louise" >Louise Perry</option>
                                    <option value="kelly" >Kelly Chandler</option>
                                </select></div>
                            @if ($errors->has('name')) <span class="help-block">{{ $errors->first('name') }}</span> @endif
                        </div>
                    </td>
                    <td>
                        <label for="start_time" class="control-label">Email Address</label>
                        <div class="form-group{{ $errors->has('email') ? ' has-error' : ''}}">
                            <div class="field"><input name="email" type="text" placeholder="" id="contact-charge" /></div>
                            @if ($errors->has('email')) <span class="help-block">{{ $errors->first('email') }}</span> @endif
                        </div>
                    </td>
                    <td>
                        <label for="start_time" class="control-label">Phone Number</label>
                        <div class="form-group{{ $errors->has('phone') ? ' has-error' : ''}}">
                            <div class="field"><input name="phone" type="text" placeholder="" id="contact-charge" /></div>
                            @if ($errors->has('phone')) <span class="help-block">{{ $errors->first('phone') }}</span> @endif
                        </div>
                    </td>

                    <td>
                        <input type="hidden" name="_token" value="{!! csrf_token() !!}">
                        <div class="form-group">
                            <h4><input type="submit" name="sub" value="Update" class="btn btn-default" onclick="showmessage()" >
                                <span data-hover="Add"></span></h4>
                        </div>
                    </td>
                </tr>

                <tr>
                    <td>
                        <label for="start_time" class="control-label">Allocate Times for.......</label><br><br>
                        <label for="start_time" class="control-label">Monday</label>
                        <div class="form-group{{ $errors->has('monday') ? ' has-error' : ''}}">
                            <div class="field"><input name="monday" type="text" placeholder="" id="contact-name" ></div>
                            @if ($errors->has('monday')) <span class="help-block">{{ $errors->first('monday') }}</span> @endif
                        </div>
                    </td>
                    <td><br><br>
                        <label for="start_time" class="control-label">Tuesday</label>
                        <div class="form-group{{ $errors->has('tuesday') ? ' has-error' : ''}}">
                            <div class="field"><input name="tuesday" type="text" placeholder="" id="contact-charge" /></div>
                            @if ($errors->has('tuesday')) <span class="help-block">{{ $errors->first('tuesday') }}</span> @endif
                        </div>
                    </td>
                    <td><br><br>
                        <label for="start_time" class="control-label">Wednesday</label>
                        <div class="form-group{{ $errors->has('wednesday') ? ' has-error' : ''}}">
                            <div class="field"><input name="wednesday" type="text" placeholder="" id="contact-charge" /></div>
                            @if ($errors->has('wednesday')) <span class="help-block">{{ $errors->first('wednesday') }}</span> @endif
                        </div>
                    </td>
                </tr>

                <tr>
                    <td>
                        <label for="start_time" class="control-label">Thursday</label>
                        <div class="form-group{{ $errors->has('thursday') ? ' has-error' : ''}}">
                            <div class="field"><input name="thursday" type="text" placeholder="" id="contact-name" ></div>
                            @if ($errors->has('thursday')) <span class="help-block">{{ $errors->first('thursday') }}</span> @endif
                        </div>
                    </td>
                    <td>
                        <label for="start_time" class="control-label">Friday</label>
                        <div class="form-group{{ $errors->has('friday') ? ' has-error' : ''}}">
                            <div class="field"><input name="friday" type="text" placeholder="" id="contact-charge" /></div>
                            @if ($errors->has('friday')) <span class="help-block">{{ $errors->first('friday') }}</span> @endif
                        </div>
                    </td>
                    <td>
                        <label for="start_time" class="control-label">Saturday</label>
                        <div class="form-group{{ $errors->has('saturday') ? ' has-error' : ''}}">
                            <div class="field"><input name="saturday" type="text" placeholder="" id="contact-charge" /></div>
                            @if ($errors->has('saturday')) <span class="help-block">{{ $errors->first('saturday') }}</span> @endif
                        </div>
                    </td>

                </tr>

            </form>
        </table>
    </main>
</div>
<!--form ends-->


</body>