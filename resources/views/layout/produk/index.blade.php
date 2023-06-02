@extends('layout.template.admin')
@section('content')
<div class="card">
    <h5 class="card-header">Produk</h5>
    <div class="card-body">
        @if(auth()->user()->id_role == 1)
    <a href="{{ route('produk.create') }}" class="btn btn-md btn-primary">Tambah</a>
    @endif
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Foto</th>
                        <th>Nama</th>
                        <th>Deskripsi</th>
                        <th>Stok</th>
                        <th>Harga</th>
                        <th>Kategori</th>
                        <th>#</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                        $no = 1; // Initialize the row number variable
                    @endphp
                    @foreach ($dProduk as $row)
                    <tr>
                        <td> {{$no++}}</td>
                        <td><img src="{{asset('assets/produk/'.$row->foto)}}" alt="" class="rounded-circle" style="width: 75px; height: 75px;"></td>
                        <td>{{$row->nama}}</td>
                        <td>{{$row->deskripsi}}</td>
                        <td>{{$row->stok}}</td>
                        <td>Rp. {{$row->harga}}</td>
                        <td>{{$row->nama_kategori}}</td>
                        <td>
                            @if(auth()->user()->id_role == 1)
                            <a href="{{ route('produk.edit', $row->id_produk) }}" class="btn btn-sm btn-warning mr-2">Edit</a>
                            <form action="{{ route('produk.destroy', $row->id_produk) }}" method="POST" style="display: inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger">Hapus</button>
                            </form>
                            @endif
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection