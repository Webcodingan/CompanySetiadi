<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>About | Page</title>
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
                                <li><a class="nav-item nav-link active" href="about">About</a></li>
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
                                <li><a class="nav-item nav-link" href="/">Home</a></li>
                                <li><a class="nav-item nav-link active" href="about">About</a></li>
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
                    <h1 class="text-white animated zoomIn mb-3">About Us</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item"><a class="text-white" href="/">Home</a></li>
                            <li class="breadcrumb-item"><a class="text-white" href="#">Pages</a></li>
                            <li class="breadcrumb-item"><a class="text-white" href="about">About Us</a></li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <!-- Navbar & Hero End -->

        <div class="container">
            <div class="row">
                <div class="col-6">
                    <img src="{{ asset('frontend/img/tentang 2.png') }}"
                        class="img-fluid rounded h-100 w-100 img-responsive" alt="image setiadi consulting">
                </div>

                <div class="col-6">
                    <h3>
                        Visi :
                    </h3>
                    <ol>
                        <strong>
                            <li>Menjadi perusahaan konsultan pajak terkemuka yang berkomitmen untuk memajukan perpajakan
                                di
                                Indonesia.
                            </li>
                        </strong>
                    </ol>

                    <h3>Misi:
                    </h3>
                    <ol>
                        <strong>
                            <li>Memberikan layanan konsultasi pajak yang terbaik untuk membantu klien memahami peraturan
                                perpajakan dengan baik dan memenuhi kewajiban pajak dengan benar dan efisien.</li>
                            <li>Terus mengembangkan dan meningkatkan pengetahuan dan keterampilan tim ahli pajak
                                profesional
                                kami untuk memberikan solusi yang inovatif dan efektif dalam menangani masalah pajak
                                klien
                                kami.</li>
                            <li> Membangun hubungan yang baik dengan klien dan pihak berwenang dalam menjalankan tugas
                                konsultasi
                                pajak, serta memastikan kepatuhan pajak yang baik bagi klien kami.</li>
                            <li>Memberikan edukasi untuk memajukan perpajakan di Indonesia dan meningkatkan kesadaran
                                masyarakat
                                akan pentingnya kepatuhan pajak dan peraturan perpajakan yang baik.</li>
                            <li>Mengutamakan integritas, profesionalisme, dan kepuasan klien dalam setiap layanan
                                konsultasi
                                pajak yang kami berikan.</li>
                            {{-- <li>Dengan visi dan misi yang kuat, Setiadi Consulting berkomitmen untuk memajukan perpajakan di
                            Indonesia dan memberikan layanan konsultasi pajak yang terbaik bagi klien kami.</li>
                        <li>Kami percaya
                            bahwa dengan mengedepankan integritas, profesionalisme, dan kepuasan klien, kami dapat
                            membangun
                            hubungan jangka panjang yang baik dengan klien kami dan berkontribusi dalam memajukan
                            perpajakan di Indonesia.</li> --}}
                        </strong>
                    </ol>
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
                        <div class="row g-5">
                            <div class="col-sm-6 wow fadeIn" data-wow-delay="0.1s">
                                <div class="d-flex align-items-center mb-3">
                                    <div class="flex-shrink-0 btn-square bg-primary rounded-circle me-3">
                                        <i class="fa fa-cubes text-white" aria-hidden="true"></i>
                                    </div>
                                    <h6 class="mb-0">Jasa Kepatuhan Pajak</h6>
                                </div>
                                <span>
                                    <ul>
                                        <li>Menganalisa, mempersiapkan, mengelola, dan melaporkan SPT PPh
                                            Masa dan SPT PPN setiap bulan (via e-filing)</li>
                                        <li>Mempersiapkan SPT PPh Orang Pribadi (form 1770/1770S) dan SPT
                                            PPh Badan (form 1771)</li>
                                        <li>Membantu perusahaan dalam mendampingi pemeriksaan pajak,
                                            keberatan pajak, pengembalian pajak, dan proses pencabutan NPWP
                                        </li>
                                    </ul>
                                </span>

                                <div class="d-flex align-items-center mb-3">
                                    <div class="flex-shrink-0 btn-square bg-primary rounded-circle me-3">
                                        <i class="fa fa-award text-white"></i>
                                    </div>
                                    <h6 class="mb-0">Jasa Konsultasi Pajak</h6>
                                </div>
                                <span>
                                    <ul>
                                        <li>Permasalahan pajak sehari-hari</li>
                                        <li>Pajak Penghasilan untuk Badan dan Orang pribadi</li>
                                        <li>Pajak Penghasilan Karyawan</li>
                                        <li>Pajak Pertambahan Nilai dan Pemotongan Pajak Penghasilan</li>
                                    </ul>
                                </span>
                            </div>

                            <div class="col-sm-6 wow fadeIn" data-wow-delay="0.2s">
                                <div class="d-flex align-items-center mb-3">
                                    <div class="flex-shrink-0 btn-square bg-primary rounded-circle me-3">
                                        <i class="fa fa-percent text-white"></i>
                                    </div>
                                    <h6 class="mb-0">Jasa Review Pajak</h6>
                                </div>
                                <span>
                                    <ul>
                                        <li>Review Pemotongan Pajak Penghasilan bulanan</li>
                                        <li>Review Pajak Pertambahan Nilai</li>
                                        <li>Review semua pajak untuk satu tahun pajak</li>
                                    </ul>
                                </span>

                                <div class="d-flex align-items-center mb-3">
                                    <div class="flex-shrink-0 btn-square bg-primary rounded-circle me-3">
                                        <i class="fa fa-book text-white"></i>
                                    </div>
                                    <h6 class="mb-0">Jasa Pembukuan</h6>
                                </div>
                                <span>
                                    <ul>
                                        <li>Mempersiapkan laporan keuangan untuk Badan Usaha maupun Orang
                                            Pribadi</li>
                                        <li>Accounting Review</li>
                                    </ul>
                                </span>
                                <div class="d-flex align-items-center mb-3">
                                    <div class="flex-shrink-0 btn-square bg-primary rounded-circle me-3">
                                        <i class="fa fa-user-tie text-white"></i>
                                    </div>
                                    <h6 class="mb-0">Jasa Pendampingan Pemeriksaan Pajak</h6>
                                </div>
                                <span>
                                    <ul>
                                        <li>Memberikan konsultasi selama proses pemeriksaan</li>
                                        <li>Melakukan diskusi/pembahasan dengan pemeriksa pajak</li>
                                        <li>Mengidentifikasi koreksi yang dilakukan pemeriksa, dan
                                            mempersiapkan argumentasi</li>
                                    </ul>
                                </span>
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
