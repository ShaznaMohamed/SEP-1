<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;

class WelcomeController extends Controller
{

    public function index()
    {
        return view('welcomev');

    }

    public function PostsearchRedirect(Request $request)
    {
      $RT = $request->input('adRoomType');
      $NR = $request->input('adNoOfRoom');
      $NA = $request->input('adNoOfAdults');
      $NC = $request->input('adNoOfChildren');


      $wifiD = $request->input('adChBx1');
      $cableD = $request->input('adChBx2');
      $diningD = $request->input('adChBx3');
      $acD = $request->input('adChBx4');
      $telephoneD = $request->input('adChBx5');

      // assign binary values to ckeckboxes variables

      if($wifiD == null)
      { $wifiD = 0;   }
      else { $wifiD = 1;  }

      if($cableD == null)
      { $cableD = 0;   }
      else { $cableD = 1;  }

      if($diningD == null)
      { $diningD = 0;   }
      else { $diningD = 1;  }

      if($acD == null)
      { $acD = 0;   }
      else { $acD = 1;  }

      if($telephoneD == null)
      { $telephoneD = 0;   }
      else { $telephoneD = 1;  }









      $priceD = $request->input('rdBtGroup');


      // Quering

      if($RT == "All" && $NR == "All" && $NA == "All" && $NC == "All" )
      {
        $q1 = DB::table('room')->get();

      }

      elseif($RT == "All" && $NR == "All" && $NA == "All")
      {
        if($diningD == 1 && $wifiD == 1 && $acD ==1 && $cableD == 1 && $telephoneD == 1)
        {
        $q1 = DB::table('room')->where([
                  ['nochildren','>=', $NC],
                  ['wifi','=', $wifiD],
                  ['airconditioned','=',$acD],
                  ['cabletv','=', $cableD],
                  ['telephone','=', $telephoneD],
                  ['diningtable','=',$diningD],

                  ])->get();

        } // combination 0

        elseif($diningD == 1 && $wifiD == 1 && $acD ==1 && $cableD == 1)
        {
          $q1 = DB::table('room')->where([
                    ['nochildren','>=', $NC],
                    ['wifi','=', $wifiD],
                    ['airconditioned','=',$acD],
                    ['cabletv','=', $cableD],
                    ['diningtable','=',$diningD],

                    ])->get();

        } // combination 1

        elseif($diningD == 1 && $wifiD == 1 && $acD ==1 && $telephoneD == 1)
        {
          $q1 = DB::table('room')->where([
                    ['nochildren','>=', $NC],
                    ['wifi','=', $wifiD],
                    ['airconditioned','=',$acD],
                    ['telephone','=', $telephoneD],
                    ['diningtable','=',$diningD],

                    ])->get();

        } // combination 2

        elseif($diningD == 1 && $wifiD == 1 && $cableD ==1 && $telephoneD == 1)
        {
          $q1 = DB::table('room')->where([
                    ['nochildren','>=', $NC],
                    ['wifi','=', $wifiD],
                    ['cabletv','=',$cableD],
                    ['telephone','=', $telephoneD],
                    ['diningtable','=',$diningD],

                    ])->get();

        } // combination 3

        elseif($acD == 1 && $wifiD == 1 && $cableD ==1 && $telephoneD == 1)
        {
          $q1 = DB::table('room')->where([
                    ['nochildren','>=', $NC],
                    ['wifi','=', $wifiD],
                    ['cabletv','=',$cableD],
                    ['telephone','=', $telephoneD],
                    ['airconditioned','=',$acD],

                    ])->get();

        } // combination 4

        elseif($acD == 1 && $diningD == 1 && $cableD ==1 && $telephoneD == 1)
        {
          $q1 = DB::table('room')->where([
                    ['nochildren','>=', $NC],
                    ['diningtable','=', $diningD],
                    ['cabletv','=',$cableD],
                    ['telephone','=', $telephoneD],
                    ['airconditioned','=',$acD],

                    ])->get();

        } // combination 5

        elseif($wifiD == 1 && $diningD == 1 && $cableD ==1 )
        {
          $q1 = DB::table('room')->where([
                    ['nochildren','>=', $NC],
                    ['diningtable','=', $diningD],
                    ['cabletv','=',$cableD],
                    ['wifi','=', $wifiD],


                    ])->get();

        } // combination n1

        elseif($wifiD == 1 && $diningD == 1 && $acD ==1 )
        {
          $q1 = DB::table('room')->where([
                    ['nochildren','>=', $NC],
                    ['diningtable','=', $diningD],
                    ['airconditioned','=',$acD],
                    ['wifi','=', $wifiD],


                    ])->get();

        } // combination n2

        elseif($wifiD == 1 && $telephoneD == 1 && $acD ==1 )
        {
          $q1 = DB::table('room')->where([
                    ['nochildren','>=', $NC],
                    ['telephone','=', $telephoneD],
                    ['airconditioned','=',$acD],
                    ['wifi','=', $wifiD],


                    ])->get();

        } // combination n3

        elseif($wifiD == 1 && $cableD == 1 && $acD ==1 )
        {
          $q1 = DB::table('room')->where([
                    ['nochildren','>=', $NC],
                    ['cabletv','=', $cableD],
                    ['airconditioned','=',$acD],
                    ['wifi','=', $wifiD],


                    ])->get();

        } // combination n4

        elseif($wifiD == 1 && $cableD == 1 && $telephoneD ==1 )
        {
          $q1 = DB::table('room')->where([
                    ['nochildren','>=', $NC],
                    ['cabletv','=', $cableD],
                    ['telephone','=',$telephoneD],
                    ['wifi','=', $wifiD],


                    ])->get();

        } // combination n5

        elseif($acD == 1 && $cableD == 1 && $diningD ==1 )
        {
          $q1 = DB::table('room')->where([
                    ['nochildren','>=', $NC],
                    ['cabletv','=', $cableD],
                    ['diningtable','=',$diningD],
                    ['airconditioned','=', $acD],


                    ])->get();

        } // combination n6

        elseif($acD == 1 && $cableD == 1 && $telephoneD ==1 )
        {
          $q1 = DB::table('room')->where([
                    ['nochildren','>=', $NC],
                    ['cabletv','=', $cableD],
                    ['telephone','=',$telephoneD],
                    ['airconditioned','=', $acD],


                    ])->get();

        } // combination n7

        elseif($diningD == 1 && $cableD == 1 && $telephoneD ==1 )
        {
          $q1 = DB::table('room')->where([
                    ['nochildren','>=', $NC],
                    ['cabletv','=', $cableD],
                    ['telephone','=',$telephoneD],
                    ['diningtable','=', $diningD],


                    ])->get();

        } // combination n8

        elseif($diningD == 1 && $acD == 1 && $telephoneD ==1 )
        {
          $q1 = DB::table('room')->where([
                    ['nochildren','>=', $NC],
                    ['airconditioned','=', $acD],
                    ['telephone','=',$telephoneD],
                    ['diningtable','=', $diningD],


                    ])->get();

        } // combination n9

        elseif($diningD == 1 && $wifiD == 1 && $telephoneD ==1 )
        {
          $q1 = DB::table('room')->where([
                    ['nochildren','>=', $NC],
                    ['wifi','=', $wifiD],
                    ['telephone','=',$telephoneD],
                    ['diningtable','=', $diningD],


                    ])->get();

        } // combination n10

        elseif($cableD == 1 && $wifiD == 1)
        {
          $q1 = DB::table('room')->where([
                    ['nochildren','>=', $NC],
                    ['wifi','=', $wifiD],
                    ['cabletv','=',$cableD],

                    ])->get();

        } // combination m1

        elseif($diningD == 1 && $wifiD == 1)
        {
          $q1 = DB::table('room')->where([
                    ['nochildren','>=', $NC],
                    ['wifi','=', $wifiD],
                    ['diningtable','=',$diningD],

                    ])->get();

        } // combination m2

        elseif($acD == 1 && $wifiD == 1)
        {
          $q1 = DB::table('room')->where([
                    ['nochildren','>=', $NC],
                    ['wifi','=', $wifiD],
                    ['airconditioned','=',$acD],

                    ])->get();

        } // combination m3

        elseif($telephoneD == 1 && $wifiD == 1)
        {
          $q1 = DB::table('room')->where([
                    ['nochildren','>=', $NC],
                    ['wifi','=', $wifiD],
                    ['telephone','=',$telephoneD],

                    ])->get();

        } // combination m4

        elseif($cableD  == 1 && $diningD  == 1)
        {
          $q1 = DB::table('room')->where([
                    ['nochildren','>=', $NC],
                    ['diningtable','=', $diningD ],
                    ['cabletv','=',$cableD],

                    ])->get();

        } // combination m5

        elseif($cableD  == 1 && $acD  == 1)
        {
          $q1 = DB::table('room')->where([
                    ['nochildren','>=', $NC],
                    ['airconditioned','=', $acD  ],
                    ['cabletv','=',$cableD],

                    ])->get();

        } // combination m6

        elseif($cableD  == 1 && $telephoneD   == 1)
        {
          $q1 = DB::table('room')->where([
                    ['nochildren','>=', $NC],
                    ['telephone','=', $telephoneD],
                    ['cabletv','=',$cableD],

                    ])->get();

        } // combination m7

        elseif($diningD == 1 && $acD == 1)
        {
          $q1 = DB::table('room')->where([
                    ['nochildren','>=', $NC],
                    ['diningtable','=', $diningD ],
                    ['airconditioned','=',$acD],

                    ])->get();

        } // combination m8

        elseif($diningD == 1 && $telephoneD  == 1)
        {
          $q1 = DB::table('room')->where([
                    ['nochildren','>=', $NC],
                    ['diningtable','=', $diningD ],
                    ['telephone','=',$telephoneD ],

                    ])->get();

        } // combination m9

        elseif($acD == 1 && $telephoneD  == 1)
        {
          $q1 = DB::table('room')->where([
                    ['nochildren','>=', $NC],
                    ['airconditioned','=', $acD ],
                    ['telephone','=',$telephoneD ],

                    ])->get();

        } // combination m10

        elseif($wifiD == 1)
        {
          $q1 = DB::table('room')->where([
                    ['nochildren','>=', $NC],
                    ['wifi','=', $wifiD ],

                    ])->get();

        } // combination o1

        elseif($cableD  == 1)
        {
          $q1 = DB::table('room')->where([
                    ['nochildren','>=', $NC],
                    ['cabletv','=', $cableD ],

                    ])->get();

        } // combination o2

        elseif($diningD == 1)
        {
          $q1 = DB::table('room')->where([
                    ['nochildren','>=', $NC],
                    ['diningtable','=', $diningD],

                    ])->get();

        } // combination o3

        elseif($acD  == 1)
        {
          $q1 = DB::table('room')->where([
                    ['nochildren','>=', $NC],
                    ['airconditioned','=', $acD ],

                    ])->get();

        } // combination o4

        elseif($telephoneD == 1)
        {
          $q1 = DB::table('room')->where([
                    ['nochildren','>=', $NC],
                    ['telephone','=', $telephoneD],

                    ])->get();

        } // combination o5


        else
        {
          $q1 = DB::table('room')->where('nochildren','>=',$NC)->get();

        }
      } // COM ABC 1






      elseif($RT == "All" && $NR == "All" && $NC == "All")
      {
        if($diningD == 1 && $wifiD == 1 && $acD ==1 && $cableD == 1 && $telephoneD == 1)
      {
      $q1 = DB::table('room')->where([
                ['noadults','>=', $NA],
                ['wifi','=', $wifiD],
                ['airconditioned','=',$acD],
                ['cabletv','=', $cableD],
                ['telephone','=', $telephoneD],
                ['diningtable','=',$diningD],

                ])->get();

      } // combination 0

      elseif($diningD == 1 && $wifiD == 1 && $acD ==1 && $cableD == 1)
      {
        $q1 = DB::table('room')->where([
                  ['noadults','>=', $NA],
                  ['wifi','=', $wifiD],
                  ['airconditioned','=',$acD],
                  ['cabletv','=', $cableD],
                  ['diningtable','=',$diningD],

                  ])->get();

      } // combination 1

      elseif($diningD == 1 && $wifiD == 1 && $acD ==1 && $telephoneD == 1)
      {
        $q1 = DB::table('room')->where([
                  ['noadults','>=', $NA],
                  ['wifi','=', $wifiD],
                  ['airconditioned','=',$acD],
                  ['telephone','=', $telephoneD],
                  ['diningtable','=',$diningD],

                  ])->get();

      } // combination 2

      elseif($diningD == 1 && $wifiD == 1 && $cableD ==1 && $telephoneD == 1)
      {
        $q1 = DB::table('room')->where([
                  ['noadults','>=', $NA],
                  ['wifi','=', $wifiD],
                  ['cabletv','=',$cableD],
                  ['telephone','=', $telephoneD],
                  ['diningtable','=',$diningD],

                  ])->get();

      } // combination 3

      elseif($acD == 1 && $wifiD == 1 && $cableD ==1 && $telephoneD == 1)
      {
        $q1 = DB::table('room')->where([
                  ['noadults','>=', $NA],
                  ['wifi','=', $wifiD],
                  ['cabletv','=',$cableD],
                  ['telephone','=', $telephoneD],
                  ['airconditioned','=',$acD],

                  ])->get();

      } // combination 4

      elseif($acD == 1 && $diningD == 1 && $cableD ==1 && $telephoneD == 1)
      {
        $q1 = DB::table('room')->where([
                  ['noadults','>=', $NA],
                  ['diningtable','=', $diningD],
                  ['cabletv','=',$cableD],
                  ['telephone','=', $telephoneD],
                  ['airconditioned','=',$acD],

                  ])->get();

      } // combination 5

      elseif($wifiD == 1 && $diningD == 1 && $cableD ==1 )
      {
        $q1 = DB::table('room')->where([
                  ['noadults','>=', $NA],
                  ['diningtable','=', $diningD],
                  ['cabletv','=',$cableD],
                  ['wifi','=', $wifiD],


                  ])->get();

      } // combination n1

      elseif($wifiD == 1 && $diningD == 1 && $acD ==1 )
      {
        $q1 = DB::table('room')->where([
                  ['noadults','>=', $NA],
                  ['diningtable','=', $diningD],
                  ['airconditioned','=',$acD],
                  ['wifi','=', $wifiD],


                  ])->get();

      } // combination n2

      elseif($wifiD == 1 && $telephoneD == 1 && $acD ==1 )
      {
        $q1 = DB::table('room')->where([
                  ['noadults','>=', $NA],
                  ['telephone','=', $telephoneD],
                  ['airconditioned','=',$acD],
                  ['wifi','=', $wifiD],


                  ])->get();

      } // combination n3

      elseif($wifiD == 1 && $cableD == 1 && $acD ==1 )
      {
        $q1 = DB::table('room')->where([
                  ['noadults','>=', $NA],
                  ['cabletv','=', $cableD],
                  ['airconditioned','=',$acD],
                  ['wifi','=', $wifiD],


                  ])->get();

      } // combination n4

      elseif($wifiD == 1 && $cableD == 1 && $telephoneD ==1 )
      {
        $q1 = DB::table('room')->where([
                  ['noadults','>=', $NA],
                  ['cabletv','=', $cableD],
                  ['telephone','=',$telephoneD],
                  ['wifi','=', $wifiD],


                  ])->get();

      } // combination n5

      elseif($acD == 1 && $cableD == 1 && $diningD ==1 )
      {
        $q1 = DB::table('room')->where([
                  ['noadults','>=', $NA],
                  ['cabletv','=', $cableD],
                  ['diningtable','=',$diningD],
                  ['airconditioned','=', $acD],


                  ])->get();

      } // combination n6

      elseif($acD == 1 && $cableD == 1 && $telephoneD ==1 )
      {
        $q1 = DB::table('room')->where([
                  ['noadults','>=', $NA],
                  ['cabletv','=', $cableD],
                  ['telephone','=',$telephoneD],
                  ['airconditioned','=', $acD],


                  ])->get();

      } // combination n7

      elseif($diningD == 1 && $cableD == 1 && $telephoneD ==1 )
      {
        $q1 = DB::table('room')->where([
                  ['noadults','>=', $NA],
                  ['cabletv','=', $cableD],
                  ['telephone','=',$telephoneD],
                  ['diningtable','=', $diningD],


                  ])->get();

      } // combination n8

      elseif($diningD == 1 && $acD == 1 && $telephoneD ==1 )
      {
        $q1 = DB::table('room')->where([
                  ['noadults','>=', $NA],
                  ['airconditioned','=', $acD],
                  ['telephone','=',$telephoneD],
                  ['diningtable','=', $diningD],


                  ])->get();

      } // combination n9

      elseif($diningD == 1 && $wifiD == 1 && $telephoneD ==1 )
      {
        $q1 = DB::table('room')->where([
                  ['noadults','>=', $NA],
                  ['wifi','=', $wifiD],
                  ['telephone','=',$telephoneD],
                  ['diningtable','=', $diningD],


                  ])->get();

      } // combination n10

      elseif($cableD == 1 && $wifiD == 1)
      {
        $q1 = DB::table('room')->where([
                  ['noadults','>=', $NA],
                  ['wifi','=', $wifiD],
                  ['cabletv','=',$cableD],

                  ])->get();

      } // combination m1

      elseif($diningD == 1 && $wifiD == 1)
      {
        $q1 = DB::table('room')->where([
                  ['noadults','>=', $NA],
                  ['wifi','=', $wifiD],
                  ['diningtable','=',$diningD],

                  ])->get();

      } // combination m2

      elseif($acD == 1 && $wifiD == 1)
      {
        $q1 = DB::table('room')->where([
                  ['noadults','>=', $NA],
                  ['wifi','=', $wifiD],
                  ['airconditioned','=',$acD],

                  ])->get();

      } // combination m3

      elseif($telephoneD == 1 && $wifiD == 1)
      {
        $q1 = DB::table('room')->where([
                  ['noadults','>=', $NA],
                  ['wifi','=', $wifiD],
                  ['telephone','=',$telephoneD],

                  ])->get();

      } // combination m4

      elseif($cableD  == 1 && $diningD  == 1)
      {
        $q1 = DB::table('room')->where([
                  ['noadults','>=', $NA],
                  ['diningtable','=', $diningD ],
                  ['cabletv','=',$cableD],

                  ])->get();

      } // combination m5

      elseif($cableD  == 1 && $acD  == 1)
      {
        $q1 = DB::table('room')->where([
                  ['noadults','>=', $NA],
                  ['airconditioned','=', $acD  ],
                  ['cabletv','=',$cableD],

                  ])->get();

      } // combination m6

      elseif($cableD  == 1 && $telephoneD   == 1)
      {
        $q1 = DB::table('room')->where([
                  ['noadults','>=', $NA],
                  ['telephone','=', $telephoneD],
                  ['cabletv','=',$cableD],

                  ])->get();

      } // combination m7

      elseif($diningD == 1 && $acD == 1)
      {
        $q1 = DB::table('room')->where([
                  ['noadults','>=', $NA],
                  ['diningtable','=', $diningD ],
                  ['airconditioned','=',$acD],

                  ])->get();

      } // combination m8

      elseif($diningD == 1 && $telephoneD  == 1)
      {
        $q1 = DB::table('room')->where([
                  ['noadults','>=', $NA],
                  ['diningtable','=', $diningD ],
                  ['telephone','=',$telephoneD ],

                  ])->get();

      } // combination m9

      elseif($acD == 1 && $telephoneD  == 1)
      {
        $q1 = DB::table('room')->where([
                  ['noadults','>=', $NA],
                  ['airconditioned','=', $acD ],
                  ['telephone','=',$telephoneD ],

                  ])->get();

      } // combination m10

      elseif($wifiD == 1)
      {
        $q1 = DB::table('room')->where([
                  ['noadults','>=', $NA],
                  ['wifi','=', $wifiD ],

                  ])->get();

      } // combination o1

      elseif($cableD  == 1)
      {
        $q1 = DB::table('room')->where([
                  ['noadults','>=', $NA],
                  ['cabletv','=', $cableD ],

                  ])->get();

      } // combination o2

      elseif($diningD == 1)
      {
        $q1 = DB::table('room')->where([
                  ['noadults','>=', $NA],
                  ['diningtable','=', $diningD],

                  ])->get();

      } // combination o3

      elseif($acD  == 1)
      {
        $q1 = DB::table('room')->where([
                  ['noadults','>=', $NA],
                  ['airconditioned','=', $acD ],

                  ])->get();

      } // combination o4

      elseif($telephoneD == 1)
      {
        $q1 = DB::table('room')->where([
                  ['noadults','>=', $NA],
                  ['telephone','=', $telephoneD],

                  ])->get();

      } // combination o5

      else
      {
        $q1 = DB::table('room')->where('noadults','>=',$NA)->get();

      }
    }// COM ABC 2










      elseif($RT == "All" && $NA == "All" && $NC == "All")
      {
        if($diningD == 1 && $wifiD == 1 && $acD ==1 && $cableD == 1 && $telephoneD == 1)
        {
        $q1 = DB::table('room')->where([
                  ['norooms','>=', $NR],
                  ['wifi','=', $wifiD],
                  ['airconditioned','=',$acD],
                  ['cabletv','=', $cableD],
                  ['telephone','=', $telephoneD],
                  ['diningtable','=',$diningD],

                  ])->get();

        } // combination 0

        elseif($diningD == 1 && $wifiD == 1 && $acD ==1 && $cableD == 1)
        {
          $q1 = DB::table('room')->where([
                    ['norooms','>=', $NR],
                    ['wifi','=', $wifiD],
                    ['airconditioned','=',$acD],
                    ['cabletv','=', $cableD],
                    ['diningtable','=',$diningD],

                    ])->get();

        } // combination 1

        elseif($diningD == 1 && $wifiD == 1 && $acD ==1 && $telephoneD == 1)
        {
          $q1 = DB::table('room')->where([
                    ['norooms','>=', $NR],
                    ['wifi','=', $wifiD],
                    ['airconditioned','=',$acD],
                    ['telephone','=', $telephoneD],
                    ['diningtable','=',$diningD],

                    ])->get();

        } // combination 2

        elseif($diningD == 1 && $wifiD == 1 && $cableD ==1 && $telephoneD == 1)
        {
          $q1 = DB::table('room')->where([
                    ['norooms','>=', $NR],
                    ['wifi','=', $wifiD],
                    ['cabletv','=',$cableD],
                    ['telephone','=', $telephoneD],
                    ['diningtable','=',$diningD],

                    ])->get();

        } // combination 3

        elseif($acD == 1 && $wifiD == 1 && $cableD ==1 && $telephoneD == 1)
        {
          $q1 = DB::table('room')->where([
                    ['norooms','>=', $NR],
                    ['wifi','=', $wifiD],
                    ['cabletv','=',$cableD],
                    ['telephone','=', $telephoneD],
                    ['airconditioned','=',$acD],

                    ])->get();

        } // combination 4

        elseif($acD == 1 && $diningD == 1 && $cableD ==1 && $telephoneD == 1)
        {
          $q1 = DB::table('room')->where([
                    ['norooms','>=', $NR],
                    ['diningtable','=', $diningD],
                    ['cabletv','=',$cableD],
                    ['telephone','=', $telephoneD],
                    ['airconditioned','=',$acD],

                    ])->get();

        } // combination 5

        elseif($wifiD == 1 && $diningD == 1 && $cableD ==1 )
        {
          $q1 = DB::table('room')->where([
                    ['norooms','>=', $NR],
                    ['diningtable','=', $diningD],
                    ['cabletv','=',$cableD],
                    ['wifi','=', $wifiD],


                    ])->get();

        } // combination n1

        elseif($wifiD == 1 && $diningD == 1 && $acD ==1 )
        {
          $q1 = DB::table('room')->where([
                    ['norooms','>=', $NR],
                    ['diningtable','=', $diningD],
                    ['airconditioned','=',$acD],
                    ['wifi','=', $wifiD],


                    ])->get();

        } // combination n2

        elseif($wifiD == 1 && $telephoneD == 1 && $acD ==1 )
        {
          $q1 = DB::table('room')->where([
                    ['norooms','>=', $NR],
                    ['telephone','=', $telephoneD],
                    ['airconditioned','=',$acD],
                    ['wifi','=', $wifiD],


                    ])->get();

        } // combination n3

        elseif($wifiD == 1 && $cableD == 1 && $acD ==1 )
        {
          $q1 = DB::table('room')->where([
                    ['norooms','>=', $NR],
                    ['cabletv','=', $cableD],
                    ['airconditioned','=',$acD],
                    ['wifi','=', $wifiD],


                    ])->get();

        } // combination n4

        elseif($wifiD == 1 && $cableD == 1 && $telephoneD ==1 )
        {
          $q1 = DB::table('room')->where([
                    ['norooms','>=', $NR],
                    ['cabletv','=', $cableD],
                    ['telephone','=',$telephoneD],
                    ['wifi','=', $wifiD],


                    ])->get();

        } // combination n5

        elseif($acD == 1 && $cableD == 1 && $diningD ==1 )
        {
          $q1 = DB::table('room')->where([
                    ['norooms','>=', $NR],
                    ['cabletv','=', $cableD],
                    ['diningtable','=',$diningD],
                    ['airconditioned','=', $acD],


                    ])->get();

        } // combination n6

        elseif($acD == 1 && $cableD == 1 && $telephoneD ==1 )
        {
          $q1 = DB::table('room')->where([
                    ['norooms','>=', $NR],
                    ['cabletv','=', $cableD],
                    ['telephone','=',$telephoneD],
                    ['airconditioned','=', $acD],


                    ])->get();

        } // combination n7

        elseif($diningD == 1 && $cableD == 1 && $telephoneD ==1 )
        {
          $q1 = DB::table('room')->where([
                    ['norooms','>=', $NR],
                    ['cabletv','=', $cableD],
                    ['telephone','=',$telephoneD],
                    ['diningtable','=', $diningD],


                    ])->get();

        } // combination n8

        elseif($diningD == 1 && $acD == 1 && $telephoneD ==1 )
        {
          $q1 = DB::table('room')->where([
                    ['norooms','>=', $NR],
                    ['airconditioned','=', $acD],
                    ['telephone','=',$telephoneD],
                    ['diningtable','=', $diningD],


                    ])->get();

        } // combination n9

        elseif($diningD == 1 && $wifiD == 1 && $telephoneD ==1 )
        {
          $q1 = DB::table('room')->where([
                    ['norooms','>=', $NR],
                    ['wifi','=', $wifiD],
                    ['telephone','=',$telephoneD],
                    ['diningtable','=', $diningD],


                    ])->get();

        } // combination n10

        elseif($cableD == 1 && $wifiD == 1)
        {
          $q1 = DB::table('room')->where([
                    ['norooms','>=', $NR],
                    ['wifi','=', $wifiD],
                    ['cabletv','=',$cableD],

                    ])->get();

        } // combination m1

        elseif($diningD == 1 && $wifiD == 1)
        {
          $q1 = DB::table('room')->where([
                    ['norooms','>=', $NR],
                    ['wifi','=', $wifiD],
                    ['diningtable','=',$diningD],

                    ])->get();

        } // combination m2

        elseif($acD == 1 && $wifiD == 1)
        {
          $q1 = DB::table('room')->where([
                    ['norooms','>=', $NR],
                    ['wifi','=', $wifiD],
                    ['airconditioned','=',$acD],

                    ])->get();

        } // combination m3

        elseif($telephoneD == 1 && $wifiD == 1)
        {
          $q1 = DB::table('room')->where([
                    ['norooms','>=', $NR],
                    ['wifi','=', $wifiD],
                    ['telephone','=',$telephoneD],

                    ])->get();

        } // combination m4

        elseif($cableD  == 1 && $diningD  == 1)
        {
          $q1 = DB::table('room')->where([
                    ['norooms','>=', $NR],
                    ['diningtable','=', $diningD ],
                    ['cabletv','=',$cableD],

                    ])->get();

        } // combination m5

        elseif($cableD  == 1 && $acD  == 1)
        {
          $q1 = DB::table('room')->where([
                    ['norooms','>=', $NR],
                    ['airconditioned','=', $acD  ],
                    ['cabletv','=',$cableD],

                    ])->get();

        } // combination m6

        elseif($cableD  == 1 && $telephoneD   == 1)
        {
          $q1 = DB::table('room')->where([
                    ['norooms','>=', $NR],
                    ['telephone','=', $telephoneD],
                    ['cabletv','=',$cableD],

                    ])->get();

        } // combination m7

        elseif($diningD == 1 && $acD == 1)
        {
          $q1 = DB::table('room')->where([
                    ['norooms','>=', $NR],
                    ['diningtable','=', $diningD ],
                    ['airconditioned','=',$acD],

                    ])->get();

        } // combination m8

        elseif($diningD == 1 && $telephoneD  == 1)
        {
          $q1 = DB::table('room')->where([
                    ['norooms','>=', $NR],
                    ['diningtable','=', $diningD ],
                    ['telephone','=',$telephoneD ],

                    ])->get();

        } // combination m9

        elseif($acD == 1 && $telephoneD  == 1)
        {
          $q1 = DB::table('room')->where([
                    ['norooms','>=', $NR],
                    ['airconditioned','=', $acD ],
                    ['telephone','=',$telephoneD ],

                    ])->get();

        } // combination m10

        elseif($wifiD == 1)
        {
          $q1 = DB::table('room')->where([
                    ['norooms','>=', $NR],
                    ['wifi','=', $wifiD ],

                    ])->get();

        } // combination o1

        elseif($cableD  == 1)
        {
          $q1 = DB::table('room')->where([
                    ['norooms','>=', $NR],
                    ['cabletv','=', $cableD ],

                    ])->get();

        } // combination o2

        elseif($diningD == 1)
        {
          $q1 = DB::table('room')->where([
                    ['norooms','>=', $NR],
                    ['diningtable','=', $diningD],

                    ])->get();

        } // combination o3

        elseif($acD  == 1)
        {
          $q1 = DB::table('room')->where([
                    ['norooms','>=', $NR],
                    ['airconditioned','=', $acD ],

                    ])->get();

        } // combination o4

        elseif($telephoneD == 1)
        {
          $q1 = DB::table('room')->where([
                    ['norooms','>=', $NR],
                    ['telephone','=', $telephoneD],

                    ])->get();

        } // combination o5

        else
        {
          $q1 = DB::table('room')->where('norooms','>=',$NR)->get();

        }

      } //COM ABC 3


















      elseif($NA == "All" && $NR == "All" && $NC == "All")
      {
        if($diningD == 1 && $wifiD == 1 && $acD ==1 && $cableD == 1 && $telephoneD == 1)
        {
        $q1 = DB::table('room')->where([
                  ['roomtype','=', $RT],
                  ['wifi','=', $wifiD],
                  ['airconditioned','=',$acD],
                  ['cabletv','=', $cableD],
                  ['telephone','=', $telephoneD],
                  ['diningtable','=',$diningD],

                  ])->get();

        } // combination 0

        elseif($diningD == 1 && $wifiD == 1 && $acD ==1 && $cableD == 1)
        {
          $q1 = DB::table('room')->where([
                    ['roomtype','=', $RT],
                    ['wifi','=', $wifiD],
                    ['airconditioned','=',$acD],
                    ['cabletv','=', $cableD],
                    ['diningtable','=',$diningD],

                    ])->get();

        } // combination 1

        elseif($diningD == 1 && $wifiD == 1 && $acD ==1 && $telephoneD == 1)
        {
          $q1 = DB::table('room')->where([
                    ['roomtype','=', $RT],
                    ['wifi','=', $wifiD],
                    ['airconditioned','=',$acD],
                    ['telephone','=', $telephoneD],
                    ['diningtable','=',$diningD],

                    ])->get();

        } // combination 2

        elseif($diningD == 1 && $wifiD == 1 && $cableD ==1 && $telephoneD == 1)
        {
          $q1 = DB::table('room')->where([
                    ['roomtype','=', $RT],
                    ['wifi','=', $wifiD],
                    ['cabletv','=',$cableD],
                    ['telephone','=', $telephoneD],
                    ['diningtable','=',$diningD],

                    ])->get();

        } // combination 3

        elseif($acD == 1 && $wifiD == 1 && $cableD ==1 && $telephoneD == 1)
        {
          $q1 = DB::table('room')->where([
                    ['roomtype','=', $RT],
                    ['wifi','=', $wifiD],
                    ['cabletv','=',$cableD],
                    ['telephone','=', $telephoneD],
                    ['airconditioned','=',$acD],

                    ])->get();

        } // combination 4

        elseif($acD == 1 && $diningD == 1 && $cableD ==1 && $telephoneD == 1)
        {
          $q1 = DB::table('room')->where([
                    ['roomtype','=', $RT],
                    ['diningtable','=', $diningD],
                    ['cabletv','=',$cableD],
                    ['telephone','=', $telephoneD],
                    ['airconditioned','=',$acD],

                    ])->get();

        } // combination 5

        elseif($wifiD == 1 && $diningD == 1 && $cableD ==1 )
        {
          $q1 = DB::table('room')->where([
                    ['roomtype','=', $RT],
                    ['diningtable','=', $diningD],
                    ['cabletv','=',$cableD],
                    ['wifi','=', $wifiD],


                    ])->get();

        } // combination n1

        elseif($wifiD == 1 && $diningD == 1 && $acD ==1 )
        {
          $q1 = DB::table('room')->where([
                    ['roomtype','=', $RT],
                    ['diningtable','=', $diningD],
                    ['airconditioned','=',$acD],
                    ['wifi','=', $wifiD],


                    ])->get();

        } // combination n2

        elseif($wifiD == 1 && $telephoneD == 1 && $acD ==1 )
        {
          $q1 = DB::table('room')->where([
                    ['roomtype','=', $RT],
                    ['telephone','=', $telephoneD],
                    ['airconditioned','=',$acD],
                    ['wifi','=', $wifiD],


                    ])->get();

        } // combination n3

        elseif($wifiD == 1 && $cableD == 1 && $acD ==1 )
        {
          $q1 = DB::table('room')->where([
                    ['roomtype','=', $RT],
                    ['cabletv','=', $cableD],
                    ['airconditioned','=',$acD],
                    ['wifi','=', $wifiD],


                    ])->get();

        } // combination n4

        elseif($wifiD == 1 && $cableD == 1 && $telephoneD ==1 )
        {
          $q1 = DB::table('room')->where([
                    ['roomtype','=', $RT],
                    ['cabletv','=', $cableD],
                    ['telephone','=',$telephoneD],
                    ['wifi','=', $wifiD],


                    ])->get();

        } // combination n5

        elseif($acD == 1 && $cableD == 1 && $diningD ==1 )
        {
          $q1 = DB::table('room')->where([
                    ['roomtype','=', $RT],
                    ['cabletv','=', $cableD],
                    ['diningtable','=',$diningD],
                    ['airconditioned','=', $acD],


                    ])->get();

        } // combination n6

        elseif($acD == 1 && $cableD == 1 && $telephoneD ==1 )
        {
          $q1 = DB::table('room')->where([
                    ['roomtype','=', $RT],
                    ['cabletv','=', $cableD],
                    ['telephone','=',$telephoneD],
                    ['airconditioned','=', $acD],


                    ])->get();

        } // combination n7

        elseif($diningD == 1 && $cableD == 1 && $telephoneD ==1 )
        {
          $q1 = DB::table('room')->where([
                    ['roomtype','=', $RT],
                    ['cabletv','=', $cableD],
                    ['telephone','=',$telephoneD],
                    ['diningtable','=', $diningD],


                    ])->get();

        } // combination n8

        elseif($diningD == 1 && $acD == 1 && $telephoneD ==1 )
        {
          $q1 = DB::table('room')->where([
                    ['roomtype','=', $RT],
                    ['airconditioned','=', $acD],
                    ['telephone','=',$telephoneD],
                    ['diningtable','=', $diningD],


                    ])->get();

        } // combination n9

        elseif($diningD == 1 && $wifiD == 1 && $telephoneD ==1 )
        {
          $q1 = DB::table('room')->where([
                    ['roomtype','=', $RT],
                    ['wifi','=', $wifiD],
                    ['telephone','=',$telephoneD],
                    ['diningtable','=', $diningD],


                    ])->get();

        } // combination n10

        elseif($cableD == 1 && $wifiD == 1)
        {
          $q1 = DB::table('room')->where([
                    ['roomtype','=', $RT],
                    ['wifi','=', $wifiD],
                    ['cabletv','=',$cableD],

                    ])->get();

        } // combination m1

        elseif($diningD == 1 && $wifiD == 1)
        {
          $q1 = DB::table('room')->where([
                    ['roomtype','=', $RT],
                    ['wifi','=', $wifiD],
                    ['diningtable','=',$diningD],

                    ])->get();

        } // combination m2

        elseif($acD == 1 && $wifiD == 1)
        {
          $q1 = DB::table('room')->where([
                    ['roomtype','=', $RT],
                    ['wifi','=', $wifiD],
                    ['airconditioned','=',$acD],

                    ])->get();

        } // combination m3

        elseif($telephoneD == 1 && $wifiD == 1)
        {
          $q1 = DB::table('room')->where([
                    ['roomtype','=', $RT],
                    ['wifi','=', $wifiD],
                    ['telephone','=',$telephoneD],

                    ])->get();

        } // combination m4

        elseif($cableD  == 1 && $diningD  == 1)
        {
          $q1 = DB::table('room')->where([
                    ['roomtype','=', $RT],
                    ['diningtable','=', $diningD ],
                    ['cabletv','=',$cableD],

                    ])->get();

        } // combination m5

        elseif($cableD  == 1 && $acD  == 1)
        {
          $q1 = DB::table('room')->where([
                    ['roomtype','=', $RT],
                    ['airconditioned','=', $acD  ],
                    ['cabletv','=',$cableD],

                    ])->get();

        } // combination m6

        elseif($cableD  == 1 && $telephoneD   == 1)
        {
          $q1 = DB::table('room')->where([
                    ['roomtype','=', $RT],
                    ['telephone','=', $telephoneD],
                    ['cabletv','=',$cableD],

                    ])->get();

        } // combination m7

        elseif($diningD == 1 && $acD == 1)
        {
          $q1 = DB::table('room')->where([
                    ['roomtype','=', $RT],
                    ['diningtable','=', $diningD ],
                    ['airconditioned','=',$acD],

                    ])->get();

        } // combination m8

        elseif($diningD == 1 && $telephoneD  == 1)
        {
          $q1 = DB::table('room')->where([
                    ['roomtype','=', $RT],
                    ['diningtable','=', $diningD ],
                    ['telephone','=',$telephoneD ],

                    ])->get();

        } // combination m9

        elseif($acD == 1 && $telephoneD  == 1)
        {
          $q1 = DB::table('room')->where([
                    ['roomtype','=', $RT],
                    ['airconditioned','=', $acD ],
                    ['telephone','=',$telephoneD ],

                    ])->get();

        } // combination m10

        elseif($wifiD == 1)
        {
          $q1 = DB::table('room')->where([
                    ['roomtype','=', $RT],
                    ['wifi','=', $wifiD ],

                    ])->get();

        } // combination o1

        elseif($cableD  == 1)
        {
          $q1 = DB::table('room')->where([
                    ['roomtype','=', $RT],
                    ['cabletv','=', $cableD ],

                    ])->get();

        } // combination o2

        elseif($diningD == 1)
        {
          $q1 = DB::table('room')->where([
                    ['roomtype','=', $RT],
                    ['diningtable','=', $diningD],

                    ])->get();

        } // combination o3

        elseif($acD  == 1)
        {
          $q1 = DB::table('room')->where([
                    ['roomtype','=', $RT],
                    ['airconditioned','=', $acD ],

                    ])->get();

        } // combination o4

        elseif($telephoneD == 1)
        {
          $q1 = DB::table('room')->where([
                    ['roomtype','=', $RT],
                    ['telephone','=', $telephoneD],

                    ])->get();

        } // combination o5


        else
        {
          $q1 = DB::table('room')->where('roomtype','=',$RT)->get();

        }

      } //COM ABC 4

























      elseif($RT == "All" && $NR == "All")
      {
        $q1 = DB::table('room')->where([
                  ['nochildren','>=', $NC],
                  ['noadults','>=', $NA],
                  ['wifi','=', $wifiD],
                  ['airconditioned','=',$acD],
                  ['cabletv','=', $cableD],
                  ['telephone','=', $telephoneD],
                  ['diningtable','=',$diningD],

                  ])->get();
      }

      elseif($NC == "All" && $NA == "All")
      {
        $q1 = DB::table('room')->where([
                  ['roomtype','=', $RT],
                  ['norooms','>=', $NR],
                  ['wifi','=', $wifiD],
                  ['airconditioned','=',$acD],
                  ['cabletv','=', $cableD],
                  ['telephone','=', $telephoneD],
                  ['diningtable','=',$diningD],

                  ])->get();
      }

      elseif($RT == "All" && $NA == "All")
      {
        $q1 = DB::table('room')->where([
                  ['roomtype','=', $RT],
                  ['noadults','>=', $NA],
                  ['wifi','=', $wifiD],
                  ['airconditioned','=',$acD],
                  ['cabletv','=', $cableD],
                  ['telephone','=', $telephoneD],
                  ['diningtable','=',$diningD],

                  ])->get();
      }

      elseif($RT == "All")
      {
        $q1 = DB::table('room')->where([
                  ['nochildren','>=', $NC],
                  ['noadults','>=', $NA],
                  ['norooms','>=', $NR],
                  ['wifi','=', $wifiD],
                  ['airconditioned','=',$acD],
                  ['cabletv','=', $cableD],
                  ['telephone','=', $telephoneD],
                  ['diningtable','=',$diningD],

                  ])->get();
      }

      elseif($NR == "All")
      {
        $q1 = DB::table('room')->where([
                  ['nochildren','>=', $NC],
                  ['noadults','>=', $NA],
                  ['roomtype','=', $RT],
                  ['wifi','=', $wifiD],
                  ['airconditioned','=',$acD],
                  ['cabletv','=', $cableD],
                  ['telephone','=', $telephoneD],
                  ['diningtable','=',$diningD],

                  ])->get();
      }

      elseif($NA == "All")
      {
        $q1 = DB::table('room')->where([
                  ['nochildren','>=', $NC],
                  ['roomtype','=', $RT],
                  ['norooms','>=', $NR],
                  ['wifi','=', $wifiD],
                  ['airconditioned','=',$acD],
                  ['cabletv','=', $cableD],
                  ['telephone','=', $telephoneD],
                  ['diningtable','=',$diningD],

                  ])->get();
      }

      elseif($NC == "All")
      {
        $q1 = DB::table('room')->where([
                  ['roomtype','>=', $RT],
                  ['noadults','>=', $NA],
                  ['norooms','>=', $NR],
                  ['wifi','=', $wifiD],
                  ['airconditioned','=',$acD],
                  ['cabletv','=', $cableD],
                  ['telephone','=', $telephoneD],
                  ['diningtable','=',$diningD],

                  ])->get();
      }

      session(['checker' => 0]);
      return view('displayckeckAvail')->with('q1', $q1);
    }


}
