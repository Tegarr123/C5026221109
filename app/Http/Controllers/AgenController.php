<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class AgenController extends Controller
{
    //
    public function agen()
	{
    	// mengambil data dari table pegawai
		// $pegawai = DB::table('pegawai')->get();
        $agen = DB::table('agen')->paginate(15);
    	// mengirim data pegawai ke view index
		return view('agen',['agen' => $agen]);

	}
    public function tambahAgen()
	{

		// memanggil view tambah
		return view('tambahAgen');

	}
    public function storeAgen(Request $request)
	{
		// insert data ke table pegawai
		DB::table('agen')->insert([
			'namaagen' => $request->namaagen,
			'jumlahagen' => $request->jumlahagen,
			'tersedia' => $request->tersedia
		]);
		// alihkan halaman ke halaman pegawai
		return redirect('/agen');

	}
    public function editAgen($kodeagen)
	{
		// mengambil data pegawai berdasarkan id yang dipilih
		$agen = DB::table('agen')->where('kodeagen',$kodeagen)->get();
		// passing data pegawai yang didapat ke view edit.blade.php
		return view('editAgen',['agen' => $agen]);

	}
    public function updateAgen(Request $request, $kodeagen)
	{
		// update data pegawai
		DB::table('agen')->where('kodeagen',$request->kodeagen)->update([
			'namaagen' => $request->namaagen,
			'jumlahagen' => $request->jumlahagen,
			'tersedia' => $request->tersedia
		]);
        return redirect('/agen/view/'.$kodeagen);
		// alihkan halaman ke halaman pegawai
	}
    public function hapusAgen($kodeagen)
	{
		// menghapus data pegawai berdasarkan id yang dipilih
		DB::table('agen')->where('kodeagen',$kodeagen)->delete();

		// alihkan halaman ke halaman pegawai
		return redirect('/agen');
	}
    public function cariAgen(Request $request)
	{
		// menangkap data pencarian
		$cari = $request->cari;

    		// mengambil data dari table pegawai sesuai pencarian data
		$agen = DB::table('agen')
		->where('namaagen','like',"%".$cari."%")
		->paginate();

    		// mengirim data pegawai ke view index
		return view('agen',['agen' => $agen, 'cari' => $cari]);

	}
    public function viewAgen($kodeagen){
        $agen = DB::table('agen')->where('kodeagen',$kodeagen)->get();
        return view('viewAgen', ['agen'=>$agen]);
    }
}
