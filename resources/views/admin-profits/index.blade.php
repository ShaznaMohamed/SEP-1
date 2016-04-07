<head>
<style>
.buttonReport {
    background-color: #4CAF50;
    border: none;
    color: white;
    padding: 10px 25px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    border-radius: 5px;
    cursor: pointer;
}
    
.buttonPrint {
    background-color: dodgerblue;
    border: none;
    color: white;
    padding: 10px 25px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    border-radius: 5px;
    cursor: pointer;
}
    
.buttonAsh {
    background-color: dimgrey;
    border: none;
    color: white;
    padding: 10px 25px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    border-radius: 5px;
    cursor: pointer;
}

    .inputText{    
    padding: 10px;
    border: solid 1px #dcdcdc;
    transition: box-shadow 0.3s, border 0.3s;
        
    
}
    .txt{
        font-family: fantasy;
        font-size: 20px;
        font-style: normal;
        
    }
    
    select{
        background-color: aquamarine;
        border-radius: 5px;
        padding: 10px;
        border: solid 1px;
        
    }
    
</style>    
</head>
<?php
    
    
    //$reserves = DB::table('roomreservation')->get();
    //$wdreserves = DB::table('wedreservation')->get(); 
    
    //initializing Total income for null 
    $rTotal = 0; 
    $wTotal = 0;
    
    function select(){
            echo "The select function is called.";
    }
    
?>

@Extends('admin-profits.content')

@section('content')
     <form method="post" action="{{route('reportindex')}}">
         <div style="margin-left:60px;">
                 <label class="txt"> From:</label>
                            <input type="text" id="txtFromDate" name="txtFromDate" class="inputText" required>
                 <label class="txt">To:</label>
                            <input type="text" id="txtToDate" name="txtToDate" class="inputText" required>

                                        <select id="reservationType" name="reservationType">
                                                    <option value="roomreservation" selected>Room</option>
                                                    <option value="wedreservation">Wedding</option>
                                        </select>

         </div>
                            <div style="margin-left:250px;">
                                <input type="submit" id="sbt" value="Generate Report" class="buttonReport">
                            </div>
                            <h1>{{$RSTYPE}} Reservation Report</h1>
                            <div style="margin-left:120px;">
                                    <input type="button" onclick="printData();" value="Print Table" class="buttonPrint"/>
                                    <input type="button" onclick="generatePDF();" value="Generate PDF" class="buttonAsh"/>
                                    <input type="button" onclick="generateExcel();" value="Generate Excel" class="buttonAsh"/>

                            </div><br>
         
         <input type="hidden" name="_token" value="{{ Session::token() }}">
      </form>
    
@stop