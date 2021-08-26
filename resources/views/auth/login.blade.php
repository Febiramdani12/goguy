@extends('layouts.app')

@section('title')
    Go-Guy | Login  
@endsection

    @section('content')
    {{-- content login store --}}
    <div class="page-content page-auth">
        <div class="section-store-auth" data-aos="fade-up">
            <div class="container">
                <div class="row align-items-center row-login">
                <div class="col-lg-6 text-center">
                    <img src="/images/login-placeholder.png" class="w-50 mb-4 mb-lg-none">
                </div>
                    <div class="col-lg-5">
                        <h2>Mencari jasa, <br>
                        menjadi lebih mudah</h2>
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                        <div class="form-group">
                            <label for="">Email</label>
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="">Password</label>
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                            @if (Route::has('password.request'))
                            <a class="btn btn-link btn-block" href="/password/reset">
                            {{ ('Lupa Password ?') }}
                            </a>
                            @endif
                        <button type="submit" class="btn btn-success btn-block mt-4">
                            Login
                        </button>
                        <a href="{{route('register')}}" class="btn btn-signup btn-block mt-2">
                            Daftar
                        </a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- /content login store --}}

    <div class="container" style="display: none;">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Login') }}</div>

                    <div class="card-body">
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
