<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Opening | Page</title>
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
                    <h1 class="text-white animated zoomIn mb-3">Opening</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item"><a class="text-white" href="#">Home</a></li>
                            <li class="breadcrumb-item"><a class="text-white" href="#">Pages</a></li>
                            <li class="breadcrumb-item"><a class="text-white" href="opening">Opening</a></li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <!-- Navbar & Hero End -->

        <div class="container">

            <div class="row mx-auto">
                <div class="col-6">
                    <p class="cap" style="text-indent: 25px; font-family: Arial;">
                        Di era modern ini, pengetahuan tentang <strong><a
                                href="https://www.pajakku.com/read/60ed79a958d6727b1651ad47/Hukum-Pajak-yang-Berlaku-di-Indonesia">perpajakan</a></strong>
                        menjadi suatu hal yang sangat
                        penting dalam
                        kehidupan
                        bermasyarakat. Namun, tidak dapat dipungkiri bahwa masih banyak orang yang belum memahami dengan
                        baik
                        tentang peraturan perpajakan. Hal ini membuat banyak orang merasa khawatir, terutama bagi mereka
                        yang
                        terlibat dalam dunia bisnis. Kekhawatiran akan pengetahuan perpajakan yang kurang ini tentunya
                        dapat
                        memberikan dampak buruk, baik bagi pribadi maupun bisnis itu sendiri. Oleh karena itu,
                        diperlukan solusi
                        yang tepat untuk mengatasi masalah ini. Kekhawatiran akan pengetahuan perpajakan yang ada saat
                        ini menjadi suatu masalah yang serius.
                        Masalah
                        ini tidak hanya dialami oleh individu, namun juga oleh bisnis yang harus memenuhi kewajiban
                        pajak
                        mereka. Akibat dari ketidakpahaman terhadap peraturan perpajakan dan ketidakpahaman dalam
                        menyusun
                        pembukuan, seringkali muncul masalah seperti <strong>kesalahan dalam perhitungan pajak,
                            keterlambatan
                            dalam
                            pembayaran pajak, dan bahkan risiko sanksi dari pihak berwenang.</strong>
                    </p>
                </div>

                <div class="col-6">
                    <p class="cap" style="text-indent: 25px; font-family: Arial;">
                        Oleh karena itu, sangat penting
                        bagi
                        setiap orang atau suatu bisnis untuk memahami peraturan perpajakan dengan baik.
                        Salah satu solusi untuk mengatasi masalah ini adalah dengan menggunakan jasa konsultasi pajak
                        dari
                        <strong><a href="/">Setiadi Consulting</a></strong>.
                        Setiadi Consulting adalah perusahaan konsultan pajak dan jasa
                        pembukuan yang terdiri
                        dari <strong>ahli pajak bersertifikasi </strong> yang memiliki pengetahuan mendalam tentang
                        peraturan perpajakan.
                        Dengan
                        menggunakan <strong><a href="service">jasa konsultasi pajak dan pembukuan dari Setiadi
                                Consulting</a></strong>, individu atau bisnis
                        dapat
                        memastikan bahwa mereka memenuhi kewajiban pajak dengan benar dan efisien. Selain itu, Setiadi
                        Consulting juga dapat memberikan nasihat dan rekomendasi tentang cara meminimalkan risiko pajak,
                        mengoptimalkan manfaat pajak, dan memastikan kepatuhan pajak.
                    </p>
                </div>
            </div>
        </div>

        <!-- Features Start -->
        <div class="container-xxl py-6">
            <div class="container">
                <div class="row g-5">
                    <div class="col-lg-5 wow fadeInUp" data-wow-delay="0.1s">
                        {{-- <div class="d-inline-block border rounded-pill text-primary px-4 mb-3">Features</div> --}}
                        <h4 class="mb-4">Kenapa orang memilih kami?</h4>
                        <p><b>
                                <h3>Karena kami memiliki rekanan yang bersertifikasi</h3>
                            </b></p>
                        <strong class="mb-4">CHANDRA SETIADI,S.E.,BKP.,CFP.</strong>
                        <p>Adalah seorang Konsultan Pajak, Konsultan Hukum Pajak, dan Perencana Keuangan
                            Tersertifikasi (Certified Financial Planner). Memiliki sertifikat ijin konsultan
                            pajak tingkat B, dan merupakan anggota dari Ikatan Konsultan Pajak Indonesia
                            (IKPI). Berpengalaman dalam konsultasi perpajakan, manajemen pajak, dan
                            pemeriksaan pajak, baik untuk badan usaha maupun perseorangan.</p>
                        <strong class="mb-4">MEILIANA,S.E.,BKP. </strong>
                        <p>Adalah seorang Konsultan Pajak. Memiliki sertifikat ijin konsultan pajak tingkat
                            A. Berpengalaman dalam konsultasi perpajakan, jasa kepatuhan pajak, dan
                            pemeriksaan pajak, baik untuk badan usaha maupun perseorangan.</p>
                    </div>

                    <div class="col-lg-7">
                        <div class="row g-4 mt-5"><br>
                            <div class="col-sm-6 wow fadeIn" data-wow-delay="0.1s">
                                <div class="d-flex align-items-center mb-3">
                                    <div class="flex-shrink-0 btn-square bg-primary rounded-circle me-5">
                                        <img src="{{ asset('frontend/img/tenaga.png') }}" alt="" width=155
                                            height=155>
                                    </div>
                                    <h4 class="mb-0">Tenaga Bersertifikasi</h4>
                                </div>
                            </div>

                            <div class="col-sm-6 wow fadeIn" data-wow-delay="0.2s">
                                <div class="d-flex align-items-center mb-5">
                                    <div class="flex-shrink-0 btn-square bg-primary rounded-circle me-5">
                                        <img src="{{ asset('frontend/img/no money.png') }}" alt="" width=155
                                            height=155>
                                    </div>
                                    <h4 class="mb-0">Tidak Ada Biaya Tambahan</h4>
                                </div>
                            </div>

                            <div class="col-sm-6 wow fadeIn" data-wow-delay="0.3s">
                                <div class="d-flex align-items-center mb-5">
                                    <div class="flex-shrink-0 btn-square bg-primary rounded-circle me-5">
                                        <img src="{{ asset('frontend/img/happy.png') }}" alt="" width=155
                                            height=155>
                                    </div>
                                    <h4 class="mb-0">100% Happy Client</h4>
                                </div>
                            </div>

                            <div class="col-sm-6 wow fadeIn" data-wow-delay="0.4s">
                                <div class="d-flex align-items-center mb-5">
                                    <div class="flex-shrink-0 btn-square bg-primary rounded-circle me-5">
                                        <img src="{{ asset('frontend/img/safety.png') }}" alt="" width=155
                                            height=155>
                                    </div>
                                    <h4 class="mb-0">Aman & Rahasia</h4>
                                </div>
                            </div>

                            <div class="col-sm-6 wow fadeIn" data-wow-delay="0.5s">
                                <div class="d-flex align-items-center mb-5">
                                    <div class="flex-shrink-0 btn-square bg-primary rounded-circle me-5">
                                        <img src="{{ asset('frontend/img/service.png') }}" alt="" width=155
                                            height=155>
                                    </div>
                                    <h4 class="mb-0">24/7 Customer Support</h4>
                                </div>
                            </div>

                            <div class="col-sm-6 wow fadeIn" data-wow-delay="0.6s">
                                <div class="d-flex align-items-center mb-9">
                                    <div class="flex-shrink-0 btn-square bg-primary rounded-circle me-5">
                                        <img src="{{ asset('frontend/img/easy.png') }}" alt="" width=155
                                            height=155>
                                    </div>
                                    <h4 class="mb-0">Mudah</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Features End -->

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
