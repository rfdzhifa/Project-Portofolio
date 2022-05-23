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

  <div class="container" style="margin-top: 10%; width: 100%; margin-bottom: 15%;">
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
        border-style: hidden;">Meningkatkan Minat Baca</button>
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
        border-style: hidden;">Membentuk SDM Unggul</button>
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
        border-style: hidden;">Peduli Lingkungan</button>
      </div>
    </div>
    </div>
  </div>
<!--<h1>Halaman About</h1>
    <h3> {{ $nama }} </h3>
    <p> {{ $email }} </p>
    <img src="images/{{ $gambar }}" alt="{{ $nama }}" width="200px">-->
@endsection