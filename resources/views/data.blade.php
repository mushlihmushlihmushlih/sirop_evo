@extends('layouts.main')
{{-- content --}}
@section('content')
    <!-- ======= Hero Section ======= -->
    <section id="hero" class="hero d-flex align-items-center">
        <div class="container">
            <div class="row">
                <div class="col-xl-4">
                    <form method="POST" action="/register/store">
                        @csrf
                        {{-- <div class="form-group">
                            <input  type="hidden" name="user_id" class="form-control rounded-left" value="{{\Auth::user()->id}}" required>
                        </div> --}}
                        <div class="form-group mt-3">
                            <input  type="text" name="nomor_kk" class="form-control rounded-left" placeholder="Nomor KK" required>
                        </div>
                        <div class="form-group mt-3">
                            <input  type="text" name="nama_kepala_kk" class="form-control rounded-left" placeholder="Nama Kepala KK" required>
                        </div>
                        <div class="form-group mt-3">
                            <input  type="text" name="alamat" class="form-control rounded-left" placeholder="Alamat" required>
                        </div>

                        <div class="form-group mt-3">
                            <button type="submit" class="form-control btn btn-get-started rounded submit px-3">Daftar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section><!-- End Hero Section -->
@endsection
