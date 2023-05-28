@extends('layout.template.admin')
@section('content')
<div class="card">
    <h5 class="card-header">Daftar Pengguna</h5>
    <div class="card-body">
        <form method="POST" action="{{ route('produk.update', $dProduk->id) }}" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="mb-2">
                <label for="">Foto</label>
                <input type="file" class="form-control" name="foto" >
            </div>
            <div class="mb-2">
                <label for="">Nama</label>
                <input value="{{$dProduk->nama}}" type="text" class="form-control" name="nama" required>
            </div>
            <div class="mb-2">
                <label for="">Kategori</label>
                <select name="kategori" class="form-select">
                    <option>Pilih</option>
                    @foreach ($dKategori as $row)
                    <option value="{{$row->id}}" @if ($dProduk->id_produk_kategori == $row->id) selected @endif>{{$row->nama_kategori}}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-2">
                <label for="">Deskripsi</label>
                <textarea name="deskripsi" class="form-control" required>{{$dProduk->deskripsi}}</textarea>
            </div>
            <div class="mb-2">
                <label for="">Stok</label>
                <input value="{{$dProduk->stok}}" type="text" name="stok" required class="form-control">
            </div>
            <div class="mb-2">
                <label for="">Harga</label>
                <input value="{{$dProduk->harga}}" type="text" class="form-control" name="harga" required>
            </div>
            <div class="mb-2">
                <button type="submit" name="simpan" class="btn btn-primary">Submit</button>
                <a href="{{ route('produk.index') }}" class="btn btn-danger">Kembali</a>
            </div>
        </form>
    </div>
</div>
@endsection