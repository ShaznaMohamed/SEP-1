<?php
use \App\Http\Controllers\SearchController;
$checkerValue = session('checker');
?>

<html>
<head>

  <!-- Compiled and minified CSS -->
  <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.5/css/materialize.min.css">

  <!-- Compiled and minified JavaScript -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.5/js/materialize.min.js"></script>
  <!-- card css -->
  <link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
  <!-- from newsletter from about us -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="/css/global.css">
  <link class="colour" rel="stylesheet" href="/css/colour-gold.css">
  <link class="pattern" rel="stylesheet" href="/css/pattern-china.css">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">

  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
  <style>
  LeftNav .BoxWrap .Box {
    margin: 0;
    padding: 8px 25px 10px 18px;
    background: transparent url(../../public/images/envelope.png) repeat-y right top;
  }
  #LeftNav .Box {
  }

  #room{
    margin-top: 100px;
  }

  /** search **/
  .advanced-search .control-group {
    margin-bottom:20px;
  }

  @media (max-width:1300px) {
    .container-fluid {
      width:80%;

    }
  }

  #main {
    width: 1000px;
    margin: 0 auto;
  }
  #sidebar    {
    width: 220px;
    height: 900px;
    background: white;
    box-shadow: 5px 5px 5px #888888;
    border-radius: 5px;
    float: left;
    padding-right: 20px;
    margin-bottom: 40px;
  }

  #page-wrap  {
    width: 800px;
    background: #ffffff;
    box-shadow: 5px 5px 5px #888888;
    height: auto;
    border-radius: 5px;
    margin-left: 230px;
    margin-bottom: 40px;
    padding-top: 20px;
    padding-left: 50px;
    padding-right: 50px;
    padding-bottom: 30px;

  }

  </style>

  <?php
  if($checkerValue == 1){

    $resv = DB::table('roomreservation')
    ->orderby('roomID')->get();


    $tR = DB::table('roomreservation')
    ->orderby('roomID')->first();

    $subRows = DB::table('roomreservation')
    ->select(DB::raw('count(*) as total, roomID'))
    ->groupBy('roomID')
    ->get();

    // checking the subrow variable

    /*foreach ($subRows as $h)
    {
    echo $h->roomID;
    echo $h->total;
  }*/
  //echo "Finish /n";
  $temp = $tR->roomID;
  //echo $temp;
  // getting varaibles from address bar -->

  $aDate = $_REQUEST['arrival'];
  $dDate = $_REQUEST['departure'];

  $aDate_no =  strtotime($aDate);
  $dDate_no =  strtotime($dDate);


  $aDate =  date("Y-m-d", strtotime($aDate));
  $dDate =  date("Y-m-d", strtotime($dDate));

  //$RaDate = dateTime($aDate);
  //$RdDate = dateTime($dDate);

  //$dDiff = $aDate->diff($dDate);

  $dif =  $aDate_no - $dDate_no ;
  $datediff = $dDate - $aDate;



  $realDiff = abs(floor($dif/(60*60*24)));
  //echo $realDiff;
  $days_array = array($realDiff); // creating array to hold days


  for ($i=0 ; $i<=$realDiff ; $i++)// vish added <= for difference =0
  {
    //echo "Printing " . $i . " aDate " . $aDate . " aDate_no " . $aDate_no;
    $days_array[$i] = $aDate;
    $aDate = date("Y-m-d",strtotime($aDate . "+1 days"));

  }


  $count = 0;
  $rms = array();

  $testD = "05-03-2016";
  $testD = date("d-m-Y", strtotime($testD));
  $copy_days_array = $days_array;
  // php real implemnetation is follows
  echo "<br>";
  $countN = 0;
  $freeRommArr = array();

  foreach($subRows as $sub) // 3 times number of rooms
  {
    $count = 0;
    $copy_days_array = $days_array;

    $resv = DB::table('roomreservation')->where('roomID', '=' , $sub->roomID)->get();
    foreach ($resv as $rv) {
      for($j=0 ; $j<sizeof($copy_days_array) ; $j++)
      {
        //if ($copy_days_array[$j] == 0){continue;}


        if(!($days_array[$j] >= $rv->arrival && $days_array[$j] <= $rv->departure))
        {
          //echo "if " . $days_array[$j] . "< <b>" . $rv->arrival . " </b>or " . $days_array[$j] . " ><b> " . $rv->departure . " </b>=> ". $copy_days_array[$j] .  " = Available 0 <br>"   ;
          //$copy_days_array[$j] = 0;
        }

        else {
          //echo "else if " . $days_array[$j] . "> <b>" . $rv->arrival . "</b> or " . $days_array[$j] . " <<b> " . $rv->departure . " </b>=> ". $copy_days_array[$j] .  " =N/a <br>"   ;
          $copy_days_array[$j] = 0;
        }
      }
      //echo "end of one reservation record <br><br>";
    }


    for( $x=0; $x<sizeof($days_array) ; $x++)
    {
      if( $copy_days_array[$x] == 0)
      {
        //echo "if ". $copy_days_array[$x] . " == 0 continue <br>";
        break;
      }

      else {
        //echo "if ". $copy_days_array[$x] . " != continue go ";
        $count++;

      }



    }

    if($count == sizeof($days_array))
    {
      $freeRommArr[$countN] = $sub->roomID;
      $countN++;
    }

    else {
      //echo "Count is " . $count . "next it <br>";
    }






    //echo "finalyyy";
    //print_r(array_values($freeRommArr));
    //Following is to check whether the radio,check buttons are changed
  }//if checker ends here
}

