@extends('layout.template.admin')
@section('content')
<div class="card">
    <h5 class="card-header">Produk</h5>
    <div class="card-body">
        @if(auth()->user()->id_role == 1 || auth()->user()->id_role == 2)
    <a href="{{ route('produk.create') }}" class="btn btn-md btn-primary">Tambah</a>
    @endif
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Foto</th>
                        <th>Nama</th>
                        <th>Stok</th>
                        <th>Harga</th>
                        <th>Kategori</th>
                        <th width="20%">Status</th>
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
                        <td>{{$row->stok}}</td>
                        <td>Rp. {{number_format($row->harga)}}</td>
                        <td>{{$row->nama_kategori}}</td>
                        <?php
                            if($row->status == 1){
                                $bg = 'bg-success';
                                $status = 'Active';
                            }else{
                                $bg = 'bg-info';
                                $status = 'Menunggu Konfirmasi';
                            }
                        ?>
                        <td><span class="badge {{$bg}}">{{$status}}</span></td>
                        <td>
                            
                            @if(auth()->user()->id_role == 1)
                            <div class="d-flex">
                                @if($row->status == 0)
                                <a href="{{ route('produk.konfirmasi', $row->id_produk) }}" class="btn btn-sm btn-info me-1">Konfirmasi</a>
                                @endif
                                <a href="{{ route('produk.edit', $row->id_produk) }}" class="btn btn-sm btn-warning me-1">Edit</a>
                                <form action="{{ route('produk.destroy', $row->id_produk) }}" method="POST" style="display: inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-danger">Hapus</button>
                                </form>
                            </div>
                            
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