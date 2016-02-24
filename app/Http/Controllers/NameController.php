<?php

namespace App\Http\Controllers;

use App\Name;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\City;
use Mockery\Exception;

class NameController extends Controller
{
    //
    public function index($rtype)
    {
        $citys = City::all();
        return view('gps.dashboard.index', compact('citys','rtype'));
    }

    //
    public function autocomplete(Request $request) 
    {
        $term = $request->term;
        $data = City::where('PolpulatedPlace','LIKE', $term .'%')->take(10)->get();
        $results = [];
        foreach ($data as $key => $value) {
            $results[] = ['id'=>$value->ID, 'oblast'=>$value->Region, 'obshtina'=>$value->Municipality, 'grad'=>$value->PolpulatedPlace];
        }
        return response()->json($results);
    }

    //
    public function blank()
    {
        return view('gps.dashboard.blank');
    }

    //
    public function save(Request $request)
    {
        try {
            $name = new Name;
            $name->name = $request->name;
            $name->surname = $request->surname;
            $name->family = $request->family;
            $name->egn_eik = $request->egn_eik;
            $name->rtype = 1;
            $name->city = $request->city;
            $name->pcode = $request->pcode;
            $name->address = $request->address;
            $name->phone = $request->phone;
            $name->email = $request->email;
            $name->description = $request->description;
            $name->notes = $request->notes;
            $name->insert_from = 257;
            $name->update_from = 257;
            $name->remember_token = $request->_token;
            $name->save();
            return response()->json(array('sms' => 'Данните са въведени успешно'));
        } catch (Exception $e) {
            return response()->json(array('err' => 'Грешно въвеждане'));
        }
    }
}
