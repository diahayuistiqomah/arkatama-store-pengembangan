@extends('layout.template.admin')
@section('content')
<div class="card">
    <h5 class="card-header">Edit Pengguna</h5>
    <div class="card-body">
        <form method="POST" action="{{ route('users.update', $dUsers->id) }}" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="mb-2">
                <label for="inputName">Nama</label>
                <input value="{{$dUsers->nama}}" name="nama" type="text" class="form-control" id="inputName" placeholder="Please input your name" required>
            </div>
            <div class="form-row">
                <div class="mb-2 col-md-6">
                    <label for="inputEmail4">Email</label>
                    <input value="{{$dUsers->email}}" name="email" type="email" class="form-control" id="inputEmail4" placeholder="Email" required>
                </div>
                <div class="mb-2 col-md-6">
                    <label for="inputPassword4">Password</label>
                    <input name="password" type="password" class="form-control" id="inputPassword4" placeholder="Password" >
                    <p>Kosongkan jika tidak ingin mengubah.</p>
                </div>
            </div>

            <div class="mb-2">
                <label for="exampleFormControlFile1">Foto</label>
                <input name="foto" type="file" class="form-control" id="inputFile" >
                <p>Only: jpg, jpeg, png. Max: 2 Mb / Kosongkan jika tidak ingin mengubah.</p>
            </div>
            <div class="mb-2">
                <label for="inputAddress">Alamat</label>
                <input value="{{$dUsers->alamat}}" name="alamat" type="text" class="form-control" id="inputAddress" placeholder="1234 Main St" required>
            </div>
            <div class="form-row">
                <div class="mb-2 col-md-6">
                    <label for="inputPhoneNumber">No Hp</label>
                    <input value="{{$dUsers->nohp}}"  name="nohp" type="text" class="form-control" id="inputPhoneNumber" placeholder="your number" required>
                </div>
                <div class="mb-2 col-md-4">
                    <label for="inputRole">Role</label>
                    <select name="role" id="inputRole" class="form-select" required>
                        <option >Pilih</option>
                        @foreach($dRole as $row)
                            <option value="{{ $row->id }}" @if ($dUsers->id_role == $row->id) selected @endif>{{ $row->nama_role }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <button type="submit" name="simpan" class="btn btn-primary">Submit</button>
            <a href="{{ route('users.index') }}" class="btn btn-danger">Kembali</a>

        </form>
    </div>
</div>
<div class="container mt-4">
    
</div>
@endsection
