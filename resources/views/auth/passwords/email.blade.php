@extends('layouts.app')

@section('title')
    Go-Guy | Reset Password
@endsection

    @section('content')
        <div class="container">
        <div class="row justify-content-center">
        <div class="col-12 text-center">
            <p class="pt-4 pb2">
            <div class="col-12 text-center"></div>
            <p class="pt-5 pb2">
            <div class="container">
                <div class="card-header">
                    <p class="pt-1 pb2">
                <h4>Reset Password</h4>
                </div>

                <div class="form-group row"></div>
                <p class="pt-1 pb2">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <form method="POST" action="{{ route('password.email') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Email') }}</label>

                            <div class="col-md-8">
                                <input id="email" type="email" class="form-control col-md-6 @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-2">
                                <button type="submit" class="btn btn-primary">
                                    {{ ('Reset Password') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

@endsection