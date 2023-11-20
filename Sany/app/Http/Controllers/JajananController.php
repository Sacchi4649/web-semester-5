<?php

namespace App\Http\Controllers;
use App\Models\Jajanan;
use Illuminate\Http\Request;

class JajananController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function massAssignment5Data(){
        $jajanan1 = Jajanan::create(
            [
                'kode_jajanan' => 'M001',
                'nama_jajanan' => 'Tahu Gejrot',
                'jenis' => 'makanan',
                'modal'=> '20000',
                'tanggal_pembuatan'=>'2023-11-20',
                'harga' => '10.500',
                'ketersediaan_stok' => true,
            ]
        );
            dump($jajanan1);

        $jajanan2 = Jajanan::create(
            [
                'kode_jajanan' => 'M002',
                'nama_jajanan' => 'Nasi Goreng',
                'jenis' => 'makanan',
                'modal'=> '25000',
                'tanggal_pembuatan'=>'2023-11-20',
                'harga' => '15.600',
                'ketersediaan_stok' => true,
            ]
        );
            dump($jajanan2);

        $jajanan3 = Jajanan::create(
            [
                'kode_jajanan' => 'N001',
                'nama_jajanan' => 'Es Doger',
                'jenis' => 'minuman',
                'modal'=> '15000',
                'tanggal_pembuatan'=>'2023-11-20',
                'harga' => '5.500',
                'ketersediaan_stok' => false,
            ]
        );
            dump($jajanan3);

        $jajanan4 = Jajanan::create(
            [
                'kode_jajanan' => 'N002',
                'nama_jajanan' => 'Es Cendol',
                'jenis' => 'minuman',
                'modal'=> '10000',
                'tanggal_pembuatan'=>'2023-11-20',
                'harga' => '15.400',
                'ketersediaan_stok' => true,
            ]
        );
            dump($jajanan4);

        $jajanan5 = Jajanan::create(
            [
                'kode_jajanan' => 'M003',
                'nama_jajanan' => 'Batagor',
                'jenis' => 'makanan',
                'modal'=> '25000',
                'tanggal_pembuatan'=>'2023-11-20',
                'harga' => '30.450',
                'ketersediaan_stok' => false,
            ]
        );
                dump($jajanan5);
    }
    public function index()
    {
        $jajanan = Jajanan::all();
        return view('sany-index',['jajanan'=>$jajanan]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('sany-insert-data');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validasi = $request->validate(
            [
                'kode_jajanan' => 'required|max:5|unique:jajanans',
                'nama_jajanan' => 'required',
                'jenis' => 'required|in:makanan,minuman',
                'modal' => 'required',
                'tanggal_pembuatan' => 'required',
                'harga' => 'required',
                'ketersediaan_stok' => 'required',
            ]
            );
            Jajanan::create($validasi);
            return redirect()->route('jajanan.index');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Jajanan $jajanan)
    {
        return view('sany-edit',['jajanan'=>$jajanan]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Jajanan $jajanan)
    {
        $validasi = $request->validate(
            [
                
                'nama_jajanan' => 'required',
                'jenis' => 'required|in:makanan,minuman',
                'modal' => 'required',
                'tanggal_pembuatan' => 'required',
                'harga' => 'required',
                'ketersediaan_stok' => 'required',
            ]
            );
    $jajanan->update($validasi);
    return redirect()->route('jajanan.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Jajanan $jajanan)
    {
        $jajanan->delete();
        return redirect()->route('jajanan.index');
    }
}
