<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Service | Page</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="{{ asset('frontend/img/icon.png ') }}" rel='shortcut icon'>

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
                                <li><a class="nav-item nav-link active" href="service">Service</a></li>
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
                                <li><a class="nav-item nav-link" href="about">About</a></li>
                                <li><a class="nav-item nav-link active" href="service">Service</a></li>
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
                    <h1 class="text-white animated zoomIn mb-3">Service</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item"><a class="text-white" href="#">Home</a></li>
                            <li class="breadcrumb-item"><a class="text-white" href="#">Pages</a></li>
                            <li class="breadcrumb-item"><a class="text-white" href="service">Service</a></li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <!-- Navbar & Hero End -->

        <!-- Service Start -->
        <div class="container-xxl py-6">
            <div class="container">
                <div class="mx-auto text-center wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                    <div class="d-inline-block border rounded-pill text-primary px-4 mb-3">Our Services</div>
                    <h2 class="mb-5">We Provide Solutions On Your Business</h2>
                </div>
                <div class="row g-4">
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="service-item rounded h-100">
                            <div class="d-flex justify-content-between">
                                <div class="service-icon">
                                    <i class="fa fa-user-tie fa-2x"></i>
                                </div>
                                <a class="service-btn" href="service">
                                    <i class="fa fa-link fa-2x"></i>
                                </a>
                            </div>
                            <div class="p-5">
                                <h5 class="mb-3">Jasa Kepatuhan Pajak</h5>
                                <span>
                                    <ul>
                                        <li>Menganalisa, mempersiapkan, mengelola, dan melaporkan SPT PPh Masa dan SPT
                                            PPN setiap bulan (via e-filing)</li>
                                        <li>Mempersiapkan SPT PPh Orang Pribadi (form 1770/1770S) dan SPT PPh Badan
                                            (form 1771)</li>
                                        <li>Membantu perusahaan dalam mendampingi pemeriksaan pajak, keberatan pajak,
                                            pengembalian pajak, dan proses pencabutan NPWP</li>
                                    </ul>
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="service-item rounded h-100">
                            <div class="d-flex justify-content-between">
                                <div class="service-icon">
                                    <i class="fa fa-chart-pie fa-2x"></i>
                                </div>
                                <a class="service-btn" href="service">
                                    <i class="fa fa-link fa-2x"></i>
                                </a>
                            </div>
                            <div class="p-5">
                                <h5 class="mb-3">Jasa Review Pajak</h5>
                                <span>
                                    <ul>
                                        <li>Review Pemotongan Pajak Penghasilan bulanan</li>
                                        <li>Review Pajak Pertambahan Nilai</li>
                                        <li>Review semua pajak untuk satu tahun pajak</li>
                                    </ul>
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.6s">
                        <div class="service-item rounded h-100">
                            <div class="d-flex justify-content-between">
                                <div class="service-icon">
                                    <i class="fa fa-chart-line fa-2x"></i>
                                </div>
                                <a class="service-btn" href="service">
                                    <i class="fa fa-link fa-2x"></i>
                                </a>
                            </div>
                            <div class="p-5">
                                <h5 class="mb-3">Jasa Konsultasi Pajak</h5>
                                <span>
                                    <ul>
                                        <li>Permasalahan pajak sehari-hari</li>
                                        <li>Pajak Penghasilan untuk Badan dan Orang pribadi</li>
                                        <li>Pajak Penghasilan Karyawan</li>
                                        <li>Pajak Pertambahan Nilai dan Pemotongan Pajak Penghasilan</li>
                                    </ul>
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="service-item rounded h-100">
                            <div class="d-flex justify-content-between">
                                <div class="service-icon">
                                    <img src="{{ asset('frontend/img/kepatuhan.png') }}" alt="" width=100>
                                </div>
                                <a class="service-btn" href="">
                                    <i class="fa fa-link fa-2x"></i>
                                </a>
                            </div>
                            <div class="p-5">
                                <h5 class="mb-3">Jasa Pembukaan</h5>
                                <span>
                                    <ul>
                                        <li>Mempersiapkan laporan keuangan untuk Badan Usaha maupun Orang Pribadi</li>
                                        <li>Accounting Review</li>
                                    </ul>
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="service-item rounded h-100">
                            <div class="d-flex justify-content-between">
                                <div class="service-icon">
                                    <i class="fa fa-check fa-2x"></i>
                                </div>
                                <a class="service-btn" href="">
                                    <i class="fa fa-link fa-2x"></i>
                                </a>
                            </div>
                            <div class="p-5">
                                <h5 class="mb-3">
                                    Jasa Pendampingan Pemeriksaan Pajak</h5>
                                <span>
                                    <ul>
                                        <li>Memberikan konsultasi selama proses pemeriksaan</li>
                                        <li>Melakukan diskusi/pembahasan dengan pemeriksa pajak</li>
                                        <li>Mengidentifikasi koreksi yang dilakukan pemeriksa, dan mempersiapkan
                                            argumentasi</li>
                                    </ul>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="mx-auto text-center wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
            <div class="d-inline-block border rounded-pill text-primary px-4 mb-3">Pricing</div>
            <h4 class="mb-3">Paket Layanan Pelaporan Pajak Bulanan Perusahaan</h4>
        </div>
        <div class="container-fluid">
            <div class="container p-5">
                <div class="row">
                    <div class="col-lg-3 col-md-3 mb-4">
                        <div class="card card1 h-60">
                            <div class="service-icon">
                                <center>
                                    <img src="{{ asset('frontend/img/750.png') }}" alt="company setiadi" width=135>
                                </center>
                            </div>
                            <div class="card-body">
                                <span class="h4">
                                    <p class="text-center">IDR 750.000 / bulan</p>
                                </span>
                                <p class="text-center">Perusahaan baru dibentuk dengan omset nihil (tidak ada
                                    transaksi)</p>
                                <div class="d-grid my-2">
                                    <a class="btn btn-primary rounded-pill py-2 px-2 mt-1"
                                        href="https://wa.me/6281288140159?text=Nama%20%3A%20%0ANomor%20Telepon%20%3A%20%0AEmail%20%3A%20%0AService%20%3A%20Perusahaan%20baru%20dibentuk%20dengan%20omset%20nihil%20(tidak%20ada%20transaksi)%0APesan%20%3A%20%0A"><i
                                            class="fa fa-shopping-cart" aria-hidden="true"></i>&nbsp; Pesan
                                        Sekarang</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-3 mb-4">
                        <div class="card card2 h-60">
                            <div class="service-icon">
                                <center>
                                    <img src="{{ asset('frontend/img/1000.png') }}" alt="company setiadi" width=135>
                                </center>
                            </div>
                            <div class="card-body">
                                <span class="h4">
                                    <p class="text-center">IDR 1.500.000 / bulan</p>
                                </span>
                                <p class="text-center">Perusahaan baru dibentuk / maksimal omset maksimal &nbsp; 1 M
                                </p>
                                <div class="d-grid my-2">
                                    <a class="btn btn-primary rounded-pill py-2 px-2 mt-1"
                                        href="https://wa.me/6281288140159?text=Nama%20%3A%20%0ANomor%20Telepon%20%3A%20%0AEmail%20%3A%20%0AService%20%3A%20Perusahaan%20baru%20dibentuk%20%2F%20maksimal%20omset%20maksimal%201%20M%0APesan%20%3A%20%0A">
                                        <i class="fa fa-shopping-cart" aria-hidden="true"></i>&nbsp Pesan Sekarang</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-3 mb-4">
                        <div class="card card2 h-60">
                            <div class="service-icon">
                                <center>
                                    <img src="{{ asset('frontend/img/5000.png') }}" alt="company setiadi" width=135>
                                </center>
                            </div>
                            <div class="card-body">
                                <span class="h4">
                                    <p class="text-center">IDR 3.000.000 / bulan</p>
                                </span>
                                <p class="text-center">Perusahaan baru dibentuk / maksimal omset maksimal 4.8 M</p>
                                <div class="d-grid my-2">
                                    <a class="btn btn-primary rounded-pill py-2 px-2 mt-1"
                                        href="https://wa.me/6281288140159?text=Nama%20%3A%20%0ANomor%20Telepon%20%3A%20%0AEmail%20%3A%20%0AService%20%3A%20Perusahaan%20baru%20dibentuk%20%2F%20maksimal%20omset%20maksimal%204.8%20M%0APesan%20%3A%20%0A">
                                        <i class="fa fa-shopping-cart" aria-hidden="true"></i>&nbsp Pesan Sekarang</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-3 mb-4">
                        <div class="card card2 h-60">
                            <div class="service-icon">
                                <center>
                                    <img src="{{ asset('frontend/img/10000.png') }}" alt="company setiadi" width=135>
                                </center>
                            </div>
                            <div class="card-body">
                                <span class="h4">
                                    <p class="text-center">IDR 5.000.000 / bulan</p>
                                </span>
                                <span>
                                    <p class="text-center">Perusahaan baru dibentuk / maksimal omset diatas 4.8 M sd 10
                                        M
                                    </p>
                                </span>
                                <div class="d-grid my-2">
                                    <a class="btn btn-primary rounded-pill py-2 px-2 mt-1"
                                        href="https://wa.me/6281288140159?text=Nama%20%3A%20%0ANomor%20Telepon%20%3A%20%0AEmail%20%3A%20%0AService%20%3A%20Perusahaan%20baru%20dibentuk%20%2F%20maksimal%20omset%20diatas%204.8%20M%20sd%2010%20M%0APesan%20%3A%20%0A">
                                        <i class="fa fa-shopping-cart" aria-hidden="true"></i>&nbsp Pesan Sekarang</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"
                        integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous">
                    </script>
                </div>
            </div>
        </div>
        {{-- harga kedua --}}

        <div class="mx-auto text-center wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
            <h4 class="mb-3">Layanan Pelaporan Pajak Tahunan</h4>
            <h6 class="d-inline-block text-primary px-4 mb-3">Perorangan</h6>
        </div>
        <div class="container-fluid">
            <div class="container p-5">
                <div class="row">
                    <div class="col-lg-3 col-md-3 mb-4">
                        <div class="card card1 h-60">
                            <div class="service-icon">
                                <center>
                                    <img src="{{ asset('frontend/img/perorangan nihil.png') }}" alt="company setiadi"
                                        width=135>
                                </center>
                            </div>
                            <div class="card-body">
                                <span class="h4">
                                    <p class="text-center">IDR 1.000.000 / tahun</p>
                                </span>
                                <p class="text-center"><b>Perorangan</b> (Nihil)</p>
                                <div class="d-grid my-2">
                                    <a class="btn btn-primary rounded-pill py-2 px-2 mt-1"
                                        href="https://wa.me/6281288140159?text=Nama%20%3A%20%0ANomor%20Telepon%20%3A%20%0AEmail%20%3A%20%0AService%20%3A%20Perorangan%20(Nihil)%0APesan%20%3A%20%0A"><i
                                            class="fa fa-shopping-cart" aria-hidden="true"></i>&nbsp; Pesan
                                        Sekarang</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-3 mb-4">
                        <div class="card card2 h-60">
                            <div class="service-icon">
                                <center>
                                    <img src="{{ asset('frontend/img/perorangan transaksi.png') }}"
                                        alt="company setiadi" width=135>
                                </center>
                            </div>
                            <div class="card-body">
                                <span class="h4">
                                    <p class="text-center">IDR 1.500.000 / tahun</p>
                                </span>
                                <p class="text-center"><b>Perorangan</b> (Ada Transaksi)</p>
                                <div class="d-grid my-2">
                                    <a class="btn btn-primary rounded-pill py-2 px-2 mt-1"
                                        href="https://wa.me/6281288140159?text=Nama%20%3A%20%0ANomor%20Telepon%20%3A%20%0AEmail%20%3A%20%0AService%20%3A%20Perorangan%20(Ada%20Transaksi)%0APesan%20%3A%20%0A">
                                        <i class="fa fa-shopping-cart" aria-hidden="true"></i>&nbsp Pesan Sekarang</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"
                        integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous">
                    </script>
                </div>
            </div>
        </div>

        {{-- paket perusahaan --}}
        <div class="mx-auto text-center wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
            <h6 class="d-inline-block text-primary px-4 mb-3">Perusahaan</h6>
        </div>
        <div class="container-fluid">
            <div class="container p-5">
                <div class="row">
                    <div class="col-lg-3 col-md-3 mb-4">
                        <div class="card card1 h-100">
                            <div class="service-icon">
                                <center>
                                    <img src="{{ asset('frontend/img/perusahaan nihil.png') }}" alt="company setiadi"
                                        width=135>
                                </center>
                            </div>
                            <div class="card-body">
                                <span class="h4">
                                    <p class="text-center">IDR 1.500.000 / tahun</p>
                                </span>
                                <span>
                                    <p class="text-center"><b> Perusahaan </b> (Nihil)</p>
                                </span>
                                <div class="d-grid my-2">
                                    <a class="btn btn-primary rounded-pill py-2 px-2 mt-4"
                                        href="https://wa.me/6281288140159?text=Nama%20%3A%20%0ANomor%20Telepon%20%3A%20%0AEmail%20%3A%20%0AService%20%3A%20Perusahaan%20(Nihil)%0APesan%20%3A%20%0A"><i
                                            class="fa fa-shopping-cart" aria-hidden="true"></i>&nbsp; Pesan
                                        Sekarang</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-3 mb-4">
                        <div class="card card2 h-60">
                            <div class="service-icon">
                                <center>
                                    <img src="{{ asset('frontend/img/perusahaan pembuka.png') }}"
                                        alt="company setiadi" width=135>
                                </center>
                            </div>
                            <div class="card-body">
                                <span class="h4">
                                    <p class="text-center">IDR 2.000.000 / tahun</p>
                                </span>
                                <p class="text-center"><b>Perusahaan</b> (Dengan Pembukaan)</p>
                                <div class="d-grid my-2">
                                    <a class="btn btn-primary rounded-pill py-2 px-2 mt-1"
                                        href="https://wa.me/6281288140159?text=Nama%20%3A%20%0ANomor%20Telepon%20%3A%20%0AEmail%20%3A%20%0AService%20%3A%20Perusahaan%20(Dengan%20Pembukaan)%0APesan%20%3A%20%0A">
                                        <i class="fa fa-shopping-cart" aria-hidden="true"></i>&nbsp Pesan Sekarang</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-3 mb-4">
                        <div class="card card2 h-60">
                            <div class="service-icon">
                                <center>
                                    <img src="{{ asset('frontend/img/perusahaan nonpembuka.png') }}"
                                        alt="company setiadi" width=135>
                                </center>
                            </div>
                            <div class="card-body">
                                <span class="h4">
                                    <p class="text-center">IDR 3.500.000 / tahun</p>
                                </span>
                                <p class="text-center"><b>Perusahaan</b> (Tanpa Pembukaan)</p>
                                <div class="d-grid my-2">
                                    <a class="btn btn-primary rounded-pill py-2 px-2 mt-1"
                                        href="https://wa.me/6281288140159?text=Nama%20%3A%20%0ANomor%20Telepon%20%3A%20%0AEmail%20%3A%20%0AService%20%3A%20Perusahaan%20(Tanpa%20Pembukaan)%0APesan%20%3A%20%0A">
                                        <i class="fa fa-shopping-cart" aria-hidden="true"></i>&nbsp Pesan Sekarang</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"
                        integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous">
                    </script>
                </div>
            </div>
        </div>

        {{-- paket lainnya --}}
        <div class="mx-auto text-center wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
            <h4 class="mb-3">Layanan Lainnya</h4>
        </div>
        <div class="container-fluid">
            <div class="container p-5">
                <div class="row">
                    <div class="col-lg-3 col-md-3 mb-4">
                        <div class="card card1 h-60">
                            <div class="service-icon">
                                <center>
                                    <img src="{{ asset('frontend/img/lainnya 1.png') }}" alt="company setiadi"
                                        width=135>
                                </center>
                            </div>
                            <div class="card-body">
                                <span class="h4">
                                    <p class="text-center">IDR 2.000.000</p>
                                </span>
                                <p class="text-center">Pengurusan Sertifikat Elektronik (Ebupot unifikasi pembayaran
                                    Pph (pph pasal 4(2), 22, 23)</p>
                                <div class="d-grid my-2">
                                    <a class="btn btn-primary rounded-pill py-2 px-2 mt-1"
                                        href="https://wa.me/6281288140159?text=Nama%20%3A%20%0ANomor%20Telepon%20%3A%20%0AEmail%20%3A%20%0AService%20%3A%20Pengurusan%20Sertifikat%20Elektronik%20(Ebupot%20unifikasi%20pembayaran%20Pph%20(pph%20pasal%204(2)%2C%2022%2C%2023)%0APesan%20%3A%20%0A"><i
                                            class="fa fa-shopping-cart" aria-hidden="true"></i>&nbsp; Pesan
                                        Sekarang</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-3 mb-4">
                        <div class="card card1 h-60">
                            <div class="service-icon">
                                <center>
                                    <img src="{{ asset('frontend/img/lainnya 2.png') }}" alt="company setiadi"
                                        width=135>
                                </center>
                            </div>
                            <div class="card-body">
                                <span class="h4">
                                    <p class="text-center">IDR 1.500.000</p>
                                </span>
                                <p class="text-center">NPWP Pribadi <br>
                                    atau Perusahaan</p>
                                <div class="d-grid my-2">
                                    <a class="btn btn-primary rounded-pill py-2 px-2 mt-1"
                                        href="https://wa.me/6281288140159?text=Nama%20%3A%20%0ANomor%20Telepon%20%3A%20%0AEmail%20%3A%20%0AService%20%3A%20Pengurusan%20Sertifikat%20Elektronik%20(Ebupot%20unifikasi%20pembayaran%20Pph%20(pph%20pasal%204(2)%2C%2022%2C%2023)%0APesan%20%3A%20%0A"><i
                                            class="fa fa-shopping-cart" aria-hidden="true"></i>&nbsp; Pesan
                                        Sekarang</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-3 mb-4">
                        <div class="card card1 h-60">
                            <div class="service-icon">
                                <center>
                                    <img src="{{ asset('frontend/img/lainnya 3.png') }}" alt="company setiadi"
                                        width=135>
                                </center>
                            </div>
                            <div class="card-body">
                                <span class="h4">
                                    <p class="text-center">IDR 500.000</p>
                                </span>
                                <p class="text-center">SKF (Surat Keterangan Fiskal)</p>
                                <div class="d-grid my-2">
                                    <a class="btn btn-primary rounded-pill py-2 px-2 mt-1"
                                        href="https://wa.me/6281288140159?text=Nama%20%3A%20%0ANomor%20Telepon%20%3A%20%0AEmail%20%3A%20%0AService%20%3A%20Pengurusan%20Sertifikat%20Elektronik%20(Ebupot%20unifikasi%20pembayaran%20Pph%20(pph%20pasal%204(2)%2C%2022%2C%2023)%0APesan%20%3A%20%0A"><i
                                            class="fa fa-shopping-cart" aria-hidden="true"></i>&nbsp; Pesan
                                        Sekarang</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-3 mb-4">
                        <div class="card card1 h-60">
                            <div class="service-icon">
                                <center>
                                    <img src="{{ asset('frontend/img/lainnya 4.png') }}" alt="company setiadi"
                                        width=135>
                                </center>
                            </div>
                            <div class="card-body">
                                <span class="h4">
                                    <p class="text-center">IDR 500.000</p>
                                </span>
                                <p class="text-center">E-FIN (Elektronic Filing Identification Number)</p>
                                <div class="d-grid my-2">
                                    <a class="btn btn-primary rounded-pill py-2 px-2 mt-1"
                                        href="https://wa.me/6281288140159?text=Nama%20%3A%20%0ANomor%20Telepon%20%3A%20%0AEmail%20%3A%20%0AService%20%3A%20Pengurusan%20Sertifikat%20Elektronik%20(Ebupot%20unifikasi%20pembayaran%20Pph%20(pph%20pasal%204(2)%2C%2022%2C%2023)%0APesan%20%3A%20%0A"><i
                                            class="fa fa-shopping-cart" aria-hidden="true"></i>&nbsp; Pesan
                                        Sekarang</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-3 mb-4">
                        <div class="card card1 h-60">
                            <div class="service-icon">
                                <center>
                                    <img src="{{ asset('frontend/img/lainnya 5.png') }}" alt="company setiadi"
                                        width=135>
                                </center>
                            </div>
                            <div class="card-body">
                                <span class="h4">
                                    <p class="text-center">IDR 3.500.000</p>
                                </span>
                                <p class="text-center">PKP & Sertifikat Elektronik e-faktur</p>
                                <div class="d-grid my-2">
                                    <a class="btn btn-primary rounded-pill py-2 px-2 mt-1"
                                        href="https://wa.me/6281288140159?text=Nama%20%3A%20%0ANomor%20Telepon%20%3A%20%0AEmail%20%3A%20%0AService%20%3A%20Pengurusan%20Sertifikat%20Elektronik%20(Ebupot%20unifikasi%20pembayaran%20Pph%20(pph%20pasal%204(2)%2C%2022%2C%2023)%0APesan%20%3A%20%0A"><i
                                            class="fa fa-shopping-cart" aria-hidden="true"></i>&nbsp; Pesan
                                        Sekarang</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-3 mb-4">
                        <div class="card card1 h-60">
                            <div class="service-icon">
                                <center>
                                    <img src="{{ asset('frontend/img/lainnya 6.png') }}" alt="company setiadi"
                                        width=135>
                                </center>
                            </div>
                            <div class="card-body">
                                <span class="h4">
                                    <p class="text-center">IDR 750.000</p>
                                </span>
                                <p class="text-center">SK PP 23 (PPH Final 0,5%)</p>
                                <div class="d-grid my-2">
                                    <a class="btn btn-primary rounded-pill py-2 px-2 mt-1"
                                        href="https://wa.me/6281288140159?text=Nama%20%3A%20%0ANomor%20Telepon%20%3A%20%0AEmail%20%3A%20%0AService%20%3A%20Pengurusan%20Sertifikat%20Elektronik%20(Ebupot%20unifikasi%20pembayaran%20Pph%20(pph%20pasal%204(2)%2C%2022%2C%2023)%0APesan%20%3A%20%0A"><i
                                            class="fa fa-shopping-cart" aria-hidden="true"></i>&nbsp; Pesan
                                        Sekarang</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"
                        integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous">
                    </script>
                </div>
            </div>
        </div>
        <!-- Service End -->

        <!-- Testimonial Start -->
        <div class="container-xxl">
            <div class="container">
                <div class="mx-auto text-center wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                    <div class="d-inline-block border rounded-pill text-primary px-4 mb-3">Testimonial</div>
                    <h2 class="mb-5">What Our Clients Say!</h2>
                </div>
                <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay="0.1s">
                    <div class="testimonial-item rounded p-4">
                        <i class="fa fa-quote-left fa-2x text-primary mb-3"></i>
                        <p style="text-indent: 15px;">Saya sangat puas dengan pelayanan jasa perpajakan yang
                            profesional. Setiadi Consulting sangat
                            membantu saya mengelola dan mengurus semua aspek perpajakan perusahaan saya dengan
                            membuatnya
                            menjadi lebih efisien dan akurat. Good Job!</p>
                    </div>

                    <div class="testimonial-item rounded p-4">
                        <i class="fa fa-quote-left fa-2x text-primary mb-3"></i>
                        <p style="text-indent: 15px;">Jasa pembukuannya sangat membantu saya dalam mengelola keuangan
                            bisnis saya. Setiadi
                            Consulting
                            memiliki sistem yang baik dan mampu membuat laporan keuangan yang jelas dan mudah dipahami.
                            Sekarang saya merasa lebih percaya diri dalam mengambil keputusan finansial karena ada jasa
                            pembukuan yang dapat saya andalkan.</p>
                    </div>

                    <div class="testimonial-item rounded p-4">
                        <i class="fa fa-quote-left fa-2x text-primary mb-3"></i>
                        <p style="text-indent: 15px;">Saya sangat senang dengan pelayanan yang diberikan. Setiadi
                            Consulting sangat responsif dan
                            dapat menjawab semua keluh kesah saya tentang perpajakan. Mereka memberikan saran yang
                            sangat
                            membantu mengoptimalkan struktur perpajakan perusahaan saya. Saya merasa sangat terbantu
                            dengan
                            Setiadi Consulting. Saya merekomendasikan anda untuk Menggunakan jasa Setiadi Consulting
                            kepada
                            anda yang membutuhkan layanan perpajakan.</p>
                    </div>

                    <div class="testimonial-item rounded p-4">
                        <i class="fa fa-quote-left fa-2x text-primary mb-3"></i>
                        <p style="text-indent: 15px;">Jasa pembukuan Setiadi Consulting sangat membantu saya dalam
                            mengelola arus kas bisnis dengan
                            sangat efisien. Mereka selalu responsif dan dapat memberikan solusi terbaik untuk setiap
                            masalah
                            yang saya hadapi. Sistem yang mereka gunakan sangat terorganisir dan mudah digunakan,
                            sehingga
                            saya dapat memantau keuangan bisnis saya dengan mudah dan cepat. Saya sangat
                            merekomendasikan
                            jasa pembukuan Setiadi Consulting.</p>
                    </div>

                </div>
            </div>
        </div>
        <!-- Testimonial End -->

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
