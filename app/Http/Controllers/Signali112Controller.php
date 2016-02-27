<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\App;
use App\Signal;
class Signali112Controller extends Controller
{
    public function allSignals ()
    {
        $signals = Signal::all();
        return view('112.signali',compact('signals'));
    }
}
