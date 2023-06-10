@extends('layout.template.main')
@section('content')
<section id="categoryWomen">
  <div class="container">
    <div class="col-lg-7 mx-auto text-center mb-2">
      <h5 class="fw-bold fs-3 fs-lg-5 lh-sm mb-5">Semua Produk</h5>
    </div>
    <div class="row h-100">
      <!-- filter -->
      <div class="col-lg-4">
        <form method="get"  action="">
          {{csrf_field()}}
          <div class="mb-3">
              <label class="form-label" for="nama">Nama produk</label>
              <input class="form-control" name="nama" id="nama" type="text">
          </div>
          <div class="mb-3">
              <label class="form-label" for="kategori">Jenis produk</label>
              <select id="kategori" class="form-select">
                  <option selected>Pilih</option>
                  @foreach($dKategori as $kategori)
                  <option value="{{$kategori->id}}">{{$kategori->nama_kategori}}</option>
                  @endforeach
                </select>
          </div>
          <div class="row mb-3">
            <div class="col-md-6">
              <label for="range-awal" class="form-label">Harga Terendah</label>
              <input type="text" class="form-control" name="harga-terendah">
            </div>
            <div class="col-md-6">
              <label for="range-awal" class="form-label">Harga Tertinggi</label>
              <input type="text" class="form-control" name="harga-tertinggi">
            </div>
          </div>
          <div class="mb-3">
            <button class="btn btn-success" type="submit">Cari</button>
          </div>
        </form>
      </div>
      <!-- endFilter -->
      <!-- Produk -->
      <div class="col-lg-8">
        <div class="row">
          @foreach($dProduk as $row)
          <div class="col-sm-6 col-md-4 mb-3 mb-md-0 h-100">
            <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="{{asset('assets/produk/'.$row->foto)}}" alt="...">
              <div class="card-img-overlay ps-0"> </div>
              <div class="card-body ps-0 bg-200">
                <h5 class="fw-bold text-1000 text-truncate">{{$row->nama}}</h5>
                <div class="fw-bold"><span class="text-primary">Rp. {{number_format($row->harga)}}</span></div>
              </div><a class="stretched-link" href="#"></a>
            </div>
          </div>
          @endforeach
        </div>
        <!-- endProduk -->
      </div>
    </div>
  </div>
</section>
@endsection