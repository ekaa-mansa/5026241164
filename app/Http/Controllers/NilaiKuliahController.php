<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class NilaiKuliahController extends Controller
{
    public function index()
    {
        $nilaikuliah = DB::table('nilaikuliah')->get();

        return view('index2', ['nilaikuliah' => $nilaikuliah]);

    }

    public function tambah()
    {
        return view('tambah1');
    }

    public function simpan(Request $request)
    {
        DB::table('nilaikuliah')->insert([
            'NRP' => $request->NRP,
            'NilaiAngka' => $request->NilaiAngka,
            'SKS' => $request->SKS
        ]);

        return redirect('/nilaikuliah');
    }
}
