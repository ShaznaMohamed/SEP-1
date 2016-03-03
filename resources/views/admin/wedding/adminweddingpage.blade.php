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
        function showmassage()
        {

          alert("succesfully updated");
        }
    </script>
</head>

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
                <th>Corkage</th>
                <th>Beer Local</th>
                <th>Iced Coffee</th>
                <th>Cutlery</th>

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
<main>
    <table>
        <form action="{{ url('adminweddingpage') }}" role="form" method="post">
            <tr>
                <td>
                <label for="start_time" class="control-label">Select Hall Type</label>
                <div class="form-group{{ $errors->has('halltype') ? ' has-error' : ''}}">
                    <div class="field"> <select name="halltype" id="halltype" class="infants">
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
                    <div class="field"><input name="advancepayment" type="text" placeholder="" id="contact-charge" /></div>
                    @if ($errors->has('advancepayment')) <span class="help-block">{{ $errors->first('advancepayment') }}</span> @endif
                </div>
                </td>
                <td>
                <label for="start_time" class="control-label">Minimum number of Pax</label>
                <div class="form-group{{ $errors->has('minimumpax') ? ' has-error' : ''}}">
                    <div class="field"><input name="minimumpax" type="text" placeholder="" id="contact-charge" /></div>
                    @if ($errors->has('minimumpax')) <span class="help-block">{{ $errors->first('minimumpax') }}</span> @endif
                </div>
                </td>

                <td>
                    <input type="hidden" name="_token" value="{!! csrf_token() !!}">
                    <div class="form-group">
                        <input type="text"  hidden="hidden" placeholder="<?php $row->halltype ?>" value="<?php echo $row->halltype ?>" name="id"/>
                        <h4><input type="submit" name="sub" value="Update" class="btn btn-default">
                        <span data-hover="Add"></span></h4>
                    </div>
                </td>
            </tr>

            <tr>
                <td>
                <label for="start_time" class="control-label">Additional Hour</label>
                <div class="form-group{{ $errors->has('additionalhour') ? ' has-error' : ''}}">
                    <div class="field"><input name="additionalhour" type="text" placeholder="" id="contact-name" ></div>
                    @if ($errors->has('additionalhour')) <span class="help-block">{{ $errors->first('additionalhour') }}</span> @endif
                </div>
                </td>
                <td>
                <label for="start_time" class="control-label">Full Payment</label>
                <div class="form-group{{ $errors->has('fullpayment') ? ' has-error' : ''}}">
                    <div class="field"><input name="fullpayment" type="text" placeholder="" id="contact-charge" /></div>
                    @if ($errors->has('fullpayment')) <span class="help-block">{{ $errors->first('fullpayment') }}</span> @endif
                </div>
                </td>
                <td>
                <label for="start_time" class="control-label">Corkage</label>
                <div class="form-group{{ $errors->has('corkage') ? ' has-error' : ''}}">
                    <div class="field"><input name="corkage" type="text" placeholder="" id="contact-charge" /></div>
                    @if ($errors->has('corkage')) <span class="help-block">{{ $errors->first('corkage') }}</span> @endif
                </div>
                </td>
            </tr>

            <tr>
                <td>
                <label for="start_time" class="control-label">Beer Local</label>
                <div class="form-group{{ $errors->has('beerlocal') ? ' has-error' : ''}}">
                    <div class="field"><input name="beerlocal" type="text" placeholder="" id="contact-name" ></div>
                    @if ($errors->has('beerlocal')) <span class="help-block">{{ $errors->first('beerlocal') }}</span> @endif
                </div>
                </td>
                <td>
                <label for="start_time" class="control-label">Iced Coffee</label>
                <div class="form-group{{ $errors->has('icedcoffee') ? ' has-error' : ''}}">
                    <div class="field"><input name="icedcoffee" type="text" placeholder="" id="contact-charge" /></div>
                    @if ($errors->has('icedcoffee')) <span class="help-block">{{ $errors->first('icedcoffee') }}</span> @endif
                </div>
                </td>
                <td>
                <label for="start_time" class="control-label">Cutlery</label>
                <div class="form-group{{ $errors->has('cutlery') ? ' has-error' : ''}}">
                    <div class="field"><input name="cutlery" type="text" placeholder="" id="contact-charge" /></div>
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
