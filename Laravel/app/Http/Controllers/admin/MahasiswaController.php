<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Response;
class MahasiswaController extends Controller
{
    public function sanyAdikaPrayata(){
        $data=["NIM"=>"3202116097","Nama Lengkap"=>"Sany Adika Prayata","Alamat"=>"Pontianak",
        "Email"=>"sany@gmail.com","No. Handphone"=>"081254933841"];
        
        return Response::json([
            $data
        ]);
    }

    public function showMahasiswa(){
        $arrMahasiswa = ["Weni Winarti", "Reka Diah", "Rizky Saputra", "Alfian Teddy"];
        return view('mahasiswa')->with('mahasiswa', $arrMahasiswa);
    }
    public function index()
    {
        return "Halaman Utama";
    }
    public function tampil()
    {
        $arrMahasiswa = ["Lukito Edi", "Rudiyanto", "Kusumawardhani", "Agung Laksono"];
        return view('jurusan.mahasiswa')->with('mahasiswa', $arrMahasiswa);
    }

    public function latihanFacade1()
    {
        echo \Illuminate\Support\Str::snake('belajar laravel menyenangkan'); //snake case
        echo "<br>";
        echo \Illuminate\Support\Str::kebab('belajar laravel menyenangkan'); //kebab case
        echo "<br>";
        echo \Illuminate\Support\Str::studly('belajar laravel menyenangkan'); //Pascal case
        echo "<br>";
        echo \Illuminate\Support\Str::camel('belajar laravel menyenangkan'); //Camel case

    }

    public function latihanFacade2()
    {
        echo Str::snake('belajar laravel menyenangkan'); //snake case
        echo "<br>";
        echo Str::kebab('belajar laravel menyenangkan'); //kebab case
        echo "<br>";
        echo Str::studly('belajar laravel menyenangkan'); //Pascal case
        echo "<br>";
        echo Str::camel('belajar laravel menyenangkan'); //Camel case
    }
}
?>