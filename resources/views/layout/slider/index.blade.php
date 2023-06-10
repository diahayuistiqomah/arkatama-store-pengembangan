@extends('layout.template.admin')
@section('content')
<div class="card">
    <h5 class="card-header">Dashboard</h5>
    <div class="card-body">
    @if(auth()->user()->id_role == 1 || auth()->user()->id_role == 2)
    <a href="{{ route('dashboard.create') }}" class="btn btn-md btn-primary">Tambah</a>
    @endif
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Slider</th>
                        <th>Keterangan</th>
                        <th>Status</th>
                        <th>#</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                        $no = 1; // Initialize the row number variable
                    @endphp
                    @foreach ($dSlider as $row)
                    <tr>
                        <td> {{$no++}}</td>
                        <td>
                        <img src="{{asset('assets/slider/'.$row->foto)}}" alt="Avatar" class="" style="width: 75px; height: 75px;">

                        </td>
                        <?php
                            if($row->status == 1){
                                $bg = 'bg-success';
                                $status = 'Active';
                            }else{
                                $bg = 'bg-info';
                                $status = 'Menunggu Konfirmasi';
                            }
                        ?>
                        <td>{{$row->keterangan}}</td>
                        <td><span class="badge {{$bg}}">{{$status}}</span></td>
                        <td>
                            @if(auth()->user()->id_role == 1)
                            @if($row->status == 0)
                            <a href="{{ route('dashboard.konfirmasi', $row->id) }}" class="btn btn-sm btn-info mr-2">Konfirmasi</a>
                            @endif
                            <a href="{{ route('dashboard.edit', $row->id) }}" class="btn btn-sm btn-warning mr-2">Edit</a>
                            <form action="{{ route('dashboard.destroy', $row->id) }}" method="POST" style="display: inline">
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