<head>

<link rel="stylesheet" href="/css/reports.css">
<link rel="stylesheet" href="/css/jquery-ui.css">
<script type="text/javascript" src="/js/jquery-latest.js"></script>
<script type="text/javascript" src="/js/jquery.tablesorter.js"></script>
<script type="text/javascript" src="/js/jquery-ui.js"></script>


<?php

    $reserves = DB::table('roomreservation')->get();
    $wdreserves = DB::table('wedreservation')->get();

    //initializing Total income for null
    $rTotal = 0;
    $wTotal = 0;

    function select(){
            echo "The select function is called.";
    }

?>

<script>
                function myFunction() {

                    // Getting values from inputs to variables
                    var from = document.getElementById('txtFromDate').value;
                    var to = document.getElementById('txtToDate').value;

                    //Quering

                    <?php
                        if(isset($_GET['txtFromDate']))
                        {
                        $tFrom = $_GET['txtFromDate'];
                        echo $tFrom;
                        }
                        $from = date($tFrom);
                        $to = date('2016-06-10');



                        $reservations = DB::table('roomreservation')->where([
                                ['arrival','>=', $from],
                                ['arrival','<=', $to]
                                ])->get();

                    ?>

                    document.getElementById("query").innerHTML = "
                    @foreach($reserves as $rs)
                    $rs->name
                    @endforeach

                    ";

                }
</script>

</head>


<body>
 <div id="wrapper">
  <h1>Room Reservation Report</h1>
  <div style="margin-left:30px">

      <form method="get">
                From:
                    <input type="text" id="txtFromDate" name="txtFromDate">
                To:
                    <input type="text" id="txtToDate" name="txtToDate">
                            <input type="button" id="sbt" value="Generate Report" onclick="myFunction()">
                            <input type="button" onclick="printData();" value="Print Table"/>
      </form>



  </div>

  <div id="query">
  <table id="keywords" cellspacing="0" cellpadding="0">
    <thead>
      <tr>
        <th><span>Reservation ID</span></th>
        <th><span>Name</span></th>
        <th><span>Arrival</span></th>
        <th><span>Departure</span></th>
        <th><span>Payment(Rs.)</span></th>
      </tr>
    </thead>

    <tbody>
    @foreach ($reserves as $rs)
      <tr>
        <td class="lalign">{{$rs->id}}</td>
        <td>{{$rs->name}}</td>
        <td>{{$rs->arrival}}</td>
        <td>{{$rs->departure}}</td>
        <td>{{$rs->price}}</td>
        <?php $rTotal = $rTotal + $rs->price ?>
      </tr>
    @endforeach




    </tbody>
  </table>
  </div>
     <br>
     <div style="margin-left:40px; font-size:20px">
     <b>Total</b>
     <b>{{$rTotal}}</b>
     </div>


     <br>
  <h1>Wedding Reservation Report</h1>
  <div style="margin-left:30px">
  <input type="button" onclick="WprintData();" value="Print Table" class="btn btn-info"/>
  </div>


  <table id="key" cellspacing="0" cellpadding="0">
    <thead>
      <tr>
        <th><span>Reservation ID</span></th>
        <th><span>Name</span></th>
        <th><span>Arrival</span></th>
        <th><span>Departure</span></th>
        <th><span>Payment(Rs.)</span></th>
      </tr>
    </thead>

    <tbody>
    @foreach ($wdreserves as $rs)
      <tr>
        <td class="lalign">{{$rs->id}}</td>
        <td>{{$rs->name}}</td>
        <td>{{$rs->arrival}}</td>
        <td>{{$rs->departure}}</td>
        <td>{{$rs->Amount}}</td>
        <?php $wTotal = $wTotal + $rs->Amount ?>
      </tr>
    @endforeach
    </tbody>
  </table>
     <br>
     <div style="margin-left:40px; font-size:20px">
     <b>Total</b>
     <b>{{$wTotal}}</b>
     </div>
 </div>




































</body>

<script>

$(function(){
  $('#keywords').tablesorter();
});

$(function(){
  $('#key').tablesorter();
});


function printData()
{
   var divToPrint=document.getElementById("keywords");
   newWin= window.open("");
   newWin.document.write(divToPrint.outerHTML);
   newWin.print();
   newWin.close();
}

function WprintData()
{
   var divToPrint=document.getElementById("key");
   newWin= window.open("");
   newWin.document.write(divToPrint.outerHTML);
   newWin.print();
   newWin.close();
}

/*
-----------------------------------------------------------------------------------------------------
Validating the two datePickers
-----------------------------------------------------------------------------------------------------
*/

$(document).ready(function(){
    $("#txtFromDate").datepicker({
        numberOfMonths: 1,
        onSelect: function(selected) {
          $("#txtToDate").datepicker("option","minDate", selected)

        }
    });

    $("#txtToDate").datepicker({
        numberOfMonths: 1,
        onSelect: function(selected) {
           $("#txtFromDate").datepicker("option","maxDate", selected)
        }
    });
});

</script>
