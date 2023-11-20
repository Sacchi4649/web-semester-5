<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tambah Data</title>
</head>
<body>
    <div>
        <div>
            <div>
                <h1>Insert Data</h1>
                <hr>
                <form action="{{ route('jajanan.store') }}" method="POST">
                    @csrf
                <div>
                    <label for="kode_jajanan">Kode Jajanan</label>
                    <input type="text" id="kode_jajanan" name="kode_jajanan" @error('kode_jajanan') is-invalid @enderror" 
                    value="{{ old('kode_jajanan') }}">
                  @error('kode_jajanan')  
                  <div>{{ $message }}</div>
                  @enderror
                </div>

                <div>
                    <label  for="nama_jajanan">Nama Jajanan</label>
                    <input type="text" id="nama_jajanan" name="nama_jajanan" @error('nama_jajanan') is-invalid @enderror" 
                    value="{{ old('nama_jajanan') }}">
                  @error('nama_jajanan')  
                  <div>{{ $message }}</div>
                  @enderror
                </div>

                <div>
                    <label for="modal">Modal</label>
                    <input type="text" id="modal" name="modal"  @error('modal') is-invalid @enderror
                    value="{{ old('modal') }}">
                    @error('modal')  
                    <div >{{ $message }}</div>
                    @enderror
                </div>

                <div>
                    <label for="harga">Harga</label>
                    <input type="text" id="harga" name="harga"  @error('harga') is-invalid @enderror
                    value="{{ old('harga') }}">
                    @error('harga')  
                    <div >{{ $message }}</div>
                    @enderror
                </div>
                
                <div>
                    <label for="tanggal_pembuatan">Tanggal Pembuatan</label>
                    <input type="text" id="tanggal_pembuatan" name="tanggal_pembuatan"  @error('tanggal_pembuatan') is-invalid @enderror 
                    value="{{ old('tanggal_pembuatan') }}">
                    @error('tanggal_pembuatan')  
                    <div>{{ $message }}</div>
                    @enderror
                </div>

                <div>
                    <label for="jenis">Jenis</label>
                    <div >
                        <div>
                            <input type="radio"  name="jenis" id="makanan" value="makanan"
                            {{ old('jenis')=='makanan' ? 'checked':'' }}>
                            <label for="makanan">Makanan</label>
                        </div>
                        <div>
                            <input type="radio"  name="jenis" id="minuman" value="minuman"
                            {{ old('jenis')=='minuman' ? 'checked':'' }}>
                            <label for="minuman">Minuman</label>
                        </div>
                        @error('jenis')
                        <div>{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                <div>
                    <label for="ketersediaan_stok">Ketersediaan Stok</label>
                    <div >
                        <div>
                            <input type="radio"  name="ketersediaan_stok" id="true" value="1"
                            {{ old('ketersediaan_stok')=='1' ? 'checked':'' }}>
                            <label for="true">Tersedia</label>
                        </div>
                        <div>
                            <input type="radio"  name="ketersediaan_stok" id="false" value="0"
                            {{ old('ketersediaan_stok')=='0' ? 'checked':'' }}>
                            <label for="false">Kosong</label>
                        </div>
                        @error('ketersediaan_stok')
                        <div>{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <button type="submit" >Tambah</button>
                <a href="{{ url()->previous() }}">Kembali</a>
            </form>
        </div>
    </div>
    </div>
</body>
</html>