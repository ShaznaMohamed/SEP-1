<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\packageModel;
use DB;
use App\Http\Controllers\Controller;

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
            'package_name' => 'required',
            'package_type' => 'required',
            'price' => 'required',
            'descrip' => 'required',
            'start_time' => 'required',
            'end_time' => 'required',
        ]);

        packageModel::create([
            'package_name' => $request->input('package_name'),
            'package_type' => $request->input('package_type'),
            'price' => $request->input('price'),
            'descript' => $request->input('descrip'),
            'start_date' => $request->input('start_time'),
            'end_date' => $request->input('end_time'),


        ]);
            return redirect()
            ->route('home')
            ->with('info', 'You have added a new package !');



    }

}
