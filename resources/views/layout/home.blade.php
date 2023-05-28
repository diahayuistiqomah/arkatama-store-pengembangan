@extends('layout.main')
@section('content')
<div id="carouselExampleIndicators" class="carousel slide mt-3" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    @foreach ($dBaner as $row)
    <div class="carousel-item active">
      <img src="{{'assets/slider/'.$row->foto}}" class="d-block w-100" alt="...">
    </div>
    @endforeach
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>

<div class="row mt-5 mb-5">
  @foreach($dProduk as $row)
  <div class="col-md-3">
    <div class="card">
      <img src="{{'assets/produk/'.$row->foto}}" class="card-img-top" alt="...">
      <div class="card-body text-center">
        <h5 class="card-title">{{$row->nama}}</h5>
        <button class="btn btn-outline-primary">{{$row->harga}}</button>
      </div>
    </div>
  </div>
  @endforeach
</div>
<!-- 
<section class="my-4">
  <div class="container">
      <div class="row">
          <div class="col-md-8 offset-md-2">
              <div class="card">
                  <div class="card-body">
                      <h4 class="card-title">Selamat datang!</h4>
                      <p class="card-text">Silahkan login terlebih dahulu <a href="login">Login</a>.</p>
                  </div>
              </div>
          </div>
      </div>
  </div>
</section> -->
@endsection
