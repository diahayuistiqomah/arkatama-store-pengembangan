@extends('layout.template.main')
@section('content')
<section id="categoryWomen">
        <div class="container">
          <div class="row h-100">
            <div class="col-lg-7 mx-auto text-center mb-2">
              <h5 class="fw-bold fs-3 fs-lg-5 lh-sm mb-3">Semua Produk</h5>
            </div>
            <div class="col-6 m-auto">
              <form action="" method="get" enctype="multipart/form-data">
                  <?= csrf_field() ?>
                  <div class="row mb-3">
                    <div class="col-md-8">
                      <label for="nama" class="form-label">Nama Produk</label>
                      <input type="text" class="form-control" name="nama" id="nama">
                    </div>
                    <div class="col-md-4">
                      <label for="kategori" class="form-label">Jenis Produk</label>
                      <select id="kategori" class="form-select-lg form-select text-dark">
                        <option selected>Pilih</option>
                        <option>...</option>
                      </select>
                    </div>
                  </div>
                  <div class="row mb-3">
                    <div class="col-md-6">
                      <label for="range-awal" class="form-label">Harga Terendah</label>
                      <input type="text" class="form-control" name="range-awal">
                    </div>
                    <div class="col-md-6">
                      <label for="range-awal" class="form-label">Harga Tertinggi</label>
                      <input type="text" class="form-control" name="range-awal">
                    </div>

                  </div>
                  
                  <button class="btn btn-success" type="submit">Cari</button>
              </form>
            </div>


            <div class="col-12">
              <nav>
                <div class="nav nav-tabs majestic-tabs mb-4 justify-content-center" id="nav-tab" role="tablist">
                  <button class="nav-link active" id="nav-women-tab" data-bs-toggle="tab" data-bs-target="#nav-women" type="button" role="tab" aria-controls="nav-women" aria-selected="true">For Women</button>
                  <button class="nav-link" id="nav-men-tab" data-bs-toggle="tab" data-bs-target="#nav-men" type="button" role="tab" aria-controls="nav-men" aria-selected="false">For Men</button>
                </div>
                <div class="tab-content" id="nav-tabContent">
                  <div class="tab-pane fade show active" id="nav-women" role="tabpanel" aria-labelledby="nav-women-tab">
                    <ul class="nav nav-pills justify-content-center mb-5" id="pills-tab-women" role="tablist">
                      <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="pills-wtshirt-tab" data-bs-toggle="pill" data-bs-target="#pills-wtshirt" type="button" role="tab" aria-controls="pills-wtshirt" aria-selected="true">T-Shirt</button>
                      </li>
                      <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pills-dresses-tab" data-bs-toggle="pill" data-bs-target="#pills-dresses" type="button" role="tab" aria-controls="pills-dresses" aria-selected="false">Shirt</button>
                      </li>
                      <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pills-wshoes-tab" data-bs-toggle="pill" data-bs-target="#pills-wshoes" type="button" role="tab" aria-controls="pills-wshoes" aria-selected="false">Shoes</button>
                      </li>
                      <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pills-wwatch-tab" data-bs-toggle="pill" data-bs-target="#pills-wwatch" type="button" role="tab" aria-controls="pills-wwatch" aria-selected="false">Watch </button>
                      </li>
                      <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pills-wsunglasses-tab" data-bs-toggle="pill" data-bs-target="#pills-wsunglasses" type="button" role="tab" aria-controls="pills-wsunglasses" aria-selected="false">Sunglasses </button>
                      </li>
                      <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pills-wbagpacks-tab" data-bs-toggle="pill" data-bs-target="#pills-wbagpacks" type="button" role="tab" aria-controls="pills-wbagpacks" aria-selected="false">Bagpacks </button>
                      </li>
                    </ul>
                    <div class="tab-content" id="pills-tabContentWomen">
                      <div class="tab-pane fade" id="pills-dresses" role="tabpanel" aria-labelledby="pills-dresses-tab">
                        <div class="carousel slide" id="carouselCategoryDresses" data-bs-touch="false" data-bs-interval="false">
                          <div class="carousel-inner">
                            <div class="carousel-item active" data-bs-interval="10000">
                              <div class="row h-100 align-items-center g-2">
                                <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                  <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="{{asset('majestic')}}/assets/img/gallery/shirt-1.png" alt="..." />
                                    <div class="card-img-overlay ps-0"> </div>
                                    <div class="card-body ps-0 bg-200">
                                      <h5 class="fw-bold text-1000 text-truncate">Shirt</h5>
                                      <div class="fw-bold"><span class="text-600 me-2 text-decoration-line-through">$200</span><span class="text-primary">$175</span></div>
                                    </div><a class="stretched-link" href="#"></a>
                                  </div>
                                </div>
                                <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                  <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="{{asset('majestic')}}/assets/img/gallery/shirt-2.png" alt="..." />
                                    <div class="card-img-overlay ps-0"> </div>
                                    <div class="card-body ps-0 bg-200">
                                      <h5 class="fw-bold text-1000 text-truncate">Gray Shirt</h5>
                                      <div class="fw-bold"><span class="text-600 me-2 text-decoration-line-through">$200</span><span class="text-primary">$175</span></div>
                                    </div><a class="stretched-link" href="#"></a>
                                  </div>
                                </div>
                                <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                  <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="{{asset('majestic')}}/assets/img/gallery/shirt-3.png" alt="..." />
                                    <div class="card-img-overlay ps-0"> </div>
                                    <div class="card-body ps-0 bg-200">
                                      <h5 class="fw-bold text-1000 text-truncate">White Shirt</h5>
                                      <div class="fw-bold"><span class="text-600 me-2 text-decoration-line-through">$200</span><span class="text-primary">$175</span></div>
                                    </div><a class="stretched-link" href="#"></a>
                                  </div>
                                </div>
                                <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                  <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="{{asset('majestic')}}/assets/img/gallery/shirt-4.png" alt="..." />
                                    <div class="card-img-overlay ps-0"> </div>
                                    <div class="card-body ps-0 bg-200">
                                      <h5 class="fw-bold text-1000 text-truncate">Black Shirt</h5>
                                      <div class="fw-bold"><span class="text-600 me-2 text-decoration-line-through">$500</span><span class="text-primary">$275</span></div>
                                    </div><a class="stretched-link" href="#"></a>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="carousel-item" data-bs-interval="5000">
                              <div class="row h-100 align-items-center g-2">
                                <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                  <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="{{asset('majestic')}}/assets/img/gallery/shirt-1.png" alt="..." />
                                    <div class="card-img-overlay ps-0"> </div>
                                    <div class="card-body ps-0 bg-200">
                                      <h5 class="fw-bold text-1000 text-truncate">Shirt</h5>
                                      <div class="fw-bold"><span class="text-600 me-2 text-decoration-line-through">$200</span><span class="text-primary">$175</span></div>
                                    </div><a class="stretched-link" href="#"></a>
                                  </div>
                                </div>
                                <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                  <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="{{asset('majestic')}}/assets/img/gallery/shirt-2.png" alt="..." />
                                    <div class="card-img-overlay ps-0"> </div>
                                    <div class="card-body ps-0 bg-200">
                                      <h5 class="fw-bold text-1000 text-truncate">Gray Shirt</h5>
                                      <div class="fw-bold"><span class="text-600 me-2 text-decoration-line-through">$200</span><span class="text-primary">$175</span></div>
                                    </div><a class="stretched-link" href="#"></a>
                                  </div>
                                </div>
                                <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                  <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="{{asset('majestic')}}/assets/img/gallery/shirt-3.png" alt="..." />
                                    <div class="card-img-overlay ps-0"> </div>
                                    <div class="card-body ps-0 bg-200">
                                      <h5 class="fw-bold text-1000 text-truncate">White Shirt</h5>
                                      <div class="fw-bold"><span class="text-600 me-2 text-decoration-line-through">$200</span><span class="text-primary">$175</span></div>
                                    </div><a class="stretched-link" href="#"></a>
                                  </div>
                                </div>
                                <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                  <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="{{asset('majestic')}}/assets/img/gallery/shirt-4.png" alt="..." />
                                    <div class="card-img-overlay ps-0"> </div>
                                    <div class="card-body ps-0 bg-200">
                                      <h5 class="fw-bold text-1000 text-truncate">Black Shirt</h5>
                                      <div class="fw-bold"><span class="text-600 me-2 text-decoration-line-through">$500</span><span class="text-primary">$275</span></div>
                                    </div><a class="stretched-link" href="#"></a>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="carousel-item" data-bs-interval="3000">
                              <div class="row h-100 align-items-center g-2">
                                <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                  <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="{{asset('majestic')}}/assets/img/gallery/shirt-1.png" alt="..." />
                                    <div class="card-img-overlay ps-0"> </div>
                                    <div class="card-body ps-0 bg-200">
                                      <h5 class="fw-bold text-1000 text-truncate">Shirt</h5>
                                      <div class="fw-bold"><span class="text-600 me-2 text-decoration-line-through">$200</span><span class="text-primary">$175</span></div>
                                    </div><a class="stretched-link" href="#"></a>
                                  </div>
                                </div>
                                <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                  <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="{{asset('majestic')}}/assets/img/gallery/shirt-2.png" alt="..." />
                                    <div class="card-img-overlay ps-0"> </div>
                                    <div class="card-body ps-0 bg-200">
                                      <h5 class="fw-bold text-1000 text-truncate">Gray Shirt</h5>
                                      <div class="fw-bold"><span class="text-600 me-2 text-decoration-line-through">$200</span><span class="text-primary">$175</span></div>
                                    </div><a class="stretched-link" href="#"></a>
                                  </div>
                                </div>
                                <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                  <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="{{asset('majestic')}}/assets/img/gallery/shirt-3.png" alt="..." />
                                    <div class="card-img-overlay ps-0"> </div>
                                    <div class="card-body ps-0 bg-200">
                                      <h5 class="fw-bold text-1000 text-truncate">White Shirt</h5>
                                      <div class="fw-bold"><span class="text-600 me-2 text-decoration-line-through">$200</span><span class="text-primary">$175</span></div>
                                    </div><a class="stretched-link" href="#"></a>
                                  </div>
                                </div>
                                <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                  <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="{{asset('majestic')}}/assets/img/gallery/shirt-4.png" alt="..." />
                                    <div class="card-img-overlay ps-0"> </div>
                                    <div class="card-body ps-0 bg-200">
                                      <h5 class="fw-bold text-1000 text-truncate">Black Shirt</h5>
                                      <div class="fw-bold"><span class="text-600 me-2 text-decoration-line-through">$500</span><span class="text-primary">$275</span></div>
                                    </div><a class="stretched-link" href="#"></a>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="carousel-item">
                              <div class="row h-100 align-items-center g-2">
                                <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                  <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="{{asset('majestic')}}/assets/img/gallery/shirt-1.png" alt="..." />
                                    <div class="card-img-overlay ps-0"> </div>
                                    <div class="card-body ps-0 bg-200">
                                      <h5 class="fw-bold text-1000 text-truncate">Shirt</h5>
                                      <div class="fw-bold"><span class="text-600 me-2 text-decoration-line-through">$200</span><span class="text-primary">$175</span></div>
                                    </div><a class="stretched-link" href="#"></a>
                                  </div>
                                </div>
                                <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                  <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="{{asset('majestic')}}/assets/img/gallery/shirt-2.png" alt="..." />
                                    <div class="card-img-overlay ps-0"> </div>
                                    <div class="card-body ps-0 bg-200">
                                      <h5 class="fw-bold text-1000 text-truncate">Gray Shirt</h5>
                                      <div class="fw-bold"><span class="text-600 me-2 text-decoration-line-through">$200</span><span class="text-primary">$175</span></div>
                                    </div><a class="stretched-link" href="#"></a>
                                  </div>
                                </div>
                                <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                  <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="{{asset('majestic')}}/assets/img/gallery/shirt-3.png" alt="..." />
                                    <div class="card-img-overlay ps-0"> </div>
                                    <div class="card-body ps-0 bg-200">
                                      <h5 class="fw-bold text-1000 text-truncate">White Shirt</h5>
                                      <div class="fw-bold"><span class="text-600 me-2 text-decoration-line-through">$200</span><span class="text-primary">$175</span></div>
                                    </div><a class="stretched-link" href="#"></a>
                                  </div>
                                </div>
                                <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                  <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="{{asset('majestic')}}/assets/img/gallery/shirt-4.png" alt="..." />
                                    <div class="card-img-overlay ps-0"> </div>
                                    <div class="card-body ps-0 bg-200">
                                      <h5 class="fw-bold text-1000 text-truncate">Black Shirt</h5>
                                      <div class="fw-bold"><span class="text-600 me-2 text-decoration-line-through">$500</span><span class="text-primary">$275</span></div>
                                    </div><a class="stretched-link" href="#"></a>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="row">
                              <button class="carousel-control-prev" type="button" data-bs-target="#carouselCategoryDresses" data-bs-slide="prev"><span class="carousel-control-prev-icon" aria-hidden="true"></span><span class="visually-hidden">Previous</span></button>
                              <button class="carousel-control-next" type="button" data-bs-target="#carouselCategoryDresses" data-bs-slide="next"><span class="carousel-control-next-icon" aria-hidden="true"></span><span class="visually-hidden">Next </span></button>
                            </div>
                          </div>
                        </div>
                        <div class="col-12 d-flex justify-content-center mt-5"> <a class="btn btn-lg btn-dark" href="#!">View All </a></div>
                      </div>
                      <div class="tab-pane fade show active" id="pills-wtshirt" role="tabpanel" aria-labelledby="pills-wtshirt-tab">
                        <div class="carousel slide" id="carouselCategoryWTshirt" data-bs-touch="false" data-bs-interval="false">
                          <div class="carousel-inner">
                            <div class="carousel-item active" data-bs-interval="10000">
                              <div class="row h-100 align-items-center g-2">
                                <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                  <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="{{asset('majestic')}}/assets/img/gallery/red-tshirt.png" alt="..." />
                                    <div class="card-img-overlay ps-0"> </div>
                                    <div class="card-body ps-0 bg-200">
                                      <h5 class="fw-bold text-1000 text-truncate">Red T-Shirt</h5>
                                      <div class="fw-bold"><span class="text-600 me-2 text-decoration-line-through">$200</span><span class="text-primary">$175</span></div>
                                    </div><a class="stretched-link" href="#"></a>
                                  </div>
                                </div>
                                <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                  <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="{{asset('majestic')}}/assets/img/gallery/pink-tshirt.png" alt="..." />
                                    <div class="card-img-overlay ps-0"> </div>
                                    <div class="card-body ps-0 bg-200">
                                      <h5 class="fw-bold text-1000 text-truncate">Pink T-Shirt</h5>
                                      <div class="fw-bold"><span class="text-600 me-2 text-decoration-line-through">$200</span><span class="text-primary">$175</span></div>
                                    </div><a class="stretched-link" href="#"></a>
                                  </div>
                                </div>
                                <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                  <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="{{asset('majestic')}}/assets/img/gallery/orange-tshirt.png" alt="..." />
                                    <div class="card-img-overlay ps-0"> </div>
                                    <div class="card-body ps-0 bg-200">
                                      <h5 class="fw-bold text-1000 text-truncate">Orange T-Shirt</h5>
                                      <div class="fw-bold"><span class="text-600 me-2 text-decoration-line-through">$200</span><span class="text-primary">$175</span></div>
                                    </div><a class="stretched-link" href="#"></a>
                                  </div>
                                </div>
                                <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                  <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="{{asset('majestic')}}/assets/img/gallery/purple-tshirt.png" alt="..." />
                                    <div class="card-img-overlay ps-0"> </div>
                                    <div class="card-body ps-0 bg-200">
                                      <h5 class="fw-bold text-1000 text-truncate">Purple T-Shirt</h5>
                                      <div class="fw-bold"><span class="text-600 me-2 text-decoration-line-through">$200</span><span class="text-primary">$175</span></div>
                                    </div><a class="stretched-link" href="#"></a>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="carousel-item" data-bs-interval="5000">
                              <div class="row h-100 align-items-center g-2">
                                <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                  <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="{{asset('majestic')}}/assets/img/gallery/red-tshirt.png" alt="..." />
                                    <div class="card-img-overlay ps-0"> </div>
                                    <div class="card-body ps-0 bg-200">
                                      <h5 class="fw-bold text-1000 text-truncate">Red T-Shirt</h5>
                                      <div class="fw-bold"><span class="text-600 me-2 text-decoration-line-through">$200</span><span class="text-primary">$175</span></div>
                                    </div><a class="stretched-link" href="#"></a>
                                  </div>
                                </div>
                                <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                  <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="{{asset('majestic')}}/assets/img/gallery/pink-tshirt.png" alt="..." />
                                    <div class="card-img-overlay ps-0"> </div>
                                    <div class="card-body ps-0 bg-200">
                                      <h5 class="fw-bold text-1000 text-truncate">Pink T-Shirt</h5>
                                      <div class="fw-bold"><span class="text-600 me-2 text-decoration-line-through">$200</span><span class="text-primary">$175</span></div>
                                    </div><a class="stretched-link" href="#"></a>
                                  </div>
                                </div>
                                <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                  <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="{{asset('majestic')}}/assets/img/gallery/orange-tshirt.png" alt="..." />
                                    <div class="card-img-overlay ps-0"> </div>
                                    <div class="card-body ps-0 bg-200">
                                      <h5 class="fw-bold text-1000 text-truncate">Orange T-Shirt</h5>
                                      <div class="fw-bold"><span class="text-600 me-2 text-decoration-line-through">$200</span><span class="text-primary">$175</span></div>
                                    </div><a class="stretched-link" href="#"></a>
                                  </div>
                                </div>
                                <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                  <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="{{asset('majestic')}}/assets/img/gallery/purple-tshirt.png" alt="..." />
                                    <div class="card-img-overlay ps-0"> </div>
                                    <div class="card-body ps-0 bg-200">
                                      <h5 class="fw-bold text-1000 text-truncate">Purple T-Shirt</h5>
                                      <div class="fw-bold"><span class="text-600 me-2 text-decoration-line-through">$200</span><span class="text-primary">$175</span></div>
                                    </div><a class="stretched-link" href="#"></a>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="carousel-item" data-bs-interval="3000">
                              <div class="row h-100 align-items-center g-2">
                                <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                  <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="{{asset('majestic')}}/assets/img/gallery/red-tshirt.png" alt="..." />
                                    <div class="card-img-overlay ps-0"> </div>
                                    <div class="card-body ps-0 bg-200">
                                      <h5 class="fw-bold text-1000 text-truncate">Red T-Shirt</h5>
                                      <div class="fw-bold"><span class="text-600 me-2 text-decoration-line-through">$200</span><span class="text-primary">$175</span></div>
                                    </div><a class="stretched-link" href="#"></a>
                                  </div>
                                </div>
                                <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                  <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="{{asset('majestic')}}/assets/img/gallery/pink-tshirt.png" alt="..." />
                                    <div class="card-img-overlay ps-0"> </div>
                                    <div class="card-body ps-0 bg-200">
                                      <h5 class="fw-bold text-1000 text-truncate">Pink T-Shirt</h5>
                                      <div class="fw-bold"><span class="text-600 me-2 text-decoration-line-through">$200</span><span class="text-primary">$175</span></div>
                                    </div><a class="stretched-link" href="#"></a>
                                  </div>
                                </div>
                                <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                  <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="{{asset('majestic')}}/assets/img/gallery/orange-tshirt.png" alt="..." />
                                    <div class="card-img-overlay ps-0"> </div>
                                    <div class="card-body ps-0 bg-200">
                                      <h5 class="fw-bold text-1000 text-truncate">Orange T-Shirt</h5>
                                      <div class="fw-bold"><span class="text-600 me-2 text-decoration-line-through">$200</span><span class="text-primary">$175</span></div>
                                    </div><a class="stretched-link" href="#"></a>
                                  </div>
                                </div>
                                <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                  <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="{{asset('majestic')}}/assets/img/gallery/purple-tshirt.png" alt="..." />
                                    <div class="card-img-overlay ps-0"> </div>
                                    <div class="card-body ps-0 bg-200">
                                      <h5 class="fw-bold text-1000 text-truncate">Purple T-Shirt</h5>
                                      <div class="fw-bold"><span class="text-600 me-2 text-decoration-line-through">$200</span><span class="text-primary">$175</span></div>
                                    </div><a class="stretched-link" href="#"></a>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="carousel-item">
                              <div class="row h-100 align-items-center g-2">
                                <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                  <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="{{asset('majestic')}}/assets/img/gallery/red-tshirt.png" alt="..." />
                                    <div class="card-img-overlay ps-0"> </div>
                                    <div class="card-body ps-0 bg-200">
                                      <h5 class="fw-bold text-1000 text-truncate">Red T-Shirt</h5>
                                      <div class="fw-bold"><span class="text-600 me-2 text-decoration-line-through">$200</span><span class="text-primary">$175</span></div>
                                    </div><a class="stretched-link" href="#"></a>
                                  </div>
                                </div>
                                <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                  <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="{{asset('majestic')}}/assets/img/gallery/pink-tshirt.png" alt="..." />
                                    <div class="card-img-overlay ps-0"> </div>
                                    <div class="card-body ps-0 bg-200">
                                      <h5 class="fw-bold text-1000 text-truncate">Pink T-Shirt</h5>
                                      <div class="fw-bold"><span class="text-600 me-2 text-decoration-line-through">$200</span><span class="text-primary">$175</span></div>
                                    </div><a class="stretched-link" href="#"></a>
                                  </div>
                                </div>
                                <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                  <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="{{asset('majestic')}}/assets/img/gallery/orange-tshirt.png" alt="..." />
                                    <div class="card-img-overlay ps-0"> </div>
                                    <div class="card-body ps-0 bg-200">
                                      <h5 class="fw-bold text-1000 text-truncate">Orange T-Shirt</h5>
                                      <div class="fw-bold"><span class="text-600 me-2 text-decoration-line-through">$200</span><span class="text-primary">$175</span></div>
                                    </div><a class="stretched-link" href="#"></a>
                                  </div>
                                </div>
                                <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                  <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="{{asset('majestic')}}/assets/img/gallery/purple-tshirt.png" alt="..." />
                                    <div class="card-img-overlay ps-0"> </div>
                                    <div class="card-body ps-0 bg-200">
                                      <h5 class="fw-bold text-1000 text-truncate">Purple T-Shirt</h5>
                                      <div class="fw-bold"><span class="text-600 me-2 text-decoration-line-through">$200</span><span class="text-primary">$175</span></div>
                                    </div><a class="stretched-link" href="#"></a>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="row">
                              <button class="carousel-control-prev" type="button" data-bs-target="#carouselCategoryWTshirt" data-bs-slide="prev"><span class="carousel-control-prev-icon" aria-hidden="true"></span><span class="visually-hidden">Previous</span></button>
                              <button class="carousel-control-next" type="button" data-bs-target="#carouselCategoryWTshirt" data-bs-slide="next"><span class="carousel-control-next-icon" aria-hidden="true"></span><span class="visually-hidden">Next </span></button>
                            </div>
                          </div>
                        </div>
                        <div class="col-12 d-flex justify-content-center mt-5"> <a class="btn btn-lg btn-dark" href="#!">View All </a></div>
                      </div>
                      <div class="tab-pane fade" id="pills-wshoes" role="tabpanel" aria-labelledby="pills-wshoes-tab">
                        <div class="carousel slide" id="carouselCategoryWShoes" data-bs-touch="false" data-bs-interval="false">
                          <div class="carousel-inner">
                            <div class="carousel-item active" data-bs-interval="10000">
                              <div class="row h-100 align-items-center g-2">
                                <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                  <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="{{asset('majestic')}}/assets/img/gallery/shoe-1.png" alt="..." />
                                    <div class="card-img-overlay ps-0"> </div>
                                    <div class="card-body ps-0 bg-200">
                                      <h5 class="fw-bold text-1000 text-truncate">Shoe</h5>
                                      <div class="fw-bold"><span class="text-600 me-2 text-decoration-line-through">$200</span><span class="text-primary">$175</span></div>
                                    </div><a class="stretched-link" href="#"></a>
                                  </div>
                                </div>
                                <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                  <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="{{asset('majestic')}}/assets/img/gallery/shoe-2.png" alt="..." />
                                    <div class="card-img-overlay ps-0"> </div>
                                    <div class="card-body ps-0 bg-200">
                                      <h5 class="fw-bold text-1000 text-truncate">Shoe</h5>
                                      <div class="fw-bold"><span class="text-600 me-2 text-decoration-line-through">$500</span><span class="text-primary">$275</span></div>
                                    </div><a class="stretched-link" href="#"></a>
                                  </div>
                                </div>
                                <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                  <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="{{asset('majestic')}}/assets/img/gallery/shoe-3.png" alt="..." />
                                    <div class="card-img-overlay ps-0"> </div>
                                    <div class="card-body ps-0 bg-200">
                                      <h5 class="fw-bold text-1000 text-truncate">Shoe</h5>
                                      <div class="fw-bold"><span class="text-600 me-2 text-decoration-line-through">$200</span><span class="text-primary">$175</span></div>
                                    </div><a class="stretched-link" href="#"></a>
                                  </div>
                                </div>
                                <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                  <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="{{asset('majestic')}}/assets/img/gallery/shoe-4.png" alt="..." />
                                    <div class="card-img-overlay ps-0"> </div>
                                    <div class="card-body ps-0 bg-200">
                                      <h5 class="fw-bold text-1000 text-truncate">Shoe</h5>
                                      <div class="fw-bold"><span class="text-600 me-2 text-decoration-line-through">$500</span><span class="text-primary">$275</span></div>
                                    </div><a class="stretched-link" href="#"></a>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="carousel-item" data-bs-interval="5000">
                              <div class="row h-100 align-items-center g-2">
                                <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                  <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="{{asset('majestic')}}/assets/img/gallery/shoe-1.png" alt="..." />
                                    <div class="card-img-overlay ps-0"> </div>
                                    <div class="card-body ps-0 bg-200">
                                      <h5 class="fw-bold text-1000 text-truncate">Shoe</h5>
                                      <div class="fw-bold"><span class="text-600 me-2 text-decoration-line-through">$200</span><span class="text-primary">$175</span></div>
                                    </div><a class="stretched-link" href="#"></a>
                                  </div>
                                </div>
                                <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                  <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="{{asset('majestic')}}/assets/img/gallery/shoe-2.png" alt="..." />
                                    <div class="card-img-overlay ps-0"> </div>
                                    <div class="card-body ps-0 bg-200">
                                      <h5 class="fw-bold text-1000 text-truncate">Shoe</h5>
                                      <div class="fw-bold"><span class="text-600 me-2 text-decoration-line-through">$500</span><span class="text-primary">$275</span></div>
                                    </div><a class="stretched-link" href="#"></a>
                                  </div>
                                </div>
                                <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                  <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="{{asset('majestic')}}/assets/img/gallery/shoe-3.png" alt="..." />
                                    <div class="card-img-overlay ps-0"> </div>
                                    <div class="card-body ps-0 bg-200">
                                      <h5 class="fw-bold text-1000 text-truncate">Shoe</h5>
                                      <div class="fw-bold"><span class="text-600 me-2 text-decoration-line-through">$200</span><span class="text-primary">$175</span></div>
                                    </div><a class="stretched-link" href="#"></a>
                                  </div>
                                </div>
                                <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                  <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="{{asset('majestic')}}/assets/img/gallery/shoe-4.png" alt="..." />
                                    <div class="card-img-overlay ps-0"> </div>
                                    <div class="card-body ps-0 bg-200">
                                      <h5 class="fw-bold text-1000 text-truncate">Shoe</h5>
                                      <div class="fw-bold"><span class="text-600 me-2 text-decoration-line-through">$500</span><span class="text-primary">$275</span></div>
                                    </div><a class="stretched-link" href="#"></a>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="carousel-item" data-bs-interval="3000">
                              <div class="row h-100 align-items-center g-2">
                                <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                  <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="{{asset('majestic')}}/assets/img/gallery/shoe-1.png" alt="..." />
                                    <div class="card-img-overlay ps-0"> </div>
                                    <div class="card-body ps-0 bg-200">
                                      <h5 class="fw-bold text-1000 text-truncate">Shoe</h5>
                                      <div class="fw-bold"><span class="text-600 me-2 text-decoration-line-through">$200</span><span class="text-primary">$175</span></div>
                                    </div><a class="stretched-link" href="#"></a>
                                  </div>
                                </div>
                                <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                  <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="{{asset('majestic')}}/assets/img/gallery/shoe-2.png" alt="..." />
                                    <div class="card-img-overlay ps-0"> </div>
                                    <div class="card-body ps-0 bg-200">
                                      <h5 class="fw-bold text-1000 text-truncate">Shoe</h5>
                                      <div class="fw-bold"><span class="text-600 me-2 text-decoration-line-through">$500</span><span class="text-primary">$275</span></div>
                                    </div><a class="stretched-link" href="#"></a>
                                  </div>
                                </div>
                                <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                  <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="{{asset('majestic')}}/assets/img/gallery/shoe-3.png" alt="..." />
                                    <div class="card-img-overlay ps-0"> </div>
                                    <div class="card-body ps-0 bg-200">
                                      <h5 class="fw-bold text-1000 text-truncate">Shoe</h5>
                                      <div class="fw-bold"><span class="text-600 me-2 text-decoration-line-through">$200</span><span class="text-primary">$175</span></div>
                                    </div><a class="stretched-link" href="#"></a>
                                  </div>
                                </div>
                                <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                  <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="{{asset('majestic')}}/assets/img/gallery/shoe-4.png" alt="..." />
                                    <div class="card-img-overlay ps-0"> </div>
                                    <div class="card-body ps-0 bg-200">
                                      <h5 class="fw-bold text-1000 text-truncate">Shoe</h5>
                                      <div class="fw-bold"><span class="text-600 me-2 text-decoration-line-through">$500</span><span class="text-primary">$275</span></div>
                                    </div><a class="stretched-link" href="#"></a>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="carousel-item">
                              <div class="row h-100 align-items-center g-2">
                                <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                  <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="{{asset('majestic')}}/assets/img/gallery/shoe-1.png" alt="..." />
                                    <div class="card-img-overlay ps-0"> </div>
                                    <div class="card-body ps-0 bg-200">
                                      <h5 class="fw-bold text-1000 text-truncate">Shoe</h5>
                                      <div class="fw-bold"><span class="text-600 me-2 text-decoration-line-through">$200</span><span class="text-primary">$175</span></div>
                                    </div><a class="stretched-link" href="#"></a>
                                  </div>
                                </div>
                                <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                  <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="{{asset('majestic')}}/assets/img/gallery/shoe-2.png" alt="..." />
                                    <div class="card-img-overlay ps-0"> </div>
                                    <div class="card-body ps-0 bg-200">
                                      <h5 class="fw-bold text-1000 text-truncate">Shoe</h5>
                                      <div class="fw-bold"><span class="text-600 me-2 text-decoration-line-through">$500</span><span class="text-primary">$275</span></div>
                                    </div><a class="stretched-link" href="#"></a>
                                  </div>
                                </div>
                                <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                  <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="{{asset('majestic')}}/assets/img/gallery/shoe-3.png" alt="..." />
                                    <div class="card-img-overlay ps-0"> </div>
                                    <div class="card-body ps-0 bg-200">
                                      <h5 class="fw-bold text-1000 text-truncate">Shoe</h5>
                                      <div class="fw-bold"><span class="text-600 me-2 text-decoration-line-through">$200</span><span class="text-primary">$175</span></div>
                                    </div><a class="stretched-link" href="#"></a>
                                  </div>
                                </div>
                                <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                  <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="{{asset('majestic')}}/assets/img/gallery/shoe-4.png" alt="..." />
                                    <div class="card-img-overlay ps-0"> </div>
                                    <div class="card-body ps-0 bg-200">
                                      <h5 class="fw-bold text-1000 text-truncate">Shoe</h5>
                                      <div class="fw-bold"><span class="text-600 me-2 text-decoration-line-through">$500</span><span class="text-primary">$275</span></div>
                                    </div><a class="stretched-link" href="#"></a>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="row">
                              <button class="carousel-control-prev" type="button" data-bs-target="#carouselCategoryWShoes" data-bs-slide="prev"><span class="carousel-control-prev-icon" aria-hidden="true"></span><span class="visually-hidden">Previous</span></button>
                              <button class="carousel-control-next" type="button" data-bs-target="#carouselCategoryWShoes" data-bs-slide="next"><span class="carousel-control-next-icon" aria-hidden="true"></span><span class="visually-hidden">Next </span></button>
                            </div>
                          </div>
                        </div>
                        <div class="col-12 d-flex justify-content-center mt-5"> <a class="btn btn-lg btn-dark" href="#!">View All </a></div>
                      </div>
                      <div class="tab-pane fade" id="pills-wwatch" role="tabpanel" aria-labelledby="pills-wwatch-tab">
                        <div class="carousel slide" id="carouselCategoryWwatch" data-bs-touch="false" data-bs-interval="false">
                          <div class="carousel-inner">
                            <div class="carousel-item active" data-bs-interval="10000">
                              <div class="row h-100 align-items-center g-2">
                                <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                  <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="{{asset('majestic')}}/assets/img/gallery/watch-1.png" alt="..." />
                                    <div class="card-img-overlay ps-0"> </div>
                                    <div class="card-body ps-0 bg-200">
                                      <h5 class="fw-bold text-1000 text-truncate">Watch</h5>
                                      <div class="fw-bold"><span class="text-600 me-2 text-decoration-line-through">$500</span><span class="text-primary">$275</span></div>
                                    </div><a class="stretched-link" href="#"></a>
                                  </div>
                                </div>
                                <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                  <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="{{asset('majestic')}}/assets/img/gallery/watch-2.png" alt="..." />
                                    <div class="card-img-overlay ps-0"> </div>
                                    <div class="card-body ps-0 bg-200">
                                      <h5 class="fw-bold text-1000 text-truncate">Watch</h5>
                                      <div class="fw-bold"><span class="text-600 me-2 text-decoration-line-through">$500</span><span class="text-primary">$275</span></div>
                                    </div><a class="stretched-link" href="#"></a>
                                  </div>
                                </div>
                                <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                  <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="{{asset('majestic')}}/assets/img/gallery/watch-3.png" alt="..." />
                                    <div class="card-img-overlay ps-0"> </div>
                                    <div class="card-body ps-0 bg-200">
                                      <h5 class="fw-bold text-1000 text-truncate">Watch</h5>
                                      <div class="fw-bold"><span class="text-600 me-2 text-decoration-line-through">$500</span><span class="text-primary">$275</span></div>
                                    </div><a class="stretched-link" href="#"></a>
                                  </div>
                                </div>
                                <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                  <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="{{asset('majestic')}}/assets/img/gallery/watch-4.png" alt="..." />
                                    <div class="card-img-overlay ps-0"> </div>
                                    <div class="card-body ps-0 bg-200">
                                      <h5 class="fw-bold text-1000 text-truncate">Watch</h5>
                                      <div class="fw-bold"><span class="text-600 me-2 text-decoration-line-through">$500</span><span class="text-primary">$275</span></div>
                                    </div><a class="stretched-link" href="#"></a>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="carousel-item" data-bs-interval="5000">
                              <div class="row h-100 align-items-center g-2">
                                <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                  <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="{{asset('majestic')}}/assets/img/gallery/watch-1.png" alt="..." />
                                    <div class="card-img-overlay ps-0"> </div>
                                    <div class="card-body ps-0 bg-200">
                                      <h5 class="fw-bold text-1000 text-truncate">Watch</h5>
                                      <div class="fw-bold"><span class="text-600 me-2 text-decoration-line-through">$500</span><span class="text-primary">$275</span></div>
                                    </div><a class="stretched-link" href="#"></a>
                                  </div>
                                </div>
                                <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                  <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="{{asset('majestic')}}/assets/img/gallery/watch-2.png" alt="..." />
                                    <div class="card-img-overlay ps-0"> </div>
                                    <div class="card-body ps-0 bg-200">
                                      <h5 class="fw-bold text-1000 text-truncate">Watch</h5>
                                      <div class="fw-bold"><span class="text-600 me-2 text-decoration-line-through">$500</span><span class="text-primary">$275</span></div>
                                    </div><a class="stretched-link" href="#"></a>
                                  </div>
                                </div>
                                <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                  <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="{{asset('majestic')}}/assets/img/gallery/watch-3.png" alt="..." />
                                    <div class="card-img-overlay ps-0"> </div>
                                    <div class="card-body ps-0 bg-200">
                                      <h5 class="fw-bold text-1000 text-truncate">Watch</h5>
                                      <div class="fw-bold"><span class="text-600 me-2 text-decoration-line-through">$500</span><span class="text-primary">$275</span></div>
                                    </div><a class="stretched-link" href="#"></a>
                                  </div>
                                </div>
                                <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                  <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="{{asset('majestic')}}/assets/img/gallery/watch-4.png" alt="..." />
                                    <div class="card-img-overlay ps-0"> </div>
                                    <div class="card-body ps-0 bg-200">
                                      <h5 class="fw-bold text-1000 text-truncate">Watch</h5>
                                      <div class="fw-bold"><span class="text-600 me-2 text-decoration-line-through">$500</span><span class="text-primary">$275</span></div>
                                    </div><a class="stretched-link" href="#"></a>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="carousel-item" data-bs-interval="3000">
                              <div class="row h-100 align-items-center g-2">
                                <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                  <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="{{asset('majestic')}}/assets/img/gallery/watch-1.png" alt="..." />
                                    <div class="card-img-overlay ps-0"> </div>
                                    <div class="card-body ps-0 bg-200">
                                      <h5 class="fw-bold text-1000 text-truncate">Watch</h5>
                                      <div class="fw-bold"><span class="text-600 me-2 text-decoration-line-through">$500</span><span class="text-primary">$275</span></div>
                                    </div><a class="stretched-link" href="#"></a>
                                  </div>
                                </div>
                                <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                  <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="{{asset('majestic')}}/assets/img/gallery/watch-2.png" alt="..." />
                                    <div class="card-img-overlay ps-0"> </div>
                                    <div class="card-body ps-0 bg-200">
                                      <h5 class="fw-bold text-1000 text-truncate">Watch</h5>
                                      <div class="fw-bold"><span class="text-600 me-2 text-decoration-line-through">$500</span><span class="text-primary">$275</span></div>
                                    </div><a class="stretched-link" href="#"></a>
                                  </div>
                                </div>
                                <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                  <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="{{asset('majestic')}}/assets/img/gallery/watch-3.png" alt="..." />
                                    <div class="card-img-overlay ps-0"> </div>
                                    <div class="card-body ps-0 bg-200">
                                      <h5 class="fw-bold text-1000 text-truncate">Watch</h5>
                                      <div class="fw-bold"><span class="text-600 me-2 text-decoration-line-through">$500</span><span class="text-primary">$275</span></div>
                                    </div><a class="stretched-link" href="#"></a>
                                  </div>
                                </div>
                                <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                  <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="{{asset('majestic')}}/assets/img/gallery/watch-4.png" alt="..." />
                                    <div class="card-img-overlay ps-0"> </div>
                                    <div class="card-body ps-0 bg-200">
                                      <h5 class="fw-bold text-1000 text-truncate">Watch</h5>
                                      <div class="fw-bold"><span class="text-600 me-2 text-decoration-line-through">$500</span><span class="text-primary">$275</span></div>
                                    </div><a class="stretched-link" href="#"></a>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="carousel-item">
                              <div class="row h-100 align-items-center g-2">
                                <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                  <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="{{asset('majestic')}}/assets/img/gallery/watch-1.png" alt="..." />
                                    <div class="card-img-overlay ps-0"> </div>
                                    <div class="card-body ps-0 bg-200">
                                      <h5 class="fw-bold text-1000 text-truncate">Watch</h5>
                                      <div class="fw-bold"><span class="text-600 me-2 text-decoration-line-through">$500</span><span class="text-primary">$275</span></div>
                                    </div><a class="stretched-link" href="#"></a>
                                  </div>
                                </div>
                                <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                  <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="{{asset('majestic')}}/assets/img/gallery/watch-2.png" alt="..." />
                                    <div class="card-img-overlay ps-0"> </div>
                                    <div class="card-body ps-0 bg-200">
                                      <h5 class="fw-bold text-1000 text-truncate">Watch</h5>
                                      <div class="fw-bold"><span class="text-600 me-2 text-decoration-line-through">$500</span><span class="text-primary">$275</span></div>
                                    </div><a class="stretched-link" href="#"></a>
                                  </div>
                                </div>
                                <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                  <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="{{asset('majestic')}}/assets/img/gallery/watch-3.png" alt="..." />
                                    <div class="card-img-overlay ps-0"> </div>
                                    <div class="card-body ps-0 bg-200">
                                      <h5 class="fw-bold text-1000 text-truncate">Watch</h5>
                                      <div class="fw-bold"><span class="text-600 me-2 text-decoration-line-through">$500</span><span class="text-primary">$275</span></div>
                                    </div><a class="stretched-link" href="#"></a>
                                  </div>
                                </div>
                                <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                  <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="{{asset('majestic')}}/assets/img/gallery/watch-4.png" alt="..." />
                                    <div class="card-img-overlay ps-0"> </div>
                                    <div class="card-body ps-0 bg-200">
                                      <h5 class="fw-bold text-1000 text-truncate">Watch</h5>
                                      <div class="fw-bold"><span class="text-600 me-2 text-decoration-line-through">$500</span><span class="text-primary">$275</span></div>
                                    </div><a class="stretched-link" href="#"></a>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="row">
                              <button class="carousel-control-prev" type="button" data-bs-target="#carouselCategoryWwatch" data-bs-slide="prev"><span class="carousel-control-prev-icon" aria-hidden="true"></span><span class="visually-hidden">Previous</span></button>
                              <button class="carousel-control-next" type="button" data-bs-target="#carouselCategoryWwatch" data-bs-slide="next"><span class="carousel-control-next-icon" aria-hidden="true"></span><span class="visually-hidden">Next </span></button>
                            </div>
                          </div>
                        </div>
                        <div class="col-12 d-flex justify-content-center mt-5"> <a class="btn btn-lg btn-dark" href="#!">View All </a></div>
                      </div>
                      <div class="tab-pane fade" id="pills-wsunglasses" role="tabpanel" aria-labelledby="pills-wsunglasses-tab">
                        <div class="carousel slide" id="carouselCategoryWSunglasses" data-bs-touch="false" data-bs-interval="false">
                          <div class="carousel-inner">
                            <div class="carousel-item active" data-bs-interval="10000">
                              <div class="row h-100 align-items-center g-2">
                                <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                  <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="{{asset('majestic')}}/assets/img/gallery/sunglass-1.png" alt="..." />
                                    <div class="card-img-overlay ps-0"> </div>
                                    <div class="card-body ps-0 bg-200">
                                      <h5 class="fw-bold text-1000 text-truncate">Sunglass</h5>
                                      <div class="fw-bold"><span class="text-600 me-2 text-decoration-line-through">$500</span><span class="text-primary">$275</span></div>
                                    </div><a class="stretched-link" href="#"></a>
                                  </div>
                                </div>
                                <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                  <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="{{asset('majestic')}}/assets/img/gallery/sunglass-2.png" alt="..." />
                                    <div class="card-img-overlay ps-0"> </div>
                                    <div class="card-body ps-0 bg-200">
                                      <h5 class="fw-bold text-1000 text-truncate">Sunglass</h5>
                                      <div class="fw-bold"><span class="text-600 me-2 text-decoration-line-through">$500</span><span class="text-primary">$275</span></div>
                                    </div><a class="stretched-link" href="#"></a>
                                  </div>
                                </div>
                                <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                  <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="{{asset('majestic')}}/assets/img/gallery/sunglass-3.png" alt="..." />
                                    <div class="card-img-overlay ps-0"> </div>
                                    <div class="card-body ps-0 bg-200">
                                      <h5 class="fw-bold text-1000 text-truncate">Sunglass</h5>
                                      <div class="fw-bold"><span class="text-600 me-2 text-decoration-line-through">$500</span><span class="text-primary">$275</span></div>
                                    </div><a class="stretched-link" href="#"></a>
                                  </div>
                                </div>
                                <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                  <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="{{asset('majestic')}}/assets/img/gallery/sunglass-4.png" alt="..." />
                                    <div class="card-img-overlay ps-0"> </div>
                                    <div class="card-body ps-0 bg-200">
                                      <h5 class="fw-bold text-1000 text-truncate">Sunglass</h5>
                                      <div class="fw-bold"><span class="text-600 me-2 text-decoration-line-through">$500</span><span class="text-primary">$275</span></div>
                                    </div><a class="stretched-link" href="#"></a>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="carousel-item" data-bs-interval="5000">
                              <div class="row h-100 align-items-center g-2">
                                <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                  <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="{{asset('majestic')}}/assets/img/gallery/watch-5.png" alt="..." />
                                    <div class="card-img-overlay ps-0"> </div>
                                    <div class="card-body ps-0 bg-200">
                                      <h5 class="fw-bold text-1000 text-truncate">Watch</h5>
                                      <div class="fw-bold"><span class="text-600 me-2 text-decoration-line-through">$500</span><span class="text-primary">$275</span></div>
                                    </div><a class="stretched-link" href="#"></a>
                                  </div>
                                </div>
                                <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                  <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="{{asset('majestic')}}/assets/img/gallery/watch-6.png" alt="..." />
                                    <div class="card-img-overlay ps-0"> </div>
                                    <div class="card-body ps-0 bg-200">
                                      <h5 class="fw-bold text-1000 text-truncate">Watch</h5>
                                      <div class="fw-bold"><span class="text-600 me-2 text-decoration-line-through">$500</span><span class="text-primary">$275</span></div>
                                    </div><a class="stretched-link" href="#"></a>
                                  </div>
                                </div>
                                <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                  <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="{{asset('majestic')}}/assets/img/gallery/watch-7.png" alt="..." />
                                    <div class="card-img-overlay ps-0"> </div>
                                    <div class="card-body ps-0 bg-200">
                                      <h5 class="fw-bold text-1000 text-truncate">Watch</h5>
                                      <div class="fw-bold"><span class="text-600 me-2 text-decoration-line-through">$500</span><span class="text-primary">$275</span></div>
                                    </div><a class="stretched-link" href="#"></a>
                                  </div>
                                </div>
                                <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                  <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="{{asset('majestic')}}/assets/img/gallery/watch-8.png" alt="..." />
                                    <div class="card-img-overlay ps-0"> </div>
                                    <div class="card-body ps-0 bg-200">
                                      <h5 class="fw-bold text-1000 text-truncate">Watch</h5>
                                      <div class="fw-bold"><span class="text-600 me-2 text-decoration-line-through">$500</span><span class="text-primary">$275</span></div>
                                    </div><a class="stretched-link" href="#"></a>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="carousel-item" data-bs-interval="3000">
                              <div class="row h-100 align-items-center g-2">
                                <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                  <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="{{asset('majestic')}}/assets/img/gallery/watch-5.png" alt="..." />
                                    <div class="card-img-overlay ps-0"> </div>
                                    <div class="card-body ps-0 bg-200">
                                      <h5 class="fw-bold text-1000 text-truncate">Watch</h5>
                                      <div class="fw-bold"><span class="text-600 me-2 text-decoration-line-through">$500</span><span class="text-primary">$275</span></div>
                                    </div><a class="stretched-link" href="#"></a>
                                  </div>
                                </div>
                                <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                  <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="{{asset('majestic')}}/assets/img/gallery/watch-6.png" alt="..." />
                                    <div class="card-img-overlay ps-0"> </div>
                                    <div class="card-body ps-0 bg-200">
                                      <h5 class="fw-bold text-1000 text-truncate">Watch</h5>
                                      <div class="fw-bold"><span class="text-600 me-2 text-decoration-line-through">$500</span><span class="text-primary">$275</span></div>
                                    </div><a class="stretched-link" href="#"></a>
                                  </div>
                                </div>
                                <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                  <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="{{asset('majestic')}}/assets/img/gallery/watch-7.png" alt="..." />
                                    <div class="card-img-overlay ps-0"> </div>
                                    <div class="card-body ps-0 bg-200">
                                      <h5 class="fw-bold text-1000 text-truncate">Watch</h5>
                                      <div class="fw-bold"><span class="text-600 me-2 text-decoration-line-through">$500</span><span class="text-primary">$275</span></div>
                                    </div><a class="stretched-link" href="#"></a>
                                  </div>
                                </div>
                                <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                  <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="{{asset('majestic')}}/assets/img/gallery/watch-8.png" alt="..." />
                                    <div class="card-img-overlay ps-0"> </div>
                                    <div class="card-body ps-0 bg-200">
                                      <h5 class="fw-bold text-1000 text-truncate">Watch</h5>
                                      <div class="fw-bold"><span class="text-600 me-2 text-decoration-line-through">$500</span><span class="text-primary">$275</span></div>
                                    </div><a class="stretched-link" href="#"></a>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="carousel-item">
                              <div class="row h-100 align-items-center g-2">
                                <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                  <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="{{asset('majestic')}}/assets/img/gallery/watch-5.png" alt="..." />
                                    <div class="card-img-overlay ps-0"> </div>
                                    <div class="card-body ps-0 bg-200">
                                      <h5 class="fw-bold text-1000 text-truncate">Watch</h5>
                                      <div class="fw-bold"><span class="text-600 me-2 text-decoration-line-through">$500</span><span class="text-primary">$275</span></div>
                                    </div><a class="stretched-link" href="#"></a>
                                  </div>
                                </div>
                                <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                  <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="{{asset('majestic')}}/assets/img/gallery/watch-6.png" alt="..." />
                                    <div class="card-img-overlay ps-0"> </div>
                                    <div class="card-body ps-0 bg-200">
                                      <h5 class="fw-bold text-1000 text-truncate">Watch</h5>
                                      <div class="fw-bold"><span class="text-600 me-2 text-decoration-line-through">$500</span><span class="text-primary">$275</span></div>
                                    </div><a class="stretched-link" href="#"></a>
                                  </div>
                                </div>
                                <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                  <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="{{asset('majestic')}}/assets/img/gallery/watch-7.png" alt="..." />
                                    <div class="card-img-overlay ps-0"> </div>
                                    <div class="card-body ps-0 bg-200">
                                      <h5 class="fw-bold text-1000 text-truncate">Watch</h5>
                                      <div class="fw-bold"><span class="text-600 me-2 text-decoration-line-through">$500</span><span class="text-primary">$275</span></div>
                                    </div><a class="stretched-link" href="#"></a>
                                  </div>
                                </div>
                                <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                  <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="{{asset('majestic')}}/assets/img/gallery/watch-8.png" alt="..." />
                                    <div class="card-img-overlay ps-0"> </div>
                                    <div class="card-body ps-0 bg-200">
                                      <h5 class="fw-bold text-1000 text-truncate">Watch</h5>
                                      <div class="fw-bold"><span class="text-600 me-2 text-decoration-line-through">$500</span><span class="text-primary">$275</span></div>
                                    </div><a class="stretched-link" href="#"></a>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="row">
                              <button class="carousel-control-prev" type="button" data-bs-target="#carouselCategoryWSunglasses" data-bs-slide="prev"><span class="carousel-control-prev-icon" aria-hidden="true"></span><span class="visually-hidden">Previous</span></button>
                              <button class="carousel-control-next" type="button" data-bs-target="#carouselCategoryWSunglasses" data-bs-slide="next"><span class="carousel-control-next-icon" aria-hidden="true"></span><span class="visually-hidden">Next </span></button>
                            </div>
                          </div>
                        </div>
                        <div class="col-12 d-flex justify-content-center mt-5"> <a class="btn btn-lg btn-dark" href="#!">View All </a></div>
                      </div>
                      <div class="tab-pane fade" id="pills-wbagpacks" role="tabpanel" aria-labelledby="pills-wbagpacks-tab">
                        <div class="carousel slide" id="carouselCategoryWBagpacks" data-bs-touch="false" data-bs-interval="false">
                          <div class="carousel-inner">
                            <div class="carousel-item active" data-bs-interval="10000">
                              <div class="row h-100 align-items-center g-2">
                                <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                  <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="{{asset('majestic')}}/assets/img/gallery/bagpacks-1.png" alt="..." />
                                    <div class="card-img-overlay ps-0"> </div>
                                    <div class="card-body ps-0 bg-200">
                                      <h5 class="fw-bold text-1000 text-truncate">Sunglass</h5>
                                      <div class="fw-bold"><span class="text-600 me-2 text-decoration-line-through">$500</span><span class="text-primary">$275</span></div>
                                    </div><a class="stretched-link" href="#"></a>
                                  </div>
                                </div>
                                <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                  <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="{{asset('majestic')}}/assets/img/gallery/bagpacks-2.png" alt="..." />
                                    <div class="card-img-overlay ps-0"> </div>
                                    <div class="card-body ps-0 bg-200">
                                      <h5 class="fw-bold text-1000 text-truncate">Bagpacks</h5>
                                      <div class="fw-bold"><span class="text-600 me-2 text-decoration-line-through">$500</span><span class="text-primary">$275</span></div>
                                    </div><a class="stretched-link" href="#"></a>
                                  </div>
                                </div>
                                <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                  <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="{{asset('majestic')}}/assets/img/gallery/bagpacks-3.png" alt="..." />
                                    <div class="card-img-overlay ps-0"> </div>
                                    <div class="card-body ps-0 bg-200">
                                      <h5 class="fw-bold text-1000 text-truncate">Bagpacks</h5>
                                      <div class="fw-bold"><span class="text-600 me-2 text-decoration-line-through">$500</span><span class="text-primary">$275</span></div>
                                    </div><a class="stretched-link" href="#"></a>
                                  </div>
                                </div>
                                <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                  <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="{{asset('majestic')}}/assets/img/gallery/bagpacks-4.png" alt="..." />
                                    <div class="card-img-overlay ps-0"> </div>
                                    <div class="card-body ps-0 bg-200">
                                      <h5 class="fw-bold text-1000 text-truncate">Bagpacks</h5>
                                      <div class="fw-bold"><span class="text-600 me-2 text-decoration-line-through">$500</span><span class="text-primary">$275</span></div>
                                    </div><a class="stretched-link" href="#"></a>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="carousel-item" data-bs-interval="5000">
                              <div class="row h-100 align-items-center g-2">
                                <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                  <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="{{asset('majestic')}}/assets/img/gallery/bagpacks-1.png" alt="..." />
                                    <div class="card-img-overlay ps-0"> </div>
                                    <div class="card-body ps-0 bg-200">
                                      <h5 class="fw-bold text-1000 text-truncate">Sunglass</h5>
                                      <div class="fw-bold"><span class="text-600 me-2 text-decoration-line-through">$500</span><span class="text-primary">$275</span></div>
                                    </div><a class="stretched-link" href="#"></a>
                                  </div>
                                </div>
                                <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                  <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="{{asset('majestic')}}/assets/img/gallery/bagpacks-2.png" alt="..." />
                                    <div class="card-img-overlay ps-0"> </div>
                                    <div class="card-body ps-0 bg-200">
                                      <h5 class="fw-bold text-1000 text-truncate">Bagpacks</h5>
                                      <div class="fw-bold"><span class="text-600 me-2 text-decoration-line-through">$500</span><span class="text-primary">$275</span></div>
                                    </div><a class="stretched-link" href="#"></a>
                                  </div>
                                </div>
                                <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                  <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="{{asset('majestic')}}/assets/img/gallery/bagpacks-3.png" alt="..." />
                                    <div class="card-img-overlay ps-0"> </div>
                                    <div class="card-body ps-0 bg-200">
                                      <h5 class="fw-bold text-1000 text-truncate">Bagpacks</h5>
                                      <div class="fw-bold"><span class="text-600 me-2 text-decoration-line-through">$500</span><span class="text-primary">$275</span></div>
                                    </div><a class="stretched-link" href="#"></a>
                                  </div>
                                </div>
                                <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                  <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="{{asset('majestic')}}/assets/img/gallery/bagpacks-4.png" alt="..." />
                                    <div class="card-img-overlay ps-0"> </div>
                                    <div class="card-body ps-0 bg-200">
                                      <h5 class="fw-bold text-1000 text-truncate">Bagpacks</h5>
                                      <div class="fw-bold"><span class="text-600 me-2 text-decoration-line-through">$500</span><span class="text-primary">$275</span></div>
                                    </div><a class="stretched-link" href="#"></a>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="carousel-item" data-bs-interval="3000">
                              <div class="row h-100 align-items-center g-2">
                                <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                  <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="{{asset('majestic')}}/assets/img/gallery/bagpacks-1.png" alt="..." />
                                    <div class="card-img-overlay ps-0"> </div>
                                    <div class="card-body ps-0 bg-200">
                                      <h5 class="fw-bold text-1000 text-truncate">Sunglass</h5>
                                      <div class="fw-bold"><span class="text-600 me-2 text-decoration-line-through">$500</span><span class="text-primary">$275</span></div>
                                    </div><a class="stretched-link" href="#"></a>
                                  </div>
                                </div>
                                <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                  <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="{{asset('majestic')}}/assets/img/gallery/bagpacks-2.png" alt="..." />
                                    <div class="card-img-overlay ps-0"> </div>
                                    <div class="card-body ps-0 bg-200">
                                      <h5 class="fw-bold text-1000 text-truncate">Bagpacks</h5>
                                      <div class="fw-bold"><span class="text-600 me-2 text-decoration-line-through">$500</span><span class="text-primary">$275</span></div>
                                    </div><a class="stretched-link" href="#"></a>
                                  </div>
                                </div>
                                <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                  <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="{{asset('majestic')}}/assets/img/gallery/bagpacks-3.png" alt="..." />
                                    <div class="card-img-overlay ps-0"> </div>
                                    <div class="card-body ps-0 bg-200">
                                      <h5 class="fw-bold text-1000 text-truncate">Bagpacks</h5>
                                      <div class="fw-bold"><span class="text-600 me-2 text-decoration-line-through">$500</span><span class="text-primary">$275</span></div>
                                    </div><a class="stretched-link" href="#"></a>
                                  </div>
                                </div>
                                <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                  <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="{{asset('majestic')}}/assets/img/gallery/bagpacks-4.png" alt="..." />
                                    <div class="card-img-overlay ps-0"> </div>
                                    <div class="card-body ps-0 bg-200">
                                      <h5 class="fw-bold text-1000 text-truncate">Bagpacks</h5>
                                      <div class="fw-bold"><span class="text-600 me-2 text-decoration-line-through">$500</span><span class="text-primary">$275</span></div>
                                    </div><a class="stretched-link" href="#"></a>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="carousel-item">
                              <div class="row h-100 align-items-center g-2">
                                <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                  <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="{{asset('majestic')}}/assets/img/gallery/bagpacks-1.png" alt="..." />
                                    <div class="card-img-overlay ps-0"> </div>
                                    <div class="card-body ps-0 bg-200">
                                      <h5 class="fw-bold text-1000 text-truncate">Sunglass</h5>
                                      <div class="fw-bold"><span class="text-600 me-2 text-decoration-line-through">$500</span><span class="text-primary">$275</span></div>
                                    </div><a class="stretched-link" href="#"></a>
                                  </div>
                                </div>
                                <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                  <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="{{asset('majestic')}}/assets/img/gallery/bagpacks-2.png" alt="..." />
                                    <div class="card-img-overlay ps-0"> </div>
                                    <div class="card-body ps-0 bg-200">
                                      <h5 class="fw-bold text-1000 text-truncate">Bagpacks</h5>
                                      <div class="fw-bold"><span class="text-600 me-2 text-decoration-line-through">$500</span><span class="text-primary">$275</span></div>
                                    </div><a class="stretched-link" href="#"></a>
                                  </div>
                                </div>
                                <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                  <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="{{asset('majestic')}}/assets/img/gallery/bagpacks-3.png" alt="..." />
                                    <div class="card-img-overlay ps-0"> </div>
                                    <div class="card-body ps-0 bg-200">
                                      <h5 class="fw-bold text-1000 text-truncate">Bagpacks</h5>
                                      <div class="fw-bold"><span class="text-600 me-2 text-decoration-line-through">$500</span><span class="text-primary">$275</span></div>
                                    </div><a class="stretched-link" href="#"></a>
                                  </div>
                                </div>
                                <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                  <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="{{asset('majestic')}}/assets/img/gallery/bagpacks-4.png" alt="..." />
                                    <div class="card-img-overlay ps-0"> </div>
                                    <div class="card-body ps-0 bg-200">
                                      <h5 class="fw-bold text-1000 text-truncate">Bagpacks</h5>
                                      <div class="fw-bold"><span class="text-600 me-2 text-decoration-line-through">$500</span><span class="text-primary">$275</span></div>
                                    </div><a class="stretched-link" href="#"></a>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="row">
                              <button class="carousel-control-prev" type="button" data-bs-target="#carouselCategoryWBagpacks" data-bs-slide="prev"><span class="carousel-control-prev-icon" aria-hidden="true"></span><span class="visually-hidden">Previous</span></button>
                              <button class="carousel-control-next" type="button" data-bs-target="#carouselCategoryWBagpacks" data-bs-slide="next"><span class="carousel-control-next-icon" aria-hidden="true"></span><span class="visually-hidden">Next </span></button>
                            </div>
                          </div>
                        </div>
                        <div class="col-12 d-flex justify-content-center mt-5"> <a class="btn btn-lg btn-dark" href="#!">View All </a></div>
                      </div>
                    </div>
                  </div>
                  <div class="tab-pane fade" id="nav-men" role="tabpanel" aria-labelledby="nav-men-tab">
                    <ul class="nav nav-pills mb-5 justify-content-center" id="pills-tab-men" role="tablist">
                      <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="pills-tshirt-tab" data-bs-toggle="pill" data-bs-target="#pills-tshirt" type="button" role="tab" aria-controls="pills-tshirt" aria-selected="true">T-Shirt</button>
                      </li>
                      <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pills-shirt-tab" data-bs-toggle="pill" data-bs-target="#pills-shirt" type="button" role="tab" aria-controls="pills-shirt" aria-selected="false">Shirt</button>
                      </li>
                      <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pills-shoes-tab" data-bs-toggle="pill" data-bs-target="#pills-shoes" type="button" role="tab" aria-controls="pills-shoes" aria-selected="false">Shoes</button>
                      </li>
                      <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pills-watch-tab" data-bs-toggle="pill" data-bs-target="#pills-watch" type="button" role="tab" aria-controls="pills-watch" aria-selected="false">Watch </button>
                      </li>
                      <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pills-sunglasses-tab" data-bs-toggle="pill" data-bs-target="#pills-sunglasses" type="button" role="tab" aria-controls="pills-sunglasses" aria-selected="false">Sunglasses </button>
                      </li>
                      <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pills-bagpacks-tab" data-bs-toggle="pill" data-bs-target="#pills-bagpacks" type="button" role="tab" aria-controls="pills-bagpacks" aria-selected="false">Bagpacks </button>
                      </li>
                    </ul>
                    <div class="tab-content" id="pills-tabContentMen">
                      <div class="tab-pane fade show active" id="pills-tshirt" role="tabpanel" aria-labelledby="pills-tshirt-tab">
                        <div class="carousel slide" id="carouselCategoryTshirt" data-bs-touch="false" data-bs-interval="false">
                          <div class="carousel-inner">
                            <div class="carousel-item active" data-bs-interval="10000">
                              <div class="row h-100 align-items-center g-2">
                                <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                  <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="{{asset('majestic')}}/assets/img/gallery/white-tshirt.png" alt="..." />
                                    <div class="card-img-overlay ps-0"> </div>
                                    <div class="card-body ps-0 bg-200">
                                      <h5 class="fw-bold text-1000 text-truncate">White T-Shirt</h5>
                                      <div class="fw-bold"><span class="text-600 me-2 text-decoration-line-through">$200</span><span class="text-primary">$175</span></div>
                                    </div><a class="stretched-link" href="#"></a>
                                  </div>
                                </div>
                                <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                  <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="{{asset('majestic')}}/assets/img/gallery/sky-tshirt.png" alt="..." />
                                    <div class="card-img-overlay ps-0"> </div>
                                    <div class="card-body ps-0 bg-200">
                                      <h5 class="fw-bold text-1000 text-truncate">Sky T-Shirt</h5>
                                      <div class="fw-bold"><span class="text-600 me-2 text-decoration-line-through">$200</span><span class="text-primary">$175</span></div>
                                    </div><a class="stretched-link" href="#"></a>
                                  </div>
                                </div>
                                <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                  <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="{{asset('majestic')}}/assets/img/gallery/yellow-tshirt.png" alt="..." />
                                    <div class="card-img-overlay ps-0"> </div>
                                    <div class="card-body ps-0 bg-200">
                                      <h5 class="fw-bold text-1000 text-truncate">Yellow T-Shirt</h5>
                                      <div class="fw-bold"><span class="text-600 me-2 text-decoration-line-through">$200</span><span class="text-primary">$175</span></div>
                                    </div><a class="stretched-link" href="#"></a>
                                  </div>
                                </div>
                                <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                  <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="{{asset('majestic')}}/assets/img/gallery/black-tshirt.png" alt="..." />
                                    <div class="card-img-overlay ps-0"> </div>
                                    <div class="card-body ps-0 bg-200">
                                      <h5 class="fw-bold text-1000 text-truncate">Black T-Shirt</h5>
                                      <div class="fw-bold"><span class="text-600 me-2 text-decoration-line-through">$200</span><span class="text-primary">$175</span></div>
                                    </div><a class="stretched-link" href="#"></a>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="carousel-item" data-bs-interval="5000">
                              <div class="row h-100 align-items-center g-2">
                                <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                  <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="{{asset('majestic')}}/assets/img/gallery/white-tshirt.png" alt="..." />
                                    <div class="card-img-overlay ps-0"> </div>
                                    <div class="card-body ps-0 bg-200">
                                      <h5 class="fw-bold text-1000 text-truncate">White T-Shirt</h5>
                                      <div class="fw-bold"><span class="text-600 me-2 text-decoration-line-through">$200</span><span class="text-primary">$175</span></div>
                                    </div><a class="stretched-link" href="#"></a>
                                  </div>
                                </div>
                                <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                  <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="{{asset('majestic')}}/assets/img/gallery/sky-tshirt.png" alt="..." />
                                    <div class="card-img-overlay ps-0"> </div>
                                    <div class="card-body ps-0 bg-200">
                                      <h5 class="fw-bold text-1000 text-truncate">Sky T-Shirt</h5>
                                      <div class="fw-bold"><span class="text-600 me-2 text-decoration-line-through">$200</span><span class="text-primary">$175</span></div>
                                    </div><a class="stretched-link" href="#"></a>
                                  </div>
                                </div>
                                <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                  <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="{{asset('majestic')}}/assets/img/gallery/yellow-tshirt.png" alt="..." />
                                    <div class="card-img-overlay ps-0"> </div>
                                    <div class="card-body ps-0 bg-200">
                                      <h5 class="fw-bold text-1000 text-truncate">Yellow T-Shirt</h5>
                                      <div class="fw-bold"><span class="text-600 me-2 text-decoration-line-through">$200</span><span class="text-primary">$175</span></div>
                                    </div><a class="stretched-link" href="#"></a>
                                  </div>
                                </div>
                                <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                  <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="{{asset('majestic')}}/assets/img/gallery/black-tshirt.png" alt="..." />
                                    <div class="card-img-overlay ps-0"> </div>
                                    <div class="card-body ps-0 bg-200">
                                      <h5 class="fw-bold text-1000 text-truncate">Black T-Shirt</h5>
                                      <div class="fw-bold"><span class="text-600 me-2 text-decoration-line-through">$200</span><span class="text-primary">$175</span></div>
                                    </div><a class="stretched-link" href="#"></a>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="carousel-item" data-bs-interval="3000">
                              <div class="row h-100 align-items-center g-2">
                                <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                  <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="{{asset('majestic')}}/assets/img/gallery/white-tshirt.png" alt="..." />
                                    <div class="card-img-overlay ps-0"> </div>
                                    <div class="card-body ps-0 bg-200">
                                      <h5 class="fw-bold text-1000 text-truncate">White T-Shirt</h5>
                                      <div class="fw-bold"><span class="text-600 me-2 text-decoration-line-through">$200</span><span class="text-primary">$175</span></div>
                                    </div><a class="stretched-link" href="#"></a>
                                  </div>
                                </div>
                                <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                  <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="{{asset('majestic')}}/assets/img/gallery/sky-tshirt.png" alt="..." />
                                    <div class="card-img-overlay ps-0"> </div>
                                    <div class="card-body ps-0 bg-200">
                                      <h5 class="fw-bold text-1000 text-truncate">Sky T-Shirt</h5>
                                      <div class="fw-bold"><span class="text-600 me-2 text-decoration-line-through">$200</span><span class="text-primary">$175</span></div>
                                    </div><a class="stretched-link" href="#"></a>
                                  </div>
                                </div>
                                <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                  <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="{{asset('majestic')}}/assets/img/gallery/yellow-tshirt.png" alt="..." />
                                    <div class="card-img-overlay ps-0"> </div>
                                    <div class="card-body ps-0 bg-200">
                                      <h5 class="fw-bold text-1000 text-truncate">Yellow T-Shirt</h5>
                                      <div class="fw-bold"><span class="text-600 me-2 text-decoration-line-through">$200</span><span class="text-primary">$175</span></div>
                                    </div><a class="stretched-link" href="#"></a>
                                  </div>
                                </div>
                                <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                  <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="{{asset('majestic')}}/assets/img/gallery/black-tshirt.png" alt="..." />
                                    <div class="card-img-overlay ps-0"> </div>
                                    <div class="card-body ps-0 bg-200">
                                      <h5 class="fw-bold text-1000 text-truncate">Black T-Shirt</h5>
                                      <div class="fw-bold"><span class="text-600 me-2 text-decoration-line-through">$200</span><span class="text-primary">$175</span></div>
                                    </div><a class="stretched-link" href="#"></a>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="carousel-item">
                              <div class="row h-100 align-items-center g-2">
                                <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                  <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="{{asset('majestic')}}/assets/img/gallery/white-tshirt.png" alt="..." />
                                    <div class="card-img-overlay ps-0"> </div>
                                    <div class="card-body ps-0 bg-200">
                                      <h5 class="fw-bold text-1000 text-truncate">White T-Shirt</h5>
                                      <div class="fw-bold"><span class="text-600 me-2 text-decoration-line-through">$200</span><span class="text-primary">$175</span></div>
                                    </div><a class="stretched-link" href="#"></a>
                                  </div>
                                </div>
                                <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                  <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="{{asset('majestic')}}/assets/img/gallery/sky-tshirt.png" alt="..." />
                                    <div class="card-img-overlay ps-0"> </div>
                                    <div class="card-body ps-0 bg-200">
                                      <h5 class="fw-bold text-1000 text-truncate">Sky T-Shirt</h5>
                                      <div class="fw-bold"><span class="text-600 me-2 text-decoration-line-through">$200</span><span class="text-primary">$175</span></div>
                                    </div><a class="stretched-link" href="#"></a>
                                  </div>
                                </div>
                                <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                  <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="{{asset('majestic')}}/assets/img/gallery/yellow-tshirt.png" alt="..." />
                                    <div class="card-img-overlay ps-0"> </div>
                                    <div class="card-body ps-0 bg-200">
                                      <h5 class="fw-bold text-1000 text-truncate">Yellow T-Shirt</h5>
                                      <div class="fw-bold"><span class="text-600 me-2 text-decoration-line-through">$200</span><span class="text-primary">$175</span></div>
                                    </div><a class="stretched-link" href="#"></a>
                                  </div>
                                </div>
                                <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                  <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="{{asset('majestic')}}/assets/img/gallery/black-tshirt.png" alt="..." />
                                    <div class="card-img-overlay ps-0"> </div>
                                    <div class="card-body ps-0 bg-200">
                                      <h5 class="fw-bold text-1000 text-truncate">Black T-Shirt</h5>
                                      <div class="fw-bold"><span class="text-600 me-2 text-decoration-line-through">$200</span><span class="text-primary">$175</span></div>
                                    </div><a class="stretched-link" href="#"></a>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="row">
                              <button class="carousel-control-prev" type="button" data-bs-target="#carouselCategoryTshirt" data-bs-slide="prev"><span class="carousel-control-prev-icon" aria-hidden="true"></span><span class="visually-hidden">Previous</span></button>
                              <button class="carousel-control-next" type="button" data-bs-target="#carouselCategoryTshirt" data-bs-slide="next"><span class="carousel-control-next-icon" aria-hidden="true"></span><span class="visually-hidden">Next </span></button>
                            </div>
                          </div>
                        </div>
                        <div class="col-12 d-flex justify-content-center mt-5"> <a class="btn btn-lg btn-dark" href="#!">View All </a></div>
                      </div>
                      <div class="tab-pane fade" id="pills-shirt" role="tabpanel" aria-labelledby="pills-shirt-tab">
                        <div class="carousel slide" id="carouselCategoryShirt" data-bs-touch="false" data-bs-interval="false">
                          <div class="carousel-inner">
                            <div class="carousel-item active" data-bs-interval="10000">
                              <div class="row h-100 align-items-center g-2">
                                <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                  <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="{{asset('majestic')}}/assets/img/gallery/shirt-5.png" alt="..." />
                                    <div class="card-img-overlay ps-0"> </div>
                                    <div class="card-body ps-0 bg-200">
                                      <h5 class="fw-bold text-1000 text-truncate">Shirt</h5>
                                      <div class="fw-bold"><span class="text-600 me-2 text-decoration-line-through">$200</span><span class="text-primary">$175</span></div>
                                    </div><a class="stretched-link" href="#"></a>
                                  </div>
                                </div>
                                <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                  <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="{{asset('majestic')}}/assets/img/gallery/shirt-6.png" alt="..." />
                                    <div class="card-img-overlay ps-0"> </div>
                                    <div class="card-body ps-0 bg-200">
                                      <h5 class="fw-bold text-1000 text-truncate">Gray Shirt</h5>
                                      <div class="fw-bold"><span class="text-600 me-2 text-decoration-line-through">$200</span><span class="text-primary">$175</span></div>
                                    </div><a class="stretched-link" href="#"></a>
                                  </div>
                                </div>
                                <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                  <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="{{asset('majestic')}}/assets/img/gallery/shirt-7.png" alt="..." />
                                    <div class="card-img-overlay ps-0"> </div>
                                    <div class="card-body ps-0 bg-200">
                                      <h5 class="fw-bold text-1000 text-truncate">White Shirt</h5>
                                      <div class="fw-bold"><span class="text-600 me-2 text-decoration-line-through">$200</span><span class="text-primary">$175</span></div>
                                    </div><a class="stretched-link" href="#"></a>
                                  </div>
                                </div>
                                <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                  <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="{{asset('majestic')}}/assets/img/gallery/shirt-8.png" alt="..." />
                                    <div class="card-img-overlay ps-0"> </div>
                                    <div class="card-body ps-0 bg-200">
                                      <h5 class="fw-bold text-1000 text-truncate">Black Shirt</h5>
                                      <div class="fw-bold"><span class="text-600 me-2 text-decoration-line-through">$500</span><span class="text-primary">$275</span></div>
                                    </div><a class="stretched-link" href="#"></a>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="carousel-item" data-bs-interval="5000">
                              <div class="row h-100 align-items-center g-2">
                                <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                  <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="{{asset('majestic')}}/assets/img/gallery/shirt-5.png" alt="..." />
                                    <div class="card-img-overlay ps-0"> </div>
                                    <div class="card-body ps-0 bg-200">
                                      <h5 class="fw-bold text-1000 text-truncate">Shirt</h5>
                                      <div class="fw-bold"><span class="text-600 me-2 text-decoration-line-through">$200</span><span class="text-primary">$175</span></div>
                                    </div><a class="stretched-link" href="#"></a>
                                  </div>
                                </div>
                                <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                  <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="{{asset('majestic')}}/assets/img/gallery/shirt-6.png" alt="..." />
                                    <div class="card-img-overlay ps-0"> </div>
                                    <div class="card-body ps-0 bg-200">
                                      <h5 class="fw-bold text-1000 text-truncate">Gray Shirt</h5>
                                      <div class="fw-bold"><span class="text-600 me-2 text-decoration-line-through">$200</span><span class="text-primary">$175</span></div>
                                    </div><a class="stretched-link" href="#"></a>
                                  </div>
                                </div>
                                <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                  <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="{{asset('majestic')}}/assets/img/gallery/shirt-7.png" alt="..." />
                                    <div class="card-img-overlay ps-0"> </div>
                                    <div class="card-body ps-0 bg-200">
                                      <h5 class="fw-bold text-1000 text-truncate">White Shirt</h5>
                                      <div class="fw-bold"><span class="text-600 me-2 text-decoration-line-through">$200</span><span class="text-primary">$175</span></div>
                                    </div><a class="stretched-link" href="#"></a>
                                  </div>
                                </div>
                                <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                  <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="{{asset('majestic')}}/assets/img/gallery/shirt-8.png" alt="..." />
                                    <div class="card-img-overlay ps-0"> </div>
                                    <div class="card-body ps-0 bg-200">
                                      <h5 class="fw-bold text-1000 text-truncate">Black Shirt</h5>
                                      <div class="fw-bold"><span class="text-600 me-2 text-decoration-line-through">$500</span><span class="text-primary">$275</span></div>
                                    </div><a class="stretched-link" href="#"></a>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="carousel-item" data-bs-interval="3000">
                              <div class="row h-100 align-items-center g-2">
                                <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                  <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="{{asset('majestic')}}/assets/img/gallery/shirt-5.png" alt="..." />
                                    <div class="card-img-overlay ps-0"> </div>
                                    <div class="card-body ps-0 bg-200">
                                      <h5 class="fw-bold text-1000 text-truncate">Shirt</h5>
                                      <div class="fw-bold"><span class="text-600 me-2 text-decoration-line-through">$200</span><span class="text-primary">$175</span></div>
                                    </div><a class="stretched-link" href="#"></a>
                                  </div>
                                </div>
                                <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                  <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="{{asset('majestic')}}/assets/img/gallery/shirt-6.png" alt="..." />
                                    <div class="card-img-overlay ps-0"> </div>
                                    <div class="card-body ps-0 bg-200">
                                      <h5 class="fw-bold text-1000 text-truncate">Gray Shirt</h5>
                                      <div class="fw-bold"><span class="text-600 me-2 text-decoration-line-through">$200</span><span class="text-primary">$175</span></div>
                                    </div><a class="stretched-link" href="#"></a>
                                  </div>
                                </div>
                                <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                  <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="{{asset('majestic')}}/assets/img/gallery/shirt-7.png" alt="..." />
                                    <div class="card-img-overlay ps-0"> </div>
                                    <div class="card-body ps-0 bg-200">
                                      <h5 class="fw-bold text-1000 text-truncate">White Shirt</h5>
                                      <div class="fw-bold"><span class="text-600 me-2 text-decoration-line-through">$200</span><span class="text-primary">$175</span></div>
                                    </div><a class="stretched-link" href="#"></a>
                                  </div>
                                </div>
                                <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                  <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="{{asset('majestic')}}/assets/img/gallery/shirt-8.png" alt="..." />
                                    <div class="card-img-overlay ps-0"> </div>
                                    <div class="card-body ps-0 bg-200">
                                      <h5 class="fw-bold text-1000 text-truncate">Black Shirt</h5>
                                      <div class="fw-bold"><span class="text-600 me-2 text-decoration-line-through">$500</span><span class="text-primary">$275</span></div>
                                    </div><a class="stretched-link" href="#"></a>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="carousel-item">
                              <div class="row h-100 align-items-center g-2">
                                <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                  <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="{{asset('majestic')}}/assets/img/gallery/shirt-5.png" alt="..." />
                                    <div class="card-img-overlay ps-0"> </div>
                                    <div class="card-body ps-0 bg-200">
                                      <h5 class="fw-bold text-1000 text-truncate">Shirt</h5>
                                      <div class="fw-bold"><span class="text-600 me-2 text-decoration-line-through">$200</span><span class="text-primary">$175</span></div>
                                    </div><a class="stretched-link" href="#"></a>
                                  </div>
                                </div>
                                <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                  <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="{{asset('majestic')}}/assets/img/gallery/shirt-6.png" alt="..." />
                                    <div class="card-img-overlay ps-0"> </div>
                                    <div class="card-body ps-0 bg-200">
                                      <h5 class="fw-bold text-1000 text-truncate">Gray Shirt</h5>
                                      <div class="fw-bold"><span class="text-600 me-2 text-decoration-line-through">$200</span><span class="text-primary">$175</span></div>
                                    </div><a class="stretched-link" href="#"></a>
                                  </div>
                                </div>
                                <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                  <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="{{asset('majestic')}}/assets/img/gallery/shirt-7.png" alt="..." />
                                    <div class="card-img-overlay ps-0"> </div>
                                    <div class="card-body ps-0 bg-200">
                                      <h5 class="fw-bold text-1000 text-truncate">White Shirt</h5>
                                      <div class="fw-bold"><span class="text-600 me-2 text-decoration-line-through">$200</span><span class="text-primary">$175</span></div>
                                    </div><a class="stretched-link" href="#"></a>
                                  </div>
                                </div>
                                <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                  <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="{{asset('majestic')}}/assets/img/gallery/shirt-8.png" alt="..." />
                                    <div class="card-img-overlay ps-0"> </div>
                                    <div class="card-body ps-0 bg-200">
                                      <h5 class="fw-bold text-1000 text-truncate">Black Shirt</h5>
                                      <div class="fw-bold"><span class="text-600 me-2 text-decoration-line-through">$500</span><span class="text-primary">$275</span></div>
                                    </div><a class="stretched-link" href="#"></a>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="row">
                              <button class="carousel-control-prev" type="button" data-bs-target="#carouselCategoryShirt" data-bs-slide="prev"><span class="carousel-control-prev-icon" aria-hidden="true"></span><span class="visually-hidden">Previous</span></button>
                              <button class="carousel-control-next" type="button" data-bs-target="#carouselCategoryShirt" data-bs-slide="next"><span class="carousel-control-next-icon" aria-hidden="true"></span><span class="visually-hidden">Next </span></button>
                            </div>
                          </div>
                        </div>
                        <div class="col-12 d-flex justify-content-center mt-5"> <a class="btn btn-lg btn-dark" href="#!">View All </a></div>
                      </div>
                      <div class="tab-pane fade" id="pills-shoes" role="tabpanel" aria-labelledby="pills-shoes-tab">
                        <div class="carousel slide" id="carouselCategoryShoes" data-bs-touch="false" data-bs-interval="false">
                          <div class="carousel-inner">
                            <div class="carousel-item active" data-bs-interval="10000">
                              <div class="row h-100 align-items-center g-2">
                                <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                  <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="{{asset('majestic')}}/assets/img/gallery/shoe-5.png" alt="..." />
                                    <div class="card-img-overlay ps-0"> </div>
                                    <div class="card-body ps-0 bg-200">
                                      <h5 class="fw-bold text-1000 text-truncate">Shoe</h5>
                                      <div class="fw-bold"><span class="text-600 me-2 text-decoration-line-through">$200</span><span class="text-primary">$175</span></div>
                                    </div><a class="stretched-link" href="#"></a>
                                  </div>
                                </div>
                                <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                  <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="{{asset('majestic')}}/assets/img/gallery/shoe-6.png" alt="..." />
                                    <div class="card-img-overlay ps-0"> </div>
                                    <div class="card-body ps-0 bg-200">
                                      <h5 class="fw-bold text-1000 text-truncate">Shoe</h5>
                                      <div class="fw-bold"><span class="text-600 me-2 text-decoration-line-through">$500</span><span class="text-primary">$275</span></div>
                                    </div><a class="stretched-link" href="#"></a>
                                  </div>
                                </div>
                                <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                  <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="{{asset('majestic')}}/assets/img/gallery/shoe-7.png" alt="..." />
                                    <div class="card-img-overlay ps-0"> </div>
                                    <div class="card-body ps-0 bg-200">
                                      <h5 class="fw-bold text-1000 text-truncate">Shoe</h5>
                                      <div class="fw-bold"><span class="text-600 me-2 text-decoration-line-through">$200</span><span class="text-primary">$175</span></div>
                                    </div><a class="stretched-link" href="#"></a>
                                  </div>
                                </div>
                                <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                  <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="{{asset('majestic')}}/assets/img/gallery/shoe-8.png" alt="..." />
                                    <div class="card-img-overlay ps-0"> </div>
                                    <div class="card-body ps-0 bg-200">
                                      <h5 class="fw-bold text-1000 text-truncate">Shoe</h5>
                                      <div class="fw-bold"><span class="text-600 me-2 text-decoration-line-through">$500</span><span class="text-primary">$275</span></div>
                                    </div><a class="stretched-link" href="#"></a>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="carousel-item" data-bs-interval="5000">
                              <div class="row h-100 align-items-center g-2">
                                <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                  <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="{{asset('majestic')}}/assets/img/gallery/shoe-5.png" alt="..." />
                                    <div class="card-img-overlay ps-0"> </div>
                                    <div class="card-body ps-0 bg-200">
                                      <h5 class="fw-bold text-1000 text-truncate">Shoe</h5>
                                      <div class="fw-bold"><span class="text-600 me-2 text-decoration-line-through">$200</span><span class="text-primary">$175</span></div>
                                    </div><a class="stretched-link" href="#"></a>
                                  </div>
                                </div>
                                <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                  <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="{{asset('majestic')}}/assets/img/gallery/shoe-6.png" alt="..." />
                                    <div class="card-img-overlay ps-0"> </div>
                                    <div class="card-body ps-0 bg-200">
                                      <h5 class="fw-bold text-1000 text-truncate">Shoe</h5>
                                      <div class="fw-bold"><span class="text-600 me-2 text-decoration-line-through">$500</span><span class="text-primary">$275</span></div>
                                    </div><a class="stretched-link" href="#"></a>
                                  </div>
                                </div>
                                <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                  <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="{{asset('majestic')}}/assets/img/gallery/shoe-7.png" alt="..." />
                                    <div class="card-img-overlay ps-0"> </div>
                                    <div class="card-body ps-0 bg-200">
                                      <h5 class="fw-bold text-1000 text-truncate">Shoe</h5>
                                      <div class="fw-bold"><span class="text-600 me-2 text-decoration-line-through">$200</span><span class="text-primary">$175</span></div>
                                    </div><a class="stretched-link" href="#"></a>
                                  </div>
                                </div>
                                <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                  <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="{{asset('majestic')}}/assets/img/gallery/shoe-8.png" alt="..." />
                                    <div class="card-img-overlay ps-0"> </div>
                                    <div class="card-body ps-0 bg-200">
                                      <h5 class="fw-bold text-1000 text-truncate">Shoe</h5>
                                      <div class="fw-bold"><span class="text-600 me-2 text-decoration-line-through">$500</span><span class="text-primary">$275</span></div>
                                    </div><a class="stretched-link" href="#"></a>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="carousel-item" data-bs-interval="3000">
                              <div class="row h-100 align-items-center g-2">
                                <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                  <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="{{asset('majestic')}}/assets/img/gallery/shoe-5.png" alt="..." />
                                    <div class="card-img-overlay ps-0"> </div>
                                    <div class="card-body ps-0 bg-200">
                                      <h5 class="fw-bold text-1000 text-truncate">Shoe</h5>
                                      <div class="fw-bold"><span class="text-600 me-2 text-decoration-line-through">$200</span><span class="text-primary">$175</span></div>
                                    </div><a class="stretched-link" href="#"></a>
                                  </div>
                                </div>
                                <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                  <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="{{asset('majestic')}}/assets/img/gallery/shoe-6.png" alt="..." />
                                    <div class="card-img-overlay ps-0"> </div>
                                    <div class="card-body ps-0 bg-200">
                                      <h5 class="fw-bold text-1000 text-truncate">Shoe</h5>
                                      <div class="fw-bold"><span class="text-600 me-2 text-decoration-line-through">$500</span><span class="text-primary">$275</span></div>
                                    </div><a class="stretched-link" href="#"></a>
                                  </div>
                                </div>
                                <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                  <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="{{asset('majestic')}}/assets/img/gallery/shoe-7.png" alt="..." />
                                    <div class="card-img-overlay ps-0"> </div>
                                    <div class="card-body ps-0 bg-200">
                                      <h5 class="fw-bold text-1000 text-truncate">Shoe</h5>
                                      <div class="fw-bold"><span class="text-600 me-2 text-decoration-line-through">$200</span><span class="text-primary">$175</span></div>
                                    </div><a class="stretched-link" href="#"></a>
                                  </div>
                                </div>
                                <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                  <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="{{asset('majestic')}}/assets/img/gallery/shoe-8.png" alt="..." />
                                    <div class="card-img-overlay ps-0"> </div>
                                    <div class="card-body ps-0 bg-200">
                                      <h5 class="fw-bold text-1000 text-truncate">Shoe</h5>
                                      <div class="fw-bold"><span class="text-600 me-2 text-decoration-line-through">$500</span><span class="text-primary">$275</span></div>
                                    </div><a class="stretched-link" href="#"></a>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="carousel-item">
                              <div class="row h-100 align-items-center g-2">
                                <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                  <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="{{asset('majestic')}}/assets/img/gallery/shoe-5.png" alt="..." />
                                    <div class="card-img-overlay ps-0"> </div>
                                    <div class="card-body ps-0 bg-200">
                                      <h5 class="fw-bold text-1000 text-truncate">Shoe</h5>
                                      <div class="fw-bold"><span class="text-600 me-2 text-decoration-line-through">$200</span><span class="text-primary">$175</span></div>
                                    </div><a class="stretched-link" href="#"></a>
                                  </div>
                                </div>
                                <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                  <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="{{asset('majestic')}}/assets/img/gallery/shoe-6.png" alt="..." />
                                    <div class="card-img-overlay ps-0"> </div>
                                    <div class="card-body ps-0 bg-200">
                                      <h5 class="fw-bold text-1000 text-truncate">Shoe</h5>
                                      <div class="fw-bold"><span class="text-600 me-2 text-decoration-line-through">$500</span><span class="text-primary">$275</span></div>
                                    </div><a class="stretched-link" href="#"></a>
                                  </div>
                                </div>
                                <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                  <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="{{asset('majestic')}}/assets/img/gallery/shoe-7.png" alt="..." />
                                    <div class="card-img-overlay ps-0"> </div>
                                    <div class="card-body ps-0 bg-200">
                                      <h5 class="fw-bold text-1000 text-truncate">Shoe</h5>
                                      <div class="fw-bold"><span class="text-600 me-2 text-decoration-line-through">$200</span><span class="text-primary">$175</span></div>
                                    </div><a class="stretched-link" href="#"></a>
                                  </div>
                                </div>
                                <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                  <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="{{asset('majestic')}}/assets/img/gallery/shoe-8.png" alt="..." />
                                    <div class="card-img-overlay ps-0"> </div>
                                    <div class="card-body ps-0 bg-200">
                                      <h5 class="fw-bold text-1000 text-truncate">Shoe</h5>
                                      <div class="fw-bold"><span class="text-600 me-2 text-decoration-line-through">$500</span><span class="text-primary">$275</span></div>
                                    </div><a class="stretched-link" href="#"></a>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="row">
                              <button class="carousel-control-prev" type="button" data-bs-target="#carouselCategoryShoes" data-bs-slide="prev"><span class="carousel-control-prev-icon" aria-hidden="true"></span><span class="visually-hidden">Previous</span></button>
                              <button class="carousel-control-next" type="button" data-bs-target="#carouselCategoryShoes" data-bs-slide="next"><span class="carousel-control-next-icon" aria-hidden="true"></span><span class="visually-hidden">Next </span></button>
                            </div>
                          </div>
                        </div>
                        <div class="col-12 d-flex justify-content-center mt-5"> <a class="btn btn-lg btn-dark" href="#!">View All </a></div>
                      </div>
                      <div class="tab-pane fade" id="pills-watch" role="tabpanel" aria-labelledby="pills-watch-tab">
                        <div class="carousel slide" id="carouselCategoryWatch" data-bs-touch="false" data-bs-interval="false">
                          <div class="carousel-inner">
                            <div class="carousel-item active" data-bs-interval="10000">
                              <div class="row h-100 align-items-center g-2">
                                <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                  <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="{{asset('majestic')}}/assets/img/gallery/watch-5.png" alt="..." />
                                    <div class="card-img-overlay ps-0"> </div>
                                    <div class="card-body ps-0 bg-200">
                                      <h5 class="fw-bold text-1000 text-truncate">Watch</h5>
                                      <div class="fw-bold"><span class="text-600 me-2 text-decoration-line-through">$500</span><span class="text-primary">$275</span></div>
                                    </div><a class="stretched-link" href="#"></a>
                                  </div>
                                </div>
                                <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                  <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="{{asset('majestic')}}/assets/img/gallery/watch-6.png" alt="..." />
                                    <div class="card-img-overlay ps-0"> </div>
                                    <div class="card-body ps-0 bg-200">
                                      <h5 class="fw-bold text-1000 text-truncate">Watch</h5>
                                      <div class="fw-bold"><span class="text-600 me-2 text-decoration-line-through">$500</span><span class="text-primary">$275</span></div>
                                    </div><a class="stretched-link" href="#"></a>
                                  </div>
                                </div>
                                <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                  <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="{{asset('majestic')}}/assets/img/gallery/watch-7.png" alt="..." />
                                    <div class="card-img-overlay ps-0"> </div>
                                    <div class="card-body ps-0 bg-200">
                                      <h5 class="fw-bold text-1000 text-truncate">Watch</h5>
                                      <div class="fw-bold"><span class="text-600 me-2 text-decoration-line-through">$500</span><span class="text-primary">$275</span></div>
                                    </div><a class="stretched-link" href="#"></a>
                                  </div>
                                </div>
                                <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                  <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="{{asset('majestic')}}/assets/img/gallery/watch-8.png" alt="..." />
                                    <div class="card-img-overlay ps-0"> </div>
                                    <div class="card-body ps-0 bg-200">
                                      <h5 class="fw-bold text-1000 text-truncate">Watch</h5>
                                      <div class="fw-bold"><span class="text-600 me-2 text-decoration-line-through">$500</span><span class="text-primary">$275</span></div>
                                    </div><a class="stretched-link" href="#"></a>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="carousel-item" data-bs-interval="5000">
                              <div class="row h-100 align-items-center g-2">
                                <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                  <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="{{asset('majestic')}}/assets/img/gallery/watch-5.png" alt="..." />
                                    <div class="card-img-overlay ps-0"> </div>
                                    <div class="card-body ps-0 bg-200">
                                      <h5 class="fw-bold text-1000 text-truncate">Watch</h5>
                                      <div class="fw-bold"><span class="text-600 me-2 text-decoration-line-through">$500</span><span class="text-primary">$275</span></div>
                                    </div><a class="stretched-link" href="#"></a>
                                  </div>
                                </div>
                                <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                  <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="{{asset('majestic')}}/assets/img/gallery/watch-6.png" alt="..." />
                                    <div class="card-img-overlay ps-0"> </div>
                                    <div class="card-body ps-0 bg-200">
                                      <h5 class="fw-bold text-1000 text-truncate">Watch</h5>
                                      <div class="fw-bold"><span class="text-600 me-2 text-decoration-line-through">$500</span><span class="text-primary">$275</span></div>
                                    </div><a class="stretched-link" href="#"></a>
                                  </div>
                                </div>
                                <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                  <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="{{asset('majestic')}}/assets/img/gallery/watch-7.png" alt="..." />
                                    <div class="card-img-overlay ps-0"> </div>
                                    <div class="card-body ps-0 bg-200">
                                      <h5 class="fw-bold text-1000 text-truncate">Watch</h5>
                                      <div class="fw-bold"><span class="text-600 me-2 text-decoration-line-through">$500</span><span class="text-primary">$275</span></div>
                                    </div><a class="stretched-link" href="#"></a>
                                  </div>
                                </div>
                                <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                  <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="{{asset('majestic')}}/assets/img/gallery/watch-8.png" alt="..." />
                                    <div class="card-img-overlay ps-0"> </div>
                                    <div class="card-body ps-0 bg-200">
                                      <h5 class="fw-bold text-1000 text-truncate">Watch</h5>
                                      <div class="fw-bold"><span class="text-600 me-2 text-decoration-line-through">$500</span><span class="text-primary">$275</span></div>
                                    </div><a class="stretched-link" href="#"></a>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="carousel-item" data-bs-interval="3000">
                              <div class="row h-100 align-items-center g-2">
                                <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                  <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="{{asset('majestic')}}/assets/img/gallery/watch-5.png" alt="..." />
                                    <div class="card-img-overlay ps-0"> </div>
                                    <div class="card-body ps-0 bg-200">
                                      <h5 class="fw-bold text-1000 text-truncate">Watch</h5>
                                      <div class="fw-bold"><span class="text-600 me-2 text-decoration-line-through">$500</span><span class="text-primary">$275</span></div>
                                    </div><a class="stretched-link" href="#"></a>
                                  </div>
                                </div>
                                <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                  <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="{{asset('majestic')}}/assets/img/gallery/watch-6.png" alt="..." />
                                    <div class="card-img-overlay ps-0"> </div>
                                    <div class="card-body ps-0 bg-200">
                                      <h5 class="fw-bold text-1000 text-truncate">Watch</h5>
                                      <div class="fw-bold"><span class="text-600 me-2 text-decoration-line-through">$500</span><span class="text-primary">$275</span></div>
                                    </div><a class="stretched-link" href="#"></a>
                                  </div>
                                </div>
                                <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                  <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="{{asset('majestic')}}/assets/img/gallery/watch-7.png" alt="..." />
                                    <div class="card-img-overlay ps-0"> </div>
                                    <div class="card-body ps-0 bg-200">
                                      <h5 class="fw-bold text-1000 text-truncate">Watch</h5>
                                      <div class="fw-bold"><span class="text-600 me-2 text-decoration-line-through">$500</span><span class="text-primary">$275</span></div>
                                    </div><a class="stretched-link" href="#"></a>
                                  </div>
                                </div>
                                <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                  <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="{{asset('majestic')}}/assets/img/gallery/watch-8.png" alt="..." />
                                    <div class="card-img-overlay ps-0"> </div>
                                    <div class="card-body ps-0 bg-200">
                                      <h5 class="fw-bold text-1000 text-truncate">Watch</h5>
                                      <div class="fw-bold"><span class="text-600 me-2 text-decoration-line-through">$500</span><span class="text-primary">$275</span></div>
                                    </div><a class="stretched-link" href="#"></a>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="carousel-item">
                              <div class="row h-100 align-items-center g-2">
                                <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                  <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="{{asset('majestic')}}/assets/img/gallery/watch-5.png" alt="..." />
                                    <div class="card-img-overlay ps-0"> </div>
                                    <div class="card-body ps-0 bg-200">
                                      <h5 class="fw-bold text-1000 text-truncate">Watch</h5>
                                      <div class="fw-bold"><span class="text-600 me-2 text-decoration-line-through">$500</span><span class="text-primary">$275</span></div>
                                    </div><a class="stretched-link" href="#"></a>
                                  </div>
                                </div>
                                <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                  <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="{{asset('majestic')}}/assets/img/gallery/watch-6.png" alt="..." />
                                    <div class="card-img-overlay ps-0"> </div>
                                    <div class="card-body ps-0 bg-200">
                                      <h5 class="fw-bold text-1000 text-truncate">Watch</h5>
                                      <div class="fw-bold"><span class="text-600 me-2 text-decoration-line-through">$500</span><span class="text-primary">$275</span></div>
                                    </div><a class="stretched-link" href="#"></a>
                                  </div>
                                </div>
                                <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                  <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="{{asset('majestic')}}/assets/img/gallery/watch-7.png" alt="..." />
                                    <div class="card-img-overlay ps-0"> </div>
                                    <div class="card-body ps-0 bg-200">
                                      <h5 class="fw-bold text-1000 text-truncate">Watch</h5>
                                      <div class="fw-bold"><span class="text-600 me-2 text-decoration-line-through">$500</span><span class="text-primary">$275</span></div>
                                    </div><a class="stretched-link" href="#"></a>
                                  </div>
                                </div>
                                <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                  <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="{{asset('majestic')}}/assets/img/gallery/watch-8.png" alt="..." />
                                    <div class="card-img-overlay ps-0"> </div>
                                    <div class="card-body ps-0 bg-200">
                                      <h5 class="fw-bold text-1000 text-truncate">Watch</h5>
                                      <div class="fw-bold"><span class="text-600 me-2 text-decoration-line-through">$500</span><span class="text-primary">$275</span></div>
                                    </div><a class="stretched-link" href="#"></a>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="row">
                              <button class="carousel-control-prev" type="button" data-bs-target="#carouselCategoryWatch" data-bs-slide="prev"><span class="carousel-control-prev-icon" aria-hidden="true"></span><span class="visually-hidden">Previous</span></button>
                              <button class="carousel-control-next" type="button" data-bs-target="#carouselCategoryWatch" data-bs-slide="next"><span class="carousel-control-next-icon" aria-hidden="true"></span><span class="visually-hidden">Next </span></button>
                            </div>
                          </div>
                        </div>
                        <div class="col-12 d-flex justify-content-center mt-5"> <a class="btn btn-lg btn-dark" href="#!">View All </a></div>
                      </div>
                      <div class="tab-pane fade" id="pills-sunglasses" role="tabpanel" aria-labelledby="pills-sunglasses-tab">
                        <div class="carousel slide" id="carouselCategorySunglasses" data-bs-touch="false" data-bs-interval="false">
                          <div class="carousel-inner">
                            <div class="carousel-item active" data-bs-interval="10000">
                              <div class="row h-100 align-items-center g-2">
                                <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                  <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="{{asset('majestic')}}/assets/img/gallery/sunglass-5.png" alt="..." />
                                    <div class="card-img-overlay ps-0"> </div>
                                    <div class="card-body ps-0 bg-200">
                                      <h5 class="fw-bold text-1000 text-truncate">Sunglass</h5>
                                      <div class="fw-bold"><span class="text-600 me-2 text-decoration-line-through">$500</span><span class="text-primary">$275</span></div>
                                    </div><a class="stretched-link" href="#"></a>
                                  </div>
                                </div>
                                <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                  <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="{{asset('majestic')}}/assets/img/gallery/sunglass-6.png" alt="..." />
                                    <div class="card-img-overlay ps-0"> </div>
                                    <div class="card-body ps-0 bg-200">
                                      <h5 class="fw-bold text-1000 text-truncate">Sunglass</h5>
                                      <div class="fw-bold"><span class="text-600 me-2 text-decoration-line-through">$500</span><span class="text-primary">$275</span></div>
                                    </div><a class="stretched-link" href="#"></a>
                                  </div>
                                </div>
                                <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                  <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="{{asset('majestic')}}/assets/img/gallery/sunglass-7.png" alt="..." />
                                    <div class="card-img-overlay ps-0"> </div>
                                    <div class="card-body ps-0 bg-200">
                                      <h5 class="fw-bold text-1000 text-truncate">Sunglass</h5>
                                      <div class="fw-bold"><span class="text-600 me-2 text-decoration-line-through">$500</span><span class="text-primary">$275</span></div>
                                    </div><a class="stretched-link" href="#"></a>
                                  </div>
                                </div>
                                <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                  <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="{{asset('majestic')}}/assets/img/gallery/sunglass-8.png" alt="..." />
                                    <div class="card-img-overlay ps-0"> </div>
                                    <div class="card-body ps-0 bg-200">
                                      <h5 class="fw-bold text-1000 text-truncate">Sunglass</h5>
                                      <div class="fw-bold"><span class="text-600 me-2 text-decoration-line-through">$500</span><span class="text-primary">$275</span></div>
                                    </div><a class="stretched-link" href="#"></a>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="carousel-item" data-bs-interval="5000">
                              <div class="row h-100 align-items-center g-2">
                                <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                  <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="{{asset('majestic')}}/assets/img/gallery/sunglass-5.png" alt="..." />
                                    <div class="card-img-overlay ps-0"> </div>
                                    <div class="card-body ps-0 bg-200">
                                      <h5 class="fw-bold text-1000 text-truncate">Sunglass</h5>
                                      <div class="fw-bold"><span class="text-600 me-2 text-decoration-line-through">$500</span><span class="text-primary">$275</span></div>
                                    </div><a class="stretched-link" href="#"></a>
                                  </div>
                                </div>
                                <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                  <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="{{asset('majestic')}}/assets/img/gallery/sunglass-6.png" alt="..." />
                                    <div class="card-img-overlay ps-0"> </div>
                                    <div class="card-body ps-0 bg-200">
                                      <h5 class="fw-bold text-1000 text-truncate">Sunglass</h5>
                                      <div class="fw-bold"><span class="text-600 me-2 text-decoration-line-through">$500</span><span class="text-primary">$275</span></div>
                                    </div><a class="stretched-link" href="#"></a>
                                  </div>
                                </div>
                                <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                  <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="{{asset('majestic')}}/assets/img/gallery/sunglass-7.png" alt="..." />
                                    <div class="card-img-overlay ps-0"> </div>
                                    <div class="card-body ps-0 bg-200">
                                      <h5 class="fw-bold text-1000 text-truncate">Sunglass</h5>
                                      <div class="fw-bold"><span class="text-600 me-2 text-decoration-line-through">$500</span><span class="text-primary">$275</span></div>
                                    </div><a class="stretched-link" href="#"></a>
                                  </div>
                                </div>
                                <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                  <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="{{asset('majestic')}}/assets/img/gallery/sunglass-8.png" alt="..." />
                                    <div class="card-img-overlay ps-0"> </div>
                                    <div class="card-body ps-0 bg-200">
                                      <h5 class="fw-bold text-1000 text-truncate">Sunglass</h5>
                                      <div class="fw-bold"><span class="text-600 me-2 text-decoration-line-through">$500</span><span class="text-primary">$275</span></div>
                                    </div><a class="stretched-link" href="#"></a>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="carousel-item" data-bs-interval="3000">
                              <div class="row h-100 align-items-center g-2">
                                <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                  <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="{{asset('majestic')}}/assets/img/gallery/sunglass-5.png" alt="..." />
                                    <div class="card-img-overlay ps-0"> </div>
                                    <div class="card-body ps-0 bg-200">
                                      <h5 class="fw-bold text-1000 text-truncate">Sunglass</h5>
                                      <div class="fw-bold"><span class="text-600 me-2 text-decoration-line-through">$500</span><span class="text-primary">$275</span></div>
                                    </div><a class="stretched-link" href="#"></a>
                                  </div>
                                </div>
                                <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                  <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="{{asset('majestic')}}/assets/img/gallery/sunglass-6.png" alt="..." />
                                    <div class="card-img-overlay ps-0"> </div>
                                    <div class="card-body ps-0 bg-200">
                                      <h5 class="fw-bold text-1000 text-truncate">Sunglass</h5>
                                      <div class="fw-bold"><span class="text-600 me-2 text-decoration-line-through">$500</span><span class="text-primary">$275</span></div>
                                    </div><a class="stretched-link" href="#"></a>
                                  </div>
                                </div>
                                <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                  <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="{{asset('majestic')}}/assets/img/gallery/sunglass-7.png" alt="..." />
                                    <div class="card-img-overlay ps-0"> </div>
                                    <div class="card-body ps-0 bg-200">
                                      <h5 class="fw-bold text-1000 text-truncate">Sunglass</h5>
                                      <div class="fw-bold"><span class="text-600 me-2 text-decoration-line-through">$500</span><span class="text-primary">$275</span></div>
                                    </div><a class="stretched-link" href="#"></a>
                                  </div>
                                </div>
                                <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                  <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="{{asset('majestic')}}/assets/img/gallery/sunglass-8.png" alt="..." />
                                    <div class="card-img-overlay ps-0"> </div>
                                    <div class="card-body ps-0 bg-200">
                                      <h5 class="fw-bold text-1000 text-truncate">Sunglass</h5>
                                      <div class="fw-bold"><span class="text-600 me-2 text-decoration-line-through">$500</span><span class="text-primary">$275</span></div>
                                    </div><a class="stretched-link" href="#"></a>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="carousel-item">
                              <div class="row h-100 align-items-center g-2">
                                <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                  <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="{{asset('majestic')}}/assets/img/gallery/sunglass-5.png" alt="..." />
                                    <div class="card-img-overlay ps-0"> </div>
                                    <div class="card-body ps-0 bg-200">
                                      <h5 class="fw-bold text-1000 text-truncate">Sunglass</h5>
                                      <div class="fw-bold"><span class="text-600 me-2 text-decoration-line-through">$500</span><span class="text-primary">$275</span></div>
                                    </div><a class="stretched-link" href="#"></a>
                                  </div>
                                </div>
                                <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                  <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="{{asset('majestic')}}/assets/img/gallery/sunglass-6.png" alt="..." />
                                    <div class="card-img-overlay ps-0"> </div>
                                    <div class="card-body ps-0 bg-200">
                                      <h5 class="fw-bold text-1000 text-truncate">Sunglass</h5>
                                      <div class="fw-bold"><span class="text-600 me-2 text-decoration-line-through">$500</span><span class="text-primary">$275</span></div>
                                    </div><a class="stretched-link" href="#"></a>
                                  </div>
                                </div>
                                <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                  <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="{{asset('majestic')}}/assets/img/gallery/sunglass-7.png" alt="..." />
                                    <div class="card-img-overlay ps-0"> </div>
                                    <div class="card-body ps-0 bg-200">
                                      <h5 class="fw-bold text-1000 text-truncate">Sunglass</h5>
                                      <div class="fw-bold"><span class="text-600 me-2 text-decoration-line-through">$500</span><span class="text-primary">$275</span></div>
                                    </div><a class="stretched-link" href="#"></a>
                                  </div>
                                </div>
                                <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                  <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="{{asset('majestic')}}/assets/img/gallery/sunglass-8.png" alt="..." />
                                    <div class="card-img-overlay ps-0"> </div>
                                    <div class="card-body ps-0 bg-200">
                                      <h5 class="fw-bold text-1000 text-truncate">Sunglass</h5>
                                      <div class="fw-bold"><span class="text-600 me-2 text-decoration-line-through">$500</span><span class="text-primary">$275</span></div>
                                    </div><a class="stretched-link" href="#"></a>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="row">
                              <button class="carousel-control-prev" type="button" data-bs-target="#carouselCategorySunglasses" data-bs-slide="prev"><span class="carousel-control-prev-icon" aria-hidden="true"></span><span class="visually-hidden">Previous</span></button>
                              <button class="carousel-control-next" type="button" data-bs-target="#carouselCategorySunglasses" data-bs-slide="next"><span class="carousel-control-next-icon" aria-hidden="true"></span><span class="visually-hidden">Next </span></button>
                            </div>
                          </div>
                        </div>
                        <div class="col-12 d-flex justify-content-center mt-5"> <a class="btn btn-lg btn-dark" href="#!">View All </a></div>
                      </div>
                      <div class="tab-pane fade" id="pills-bagpacks" role="tabpanel" aria-labelledby="pills-bagpacks-tab">
                        <div class="carousel slide" id="carouselCategoryBagpacks" data-bs-touch="false" data-bs-interval="false">
                          <div class="carousel-inner">
                            <div class="carousel-item active" data-bs-interval="10000">
                              <div class="row h-100 align-items-center g-2">
                                <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                  <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="{{asset('majestic')}}/assets/img/gallery/bagpacks-5.png" alt="..." />
                                    <div class="card-img-overlay ps-0"> </div>
                                    <div class="card-body ps-0 bg-200">
                                      <h5 class="fw-bold text-1000 text-truncate">Bagpacks</h5>
                                      <div class="fw-bold"><span class="text-600 me-2 text-decoration-line-through">$500</span><span class="text-primary">$275</span></div>
                                    </div><a class="stretched-link" href="#"></a>
                                  </div>
                                </div>
                                <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                  <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="{{asset('majestic')}}/assets/img/gallery/bagpacks-6.png" alt="..." />
                                    <div class="card-img-overlay ps-0"> </div>
                                    <div class="card-body ps-0 bg-200">
                                      <h5 class="fw-bold text-1000 text-truncate">Bagpacks</h5>
                                      <div class="fw-bold"><span class="text-600 me-2 text-decoration-line-through">$500</span><span class="text-primary">$275</span></div>
                                    </div><a class="stretched-link" href="#"></a>
                                  </div>
                                </div>
                                <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                  <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="{{asset('majestic')}}/assets/img/gallery/bagpacks-7.png" alt="..." />
                                    <div class="card-img-overlay ps-0"> </div>
                                    <div class="card-body ps-0 bg-200">
                                      <h5 class="fw-bold text-1000 text-truncate">Bagpacks</h5>
                                      <div class="fw-bold"><span class="text-600 me-2 text-decoration-line-through">$500</span><span class="text-primary">$275</span></div>
                                    </div><a class="stretched-link" href="#"></a>
                                  </div>
                                </div>
                                <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                  <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="{{asset('majestic')}}/assets/img/gallery/bagpacks-8.png" alt="..." />
                                    <div class="card-img-overlay ps-0"> </div>
                                    <div class="card-body ps-0 bg-200">
                                      <h5 class="fw-bold text-1000 text-truncate">Bagpacks</h5>
                                      <div class="fw-bold"><span class="text-600 me-2 text-decoration-line-through">$500</span><span class="text-primary">$275</span></div>
                                    </div><a class="stretched-link" href="#"></a>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="carousel-item" data-bs-interval="5000">
                              <div class="row h-100 align-items-center g-2">
                                <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                  <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="{{asset('majestic')}}/assets/img/gallery/bagpacks-5.png" alt="..." />
                                    <div class="card-img-overlay ps-0"> </div>
                                    <div class="card-body ps-0 bg-200">
                                      <h5 class="fw-bold text-1000 text-truncate">Bagpacks</h5>
                                      <div class="fw-bold"><span class="text-600 me-2 text-decoration-line-through">$500</span><span class="text-primary">$275</span></div>
                                    </div><a class="stretched-link" href="#"></a>
                                  </div>
                                </div>
                                <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                  <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="{{asset('majestic')}}/assets/img/gallery/bagpacks-6.png" alt="..." />
                                    <div class="card-img-overlay ps-0"> </div>
                                    <div class="card-body ps-0 bg-200">
                                      <h5 class="fw-bold text-1000 text-truncate">Bagpacks</h5>
                                      <div class="fw-bold"><span class="text-600 me-2 text-decoration-line-through">$500</span><span class="text-primary">$275</span></div>
                                    </div><a class="stretched-link" href="#"></a>
                                  </div>
                                </div>
                                <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                  <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="{{asset('majestic')}}/assets/img/gallery/bagpacks-7.png" alt="..." />
                                    <div class="card-img-overlay ps-0"> </div>
                                    <div class="card-body ps-0 bg-200">
                                      <h5 class="fw-bold text-1000 text-truncate">Bagpacks</h5>
                                      <div class="fw-bold"><span class="text-600 me-2 text-decoration-line-through">$500</span><span class="text-primary">$275</span></div>
                                    </div><a class="stretched-link" href="#"></a>
                                  </div>
                                </div>
                                <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                  <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="{{asset('majestic')}}/assets/img/gallery/bagpacks-8.png" alt="..." />
                                    <div class="card-img-overlay ps-0"> </div>
                                    <div class="card-body ps-0 bg-200">
                                      <h5 class="fw-bold text-1000 text-truncate">Bagpacks</h5>
                                      <div class="fw-bold"><span class="text-600 me-2 text-decoration-line-through">$500</span><span class="text-primary">$275</span></div>
                                    </div><a class="stretched-link" href="#"></a>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="carousel-item" data-bs-interval="3000">
                              <div class="row h-100 align-items-center g-2">
                                <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                  <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="{{asset('majestic')}}/assets/img/gallery/bagpacks-5.png" alt="..." />
                                    <div class="card-img-overlay ps-0"> </div>
                                    <div class="card-body ps-0 bg-200">
                                      <h5 class="fw-bold text-1000 text-truncate">Bagpacks</h5>
                                      <div class="fw-bold"><span class="text-600 me-2 text-decoration-line-through">$500</span><span class="text-primary">$275</span></div>
                                    </div><a class="stretched-link" href="#"></a>
                                  </div>
                                </div>
                                <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                  <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="{{asset('majestic')}}/assets/img/gallery/bagpacks-6.png" alt="..." />
                                    <div class="card-img-overlay ps-0"> </div>
                                    <div class="card-body ps-0 bg-200">
                                      <h5 class="fw-bold text-1000 text-truncate">Bagpacks</h5>
                                      <div class="fw-bold"><span class="text-600 me-2 text-decoration-line-through">$500</span><span class="text-primary">$275</span></div>
                                    </div><a class="stretched-link" href="#"></a>
                                  </div>
                                </div>
                                <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                  <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="{{asset('majestic')}}/assets/img/gallery/bagpacks-7.png" alt="..." />
                                    <div class="card-img-overlay ps-0"> </div>
                                    <div class="card-body ps-0 bg-200">
                                      <h5 class="fw-bold text-1000 text-truncate">Bagpacks</h5>
                                      <div class="fw-bold"><span class="text-600 me-2 text-decoration-line-through">$500</span><span class="text-primary">$275</span></div>
                                    </div><a class="stretched-link" href="#"></a>
                                  </div>
                                </div>
                                <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                  <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="{{asset('majestic')}}/assets/img/gallery/bagpacks-8.png" alt="..." />
                                    <div class="card-img-overlay ps-0"> </div>
                                    <div class="card-body ps-0 bg-200">
                                      <h5 class="fw-bold text-1000 text-truncate">Bagpacks</h5>
                                      <div class="fw-bold"><span class="text-600 me-2 text-decoration-line-through">$500</span><span class="text-primary">$275</span></div>
                                    </div><a class="stretched-link" href="#"></a>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="carousel-item">
                              <div class="row h-100 align-items-center g-2">
                                <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                  <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="{{asset('majestic')}}/assets/img/gallery/bagpacks-5.png" alt="..." />
                                    <div class="card-img-overlay ps-0"> </div>
                                    <div class="card-body ps-0 bg-200">
                                      <h5 class="fw-bold text-1000 text-truncate">Bagpacks</h5>
                                      <div class="fw-bold"><span class="text-600 me-2 text-decoration-line-through">$500</span><span class="text-primary">$275</span></div>
                                    </div><a class="stretched-link" href="#"></a>
                                  </div>
                                </div>
                                <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                  <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="{{asset('majestic')}}/assets/img/gallery/bagpacks-6.png" alt="..." />
                                    <div class="card-img-overlay ps-0"> </div>
                                    <div class="card-body ps-0 bg-200">
                                      <h5 class="fw-bold text-1000 text-truncate">Bagpacks</h5>
                                      <div class="fw-bold"><span class="text-600 me-2 text-decoration-line-through">$500</span><span class="text-primary">$275</span></div>
                                    </div><a class="stretched-link" href="#"></a>
                                  </div>
                                </div>
                                <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                  <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="{{asset('majestic')}}/assets/img/gallery/bagpacks-7.png" alt="..." />
                                    <div class="card-img-overlay ps-0"> </div>
                                    <div class="card-body ps-0 bg-200">
                                      <h5 class="fw-bold text-1000 text-truncate">Bagpacks</h5>
                                      <div class="fw-bold"><span class="text-600 me-2 text-decoration-line-through">$500</span><span class="text-primary">$275</span></div>
                                    </div><a class="stretched-link" href="#"></a>
                                  </div>
                                </div>
                                <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                  <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="{{asset('majestic')}}/assets/img/gallery/bagpacks-8.png" alt="..." />
                                    <div class="card-img-overlay ps-0"> </div>
                                    <div class="card-body ps-0 bg-200">
                                      <h5 class="fw-bold text-1000 text-truncate">Bagpacks</h5>
                                      <div class="fw-bold"><span class="text-600 me-2 text-decoration-line-through">$500</span><span class="text-primary">$275</span></div>
                                    </div><a class="stretched-link" href="#"></a>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="row">
                              <button class="carousel-control-prev" type="button" data-bs-target="#carouselCategoryBagpacks" data-bs-slide="prev"><span class="carousel-control-prev-icon" aria-hidden="true"></span><span class="visually-hidden">Previous</span></button>
                              <button class="carousel-control-next" type="button" data-bs-target="#carouselCategoryBagpacks" data-bs-slide="next"><span class="carousel-control-next-icon" aria-hidden="true"></span><span class="visually-hidden">Next </span></button>
                            </div>
                          </div>
                        </div>
                        <div class="col-12 d-flex justify-content-center mt-5"> <a class="btn btn-lg btn-dark" href="#!">View All </a></div>
                      </div>
                    </div>
                  </div>
                </div>
              </nav>
            </div>
          </div>
        </div>
      </section>
@endsection