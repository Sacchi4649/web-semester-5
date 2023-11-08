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

    public function insert(){
        $result = DB::table('mahasiswas')->insert([
            'nim'=>'320201601',
            'nama'=>'Ahmad Dhani',
            'tanggal_lahir'=>'2001-12-31',
            'ipk'=>3.5,
            'created_at'=>now(),
            'updated_at'=>now(),
        ],
    );
        dump($result);
    }

    public function insertBanyak(){
        $result = DB::table('mahasiswas')->insert(
            [
            [
            'nim'=>'320201602',
            'nama'=>'Ariel',
            'tanggal_lahir'=>'2001-06-28',
            'ipk'=>3.4,
            'created_at'=>now(),
            'updated_at'=>now(),
            ],
            [
            'nim'=>'320201604',
            'nama'=>'Virzha',
            'tanggal_lahir'=>'1999-04-02',
            'ipk'=>2.7,
            'created_at'=>now(),
            'updated_at'=>now(),
            ]
        ],
    );
        dump($result);
    }

    public function update(){
        $result = DB::table('mahasiswas')
        ->where('nim','320201604')
        ->update(
            [
                'tanggal_lahir'=>'2002-01-01',
                'ipk'=>3.19,
                'updated_at'=>now(),
            ]
            );
            dump($result);
    }
    
    public function updateOrInsert(){
        $result = DB::table('mahasiswas')->updateOrInsert(
            [
                'nim' => '320201605',
            ],
            [
                'nama' => 'Once',
                'tanggal_lahir' => '2000-11-23',
                'ipk' => 2.7,
                'created_at' => now(),
                'updated_at' => now(),
            ]
            );
            dump($result);
    }

    public function delete(){
        $result = DB::table('mahasiswas')
        ->where('nim','>=','320201605')
        ->delete();
        dump($result);
    }

    public function get(){
        $result=DB::table('mahasiswas')->get();
        dump($result);
    }

    public function getTampil(){
        $result=DB::table('mahasiswas')->get();
        echo($result[0]->id).'<br>';
        echo($result[0]->nim).'<br>';
        echo($result[0]->nama).'<br>';
        echo($result[0]->tanggal_lahir).'<br>';
        echo($result[0]->ipk).'<br>';
    }

    public function getView(){
        $result=DB::table('mahasiswas')->get();
        return view('tampil-mahasiswa',['mahasiswas'=>$result]);
    }

    public function getWhere(){
        $result = DB::table('mahasiswas')
        ->where('nim','=','320201605')
        ->orderBy('nama', 'desc')
        ->get();
        return view('tampil-mahasiswa',['mahasiswas'=>$result]);
    }

    public function select(){
        $result=DB::table('mahasiswas')
        ->select('nim','nama as nama_mahasiswa')
        ->get();
        dump($result);
    }

    public function take(){
        $result=DB::table('mahasiswas')
        ->orderBy('nama','asc')->skip(2)->take(1)->get();
        return view('tampil-mahasiswa',['mahasiswas'=>$result]);
    }

    public function first(){
        $result=DB::table('mahasiswas')
        ->where('nama','Virzha')
        ->first();
        dump($result);
        // return view('tampil-mahasiswa',['mahasiswas'=>$result]);
    }

    public function find(){
        $result =DB::table('mahasiswas')->find(3);
        return view('tampil-mahasiswa',['mahasiswas'=>$result]);
    }

    public function raw(){
        $result=DB::table('mahasiswas')
        ->selectRaw('count(*) as total_mahasiswa')
        ->get();
        echo($result[0]->total_mahasiswa).'<br>'; //3
    }
}
?>