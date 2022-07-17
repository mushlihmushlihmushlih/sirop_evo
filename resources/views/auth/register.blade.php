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

                            <input id="username" type="text" class="form-control @error('username') is-invalid @enderror"
                                name="username" value="{{ old('username') }}" required autocomplete="username">

                            @error('username')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
