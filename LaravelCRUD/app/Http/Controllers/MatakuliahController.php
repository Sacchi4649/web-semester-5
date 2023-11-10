<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MatakuliahController extends Controller
{
    public function __construct(){
        $this->middleware('coba')->except('detailMatakuliah');
    }


    public function daftarMatakuliah(){
        return 'Form Penambahan Matakuliah';
    }
    
    public function tabelMatakuliah(){
        return 'Tabel Data Matakuliah';
    }

    public function detailMatakuliah(){
        return redirect('/games');
    }
}
