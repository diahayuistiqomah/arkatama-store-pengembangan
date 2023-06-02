@extends('layout.template.admin')
@section('content')
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<div class="card">
    <h5 class="card-header">Tambah Kategori</h5>
    <div class="card-body">
        <form method="POST" action="{{ route('produkkategori.store') }}">
            @csrf
            <div class="mb-2">
                <label for="">Nama Kategori</label>
                <input name="nama_kategori" type="text" class="form-control">
            </div>
            <div class="mb-2">
                <button type="submit" name="simpan" class="btn btn-primary">Submit</button>
                <a href="{{ route('produkkategori.index') }}" class="btn btn-danger">Kembali</a>
            </div>
        </form>
    </div>
</div>
@endsection