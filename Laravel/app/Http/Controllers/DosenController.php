<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
}
