<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data Jajanan</title>
</head>
<body>
    <div>
        <div>
            <div>
                <div>
                    <h2>Data Jajanan</h2>
                    <a href="{{ route('jajanan.create') }}" class="btn btn-primary">Tambah Data</a>
                </div>
                
                <table>
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Kode Jajanan</th>
                            <th>Nama Jajanan</th>
                            <th>Modal</th>
                            <th>Harga</th>
                            <th>Tanggal Pembuatan</th>
                            <th>Jenis</th>
                            <th>Ketersediaan Stok</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($jajanan as $value)
                        <tr>
                            <th>{{ $loop->iteration }}</th>
                            <td>{{ $value->kode_jajanan }}</td>
                            <td>{{ $value->nama_jajanan }}</td>
                            <td>{{ $value->modal }}</td>
                            <td>{{ $value->harga }}</td>
                            <td>{{ $value->tanggal_pembuatan }}</td>
                            <td>{{ $value->jenis == 'makanan' ?'Makanan':'Minuman'}}</td>
                            <td>{{ $value->ketersediaan_stok }}</td>
                            <td>
                                <form method="POST" action="{{ route('jajanan.destroy',$value->id) }}">
                                @method('DELETE')
                                @csrf
                                <button type="submit" role="button">Delete</button>
                                <a  href="{{ url('/jajanan/'.$value->id).'/edit' }}" role="button">Edit</a>
                            </form>
                                
                            </td>
                            
                        </tr>
                        @empty
                            <td colspan="6">Tidak ada data</td>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>