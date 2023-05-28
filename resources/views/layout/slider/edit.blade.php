@extends('layout.template.admin')
@section('content')
<div class="card">
    <h5 class="card-header">Edit Slider</h5>
    <div class="card-body">
        <form method="POST" action="{{ route('dashboard.update', $dSlider->id) }}" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="mb-2">
                <label for="">Foto</label>
                <input type="file" name="foto" class="form-control">
            </div>
            <div class="mb-2">
                <label for="">Keterangan</label>
                <input type="text" value="{{$dSlider->keterangan}}" name="keterangan" class="form-control">
            </div>
            <div class="mb-2">
                <button type="submit" name="simpan" class="btn btn-primary">Submit</button>
                <a href="{{ route('dashboard.index') }}" class="btn btn-danger">Kembali</a>
            </div>
        </form>
    </div>
</div>
@endsection