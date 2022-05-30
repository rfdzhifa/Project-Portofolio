@extends('layouts.main')

@section('container')
<style>
  #carouselExampleControls {
    margin-bottom: 80px;
  }
  .col {
    height: 180px;
  }

  .col img {
    height: 180px;
    width: 180px;
  }

  .jumbotron {
    padding: 200px 80px 200px 80px;
    background-color: #eeeeee;
  }
</style>
<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img class="d-block w-100" src="/images/first-slide.jpg" alt="First slide">
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="/images/second-slide.jpg" alt="Second slide">
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="/images/third-slide.jpg" alt="Third slide">
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
</div>
<div class="container" style="display: grid; align-items: center; justify-content:center;">
  <div class="row row-cols-5">
    <div class="col">
      <img src="/images/totebag.jpg" alt="totebag">
    </div>
    <div class="col">
      <img src="/images/cup.jpg" alt="cup">
    </div>
    <div class="col">
      <img src="/images/ecobag2.jpg" alt="ecobag">
    </div>
    <div class="col">
      <img src="/images/shoulderbag.jpg" alt="shoulderbag">
    </div><div class="col">
      <img src="/images/shopbag.jpg" alt="shopbag">
    </div>

  </div>
</div>
<div class="container" style="margin-top: 70px; margin-bottom: 80px; display: grid; align-items: center; justify-content: center;">
  <div class="row row-cols-5">
    <div class="col">
      <img src="/images/toiletset.jpg" alt="toiletset">
    </div>
    <div class="col">
      <img src="/images/tumblr.jpg" alt="tumblr">
    </div>
    <div class="col">
      <img src="/images/ecobag.jpg" alt="ecobag">
    </div>
    <div class="col">
      <img src="/images/cutlery.jpg" alt="cutlery">
    </div>
    <div class="col">
      <img src="/images/minibox.jpg" alt="minibox">
    </div>
  </div>
</div>
<div class="jumbotron">
  <h1 class="display-4">Gunakan Layanan ecompos</h1>
  <p class="lead">Dapatkan fasilitas dari layanan kelola sampah kami dengan klik contact di bawah ini.</p>
  <p class="lead">
    <a class="btn btn-primary btn-lg" href="{{route('contacts.create') }}" role="button"  style="background-color: green; border-color: green;">Contact</a>
  </p>
</div>
@endsection 