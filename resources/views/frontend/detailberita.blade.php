<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Contact | Page</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="{{ asset('frontend/img/icon.png') }}" rel='shortcut icon'>

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Inter:wght@700;800&display=swap"
        rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{ asset('frontend/lib/animate/animate.min.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ asset('frontend/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{ asset('frontend/css/style.css') }}" rel="stylesheet">
</head>

<body>
    <div class="container-xxl bg-white p-0">
        <!-- Spinner Start -->
        <div id="spinner"
            class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->


        <!-- Navbar & Hero Start -->
        <div class="container-xxl position-relative p-0">
            <nav class="navbar navbar-expand-lg navbar-light px-4 px-lg-5 py-3 py-lg-0">
                <a href="/" class="navbar-brand p-0">
                    <img src="{{ asset('frontend/img/logo.png') }}" alt="Logo" width="400" height="190">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarCollapse">
                    <span class="fa fa-bars"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav ms-auto py-0">
                        @if (Route::has('login'))
                            @auth
                                <li><a class="nav-item nav-link" href="about">About</a></li>
                                <li><a class="nav-item nav-link" href="service">Service</a></li>
                                <div class="nav-item dropdown">
                                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Lainnya</a>
                                    <div class="dropdown-menu m-0">
                                        <a href="{{ url('/artikel') }}" class="dropdown-item">Artikel</a>
                                        <a href="contact" class="dropdown-item">Contact</a>
                                    </div>
                                </div>
                                <li><a class="nav-item nav-link active"
                                        href="{{ route('admin') }}">{{ Auth::user()->name }}</a>
                                </li>
                            @else
                                <li><a class="nav-item nav-link active" href="/">Home</a></li>
                                <li><a class="nav-item nav-link" href="about">About</a></li>
                                <li><a class="nav-item nav-link" href="service">Service</a></li>
                                <div class="nav-item dropdown">
                                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Lainnya</a>
                                    <div class="dropdown-menu m-0">
                                        <a href="{{ url('/artikel') }}" class="dropdown-item">Artikel</a>
                                        <a href="contact" class="dropdown-item">Contact</a>
                                    </div>
                                </div>
                            @endauth
                        @endif
                    </div>
                </div>
            </nav>

            <div class="container-xxl bg-primary page-header">
                <div class="container text-center">
                    <h1 class="text-white animated zoomIn mb-3">Detail Artikel</h1>
                </div>
            </div>
        </div>
        <!-- Navbar & Hero End -->

        <section id="portfolio-details" class="portfolio-details">
            <div class="container">
                <div class="row gy-4">
                    <div class="text-center">
                        <h3>{{ $beritas->judul_berita }}</h3>
                        <img src="{{ asset('image') }}/{{ $beritas->image }}" class="img-fluid"
                            alt="{{ $beritas->judul_berita }}">
                    </div>

                    <div class="portfolio-description">
                        <p>
                            {!! $beritas->isi !!}</p>
                    </div>

                    <h5>
                        Kategori : {{ $beritas->kategori->nama }} <br>
                        Tanggal upload : {{ $beritas->created_at->format('d - M - Y') }} <br>
                        Penulis : {{ $beritas->user->name }}
                    </h5>
                </div>
            </div>
        </section>

        <!-- Footer Start -->
        <div class="container-fluid bg-dark text-light footer pt-5 wow fadeIn" data-wow-delay="0.1s"
            style="margin-top: 6rem;">
            <div class="container py-5">
                <div class="row g-5">
                    <div class="col-md-6 col-lg-3">
                        <h5 class="text-white mb-4">Setiadi Consulting</h5>
                        <p><i class="fa fa-map-marker-alt me-3"></i>Jl. Ancol Selatan 2 No. 18 <br> RT 008/ RW 007
                            Kel. Sunter Agung, Kec. Tanjung Priok
                            Jakarta Utara, 14350</p>
                        <p><i class="fa fa-phone me-2"></i>0812-8814-0159</p>
                        <p><i class="fa fa-envelope me-2"></i>setiadidanrekan@gmail.com</p>
                        <div class="d-flex pt-2">
                            <a class="btn btn-outline-light btn-social"
                                href="https://www.linkedin.com/in/setiadi-consulting-983445256/"><i
                                    class="fab fa-whatsapp"></i></a>
                            <a class="btn btn-outline-light btn-social"
                                href="https://www.instagram.com/setiadiconsulting/"><i
                                    class="fab fa-instagram"></i></a>
                            <a class="btn btn-outline-light btn-social"
                                href="https://www.linkedin.com/in/setiadi-consulting-983445256/"><i
                                    class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <h5 class="text-white mb-4">Quick Link</h5>
                        <a class="btn btn-link" href="/">Home</a>
                        <a class="btn btn-link" href="about">About Us</a>
                        <a class="btn btn-link" href="service">Service</a>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <h5 class="text-white mb-4">Popular Link</h5>
                        <a class="btn btn-link" href="artikel">Article</a>
                        <a class="btn btn-link" href="about">About Us</a>
                        <a class="btn btn-link" href="service">Service</a>
                        <a class="btn btn-link" href="contact">Contact</a>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <h5 class="text-white mb-4">Klik untuk order via WA</h5>
                        <div class="position-relative w-100 mt-3">
                            {{-- <input class="form-control border-0 rounded-pill w-100 ps-4 pe-5" type="text"
                                placeholder="Your Email" style="height: 48px;">
                            <button type="button" class="btn shadow-none position-absolute top-0 end-0 mt-1 me-2"><i
                                    class="fa fa-paper-plane text-primary fs-4"></i></button> --}}
                            <a
                                href="https://api.whatsapp.com/send?phone=6281288140159&amp;text=Nama%20%3A%20%0AEmail%20%3A%20%0AAlamat%20%3A%20%0ANomor%20Telepon%20%3A%20">
                                <img src="https://envilabindonesia.com/wp-content/uploads/2018/09/Chat-via-whatsapp.png"
                                    class="position-absolute top-0 end-0 mt-1 me-2" style="max-width: 100%;" /></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="copyright">
                    <div class="row">
                        <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                            Welcome To <a class="border-bottom" href="about">Setiadi Consulting</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer End -->


        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('frontend/lib/wow/wow.min.js') }}"></script>
    <script src="{{ asset('frontend/lib/easing/easing.min.js') }}"></script>
    <script src="{{ asset('frontend/lib/waypoints/waypoints.min.js') }}"></script>
    <script src="{{ asset('frontend/lib/owlcarousel/owl.carousel.min.js') }}"></script>

    <!-- Template Javascript -->
    <script src="{{ asset('frontend/js/main.js') }}"></script>
</body>

</html>
