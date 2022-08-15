<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="../assets/img/favicon.png">
    <title>
        Admin - {{ $title }}
    </title>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
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
    <aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3 "
        id="sidenav-main">
        <div class="sidenav-header">
            <i class="fas fa-times p-3 cursor-pointer text-secondary opacity-5 position-absolute end-0 top-0 d-none d-xl-none"
                aria-hidden="true" id="iconSidenav"></i>
            <a class="navbar-brand m-0" href="/admin/home" target="_blank">
                <img src="{{ URL::asset('/img/puskesmas.png') }}" class="navbar-brand-img h-100" alt="main_logo">
                <span class="ms-1 font-weight-bold">SIROP Aurduri</span>
            </a>
        </div>
        <hr class="horizontal dark mt-0">
        <div class="collapse navbar-collapse  w-auto " id="sidenav-collapse-main">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link {{ $title === 'Home' ? 'active' : '' }}" href="/admin/home">
                        <div
                            class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center ">
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
                    <a class="nav-link {{ $title === 'Data Keluarga' ? 'active' : '' }}" href="/admin/data">
                        <div
                            class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center text-secondary">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-person-circle" viewBox="0 0 16 16">
                                <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
                                <path fill-rule="evenodd"
                                    d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z" />
                            </svg>
                        </div>
                        <span class="nav-link-text ms-1">Data Keluarga</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ $title === 'Poli' ? 'active' : '' }}" href="/admin/poli">
                        <div
                            class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center text-secondary">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-hospital-fill" viewBox="0 0 16 16">
                                <path
                                    d="M6 0a1 1 0 0 0-1 1v1a1 1 0 0 0-1 1v4H1a1 1 0 0 0-1 1v7a1 1 0 0 0 1 1h6v-2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5V16h6a1 1 0 0 0 1-1V8a1 1 0 0 0-1-1h-3V3a1 1 0 0 0-1-1V1a1 1 0 0 0-1-1H6Zm2.5 5.034v1.1l.953-.55.5.867L9 7l.953.55-.5.866-.953-.55v1.1h-1v-1.1l-.953.55-.5-.866L7 7l-.953-.55.5-.866.953.55v-1.1h1ZM2.25 9h.5a.25.25 0 0 1 .25.25v.5a.25.25 0 0 1-.25.25h-.5A.25.25 0 0 1 2 9.75v-.5A.25.25 0 0 1 2.25 9Zm0 2h.5a.25.25 0 0 1 .25.25v.5a.25.25 0 0 1-.25.25h-.5a.25.25 0 0 1-.25-.25v-.5a.25.25 0 0 1 .25-.25ZM2 13.25a.25.25 0 0 1 .25-.25h.5a.25.25 0 0 1 .25.25v.5a.25.25 0 0 1-.25.25h-.5a.25.25 0 0 1-.25-.25v-.5ZM13.25 9h.5a.25.25 0 0 1 .25.25v.5a.25.25 0 0 1-.25.25h-.5a.25.25 0 0 1-.25-.25v-.5a.25.25 0 0 1 .25-.25ZM13 11.25a.25.25 0 0 1 .25-.25h.5a.25.25 0 0 1 .25.25v.5a.25.25 0 0 1-.25.25h-.5a.25.25 0 0 1-.25-.25v-.5Zm.25 1.75h.5a.25.25 0 0 1 .25.25v.5a.25.25 0 0 1-.25.25h-.5a.25.25 0 0 1-.25-.25v-.5a.25.25 0 0 1 .25-.25Z" />
                            </svg>
                        </div>
                        <span class="nav-link-text ms-1">Poli</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ $title === 'Dokter' ? 'active' : '' }}" href="/admin/dokter">
                        <div
                            class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center text-secondary">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-person-check-fill" viewBox="0 0 16 16">
                                <path fill-rule="evenodd"
                                    d="M15.854 5.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 0 1 .708-.708L12.5 7.793l2.646-2.647a.5.5 0 0 1 .708 0z" />
                                <path d="M1 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z" />
                            </svg>
                        </div>
                        <span class="nav-link-text ms-1">Dokter</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ $title === 'Kontrol Antrian' ? 'active' : '' }}" href="/admin/antrian">
                        <div
                            class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center text-secondary">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-person-square" viewBox="0 0 16 16">
                                <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
                                <path
                                    d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2zm12 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1v-1c0-1-1-4-6-4s-6 3-6 4v1a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h12z" />
                            </svg>
                        </div>
                        <span class="nav-link-text ms-1">Antrian</span>
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
                                href="javascript:;">Admin</a>
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

    <script src="{{ URL::asset('/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ URL::asset('/vendor/aos/aos.js') }}"></script>
    <script src="{{ URL::asset('/vendor/glightbox/js/glightbox.min.js') }}"></script>
    <script src="{{ URL::asset('/vendor/swiper/swiper-bundle.min.js') }}"></script>
    <script src="{{ URL::asset('/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
    <script src="{{ URL::asset('/vendor/php-email-form/validate.js') }}"></script>
</body>

</html>
