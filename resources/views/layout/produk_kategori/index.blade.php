@extends('layout.template.admin')
@section('content')
<div class="card">
    <h5 class="card-header">Kategori</h5>
    <div class="card-body">
    <a href="{{ route('produkkategori.create') }}" class="btn btn-md btn-primary">Tambah</a>
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Kategori</th>
                        <th>#</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                        $no = 1; // Initialize the row number variable
                    @endphp
                    @foreach ($dKategori as $row)
                    <tr>
                        <td> {{$no++}}</td>
                        <td> {{$row->nama_kategori}}</td>
                        <td>
                            <a href="{{ route('produkkategori.edit', $row->id) }}" class="btn btn-sm btn-warning mr-2">Edit</a>
                            <form action="{{ route('produkkategori.destroy', $row->id) }}" method="POST" style="display: inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger">Hapus</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection