@extends('layouts.main')

@section('content')
    <section id="hero" class="hero d-flex align-items-center">
        <div class="container">
            <div class="row">
                <div class="col-xl-4">
                    <h3 class="text-center mb-4 text-white">Daftar</h3>
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                        <div class="form-group">
                            <input id="username" type="text" class="form-control rounded-left @error('username') is-invalid @enderror"
                                name="username" value="{{ old('username') }}" placeholder="username" required autocomplete="username">
                            @error('username')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group mt-3">
                            <input id="email" type="text" class="form-control rounded-left @error('email') is-invalid @enderror"
                                name="email" value="{{ old('email') }}" placeholder="email" required autocomplete="email">
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group mt-3">
                            <input id="password" type="password" class="form-control rounded-left @error('password') is-invalid @enderror"
                                name="password" value="{{ old('password') }}" placeholder="password" required autocomplete="password">
                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group mt-3">
                            <input id="password" type="password" class="form-control rounded-left @error('password') is-invalid @enderror"
                                name="password_confirmation" value="{{ old('password') }}" placeholder="password" required autocomplete="password">
                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group mt-3">
                            <button type="submit" class="form-control btn btn-get-started rounded submit px-3">Selanjutnya</button>
                        </div>
                        <div class="form-group d-md-flex justify-content-center mt-2">
                                <a href="/login">Sudah Punya Akun? Masuk</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
