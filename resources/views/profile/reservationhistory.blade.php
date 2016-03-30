<!DOCTYPE HTML>
<html>
<head>


  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
  <link rel="stylesheet" href="/css/global.css">
  <link class="colour" rel="stylesheet" href="/css/colour-gold.css">
  <link class="pattern" rel="stylesheet" href="/css/pattern-china.css">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
</head>
<body>
  <header>
    <div id="header">
      <div class="h1">
        <h1><span>Reservation History</span><h1>
        </div>
      </div>
    </header>
    <main>
    	<div class="centre">
        <h3>Room Reservation</h3>
            <div id="content">
                <table>
                    <tr>
                      <th>ID</th>
                      <th>Name</th>
                      <th>Rooms</th>
                      <th>Date</th>
                    </tr>
                    @foreach($rooms as $room)
                    <tr>
                        <td>{{ $room->id }}</td>
                        <td>{{ $room->name }}</td>
                        <td>{{ $room->noofrooms }}</td>
                        <td>{{ $room->arrival }}</td>
                    </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </main>

</body>
</html>
