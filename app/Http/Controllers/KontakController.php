<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class KontakController extends Controller
{
    public function index()
    {
    	// mengambil data dari table
    	$kontak = DB::table('kontak')->get();
 
    	// mengirim data ke view
    	return view('Vkontak',['kontak' => $kontak]);
 
    }

	public function tambah(Request $request)
    {
    	DB::table('kontak')->insert([
			'kd_kontak' => $request->kd_kontak,
			'nama_kontak' => $request->nama_kontak,

		]);
		// alihkan halaman ke halaman berita
		return redirect('/kontak');
 
    }

}
