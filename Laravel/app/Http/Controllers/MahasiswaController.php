<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Mahasiswa;
use Illuminate\Support\Facades\DB;


class MahasiswaController extends Controller
{
    public function cekObject(){
        $mahasiswa = new Mahasiswa;
        dump ($mahasiswa);
    }

    public function insert(){
        $mahasiswa = new Mahasiswa;
        $mahasiswa->id=6;
        $mahasiswa -> nim = '320201606';
        $mahasiswa -> nama = 'Armand';
        $mahasiswa -> tanggal_lahir = '2001-12-31';
        $mahasiswa -> alamat = 'Jl. Raya';
        $mahasiswa -> ipk = 3.5;
        $mahasiswa->save();
        dump($mahasiswa);
    }

    public function massAssignment(){
        Mahasiswa::create(
            [
                'nim' => '320201602',
                'nama'=> 'Ruth Sahanaya',
                'tanggal_lahir'=> '2003-08-22',
                'alamat'=> 'Jl. Ampera',
                'ipk'=> '3.5',
            ]
            );
            return "Berhasil diproses";
    
    }

    public function massAssignment2(){
        $mahasiswa1 = Mahasiswa::create(
            [
                'nim' => '320201603',
                'nama' => 'Titi DJ',
                'tanggal_lahir' => '2003-10-19',
                'alamat'=>'Jl. Sungai Jawi',
                'ipk' => '3.01',
            ]
        );
            dump($mahasiswa1);

        $mahasiswa2 = Mahasiswa::create(
            [
                'nim' => '320201604',
                'nama' => 'Akmal',
                'tanggal_lahir' => '2001-11-12',
                'alamat'=>'Jl. Dr.Sutomo',
                'ipk' => '2.98',
            ]
        );
            dump($mahasiswa2);

        $mahasiswa3 = Mahasiswa::create(
            [
                'nim' => '320201605',
                'nama' => 'Ridho',
                'tanggal_lahir' => '2000-05-09',
                'alamat'=>'Jl. Ahmad Yani',
                'ipk' => '3.78',
            ]
        );
            dump($mahasiswa3);
    }

    public function update(){
        $mahasiswa = Mahasiswa::find(1);
        $mahasiswa->tanggal_lahir='2000-10-30';
        $mahasiswa->ipk = 3.33;
        $mahasiswa->save();
        dump($mahasiswa);
    }

    public function updateWhere(){
        $mahasiswa = Mahasiswa::where('nim','320201605')->first();
        $mahasiswa->tanggal_lahir='2010-12-31';
        $mahasiswa->ipk = 4.0;
        $mahasiswa->save();
        dump($mahasiswa);
    }

    public function delete(){
        $mahasiswa = Mahasiswa::find(1);
        $mahasiswa= $mahasiswa->delete();
        dump($mahasiswa);
    }

    public function destroy(){
        $mahasiswa = Mahasiswa::destroy(1);
        dump($mahasiswa);
    }

    public function all (){
        $result = Mahasiswa::all();
        foreach($result as $mahasiswa){
            echo($mahasiswa->id).'<br>';
            echo($mahasiswa->nim).'<br>';
            echo($mahasiswa->nama).'<br>';
            echo($mahasiswa->tanggal_lahir).'<br>';
            echo($mahasiswa->alamat).'<br>';
            echo($mahasiswa->ipk).'<br>';
            echo "<hr>";
        }
        // dump($result);
    }

    public function allView(){
        $mahasiswas = Mahasiswa::all();
        return view('tampil-mahasiswa',['mahasiswas' => $mahasiswas]);
    }

    public function getWhere(){
        $mahasiswas = Mahasiswa::where('ipk','>','3.0')
        ->orderBy('nama','desc')
        ->get();
        return view('tampil-mahasiswa',['mahasiswas'=> $mahasiswas]);
    }
    
    public function first(){
        $mahasiswa = Mahasiswa::where('tanggal_lahir','2001-12-31')->first();
        return view('tampil-mahasiswa',['mahasiswas'=> $mahasiswa]);
    }

    public function softDelete(){
        Mahasiswa::where('nim','320201606')->delete();
        return "Berhasil dihapus";
    }

    public function getQueryBuilder(){
        $result = DB::table('mahasiswas')
        ->where('nim','=','320201605')
        ->get();
        echo $result;
        // return view('tampil-mahasiswa',['mahasiswas'=>$result]);
    }

    public function selectWhere(){
        $result = DB::select(
            'SELECT * FROM mahasiswas WHERE nim =320201605'
            );
         return view('tampil-mahasiswa',['mahasiswas'=>$result]);
    }

    public function withTrashed(){
        $mahasiswas = Mahasiswa::withTrashed()->get();
        return view('tampil-mahasiswa',['mahasiswas'=>$mahasiswas]);
    }

    public function restore(){
        Mahasiswa::withTrashed()->where('nim','320201605')->restore();
        return 'Berhasil di restore';
    }

    public function forceDelete(){
        Mahasiswa::where('nim','320201605')->forceDelete();
        return 'Berhasil dihapus secara permanen';
    }
}
?>
