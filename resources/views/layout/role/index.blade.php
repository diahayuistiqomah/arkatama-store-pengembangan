@extends('layout.template.admin')
@section('content')
<div class="card">
    <h5 class="card-header">Grup Pengguna</h5>
    <div class="card-body">
        <a href="{{ route('role.create') }}" class="btn btn-md btn-primary">Tambah</a>
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Role</th>
                        <th>#</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                        $no = 1; // Initialize the row number variable
                    @endphp
                    @foreach ($dRole as $row) 
                    <tr>
                        <th> {{$no++}}</th>
                        <td>{{$row->nama_role}}</td>
                        <td>
                            <a href="{{ route('role.edit', $row->id) }}" class="btn btn-sm btn-warning mr-2">Edit</a>
                            <form action="{{ route('role.destroy', $row->id) }}" method="POST" style="display: inline">
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