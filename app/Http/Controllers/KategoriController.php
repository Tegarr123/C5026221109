<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class KategoriController extends Controller
{
    public function combo()
	{
        $kategori = DB::table('kategori')->get();
    	// mengirim data pegawai ke view index
		return view('combo',['kategori' => $kategori]);
	}
    public function comboRequest(Request $request){
        $kategori = DB::table('kategori')->where('Nama',$request->pilihkategori)->get();
        return redirect('hasilcombo/'.$request->pilihkategori);
    }
    public function hasilcombo($kat){
        $kategori = DB::table('kategori')->where('Nama',$kat)->get();
        return view('hasilcombo', ['kategori'=>$kategori]);
    }
}
