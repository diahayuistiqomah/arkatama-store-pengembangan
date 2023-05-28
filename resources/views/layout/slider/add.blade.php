@extends('layout.template.admin')
@section('content')
<div class="card">
    <h5 class="card-header">Tambah Slider</h5>
    <div class="card-body">
        <form method="POST" action="{{ route('dashboard.store') }}" enctype="multipart/form-data">
            @csrf
            <div class="mb-2">
                <label for="">Foto</label>
                <input type="file" name="foto" class="form-control" required>
            </div>
            <div class="mb-2">
                <label for="">Keterangan</label>
                <input type="text" name="keterangan" class="form-control">
            </div>
            <div class="mb-2">
                <button type="submit" name="simpan" class="btn btn-primary">Submit</button>
                <a href="{{ route('dashboard.index') }}" class="btn btn-danger">Kembali</a>
            </div>
        </form>
    </div>
</div>
@endsection