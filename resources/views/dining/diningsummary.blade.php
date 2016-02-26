<!DOCTYPE HTML>
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
<body>
  <h2>Update Table</h2>
  <tr>
  <tr>

<?php $tabledata = DB::table('dining')->get();?>


    <table class="table table-hover" id="table">
        <thead>
          <tr>
            <th>Id</th>
            <th>Title</th>
            <th>fName</th>
            <th>LName</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Arrival Date</th>
            <th>Time</th>
            <th>Adults</th>
            <th>Children</th>
            <th>Notes</th>
            <th>Type</th>

          </tr>

        </thead>
        <tbody>
        {{--<h2>{{$tabledata->id}}</h2><br />--}}
        {{--<h2>{{$tabledata->title}}<br /></h2>--}}
        {{--<h2>{{$tabledata->first_name}}<br /></h2>--}}
        {{--<h2>{{$tabledata->last_name}}<br /></h2>--}}
        {{--<h2>{{$tabledata->email}}<br /></h2>--}}
        {{--<h2>{{$tabledata->phone}}<br /></h2>--}}
        {{--<h2>{{$tabledata->arrival_date}}<br /></h2>--}}
        {{--<h2>{{$tabledata->arrival_time}}<br /></h2>--}}
        {{--<h2>{{$tabledata->arrival_adults}}<br /></h2>--}}
        {{--<h2>{{$tabledata->arrival_children}}<br /></h2>--}}
        {{--<h2>{{$tabledata->notes}}<br /></h2>--}}
        {{--<h2>{{$tabledata->type}}<br /></h2>--}}


        <?php
        foreach($tabledata as $row)
        {
        ?>
        <tr>
        <td value="td"><?php echo $row->id; ?></td>
        <td><?php echo $row->title; ?></td>
        <td><?php echo $row->first_name; ?></td>
        <td><?php echo $row->last_name; ?></td>
        <td><?php echo $row->email; ?></td>
        <td><?php echo $row->phone; ?></td>
        <td><?php echo $row->arrival_date; ?></td>
        <td><?php echo $row->arrival_time; ?></td>
        <td><?php echo $row->arrival_adults; ?></td>
        <td><?php echo $row->arrival_children; ?></td>
        <td><?php echo $row->notes; ?></td>
        <td><?php echo $row->type; ?></td>
        <td>
          <!-- <form action="" method="">
            <button type="submit" onclick="<?php DB::table('Dining')->where('Id', '=', 44)->delete();?>">Delete Entry</button>
          </form> -->


          <form action="{{route('testv')}}" method="post">
            <input type="text"  hidden="hidden" placeholder="<?php $row->id ?>" value="<?php echo $row->id ?>" name="pid"/> </td><td>
            <input type="submit" value="Delete Entry"/>
            <input type="hidden" name="_token" value="{{ Session::token() }}">
          </form>
        </td>

        </tr>
        <?php
        }
        ?>
        </tbody>

        <!-- <?php //DB::table('Dining')->where('Id', '=', 45)->delete();?> -->

    </table>
</body>
</html>
