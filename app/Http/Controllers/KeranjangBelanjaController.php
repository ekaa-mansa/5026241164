<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class KeranjangBelanjaController extends Controller
{
    // 1. Menampilkan Halaman Index
    public function index()
    {
        $keranjangbelanja = DB::table('keranjangbelanja')->get();

        return view('index3', ['keranjangbelanja' => $keranjangbelanja]);
    }

    public function tambah()
    {
        return view('tambah2');
    }

    public function simpan(Request $request)
    {

        DB::table('keranjangbelanja')->insert([
            'KodeBarang' => $request->KodeBarang,
            'Jumlah'     => $request->Jumlah,
            'Harga'      => $request->Harga
        ]);

        return redirect('/keranjangbelanja');
    }

    public function hapus($id)
    {

        DB::table('keranjangbelanja')->where('ID', $id)->delete();

        return redirect('/keranjangbelanja');
    }
}
