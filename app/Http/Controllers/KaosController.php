<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KaosController extends Controller
{
    //indexing data kaos
    public function index()
    {
        //DB::table('') -> get(); //mengembalikan array of object[][]

        // mengambil data dari table kaos
        $kaos = DB::table('kaos')->orderBy('merkkaos','asc')->paginate(5);

        // mengirim data kaos ke view index
        return view('kaos.index', ['kaos' => $kaos]); //passing value lebih dari 1

    }

    //fungsi search
    public function cari(Request $request)
	{
		$cari = $request->cari;
		$kaos = DB::table('kaos')
		->where('merkkaos','like',"%".$cari."%")
		->paginate(5);
		return view('kaos.index',['kaos' => $kaos]);
	}

    //fungsi tambah
    public function tambah()
    {
	    // memanggil view tambah
	    return view('kaos.tambah');
    }

    public function store(Request $request)
    {
        // insert data ke table kaos
        DB::table('kaos')->insert([
            'merkkaos' => $request->merk,
            'stockkaos' => $request->stock,
            'tersedia' => $request->tersedia
        ]);
        // alihkan halaman ke halaman kaos
        return redirect('/kaos');
    }

     // method untuk edit data kaos
     public function edit($id)
     {
         // mengambil data kaos berdasarkan id yang dipilih
         $kaos = DB::table('kaos')->where('kodekaos',$id)->get();
         // passing data kaos yang didapat ke view edit.blade.php
         return view('kaos.edit',['kaos' => $kaos]);
     }

    //method untuk update data kaos
    public function update(Request $request)
    {
        // update data kaos
        DB::table('kaos')->where('kodekaos',$request->id)->update([
            'merkkaos' => $request->merk,
            'stockkaos' => $request->stock,
            'tersedia' => $request->tersedia
        ]);
        // alihkan halaman ke halaman kaos
        return redirect('/kaos');
    }

    // method untuk hapus data kaos
    public function hapus($id)
    {
        // menghapus data kaos berdasarkan id yang dipilih
        DB::table('kaos')->where('kodekaos',$id)->delete();
        // alihkan halaman ke halaman kaos
        return back();
    }

    public function view($id){
        $penggaris = DB::table('kaos')->where('kodekaos',$id)->get();
        return view('kaos.detail',['kaos' => $penggaris]);
        }
}