?>


</head>




<body>

  <div id="main">
    <div id="sidebar" style="padding-left:15px; padding-top:10px;">
      <form method="get" name="advanced-search" id="advanced-search" action="{{route('inter')}}">

        <legend>Advanced Search</legend>
        <strong>Room Type</strong>
        <br>
        <div class="input-field col s12">
          <select id="adRoomType" name="adRoomType">
            <option value="All" selected>Any or N/A</option>
            <option value="royal">Royal</option>
            <option value="deluxe">Deluxe</option>
            <option value="premier">Premier</option>
          </select>

        </div>

        <br>

        <strong>No of Rooms</strong>
        <br>

        <div class="input-field col s12">
          <select id="adNoOfRoom" name="adNoOfRoom">
            <option value="All" selected>Any Number of</option>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
          </select>

        </div>
        <br>
        <strong>No of Adults</strong>
        <br>

        <div class="input-field col s12">
          <select id="adNoOfAdults" name="adNoOfAdults">
            <option value="All" selected>Any or N/A</option>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
          </select>

        </div>

        <br>

        <strong>No of Children</strong>
        <br>

        <div class="input-field col s12">
          <select id="adNoOfChildren" name="adNoOfChildren">
            <option value="All" selected>Any or N/A</option>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
          </select>

        </div>

        <br>

        <strong>Room Facilities</strong>



        <br>
        <p>
          <input type="checkbox" id="adChBx1" name="adChBx1" />
          <label for="adChBx1">Wi-Fi</label>
          <br>
          <input type="checkbox" id="adChBx2" name="adChBx2" />
          <label for="adChBx2">Cable TV</label>
          <br>
          <input type="checkbox" id="adChBx3" name="adChBx3" />
          <label for="adChBx3">Dining Table</label>
          <br>
          <input type="checkbox" id="adChBx4" name="adChBx4" />
          <label for="adChBx4">AC</label>
          <br>
          <input type="checkbox" id="adChBx5" name="adChBx5" />
          <label for="adChBx5">Telephone</label>



        </p>

        <br>

        <strong>Price</strong>

        <p>
          <input name="rdBtGroup" type="radio" id="rdBt1" value="All"/>
          <label for="rdBt1">Any or N/A</label>
          <br>
          <input name="rdBtGroup" type="radio" id="rdBt2" value="1000"/>
          <label for="rdBt2">Rs 1000- 2000</label>
          <br>
          <input name="rdBtGroup" type="radio" id="rdBt3" value="2000"/>
          <label for="rdBt3">Rs 2000- 3000</label>

          <br>
          <input name="rdBtGroup" type="radio" id="rdBt4" value="3000"/>
          <label for="rdBt4">Rs 3000- 4000</label>

          <br>
          <input name="rdBtGroup" type="radio" id="rdBt5" value="4000"/>
          <label for="rdBt5">Rs 4000- 5000</label>
          <br>
          <input type="submit" value="Search" class="btn btn-primary" name="sbm" id="sbm"/>
        </p>


        <input type="hidden" name="_token" value="{{ Session::token() }}">
      </form>

    </div>

    <div id="page-wrap">


      <?php
      if($checkerValue == 1){
        for ($i=0 ; $i< sizeof($freeRommArr) ; $i++)
        {
          $roomDetails = DB::table('room')->where('id', '=' ,$freeRommArr[$i] )->get(); // getting the room details for session
          foreach($roomDetails as $rd){
            // assigning facility divs to variables
            if($rd->wifi == 1)
            {
              $wff ="<div class='chip'>
              <img src='images/room/wifi.jpg' alt='Contact Person'>
              Wi-Fi
              </div><br>";
            }

            else {
              $wff="";
            }

            if($rd->cabletv == 1)
            {
              $cbbl ="<div class='chip'>
              <img src='images/room/cable.jpg' alt='Contact Person'>
              Cable TV
              </div> <br>";
            }

            else {
              $cbbl="";
            }

            if($rd->diningtable == 1)
            {
              $dnnt ="<div class='chip'>
              <img src='images/room/dining.jpg' alt='Contact Person'>
              Dining Table
              </div> <br>";
            }

            else {
              $dnnt="";
            }

            if($rd->telephone == 1)
            {
              $tllp ="<div class='chip'>
              <img src='images/room/telephone.jpg' alt='Contact Person'>
              Telephone
              </div> <br>";
            }

            else {
              $tllp="";
            }

            if($rd->airconditioned == 1)
            {
              $accc ="<div class='chip'>
              <img src='images/room/ac.jpg' alt='Contact Person'>
              A-C
              </div> <br>";
            }

            else {
              $accc="";
            }



            echo "



            <div class='card '>
            <div class='card-image waves-effect waves-block waves-light'>
            <img class='activator' src='images/room/" . $rd->imageurl. ".jpg'>
            </div>
            <div class='card-content'>
            <span class='card-title activator grey-text text-darken-4'>". $rd->roomtype . "<i class='material-icons right'>more_vert</i></span>
            <p><a href='#'>Reserve Now !</a></p>
            </div>
            <div class='card-reveal'>
            <span class='card-title grey-text text-darken-4'>". $rd->roomtype . "<i class='material-icons right'>close</i></span>
            <p>This room costs Rs ". $rd->price . " and this is the beeeeest !!!!!!</p>
            ". $wff . "
            <br> ".$cbbl ."
            <br> ".$dnnt ."
            <br> ".$tllp ."
            <br> ".$accc ."
            </div>
            </div>


            ";


          }
        }

      }// if checker value ends hre


      else {

        foreach($q1 as $rd){

          // assigning facility divs to variables
          if($rd->wifi == 1)
          {
            $wff ="<div class='chip'>
            <img src='images/room/wifi.jpg' alt='Contact Person'>
            Wi-Fi
            </div><br>";
          }

          else {
            $wff="";
          }

          if($rd->cabletv == 1)
          {
            $cbbl ="<div class='chip'>
            <img src='images/room/cable.jpg' alt='Contact Person'>
            Cable TV
            </div> <br>";
          }

          else {
            $cbbl="";
          }

          if($rd->diningtable == 1)
          {
            $dnnt ="<div class='chip'>
            <img src='images/room/dining.jpg' alt='Contact Person'>
            Dining Table
            </div> <br>";
          }

          else {
            $dnnt="";
          }

          if($rd->telephone == 1)
          {
            $tllp ="<div class='chip'>
            <img src='images/room/telephone.jpg' alt='Contact Person'>
            Telephone
            </div> <br>";
          }

          else {
            $tllp="";
          }

          if($rd->airconditioned == 1)
          {
            $accc ="<div class='chip'>
            <img src='images/room/ac.jpg' alt='Contact Person'>
            A-C
            </div> <br>";
          }

          else {
            $accc="";
          }




          echo "


          <div class='card '>
          <div class='card-image waves-effect waves-block waves-light'>
          <img class='activator' src='images/room/" . $rd->imageurl. ".jpg'>
          </div>
          <div class='card-content'>
          <span class='card-title activator grey-text text-darken-4'>". $rd->roomtype . "<i class='material-icons right'>more_vert</i></span>
          <p><a href='#'>Reserve Now !</a></p>
          </div>
          <div class='card-reveal'>
          <span class='card-title grey-text text-darken-4'>". $rd->roomtype . "<i class='material-icons right'>close</i></span>
          <p>This room costs Rs ". $rd->price . " and this is the beeeeest !!!!!!</p>
          ". $wff . "
          <br> ".$cbbl ."
          <br> ".$dnnt ."
          <br> ".$tllp ."
          <br> ".$accc ."
          </div>
          </div>



          ";


        }
      }
      ?>








    </div>

  </div>



  <script>
  $(document).ready(function() {
    $('select').material_select();
  });
  </script>



</body>
</html>
