<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\packageModel;
use DB;
use App\Http\Controllers\Controller;


/*
*
*
This controller is responsible for the updating of the special packages of the system such as
discounts and promos.
*/

class packageController extends Controller
{
    public function editPackages()
    {

        return view('specials/specialsManage');
    }

    public function getPackages()
    {
        $data = DB::table('packages')->orderBy('id','desc')->first();
        return view('specials/specials',
                    ['data' => $data->package_name],
                    ['type' => $data->package_type]
                   );
    }

    public function postPackUpdate(Request $request)
    {
        $this->validate($request,[
            'package_name' => 'required|unique:packages',
            'package_type' => 'required',
            'descrip' => 'required',
            'start_time' => 'required|date',
            'end_time' => 'required',
        ]);

        packageModel::create([
            'package_name' => $request->input('package_name'),
            'package_type' => $request->input('package_type'),
            'descript' => $request->input('descrip'),
            'start_date' => $request->input('start_time'),
            'end_date' => $request->input('end_time'),


        ]);
            return redirect()
            ->route('home')
            ->with('info', 'You have added a new package !');



    }

}
