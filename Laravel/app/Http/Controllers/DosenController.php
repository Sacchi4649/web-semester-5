<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Dosen;

class DosenController extends Controller
{
    public function showDosen(){
        $arrDosen = [
            "Lindung Siswanto, S.Kom., M.Eng",
            "Tomi Suryanto, S.Kom.,M.T.",
            "Sarah Bibi, S.ST.M.Pd",
            "Tri Bowo Atmojo, S.T,M.Cs."
        ];
    
        return view('dosen')->with('dosen', $arrDosen);
    }

    public function cekObject(){
        $dosen = new Dosen;
        dump($dosen);
    }

    public function insert(){
        $dosen = new Dosen;

    }

    public function massAssignment(){
        $result = Dosen::create(
            [
                'nip'=>'198002232019030314',
                'nama'=>'Zero',
                'gender'=>'male',
                'tahun'=>'2015',
                
            ]
            );
            dump($result);
            return "Berhasil diproses";
    }
}
