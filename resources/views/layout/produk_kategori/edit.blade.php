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
    <h5 class="card-header">Edit Kategori</h5>
    <div class="card-body">
        <form method="POST" action="{{ route('produkkategori.update', $dKategori->id) }}">
            @csrf
            @method('PUT')
            <div class="mb-2">
                <label for="">Nama Kategori</label>
                <input value="{{$dKategori->nama_kategori}}" name="nama_kategori" type="text" class="form-control">
            </div>
            <div class="mb-2">
                <button type="submit" name="simpan" class="btn btn-primary">Submit</button>
                <a href="{{ route('produkkategori.index') }}" class="btn btn-danger">Kembali</a>
            </div>
        </form>
    </div>
</div>
@endsection