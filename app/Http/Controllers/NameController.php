<?php

namespace App\Http\Controllers;

use App\Name;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\App;
use Mockery\Exception;
use App\Http\Requests\CreateNameRequest;
class NameController extends Controller
{


    public function show_names()
    {
        $names = Name::all()->take(100)->get();
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
    public function save(CreateNameRequest $request, Name $names)
    {

        $names->create($request->all());

        return redirect()->route('show_names');
    }
}
