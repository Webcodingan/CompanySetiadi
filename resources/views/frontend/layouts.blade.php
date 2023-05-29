<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Home | Page</title>
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

            <div class="container-xxl bg-primary hero-header">
                <div class="container">
                    <div class="row g-5 align-items-center">
                        <div class="col-lg-6 text-center text-lg-start">
                            <h1 class="text-white mb-4 animated zoomIn">We Help To Push Your Business To The Top Level
                            </h1>
                            <p class="text-white pb-3 animated zoomIn">Kami hadir dengan misi untuk membantu
                                mengembangkan bisnis Anda. Dengan pengalaman dan keahlian kami, kami siap membantu Anda
                                dalam mendorong bisnis Anda ke tingkat berikutnya. Kami berkomitmen untuk memberikan
                                solusi terbaik untuk bisnis Anda dan memastikan kesuksesan jangka panjang.</p>
                            <a href="opening"
                                class="btn btn-outline-light rounded-pill border-2 py-3 px-5 animated slideInRight">Learn
                                More</a>
                        </div>
                        <div class="col-lg-6 text-center text-lg-start">
                            <img class="img-fluid animated zoomIn" src="{{ asset('frontend/img/home.png') }}"
                                alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Navbar & Hero End -->


        <!-- About Start -->
        <div class="container-xxl py-6">
            <div class="container">
                <div class="row g-5 align-items-center">
                    <div class="col-lg-6 wow zoomIn" data-wow-delay="0.1s">
                        <img class="img-fluid" src="{{ asset('frontend/img/KONSULTAN PAJAK satu.gif') }}">
                    </div>
                    <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="d-inline-block border rounded-pill text-primary px-4 mb-3">About Us</div>
                        <h2 class="mb-4">Kenapa memilih kami?</h2>
                        <p class="mb-4">Pemahaman terhadap perpajakan merupakan
                            salah satu hal yang menjadi komponen
                            penting dalam rangka kemajuan usaha
                            maupun dalam rangka tertib administrasi
                            perpajakan. Namun segi perpajakan juga
                            menjadi hal yang seringkali tidak diperhatikan
                            atau bahkan terbengkalai, hingga pada
                            akhirnya permasalahan perpajakan menjadi
                            hal yang dapat mengganggu kelancaran
                            usaha. Tidak jarang juga segi perpajakan ini
                            ditangani oleh pihak-pihak yang kurang
                            kompeten pada bidang perpajakan.
                        </p>

                        <p>Oleh karena itu SETIADI CONSULTING hadir untuk
                            memberikan solusi terbaik bagi kebutuhan
                            Anda terhadap tertib perpajakan, dalam
                            rangka mendukung kelancaran usaha dan
                            tertib administrasi perpajakan sesuai dengan
                            hukum yang berlaku di Negara Kesatuan
                            Republik Indonesia.
                        </p>
                        <a class="btn btn-primary rounded-pill py-3 px-5 mt-2" href="about">Read More...</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- About End -->


        <!-- Newsletter Start -->
        <div class="container-xxl bg-primary my-6 wow fadeInUp" data-wow-delay="0.1s">
            <div class="container px-lg-5">
                <div class="row align-items-center" style="height: 300px;">
                    <div class="col-12 col-md-6">

                        <p style="font-size:30px;" class="text-white">Urus pajak secara mudah, aman, dan nyaman
                            bersama
                            <strong style="font-size:35px;" class="text-white">SETIADI CONSULTING</strong>
                        </p>
                        <div class="position-relative w-100 mt-3">
                            <a class="btn btn-light rounded-pill py-3 px-5 mt-2"
                                href="https://linktr.ee/setiadi_rekan93">Hubungi Sekarang</a>
                            <button type="button" class="btn shadow-none position-absolute top-0 end-0 mt-1 me-2"><i
                                    class="fa fa-paper-plane text-primary fs-4"></i></button> <br>
                        </div>
                    </div>
                    <div class="col-md-6 text-center mb-n5 d-none d-md-block">
                        <img class="img-fluid mt-5" style="max-height: 250px;"
                            src="{{ asset('frontend/img/newsletter.png') }}">
                    </div>
                </div>
            </div>
        </div>
        <!-- Newsletter End -->


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
                </div>
            </div>
        </div>
        <!-- Service End -->


        <!-- Features Start -->
        {{-- <div class="container-xxl py-6">
            <div class="container">
                <div class="row g-5">
                    <div class="col-lg-5 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="d-inline-block border rounded-pill text-primary px-4 mb-3">Features</div>
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
                                        <i class="fa fa-cubes text-white"></i>
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
                                        <i class="fa fa-smile-beam text-white"></i>
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
                            </div>

                            <div class="col-sm-6 wow fadeIn" data-wow-delay="0.3s">
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

                            <div class="col-sm-6 wow fadeIn" data-wow-delay="0.5s">
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
        </div> --}}
        <!-- Features End -->


        <!-- Client Start -->
        <div class="container-xxl bg-primary my-6 py-5 wow fadeInUp" data-wow-delay="0.1s">
            <div class="container">
                <div class="owl-carousel client-carousel">
                    <a href="https://www.prixa.ai/"><img class="img-fluid"
                            src="{{ asset('frontend/img/prixa.png') }}" alt=""></a>
                    <a href="https://paras.id/"><img class="img-fluid" src="{{ asset('frontend/img/paras.png') }}"
                            alt=""></a>
                    <a href="/"><img class="img-fluid" src="{{ asset('frontend/img/djp.png') }}"
                            alt=""></a>
                    <a href="https://www.instagram.com/code.hivee/"><img class="img-fluid"
                            src="{{ asset('frontend/img/codehive.png') }}" alt=""></a>
                    <a href="https://www.talenta.co/"><img class="img-fluid"
                            src="{{ asset('frontend/img/talenta.png') }}" alt=""></a>
                    <a href="/"><img class="img-fluid" src="{{ asset('frontend/img/sri.png') }}"
                            alt=""></a>
                    <a href="/"><img class="img-fluid" src="{{ asset('frontend/img/setiawan.png') }}"
                            alt=""></a>
                    <a href="/"><img class="img-fluid" src="{{ asset('frontend/img/cpartner.png') }}"
                            alt=""></a>
                    <a href="/"><img class="img-fluid" src="{{ asset('frontend/img/more.png') }}"
                            alt=""></a>
                </div>
            </div>
        </div>
        <!-- Client End -->


        <!-- Testimonial Start -->
        {{-- <div class="container-xxl py-6">
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
        </div> --}}
        <!-- Testimonial End -->


        <!-- Team Start -->
        <div class="container-xxl py-6">
            <div class="container">
                <div class="mx-auto text-center wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                    <div class="d-inline-block border rounded-pill text-primary px-4 mb-3">Our Team</div>
                    <h2 class="mb-5">Meet Our Team Members</h2>
                </div>

                <div class="row g-4 justify-content-md-center">
                    <div class="col-lg-3 col-md-4 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="team-item">
                            <h5>Chandra Setiadi</h5>
                            <p class="mb-4">S.E., BKP., CFP.</p>
                            <img class="img-fluid rounded-circle w-100 mb-4"
                                src="{{ asset('frontend/img/profile cowo.png') }}" alt="">
                            <div class="d-flex justify-content-center">
                                <a class="btn btn-square text-primary bg-white m-1"
                                    href="https://www.instagram.com/chandrasetiadi19/"><i
                                        class="fab fa-instagram"></i></a>
                                <a class="btn btn-square text-primary bg-white m-1"
                                    href="https://www.linkedin.com/in/chandra-setiadi/"><i
                                        class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="team-item">
                            <h5>Meiliana</h5>
                            <p class="mb-4">S.E., BKP.</p>
                            <img class="img-fluid rounded-circle w-100 mb-4"
                                src="{{ asset('frontend/img/profile cewe.png') }}" alt="">
                            <div class="d-flex justify-content-center">
                                <a class="btn btn-square text-primary bg-white m-1"
                                    href="https://www.instagram.com/mei_lili3/"><i class="fab fa-instagram"></i></a>
                                <a class="btn btn-square text-primary bg-white m-1"
                                    href="https://www.linkedin.com/in/meiliana-se-bkp-813917a9/"><i
                                        class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Team End -->


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
