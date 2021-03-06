@extends('layouts.adminmaster')
@section('maincontent')
    <header>
        <div id="header">
            <div class="h1">
                <h1><span>Manage Wedding Hall Charges</span></h1>
            </div>
        </div>
    </header>

    <script type="text/javascript">
        function showmessage()
        {
            confirm("succesfully updated");
        }

        function better()
        {

            var hallname  = document.getElementById("halltype").value;
            if(hallname == "samro") {

            <?php
                    $samroad="99";
                    $samropax =0;
                    $samroaddi = 0;
                    $samrofull =0;
                    $samrocorka = 0;
                    $samrobeer =0;
                    $samroice =0 ;
                    $samrocutler =0;
                    $tabledata = DB::table('weddingservices')->where('halltype', 'samro')->get();
                    foreach($tabledata as $row)
                    {
                        $samroad = $row->advancepayment;
                        $samropax= $row->minimumpax;
                        $samroaddi=$row->additionalhour;
                        $samrofull=$row->fullpayment;
                        $samrocorka=$row->corkage;
                        $samrobeer= $row->beerlocal;
                        $samroice=  $row->icedcoffee;
                        $samrocutler= $row->cutlery;
                    }
                    ?>


                document.getElementById("advance").value = "<?php echo $samroad ?>";
                document.getElementById("minpax").value = "<?php echo $samropax ?>";
                document.getElementById("addition").value = "<?php echo  $samroaddi ?>";
                document.getElementById("full").value = "<?php echo $samrofull ?>";
                document.getElementById("corkage").value = "<?php echo $samrocorka ?>";
                document.getElementById("beerlocal").value = "<?php echo  $samrobeer ?>";
                document.getElementById("iced").value = "<?php echo $samroice ?>";
                document.getElementById("cutlery").value = "<?php echo $samrocutler ?>";
            }

            var hallname  = document.getElementById("halltype").value;
            if(hallname == "poolside") {

                <?php
                        $samroad="99";
                        $samropax =0;
                        $samroaddi = 0;
                        $samrofull =0;
                        $samrocorka = 0;
                        $samrobeer =0;
                        $samroice =0 ;
                        $samrocutler =0;
                        $tabledata = DB::table('weddingservices')->where('halltype', 'poolside')->get();
                        foreach($tabledata as $row)
                        {
                            $samroad = $row->advancepayment;
                            $samropax= $row->minimumpax;
                            $samroaddi=$row->additionalhour;
                            $samrofull=$row->fullpayment;
                            $samrocorka=$row->corkage;
                            $samrobeer= $row->beerlocal;
                            $samroice=  $row->icedcoffee;
                            $samrocutler= $row->cutlery;
                        }
                        ?>


                    document.getElementById("advance").value = "<?php echo $samroad ?>";
                document.getElementById("minpax").value = "<?php echo $samropax ?>";
                document.getElementById("addition").value = "<?php echo  $samroaddi ?>";
                document.getElementById("full").value = "<?php echo $samrofull ?>";
                document.getElementById("corkage").value = "<?php echo $samrocorka ?>";
                document.getElementById("beerlocal").value = "<?php echo  $samrobeer ?>";
                document.getElementById("iced").value = "<?php echo $samroice ?>";
                document.getElementById("cutlery").value = "<?php echo $samrocutler ?>";
            }

            var hallname  = document.getElementById("halltype").value;
            if(hallname == "silver") {

                <?php
                        $samroad="99";
                        $samropax =0;
                        $samroaddi = 0;
                        $samrofull =0;
                        $samrocorka = 0;
                        $samrobeer =0;
                        $samroice =0 ;
                        $samrocutler =0;
                        $tabledata = DB::table('weddingservices')->where('halltype', 'silver')->get();
                        foreach($tabledata as $row)
                        {
                            $samroad = $row->advancepayment;
                            $samropax= $row->minimumpax;
                            $samroaddi=$row->additionalhour;
                            $samrofull=$row->fullpayment;
                            $samrocorka=$row->corkage;
                            $samrobeer= $row->beerlocal;
                            $samroice=  $row->icedcoffee;
                            $samrocutler= $row->cutlery;
                        }
                        ?>


                    document.getElementById("advance").value = "<?php echo $samroad ?>";
                document.getElementById("minpax").value = "<?php echo $samropax ?>";
                document.getElementById("addition").value = "<?php echo  $samroaddi ?>";
                document.getElementById("full").value = "<?php echo $samrofull ?>";
                document.getElementById("corkage").value = "<?php echo $samrocorka ?>";
                document.getElementById("beerlocal").value = "<?php echo  $samrobeer ?>";
                document.getElementById("iced").value = "<?php echo $samroice ?>";
                document.getElementById("cutlery").value = "<?php echo $samrocutler ?>";
            }


            var hallname  = document.getElementById("halltype").value;
            if(hallname == "grand") {

                <?php
                        $samroad="99";
                        $samropax =0;
                        $samroaddi = 0;
                        $samrofull =0;
                        $samrocorka = 0;
                        $samrobeer =0;
                        $samroice =0 ;
                        $samrocutler =0;
                        $tabledata = DB::table('weddingservices')->where('halltype', 'grand')->get();
                        foreach($tabledata as $row)
                        {
                            $samroad = $row->advancepayment;
                            $samropax= $row->minimumpax;
                            $samroaddi=$row->additionalhour;
                            $samrofull=$row->fullpayment;
                            $samrocorka=$row->corkage;
                            $samrobeer= $row->beerlocal;
                            $samroice=  $row->icedcoffee;
                            $samrocutler= $row->cutlery;
                        }
                        ?>


                    document.getElementById("advance").value = "<?php echo $samroad ?>";
                document.getElementById("minpax").value = "<?php echo $samropax ?>";
                document.getElementById("addition").value = "<?php echo  $samroaddi ?>";
                document.getElementById("full").value = "<?php echo $samrofull ?>";
                document.getElementById("corkage").value = "<?php echo $samrocorka ?>";
                document.getElementById("beerlocal").value = "<?php echo  $samrobeer ?>";
                document.getElementById("iced").value = "<?php echo $samroice ?>";
                document.getElementById("cutlery").value = "<?php echo $samrocutler ?>";
            }





        }


    </script>

    <body>
