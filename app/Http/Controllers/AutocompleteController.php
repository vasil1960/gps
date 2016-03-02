<?php

namespace App\Http\Controllers;

use App\City;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class AutocompleteController extends Controller
{
    public function city_autocomplete(Request $request)
    {
        $data = City::where('PolpulatedPlace','LIKE', $request->term .'%')->take(20)->get();
        $results = [];
        foreach ($data as $key => $value) {
            $results[] = ['id'=>$value->ID, 'oblast'=>$value->Region, 'obshtina'=>$value->Municipality, 'grad'=>$value->PolpulatedPlace];
        }
       return response()->json($results);
    }

    public function city1_autocomplete(Request $request)
    {
        $data = City::where('PolpulatedPlace','LIKE', $request->term .'%')->take(20)->get();

       // dd($data);
       // $results = [];
        foreach ($data as $key => $value) {
           // $results[] = ['id'=>$value->ID, 'oblast'=>$value->Region, 'obshtina'=>$value->Municipality, 'text'=>$value->PolpulatedPlace];
           // dd($results);
            $results[$key]['id']   = $value->ID;
            $results[$key]['text'] = $value->PolpulatedPlace;
        }
        return response()->json($results);
        //return "{ \"results\": " . json_encode($city) . "}";
    }
}
