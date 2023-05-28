@extends('layout.template.admin')
@section('content')
<div class="card">
    <h5 class="card-header">Detail Profil User</h5>
    <div class="card-body">
        <div class="row">
            <div class="col-md-4">
                <div class="avatar-container">
                    <img src="{{asset('assets/foto/'.$data_user->foto)}}" alt="Avatar" class="rounded-circle w-100">
                    <div class="avatar-placeholder">
                        <i class="fas fa-user"></i>
                    </div>
                </div>
            </div>
            <div class="col-md-8">
                <div class="form-group">
                    <h4 for="inputName">Nama</h4>
                    <p>{{$data_user->nama}}</p>
                </div>
                <div class="form-group">
                    <h4 for="inputEmail">Email</h4>
                    <p>{{$data_user->email}}</p>
                </div>
                <div class="form-group">
                    <h4 for="inputAddress">Alamat</h4>
                    <p>{{$data_user->alamat}}</p>
                </div>
                <div class="form-group">
                    <h4 for="inputPhoneNumber">No Hp</h4>
                    <p>{{$data_user->nohp}}</p>
                </div>
                <!-- <div class="form-group">
                    <h4 for="inputRole">Role</h4>
                    <p>{{$data_user->role}}</p>
                </div> -->
                
            </div>
            
        </div>
    </div>
    <div class="card-footer">
        <a href="./" class="btn btn-primary">Kembali</a>
    </div>
</div>
@endsection
