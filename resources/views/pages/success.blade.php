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
              Transaction Processed!
            </h2>
            <p>
              Silahkan tunggu konfirmasi email dari kami dan
              kami akan menginformasikan resi secepat mungkin!
            </p>
            <div>
              <a class="btn btn-success w-50 mt-4" href="/dasboard.html">
                My Dasboard
              </a>
              <a class="btn btn-signup w-50 mt-2" href="/index.html">
                Go To Shopping
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection