@extends('layout.template.main')
@section('content')
<section>
    <div class="container">
        <div class="row h-100 g-0">
        <div class="col-md-6">
            <div class="card card-span h-100 text-white"><img class="card-img h-100" src="{{asset('assets/produk/'.$dProduk->foto)}}" alt="..."><a class="stretched-link" href="#!"></a></div>
        </div>

        <div class="col-md-6">
            <div class="bg-300 p-5 h-100 justify-content-center">
                <h1 class="fw-semi-bold lh-sm  fs-4 fs-lg-5 fs-xl-6">{{$dProduk->nama}}</h1>
                <p class="mb-5 fs-1">{{$dProduk->deskripsi}}</p>
                <p class="mb-3 fs-1">Jenis Produk : {{$dProduk->nama_kategori}}</p>
                <p class="mb-3 fs-1">Stok : {{$dProduk->stok}} Pcs</p>
                <div class="d-grid gap-2 d-md-block">
                    <a class="btn btn-lg btn-dark" href="#!" role="button">Rp. {{number_format($dProduk->harga)}}</a>
                </div>
            </div>
        </div>
        </div>
    </div><!-- end of .container-->
</section>
@endsection