@extends('layouts.app')

@section('title')
    Go-Guy | Verifikasi
@endsection

    @section('content')
        <div class="page-content page-auth">
        <div class="section-store-auth" data-aos="fade-up">
            <div class="container">
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            {{ __('Verifikasi sudah dikirim ke email, silahkan buka email') }}
                        </div>
                    @endif

                    <div class="col-12 text-center">
                    <p class="pt-5 pb2">
                    <h2>Silahkan verifikasi sebelum masuk ke aplikasi</h2>
                    </div>

                    <div class="col-12 text-center">
                    <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                        @csrf
                        <button type="submit" class="btn btn-link p-0 m-0 align-baseline">{{ ('Klik untuk mengirim verifikasi ke email') }}</button>
                    </form>
                </div>
                </div>
            </div>
        </div>

@endsection