@extends('layouts.success')

@section('title')
    Success   
@endsection

@section('content')
<div class="page-content page-success">
    <div class="section-success" data-aos="zoom-in">
      <div class="container">
        <div class="row align-items-center row-login justify-content-center">
          <div class="col-lg-6 text-center">
            <img src="/images/success.svg" class="mb-4" alt="">
            <h2>
              Pembayaran Berhasil
            </h2>
            <p>
              Selamat pembayaran telah berhasil!
            </p>
            <div>
              <a class="btn btn-success w-50 mt-4" href="/dashboard">
                Lihat Dashboard
              </a>
              <a class="btn btn-signup w-50 mt-2" href="/">
                Lanjut Pesan Jasa
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection