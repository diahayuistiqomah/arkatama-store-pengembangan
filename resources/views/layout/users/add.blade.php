@extends('layout.template.admin')
@section('content')
<div class="card">
    <h5 class="card-header">Tambah Pengguna</h5>
    <div class="card-body">
        <form method="POST" action="{{ route('users.store') }}" enctype="multipart/form-data">
            @csrf
            <div class="mb-2">
                <label for="inputName">Nama</label>
                <input name="nama" type="text" class="form-control" id="inputName" placeholder="Please input your name" required>
            </div>
            <div class="form-row">
                <div class="mb-2 col-md-6">
                    <label for="inputEmail4">Email</label>
                    <input name="email" type="email" class="form-control" id="inputEmail4" placeholder="Email" required>
                </div>
                <div class="mb-2 col-md-6">
                    <label for="inputPassword4">Password</label>
                    <input name="password" type="password" class="form-control" id="inputPassword4" placeholder="Password" required>
                </div>
            </div>

            <div class="mb-2">
                <label for="exampleFormControlFile1">Foto</label>
                <input name="foto" type="file" class="form-control" id="inputFile" required>
                <p>Only: jpg, jpeg, png. Max: 2 Mb</p>
            </div>
            <div class="mb-2">
                <label for="inputAddress">Alamat</label>
                <input name="alamat" type="text" class="form-control" id="inputAddress" placeholder="1234 Main St" required>
            </div>
            <div class="form-row">
                <div class="mb-2 col-md-6">
                    <label for="inputPhoneNumber">No Hp</label>
                    <input name="nohp" type="text" class="form-control" id="inputPhoneNumber" placeholder="your number" required>
                </div>
                <div class="mb-2 col-md-4">
                    <label for="inputRole">Role</label>
                    <select name="role" id="inputRole" class="form-select" required>
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
