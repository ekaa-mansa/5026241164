<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class BusController extends Controller
{
     public function index()
    {
        $nilaikuliah = DB::table('bus')->get();

        return view('index4', ['bus' => $nilaikuliah]);

    }

    public function tambah()
    {
        return view('tambah3');
    }

    public function simpan(Request $request)
    {
    $statusTersedia = ($request->JumlahBus > 0) ? 'Y' : 'T';

    DB::table('bus')->insert([
        'merkbus' => $request->MerkBus,
        'jumlahbus' => $request->JumlahBus,
        'tersedia' => $statusTersedia
    ]);

    return redirect('/bus');
}

    public function hapus($id)
    {
    DB::table('bus')->where('kodebus', $id)->delete();
    return redirect('/bus');
    }
}

