<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function admin()
    {
        $sarkom = DB::table('sarkom')->count();
        $galeri = DB::table('galeri')->count();

        return view('pages/admin/dashboard',['sarkom'=>$sarkom,'galeri'=>$galeri]);
    }
    public function sarkom(){
        $sarkom = DB::table('sarkom')->get();

        return view('pages/admin/sarkom',['sarkom'=>$sarkom]);
    }

    // Galeri_Start
    public function galeri(){
        $galeri = DB::table('galeri')->get();

        return view('pages/admin/manage_galeri',['galeri'=>$galeri]);
    }
    public function add_foto(){

        return view('pages/admin/tambah_foto');
    }
    public function upload_foto(Request $request){

        $this->validate($request, [
            'foto' => 'required|file|image|mimes:jpeg,png,jpg|max:2048',
        ]);
        $file_foto = $request->file('foto');
        $nama_file = time()."_".$file_foto->getClientOriginalName();
        $tujuan_upload = "file_galeri";
        $file_foto->move($tujuan_upload,$nama_file);

        DB::table('galeri')->insert([
            'judul_galeri'=>$request->judul,
            'foto_galeri'=>$nama_file
        ]);
        return redirect('/admin/manage_galeri')->with('alert','Berhasil Menambah Foto');
    }
    public function delete_foto($id){

        DB::table('galeri')->where('id_galeri',$id)->delete();

        return redirect('/admin/manage_galeri')->with('alert','Berhasil Menghapus Foto');
    }
    public function edit_foto($id){
        $galeri = DB::table('galeri')->where('id_galeri',$id)->get();

        return view('pages/admin/edit_galeri',['galeri'=>$galeri]);
    }
    public function update_foto(Request $request){
        $this->validate($request,[
            'foto' => 'file|image|mimes:jpeg,png,jpg|max:2048',
        ]);
        if ($request->foto = NULL) {
            DB::table('galeri')
            ->where('id_galeri',$request->id)
            ->update([
                'judul_galeri'=>$request->judul
            ]);
            return redirect('/admin/manage_galeri')->with('alert','Berhasil Mengubah Gambar');
        }
        else{
            $file_foto = $request->file('foto');
            $nama_file = time()."_".$file_foto->getClientOriginalName();
            $tujuan_upload = "file_galeri";
            $file_foto->move($tujuan_upload,$nama_file);

            DB::table('galeri')
            ->where('id_galeri',$request->id)
            ->update([
                'judul_galeri'=>$request->judul,
                'foto_galeri'=>$nama_file
            ]);
            return redirect('/admin/manage_galeri')->with('alert','Berhasil Mengubah Gambar');
        }
    }
}
