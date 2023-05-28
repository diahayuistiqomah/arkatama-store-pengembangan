@extends('layout.template.admin')
@section('content')
<h1>Dashboard</h1>
<div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="{{$dSlider}}" class="d-block w-100" alt="...">
    </div>
    </div>
</div>
@endsection
