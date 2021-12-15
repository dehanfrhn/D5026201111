<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EasController extends Controller
{
    //
    public function index(Request $request)
    {
    	// mengambil data dari table pagecounter
        $pagecounter = DB::table('pagecounter')->paginate(2);

        DB::table('pagecounter')->increment('Jumlah');
    	return view('eas',['pagecounter' => $pagecounter]);

    }
}
