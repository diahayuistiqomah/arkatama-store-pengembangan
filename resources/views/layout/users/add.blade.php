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
    <h5 class="card-header">Tambah Pengguna</h5>
    <div class="card-body">
        <form method="POST" action="{{ route('users.store') }}" enctype="multipart/form-data">
            @csrf
            <div class="mb-2">
                <label for="inputName">Nama</label>
                <input name="nama" type="text" class="form-control" id="inputName" placeholder="Please input your name" >
            </div>
            <div class="form-row">
                <div class="mb-2 col-md-6">
                    <label for="inputEmail4">Email</label>
                    <input name="email" type="email" class="form-control" id="inputEmail4" placeholder="Email" >
                </div>
                <div class="mb-2 col-md-6">
                    <label for="inputPassword4">Password</label>
                    <input name="password" type="password" class="form-control" id="inputPassword4" placeholder="Password" >
                </div>
            </div>

            <div class="mb-2">
                <label for="exampleFormControlFile1">Foto</label>
                <input name="foto" type="file" class="form-control" id="inputFile" >
                <p>Only: jpg, jpeg, png. Max: 2 Mb</p>
            </div>
            <div class="mb-2">
                <label for="inputAddress">Alamat</label>
                <input name="alamat" type="text" class="form-control" id="inputAddress" placeholder="1234 Main St" >
            </div>
            <div class="form-row">
                <div class="mb-2 col-md-6">
                    <label for="inputPhoneNumber">No Hp</label>
                    <input name="nohp" type="text" class="form-control" id="inputPhoneNumber" placeholder="your number" >
                </div>
                <div class="mb-2 col-md-4">
                    <label for="inputRole">Role</label>
                    <select name="role" id="inputRole" class="form-select" >
                        <option selected>Pilih</option>
                        @foreach($dRole as $row)
                            <option value="{{ $row->id }}">{{ $row->nama_role }}</option>
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
