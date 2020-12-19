@extends('layouts.app')

@section('content')

<div class="lg:flex lg:justify-between">
    <div class="lg:w-32">
        @include('fotoyla.leftbar')
    </div>
    <div class="lg:flex-1 lg:mx-10 mb-6 text-center" style="max-width: 700px">
        <div class="border border-blue-400 rounded-lg px-8 py-6 ">
            <h1 class="mb-4 text-left font-bold">GİRİŞ</h1>
            <hr class="mb-4">
            <form method="POST" action="{{ route('login') }}">
                @csrf
                <div class="mb-2">
                    <label class="text-grey-darker text-left block">E-mail</label>
                    <input type="email" class="block appearance-none w-full bg-white border border-grey-light hover:border-grey px-1 py-1 rounded shadow" id="email" name="email" value="{{ old('email') }}" required>
                </div>
                <div class="mb-2">
                    <label class="text-grey-darker text-left block">Şifre</label>
                    <input type="password" class="block appearance-none w-full bg-white border border-grey-light hover:border-grey px-1 py-1 rounded shadow" id="password" name="password" value="{{ old('password') }}" required>
                </div>
                    <button type="submit" class="bg-blue-500 w-full rounded-lg shadow py-2 px-2 text-white">Giriş Yap</button>
            </form>
        </div>
    </div>
    <div class="lg:w-1/6 bg-blue-100 rounded-lg p-4">
        @include('fotoyla.rightbar')
    </div>
</div>


{{-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> --}}
@endsection
