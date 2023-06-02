@extends('layout.template.admin')
@section('content')
@if ($message = Session::get('message'))
    <div class="alert alert-primary">{{  $message }}</div>
@endif
<div class="card">
    <h5 class="card-header">Daftar Pengguna</h5>
    <div class="card-body">
        @if(auth()->user()->id_role == 1)
        <a href="{{ route('users.create') }}" class="btn btn-md btn-primary">Tambah</a>
        @endif
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Foto</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Email</th>
                        <th scope="col">No Hp</th>
                        <th scope="col">Role</th>
                        <th scope="col">#</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                    $no = 1; // Initialize the row number variable
                    @endphp
                    @foreach ($data_users as $user) 
                    <tr>
                        <th scope="row"> {{$no++}}</th>
                        
                        <td>
                            <img src="{{asset('assets/foto/'.$user->foto)}}" alt="Avatar" class="rounded-circle" style="width: 75px; height: 75px;">
                        </td>
                        <td>{{ $user->nama }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->nohp }}</td>
                        <td>{{ $user->nama_role }}</td>
                        <td>
                            @if(auth()->user()->id_role == 1)
                            <a href="{{route('users.show', $user->id_users) }}" class="btn btn-sm btn-primary mr-2">Detail</a>
                            <a href="{{ route('users.edit', $user->id_users) }}" class="btn btn-sm btn-warning mr-2">Edit</a>
                            <form action="{{ route('users.destroy', $user->id_users) }}" method="POST" style="display: inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger">Hapus</button>
                            </form>
                            @endif
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection
