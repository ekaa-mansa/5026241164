<?php

namespace App\Http\Controllers;
//sama kayak package

use Illuminate\Http\Request;
//sama kayak import

class DosenController extends Controller
{
    public function index(){
    return "<h1>Halo ini adalah method index, dalam controller DosenController. - www.malasngoding.com</h1>";
    }
    public function biodata(){
        $nama = "Eka Destriana Putri";
        $pelajaran = ["Algoritma & Pemrograman","Kalkulus","Pemrograman Web"];
    	return view('biodata',['nama' => $nama, 'matkul' => $pelajaran]);
    }
}
