@extends('layout.template.admin')
@section('content')
<div class="card">
    <h5 class="card-header">Edit Grup Pengguna</h5>
    <div class="card-body">
        <form method="POST" action="{{ route('role.update', $dRole->id) }}">
            @csrf
            @method('PUT')
            <div class="mb-2">
                <label for="">Nama Grup</label>
                <input value="{{$dRole->nama_role}}" type="text" name="nama_role" class="form-control">
            </div>
            <div class="mb-2">
                <button type="submit" name="simpan" class="btn btn-primary">Submit</button>
                <a href="{{ route('role.index') }}" class="btn btn-danger">Kembali</a>
            </div>
        </form>
    </div>
</div>
@endsection