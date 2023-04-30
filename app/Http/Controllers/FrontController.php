<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FrontController extends Controller
{
    public function index(){
        $galeri = DB::table('galeri')->get();

        return view('pages/index',['galeri'=>$galeri]);
    }
    public function add_sarkom(Request $request){
    	DB::table('sarkom')->insert([
    		'nama_sarkom'=>$request->nama,
    		'email_sarkom'=>$request->email,
    		'isi_sarkom'=>$request->sarkom
    	]);
    	return redirect('/kontak')->with('alert','Terimakasih Telah Memberi Kami Saran');
    }
    public function galeri(){
    	$galeri = DB::table('galeri')->get();

    	return view('pages/galeri',['galeri'=>$galeri]);
    }
}
