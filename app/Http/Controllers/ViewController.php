<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ViewController extends Controller
{
    //
    function showETS() {
        //source untuk data / proses bisnis yang di olah
        return view('ets');
    }

    function showTugasPHP(){
        return view('tugasPHP');
    }
}