<!--retrieving data from weddingservices table -->
    <div class="centre">
        <h2>Wedding Hall Features</h2>

        <?php $tabledata = DB::table('weddingservices')->get(); ?>
        <main>
            <table>
                <thead>
                <th>Hall Type</th>
                <th>Advance Payment</th>
                <th>Minimum Pax</th>
                <th>Additional Hour</th>
                <th>Full Payment</th>
                <th>Corkage (per person)</th>
                <th>Beer Local (per person)</th>
                <th>Iced Coffee (per person)</th>
                <th>Cutlery (per person)</th>

                </thead>
                <tbody>
                <?php
                foreach($tabledata as $row)
                {
                ?>
                <tr>
                    <td><?php echo $row->halltype; ?></td>
                    <td><?php echo $row->advancepayment; ?></td>
                    <td><?php echo $row->minimumpax; ?></td>
                    <td><?php echo $row->additionalhour; ?></td>
                    <td><?php echo $row->fullpayment; ?></td>
                    <td><?php echo $row->corkage; ?></td>
                    <td><?php echo $row->beerlocal; ?></td>
                    <td><?php echo $row->icedcoffee; ?></td>
                    <td><?php echo $row->cutlery; ?></td>
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

    @if(Session::has('message19'))
        <div class="alert alert-danger">
            <label style="color: red" class="close"  data-dismiss="alert" aria-hidden="true"></label>
            <strong style="color: red">Failed!</strong> {{ Session::get('message19', '') }}
        </div>
    @endif

    @if(Session::has('message20'))
        <div class="alert alert-success">
            <label class="close" data-dismiss="alert" aria-hidden="true"></label>
            <strong style="color: green">Success!</strong> {{ Session::get('message20', '') }}
        </div>
    @endif


<main>
    <table>
        <form action="{{ url('adminweddingpage') }}" role="form" method="post">
            <tr>
                <td>
                <label for="start_time" class="control-label">Select Hall Type</label>
                <div class="form-group{{ $errors->has('halltype') ? ' has-error' : ''}}">
                    <div class="field"> <select name="halltype" id="halltype" class="infants" onchange="better()">
                            <option value="samro" selected="selected">Samro Reception</option>
                            <option value="poolside" >Pool side ball room</option>
                            <option value="silver" >Silver ball room</option>
                            <option value="grand" >Grand ball room</option>
                        </select>
                    </div>
                    @if ($errors->has('halltype')) <span class="help-block">{{ $errors->first('halltype') }}</span> @endif
                </div>
                </td>

                <td>
                <label for="start_time" class="control-label">Advance Payment</label>
                <div class="form-group{{ $errors->has('advancepayment') ? ' has-error' : ''}}">
                    <div class="field"><input name="advancepayment" type="text" placeholder="" id="advance" /></div>
                    @if ($errors->has('advancepayment')) <span class="help-block">{{ $errors->first('advancepayment') }}</span> @endif
                </div>
                </td>


                <td>
                <label for="start_time" class="control-label">Minimum number of Pax</label>
                <div class="form-group{{ $errors->has('minimumpax') ? ' has-error' : ''}}">
                    <div class="field"><input name="minimumpax" type="text" placeholder="" id="minpax" /></div>
                    @if ($errors->has('minimumpax')) <span class="help-block">{{ $errors->first('minimumpax') }}</span> @endif
                </div>
                </td>

                <td>
                    <input type="hidden" name="_token" value="{!! csrf_token() !!}">
                    <div class="form-group">
                        <input type="text"  hidden="hidden" placeholder="<?php $row->halltype ?>" value="<?php echo $row->halltype ?>" name="id"/>
                        <h4><input type="submit" name="updtebtn" value="Update" class="btn btn-default">
                        <span data-hover="Add"></span></h4>
                    </div>
                </td>
            </tr>

            <tr>
                <td>
                <label for="start_time" class="control-label">Additional Hour</label>
                <div class="form-group{{ $errors->has('additionalhour') ? ' has-error' : ''}}">
                    <div class="field"><input name="additionalhour" type="text" placeholder="" id="addition" ></div>
                    @if ($errors->has('additionalhour')) <span class="help-block">{{ $errors->first('additionalhour') }}</span> @endif
                </div>
                </td>
                <td>
                <label for="start_time" class="control-label">Full Payment</label>
                <div class="form-group{{ $errors->has('fullpayment') ? ' has-error' : ''}}">
                    <div class="field"><input name="fullpayment" type="text" placeholder="" id="full" /></div>
                    @if ($errors->has('fullpayment')) <span class="help-block">{{ $errors->first('fullpayment') }}</span> @endif
                </div>
                </td>
                <td>
                <label for="start_time" class="control-label">Corkage</label>
                <div class="form-group{{ $errors->has('corkage') ? ' has-error' : ''}}">
                    <div class="field"><input name="corkage" type="text" placeholder="" id="corkage" /></div>
                    @if ($errors->has('corkage')) <span class="help-block">{{ $errors->first('corkage') }}</span> @endif
                </div>
                </td>
            </tr>

            <tr>
                <td>
                <label for="start_time" class="control-label">Beer Local</label>
                <div class="form-group{{ $errors->has('beerlocal') ? ' has-error' : ''}}">
                    <div class="field"><input name="beerlocal" type="text" placeholder="" id="beerlocal" ></div>
                    @if ($errors->has('beerlocal')) <span class="help-block">{{ $errors->first('beerlocal') }}</span> @endif
                </div>
                </td>
                <td>
                <label for="start_time" class="control-label">Iced Coffee</label>
                <div class="form-group{{ $errors->has('icedcoffee') ? ' has-error' : ''}}">
                    <div class="field"><input name="icedcoffee" type="text" placeholder="" id="iced" /></div>
                    @if ($errors->has('icedcoffee')) <span class="help-block">{{ $errors->first('icedcoffee') }}</span> @endif
                </div>
                </td>
                <td>
                <label for="start_time" class="control-label">Cutlery</label>
                <div class="form-group{{ $errors->has('cutlery') ? ' has-error' : ''}}">
                    <div class="field"><input name="cutlery" type="text" placeholder="" id="cutlery" /></div>
                    @if ($errors->has('cutlery')) <span class="help-block">{{ $errors->first('cutlery') }}</span> @endif
                </div>
                </td>

            </tr>

         </form>
    </table>
</main>
    </div>
<!--form ends-->


</body>
@endsection

