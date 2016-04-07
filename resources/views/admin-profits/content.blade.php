<head>

<link rel="stylesheet" href="/css/reports.css">
<link rel="stylesheet" href="/css/jquery-ui.css">
<script type="text/javascript" src="/js/jquery-latest.js"></script>
<script type="text/javascript" src="/js/jquery.tablesorter.js"></script>
<script type="text/javascript" src="/js/jquery-ui.js"></script>

<script type="text/javascript" src="/js/tableExport.js"></script>
<script type="text/javascript" src="/js/jquery.base64.js"></script>
<script type="text/javascript" src="/js/jspdf/libs/sprintf.js"></script>
<script type="text/javascript" src="/js/jspdf/jspdf.js"></script>
<script type="text/javascript" src="/js/jspdf/libs/base64.js"></script>

</head>


<div id="wrapper">

    <div style="margin-left:30px" id="inputs">
        @yield('content')
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



 </div>


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

function generatePDF()
{
    $('#keywords').tableExport({type:'pdf',escape:'false'});
}

function generateExcel()
{
    $('#keywords').tableExport({type:'excel',escape:'false'});
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
