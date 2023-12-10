<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class NilaiKuliahController extends Controller
{
    //
    public function halamanTambah(){
        return view('tambahData');
    }
    public function nilaiKuliah(){
        $nilaiKuliah = DB::table('nilaikuliah')->get();
        return view('nilaiKuliah', ['nilaikuliah' => $nilaiKuliah]);
    }
    public function buatData(Request $request){
        DB::table('nilaikuliah')->insert([
			'NRP' => $request->NRP,
			'NilaiAngka' => $request->NilaiAngka,
			'SKS' => $request->SKS
		]);
		// alihkan halaman ke halaman pegawai
		return redirect('/nilaikuliah');
    }
}
