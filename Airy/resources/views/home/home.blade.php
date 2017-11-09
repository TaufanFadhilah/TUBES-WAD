@extends('layouts.master')
@section('content')
<title>Beranda</title>
<style media="screen">
  .content img{
    margin-left: 400px;
  }
  .content{
    background-color: #F0F0F0;
  }
  .group{
    background-color:#F0F0F0;
  }
</style>
<div class="content">
  <div class="container">
    <div class="row">
      <div class="col s12">
        <img class="responsive-img" src="/img/images.ico">
      </div>
    </div>
    <div class="row">
      <div class="col s6">
        <h4>Butuh Donasi ? atau ingin membantu sesama ?</h4>
      </div>
      <div class="col s6">
        <p>Airy hadir untuk kamu, bagi kamu yang ingin membantu sesama dan bagi kamu yang membutuhkan donasi</p>
      </div>
    </div>
  </div>
</div>

  <div class="media">
    <div class="container">
      <div class="row">
        <div class="col s6 ">
          <img class="responsive-img" src="/img/money.ico">
        </div>
        <div class="col s6">
          <h4>Donatur</h4>
          <p>adalah individu atau kelompok yang menyumbangkan uangnya untuk orang lain.
            Airy meneyediakan tempat untuk donatur sebagai lahan berbagi rezeki kepada sesama.
          </p>
        </div>
      </div>
      <div class="row">
        <div class="col s6">
          <h4>Donatur</h4>
          <p>adalah individu atau kelompok yang menyumbangkan uangnya untuk orang lain.
            Airy meneyediakan tempat untuk donatur sebagai lahan berbagi rezeki kepada sesama.
          </p>
        </div>
        <div class="col s6 ">
          <img class="responsive-img" src="/img/need.ico">
        </div>
      </div>
    </div>
  </div>

  <div class="group">
    <div class="container">
      <div class="row">
        <div class="col s12 center">
          <h2>Alur Pendonasian</h2>
        </div>
      </div>
      <div class="row">
        <div class="col s4 grey lighten-4 center">
          <i class="material-icons">account_circle</i>
            <h4>Registrasi</h4>
            <p>Bagi anda para donatur yang ingin mendonasikan uang, anda harus segera daftar di Airy.
               saat anda sudah melakukan registrasi, anda akan dapat masuk akun anda dengan email yang telah terdaftar,
               dan akan ditampilkan beranda web
            </p>
        </div>
        <div class="col s4 grey lighten-2 center">
          <i class="material-icons">add_shopping_cart</i>
          <h4>Transaksi</h4>
          <p>Transaksi dapat anda lakukan setelah anda melakukan registrasi akun anda.
          Anda dapat memilih kasus apapun yang terdapat dalam beranda anda. Saat anda memilih salah satu
          anda akan diarahkan untuk melakukan transaksi pembeyaran donasi
        </p>
        </div>
        <div class="col s4 grey lighten-4 center">
          <i class="material-icons">done</i>
          <h4>Penerimaan</h4>
          <p>saat sudah melakukan transaksi, anda akan menerima bukti pembayaran dan uang donasi kami terima.
            Uang donasi Kemudian akan diberikan kepada orang-orang yang membutuhkan berdasarkan kasus yang anda pilih
            sebelumnya
          </p>
        </div>
      </div>
    </div>
  </div>
@endsection
