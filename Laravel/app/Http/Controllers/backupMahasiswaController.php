<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MahasiswaController extends Controller
{
    
    public function index()
    {
        return "Berhasil diproses";
    }

    public function insertSql(){
        $result = DB::insert("INSERT INTO mahasiswas(nim,nama,tanggal_lahir,ipk, created_at, updated_at) 
        VALUES (?,?,?,?,?,?)",  
        ['32021603','Nicholas Saputra','2000-09-10',3.81,now(),now()]);
        dump($result);
    }

    public function insertBinding(){
        $result = DB::insert("INSERT INTO mahasiswas(nim,nama,tanggal_lahir,ipk, created_at, updated_at) 
        VALUES (:nim, :nama, :tgl, :ipk, :created, :updated)",
        [
            'nim' => '32021604',
            'nama' => 'Lidya Cheryl',
            'tgl' => '2002-05-06',
            'ipk' => 3.50,
            'created' => now(),
            'updated' => now()
        ]
    );
    dump($result);
    }

    public function update(){
        $result = DB::update('UPDATE mahasiswas SET created_at = now(),
        updated_at = now()
        WHERE nim =?',['32021601']);
        dump($result);
    }

    public function delete(){
        $result = DB::delete('DELETE FROM mahasiswas
        WHERE nama =?',['Lidya Cheryl']);
        dump($result);
    }

    public function select(){
        $result=DB::select('SELECT * FROM mahasiswas');
        dump ($result);
    }

    public function selectTampil(){
        $result=DB::select('SELECT * FROM mahasiswas');
        echo($result[0]->id).'<br>';
        echo($result[0]->nim).'<br>';
        echo($result[0]->nama).'<br>';
        echo($result[0]->tanggal_lahir).'<br>';
        echo($result[0]->ipk).'<br>';
    }

    public function selectView(){
        $result = DB::select('SELECT * FROM mahasiswas');
        return view('tampil-mahasiswa',['mahasiswas'=>$result]);
    }

    public function selectWhere(){
        $result = DB::select(
            'SELECT * FROM mahasiswas WHERE ipk > ? ORDER BY nama ASC ',[3.65]
        );
        return view('tampil-mahasiswa',['mahasiswas'=>$result]);
    }

    public function statement(){
        $result = DB::statement('TRUNCATE mahasiswas');
        return('Tabel mahasiswas sudah dikosongkan');
    }
}
?>