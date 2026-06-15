<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class TagihanAirController extends Controller
{
    public function index()
    {
        $tagihan_air = DB::table('tagihan_air')->get();
        return view('halamanindex', ['tagihan_air' => $tagihan_air]);
    }

    public function tambah()
    {
        return view('tambahtagihanair');
    }

    public function simpan(Request $request)
    {
        DB::table('tagihan_air')->insert([
            'NoMeteran' => $request->NoMeteran,
            'MeterAwal' => $request->MeterAwal,
            'MeterAkhir' => $request->MeterAkhir
        ]);

        return redirect('/eas');
    }
}