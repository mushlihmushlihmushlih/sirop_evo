<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="../assets/img/favicon.png">
    <title>
        Dashboard - {{ $title }}
    </title>
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
    <!-- Nucleo Icons -->
    <link href="{{ URL::asset('/css/nucleo-icons.css') }}" rel="stylesheet" />
    <link href="{{ URL::asset('/css/nucleo-svg.css') }}" rel="stylesheet" />
    <!-- Font Awesome Icons -->
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <link href="{{ URL::asset('/css/nucleo-svg.css') }}" rel="stylesheet" />
    <!-- CSS Files -->
    <link id="pagestyle" href="{{ URL::asset('/css/soft-ui-dashboard.css?v=1.0.6') }}" rel="stylesheet" />
    {{-- bootstrap icons --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
</head>

<body class="g-sidenav-show  bg-gray-100">
    <aside
        class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3 bg-white"
        id="sidenav-main">
        <div class="sidenav-header">
            <i class="fas fa-times p-3 cursor-pointer text-secondary opacity-5 position-absolute end-0 top-0 d-none d-xl-none"
                aria-hidden="true" id="iconSidenav"></i>
            <a class="navbar-brand m-0" href="/dashboard/home" target="_blank">
                <img src="{{ URL::asset('/img/puskesmas.png') }}" class="navbar-brand-img h-100" alt="main_logo">
                <span class="ms-1 font-weight-bold">SIROP Aurduri</span>
            </a>
        </div>
        <hr class="horizontal dark mt-0">
        <div class="sidenav-header position-relative">
            <button class="position-absolute top-50 start-50 translate-middle btn btn-icon btn-3 btn-primary"
                type="button">
                <span class="btn-inner--icon"><i class="bi bi-plus-lg"></i></span>
                <span class="btn-inner--text">Daftar Berobat</span>
            </button>
        </div>
        <hr class="horizontal dark mt-0">
        <div class="collapse navbar-collapse  w-auto " id="sidenav-collapse-main">
            <ul class="navbar-nav">
                <li class="nav-item">
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ $title === 'Home' ? 'active' : '' }}" href="/dashboard/home">
                        <div
                            class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center text-secondary">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-house-door-fill" viewBox="0 0 16 16">
                                <path
                                    d="M6.5 14.5v-3.505c0-.245.25-.495.5-.495h2c.25 0 .5.25.5.5v3.5a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.146-.354L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.354 1.146a.5.5 0 0 0-.708 0l-6 6A.5.5 0 0 0 1.5 7.5v7a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 .5-.5z" />
                            </svg>
                        </div>
                        <span class="nav-link-text ms-1">Dashboard</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ $title === 'Riwayat Kunjungan' ? 'active' : '' }}" href="/dashboard/riwayat">
                        <div
                            class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center text-secondary">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-clock-history" viewBox="0 0 16 16">
                                <path
                                    d="M8.515 1.019A7 7 0 0 0 8 1V0a8 8 0 0 1 .589.022l-.074.997zm2.004.45a7.003 7.003 0 0 0-.985-.299l.219-.976c.383.086.76.2 1.126.342l-.36.933zm1.37.71a7.01 7.01 0 0 0-.439-.27l.493-.87a8.025 8.025 0 0 1 .979.654l-.615.789a6.996 6.996 0 0 0-.418-.302zm1.834 1.79a6.99 6.99 0 0 0-.653-.796l.724-.69c.27.285.52.59.747.91l-.818.576zm.744 1.352a7.08 7.08 0 0 0-.214-.468l.893-.45a7.976 7.976 0 0 1 .45 1.088l-.95.313a7.023 7.023 0 0 0-.179-.483zm.53 2.507a6.991 6.991 0 0 0-.1-1.025l.985-.17c.067.386.106.778.116 1.17l-1 .025zm-.131 1.538c.033-.17.06-.339.081-.51l.993.123a7.957 7.957 0 0 1-.23 1.155l-.964-.267c.046-.165.086-.332.12-.501zm-.952 2.379c.184-.29.346-.594.486-.908l.914.405c-.16.36-.345.706-.555 1.038l-.845-.535zm-.964 1.205c.122-.122.239-.248.35-.378l.758.653a8.073 8.073 0 0 1-.401.432l-.707-.707z" />
                                <path d="M8 1a7 7 0 1 0 4.95 11.95l.707.707A8.001 8.001 0 1 1 8 0v1z" />
                                <path
                                    d="M7.5 3a.5.5 0 0 1 .5.5v5.21l3.248 1.856a.5.5 0 0 1-.496.868l-3.5-2A.5.5 0 0 1 7 9V3.5a.5.5 0 0 1 .5-.5z" />
                            </svg>
                        </div>
                        <span class="nav-link-text ms-1">Riwayat Kunjungan</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ $title === 'Akun' ? 'active' : '' }}" href="/dashboard/akun">
                        <div
                            class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center text-secondary">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-person-fill" viewBox="0 0 16 16">
                                <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z" />
                            </svg>
                        </div>
                        <span class="nav-link-text ms-1">Akun</span>
                    </a>
                </li>
            </ul>
        </div>
    </aside>

    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
        <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur"
            navbar-scroll="true">
            <div class="container-fluid py-1 px-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
                        <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark"
                                href="javascript:;">Dashboard</a>
                        </li>
                        <li class="breadcrumb-item text-sm text-dark active" aria-current="page">{{ $title }}
                        </li>
                    </ol>
                    <h6 class="font-weight-bolder mb-0">{{ $title }}</h6>
                </nav>
                @auth
                    <li class="nav-item dropdown pe-2 d-flex align-items-center">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->username }}
                        </a>
                        <div class="dropdown-menu dropdown-menu-end " aria-labelledby="navbarDropdown">
                            <a class="dropdown-item text-dark" href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                                         document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>
                    @endauth
            </div>
        </nav>
        @yield('content')
    </main>



    <script src="{{ URL::asset('/js/core/popper.min.js') }}"></script>
    <script src="{{ URL::asset('/js/core/bootstrap.min.js') }}"></script>
    <script src="{{ URL::asset('/js/plugins/perfect-scrollbar.min.js') }}"></script>
    <script src="{{ URL::asset('/js/plugins/smooth-scrollbar.min.js') }}"></script>
    <script src="{{ URL::asset('/js/plugins/chartjs.min.js') }}"></script>
    <script>
        var win = navigator.platform.indexOf('Win') > -1;
        if (win && document.querySelector('#sidenav-scrollbar')) {
            var options = {
                damping: '0.5'
            }
            Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
        }
    </script>
    <!-- Github buttons -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
    <!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->
    <script src="{{ URL::asset('/js/soft-ui-dashboard.min.js?v=1.0.6') }}"></script>
    <script src="{{ URL::asset('/js/main.js') }}"></script>

    <script src="{{ URL::asset('/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ URL::asset('/vendor/aos/aos.js') }}"></script>
    <script src="{{ URL::asset('/vendor/glightbox/js/glightbox.min.js') }}"></script>
    <script src="{{ URL::asset('/vendor/swiper/swiper-bundle.min.js') }}"></script>
    <script src="{{ URL::asset('/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
    <script src="{{ URL::asset('/vendor/php-email-form/validate.js') }}"></script>
</body>

</html>
