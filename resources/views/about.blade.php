@extends('layouts.main')

@section('container')
<style>
    *{
      padding: 0%;
      margin: 0%
    }
    .jumbotron {padding: 200px;
    background-size: 100%;
    color: white;
    size: 120%;
  background-repeat: no-repeat}

  .col {
    height: 40%;
  }

  .about {
    padding: 17%;
    background-color: green;
    color: white;
  }
  .about h3 {
    font-size: 50px;
    text-align: center;
    margin-bottom: 5%;
  }
  .about p {
    font-size: 20px;
    text-align: center;
  }

</style>
<div class="jumbotron jumbotron-fluid" 
style="background-image: url(/images/background-about.png);">
    <h1 class="display-4">ecompos</h1>
    <p class="lead">Mewujudkan lingkungan yang bebas sampah dan menghasilkan lingkungan yang bersih dan sehat.</p>
    <hr class="my-4">
    <p>We will pick up your trash</p>
    <p class="lead">
      <a class="btn btn-primary btn-lg" href="#" role="button" style="background-color: green; border-color: green;">Learn more</a>
    </p>
  </div>

  <div class="container" style="margin-top: 20%; width: 100%; margin-bottom: 20%;">
    <div class="row">
      <div class="col" style="display: flex;
      justify-content: center;
      margin-bottom: 20px;">
        <button style="
        background-color: green;
        color: #FFFFFF;
        width: 200px;
        padding: 4%;
        height: 80px;
        border-radius: 15px;
        border-color: green;
        border-style: hidden;">Transporting Trash</button>
      </div>
      <div class="col" style="display: flex;
      justify-content: center;
      margin-bottom: 20px;">
        <button style="
        background-color: green;
        color: #FFFFFF;
        width: 200px;
        padding: 4%;
        height: 80px;
        border-radius: 15px;
        border-color: green;
        border-style: hidden;">Waste Processing</button>
      </div>
      <div class="col" style="display: flex;
      justify-content: center;
      margin-bottom: 20px;">
        <button style="
        background-color: green;
        color: #FFFFFF;
        width: 200px;
        padding: 4%;
        height: 80px;
        border-radius: 15px;
        border-color: green;
        border-style: hidden;">Selling eco friendly goods</button>
      </div>
    </div>
    </div>
  </div>
<div class="about">
  <h3>ecompos</h3>
  <p>ecompos mewujudkan lingkungan yang bebas sampah dan menghasilkan lingkungan yang bersih dan sehat. Dengan tim pengangkut sampah kami yang sedia untuk mengunjungi daerahmu secara terjadwal dan terorganisir tiap jenis sampah.</p>
</div>
<!--<h1>Halaman About</h1>
    <h3> {{ $nama }} </h3>
    <p> {{ $email }} </p>
    <img src="images/{{ $gambar }}" alt="{{ $nama }}" width="200px">-->
@endsection