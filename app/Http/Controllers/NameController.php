<?php

namespace App\Http\Controllers;

use App\Name;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\App;
use Mockery\Exception;

class NameController extends Controller
{


    public function show_names()
    {
        $names = Name::all();
        return view('gps.dashboard.names', compact('names'));
    }

    //
    public function add_names($rtype)
    {
        return view('gps.dashboard.add_names', compact('rtype'));
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
            $name->rtype = $request->rtype;
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
