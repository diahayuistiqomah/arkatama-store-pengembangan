@extends('layout.template.main')
@section('content')
<!-- ============================================-->
<!-- <section> begin ============================-->
<section>
  <div class="container">
    <div class="row h-100 g-0">
      <div class="col-md-6">
        <div class="bg-300 p-4 h-100 d-flex flex-column justify-content-center">
          <h4 class="text-800">Baju Terbaru 2023</h4>
          <h1 class="fw-semi-bold lh-sm fs-4 fs-lg-5 fs-xl-6">Jualan Baju</h1>
          <p class="mb-5 fs-1">Dengan bahan berkualitas yang nyaman di pakai di setiap saat.</p>
          <div class="d-grid gap-2 d-md-block"><a class="btn btn-lg btn-dark" href="{{'/semua-produk'}}" role="button">Selengkapnya</a></div>
        </div>
      </div>
      <div class="col-md-6">
        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
          <div class="carousel-inner">
            @php 
              $no=1;
            @endphp
            @foreach ($dBaner as $row)
            <div class="carousel-item
            @php 
              $active = $no++;
              if($active == 1){
                echo 'active';
              }
            @endphp
            ">
              <img src="{{'assets/slider/'.$row->foto}}" class="d-block w-100" alt="...">
            </div>
            @endforeach
          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>
      </div>
    </div>
    <div class="row h-100 g-2 py-1">
      <div class="col-md-4">
        <div class="card card-span h-100 text-white"><img class="card-img h-100" src="{{asset('majestic')}}/assets/img/gallery/vanity-bag.png" alt="..." />
          <div class="card-img-overlay bg-dark-gradient">
            <div class="d-flex align-items-end justify-content-center h-100"><a class="btn btn-lg text-light fs-1" href="#!" role="button">Kemaja
                <svg class="bi bi-arrow-right-short" xmlns="http://www.w3.org/2000/svg" width="23" height="23" fill="currentColor" viewBox="0 0 16 16">
                  <path fill-rule="evenodd" d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8z"> </path>
                </svg></a></div>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card card-span h-100 text-white"><img class="card-img h-100" src="{{asset('majestic')}}/assets/img/gallery/hat.png" alt="..." />
          <div class="card-img-overlay bg-dark-gradient">
            <div class="d-flex align-items-end justify-content-center h-100"><a class="btn btn-lg text-light fs-1" href="#!" role="button">Gamis
                <svg class="bi bi-arrow-right-short" xmlns="http://www.w3.org/2000/svg" width="23" height="23" fill="currentColor" viewBox="0 0 16 16">
                  <path fill-rule="evenodd" d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8z"> </path>
                </svg></a></div>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card card-span h-100 text-white"><img class="card-img h-100" src="{{asset('majestic')}}/assets/img/gallery/high-heels.png" alt="..." />
          <div class="card-img-overlay bg-dark-gradient">
            <div class="d-flex align-items-end justify-content-center h-100"><a class="btn btn-lg text-light fs-1" href="#!" role="button">Celana
                <svg class="bi bi-arrow-right-short" xmlns="http://www.w3.org/2000/svg" width="23" height="23" fill="currentColor" viewBox="0 0 16 16">
                  <path fill-rule="evenodd" d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8z"> </path>
                </svg></a></div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- end of .container-->

</section>
@endsection
