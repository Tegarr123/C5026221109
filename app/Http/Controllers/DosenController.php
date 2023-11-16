<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DosenController extends Controller
{
    //
    public function index(){
        $a = 8;
        $b = 5;
        $c = $a * $b;
    	return view('ETS');
    }
    public function biodata(){
    	$nama = "Ahmad Fadhino Tegar Permana";
        $alamat = "Surabaya";
        $umur = 21;
    	return view('biodata',['nama' => $nama, 'Alamat'=>$alamat, 'Umur'=>$umur]);
    }
    public function showtime($jam){
        return $jam;
    }
}
