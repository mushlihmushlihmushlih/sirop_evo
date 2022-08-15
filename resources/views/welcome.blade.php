@extends('layouts.main')
{{-- content --}}
@section('content')
    <!-- ======= Hero Section ======= -->
    <section id="hero" class="hero d-flex align-items-center">
        <div class="container">
            <div class="row">
                <div class="col-xl-4">
                    <h2 data-aos="fade-up">SIROP</h2>
                    <blockquote data-aos="fade-up" data-aos-delay="100">
                        <p>Sistem Informasi Registrasi Online Puskesmas </p>
                    </blockquote>
                    <div class="flex-fill" data-aos="fade-up" data-aos-delay="200">
                        <a href="/login" class="btn-get-started">Masuk</a>
                        <a href="/register" class="btn-get-started">Daftar</a>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- End Hero Section -->
@endsection
