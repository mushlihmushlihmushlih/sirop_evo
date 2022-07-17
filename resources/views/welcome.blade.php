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
                    <div class="d-flex" data-aos="fade-up" data-aos-delay="200">
                        <a href="/login" class="btn-get-started">Masuk</a>
                    </div>
                    <div class="d-flex" data-aos="fade-up" data-aos-delay="200">
                        <a href="/logout" class="btn-get-started">Logout</a>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- End Hero Section -->
@endsection
