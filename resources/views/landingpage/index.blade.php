<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Rileksia - Destinasi Relaksasi Anda</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500;600&family=Playfair+Display:wght@400;500;600&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="assets/lib/animate/animate.min.css" rel="stylesheet">
    <link href="assets/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">


    <!-- Customized Bootstrap Stylesheet -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="assets/css/style.css" rel="stylesheet">
</head>

<body>

    <!-- Navbar & Hero Start -->
    <div class="container-fluid position-relative p-0">
        <nav class="navbar navbar-expand-lg navbar-light bg-white px-4 px-lg-5 py-3 py-lg-0">
            <a href="/" class="navbar-brand p-0">
                <h1 class="text-primary m-0">Rileksia</h1>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="fa fa-bars"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav ms-auto py-0">
                    <a href="#" class="nav-item nav-link active">Beranda</a>
                    <a href="#about" class="nav-item nav-link">Tentang</a>
                    <a href="#service" class="nav-item nav-link">Layanan</a>
                    <a href="#contact" class="nav-item nav-link">Hubungi</a>
                </div>
                <a href="{{ route('login') }}" class="btn btn-primary rounded-pill text-white py-2 px-4 flex-wrap flex-sm-shrink-0">
                    Masuk
                </a>
            </div>
        </nav>


        <!-- Carousel Start -->
        <div class="header-carousel owl-carousel">
            <div class="header-carousel-item">
                <img src="assets/img/carousel-1.jpg" class="img-fluid w-100" alt="Image">
                <div class="carousel-caption">
                    <div class="carousel-caption-content p-3">
                        <h1 class="display-1 text-capitalize text-white mb-4">Solusi Terbaik Untuk Kesehatan Anda</h1>
                        <p class="mb-5 fs-5">Rasakan relaksasi dan peremajaan yang tak tertandingi dengan terapis ahli
                            kami, Temukan kembali ketenangan dan keseimbangan melalui layanan terapi
                            kami yang komprehensif.
                        </p>
                        <a class="btn btn-primary rounded-pill text-white py-3 px-5" href="{{ route('appointment') }}">Reservasi
                            Sekarang</a>
                    </div>
                </div>
            </div>
            <div class="header-carousel-item">
                <img src="assets/img/carousel-2.jpg" class="img-fluid w-100" alt="Image">
                <div class="carousel-caption">
                    <div class="carousel-caption-content p-3">
                        <h1 class="display-1 text-capitalize text-white mb-4">Solusi Terbaik Untuk Kesehatan Anda</h1>
                        <p class="mb-5 fs-5 animated slideInDown">Rasakan relaksasi dan peremajaan yang tak tertandingi dengan terapis ahli
                            kami, Temukan kembali ketenangan dan keseimbangan melalui layanan terapi
                            kami yang komprehensif.
                        </p>
                        <a class="btn btn-primary rounded-pill text-white py-3 px-5" href="{{ route('appointment') }}">Reservasi
                            Sekarang</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Carousel End -->
    </div>
    <!-- Navbar & Hero End -->

    <!-- About Start -->
    <div class="container-fluid about bg-light py-5" id="about">
        <div class="container py-5">
            <div class="row g-5 align-items-center">
                <div class="col-lg-5 wow fadeInLeft" data-wow-delay="0.2s">
                    <div class="about-img pb-5 ps-5">
                        <img src="assets/img/about-1.jpg" class="img-fluid rounded w-100" style="object-fit: cover;" alt="Image">
                        <div class="about-img-inner">
                            <img src="assets/img/about-2.jpg" class="img-fluid rounded-circle w-100 h-100" alt="Image">
                        </div>
                    </div>
                </div>
                <div class="col-lg-7 wow fadeInRight" data-wow-delay="0.4s">
                    <div class="section-title text-start mb-5">
                        <h4 class="sub-title pe-3 mb-0">Tentang Kami</h4>
                        <h1 class="display-3 mb-4">Rileksia, Message & Teraphy</h1>
                        <p class="mb-4" style="text-align: justify;">Rileksia menyedikan jasa massage/pijat/refleksi
                            panggilan untuk area Jakarta, Bogor, Depok, Tangerang & Bekasi.
                            Melalui tenaga terapis yang berpengalaman dan profesional kami berusaha memberikan pelayanan
                            yang terbaik dalam melayani customer. Kepuasan customer adalah kepuasan Kami.
                            Mari Manjakan dirimu dengan berbagai treatment dari Rileksia.
                        </p>
                        <div class="mb-4">
                            <p class="text-secondary"><i class="fa fa-check text-primary me-2"></i> Terapis Ramah &
                                Profesional</p>
                            <p class="text-secondary"><i class="fa fa-check text-primary me-2"></i> Gratis Biaya
                                Transportasi</p>
                            <p class="text-secondary"><i class="fa fa-check text-primary me-2"></i> Pemesanan Mudah &
                                Cepat</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->

    <!-- Services Start -->
    <div class="container-fluid service py-5" id="service">
        <div class="container py-5">
            <div class="section-title mb-5 wow fadeInUp" data-wow-delay="0.2s">
                <div class="sub-style">
                    <h4 class="sub-title px-3 mb-0">Apa Yang Kami Lakukan</h4>
                </div>
                <h1 class="display-3 mb-4">Layanan Kami Memberikan Terapi Profesional Dari Para Ahli.</h1>
                <p class="mb-0">Rasakan relaksasi dan peremajaan yang tak
                    tertandingi
                    dengan terapis ahli kami, yang berdedikasi untuk meningkatkan kesehatan Anda dan memberikan
                    pendekatan holistik untuk kesehatan Anda. Temukan kembali ketenangan dan keseimbangan melalui
                    layanan terapi kami yang komprehensif.</p>
            </div>
            <div class="row g-4 justify-content-center">
                <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item rounded">
                        <div class="service-img rounded-top">
                            <img src="assets/img/service-8.jpg" class="img-fluid rounded-top w-100" alt="">
                        </div>
                        <div class="service-content rounded-bottom bg-light p-4">
                            <div class="service-content-inner">
                                <h5 class="mb-4">Terapi Spa</h5>
                                <p class="mb-4" style="text-align: justify;">Pijat dan perawatan tubuh yang menyegarkan
                                    untuk relaksasi total.</p>
                                <p><strong>Durasi:</strong> 60 Menit</p>
                                <p><strong>Harga:</strong> 400.000</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="service-item rounded">
                        <div class="service-img rounded-top">
                            <img src="assets/img/service-5.jpg" class="img-fluid rounded-top w-100" alt="">
                        </div>
                        <div class="service-content rounded-bottom bg-light p-4">
                            <div class="service-content-inner">
                                <h5 class="mb-4">Terapi Refleksiologi</h5>
                                <p class="mb-4" style="text-align: justify;">Teknik pijat kaki yang merangsang sistem
                                    tubuh untuk penyembuhan.</p>
                                <p><strong>Durasi:</strong> 60 menit</p>
                                <p><strong>Harga:</strong> 300.000</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="service-item rounded">
                        <div class="service-img rounded-top">
                            <img src="assets/img/service-1.jpg" class="img-fluid rounded-top w-100" alt="">
                        </div>
                        <div class="service-content rounded-bottom bg-light p-4">
                            <div class="service-content-inner">
                                <h5 class="mb-4">Terapi Aromaterapi</h5>
                                <p class="mb-4" style="text-align: justify;">Minyak wangi alami yang menenangkan pikiran
                                    dan tubuh.</p>
                                <p><strong>Durasi:</strong> 60 menit</p>
                                <p><strong>Harga:</strong> 400.000</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="service-item rounded">
                        <div class="service-img rounded-top">
                            <img src="assets/img/service-3.jpg" class="img-fluid rounded-top w-100" alt="">
                        </div>
                        <div class="service-content rounded-bottom bg-light p-4">
                            <div class="service-content-inner">
                                <h5 class="mb-4">Terapi Musikoterapi</h5>
                                <p class="mb-4" style="text-align: justify;">Bunyi musik yang dipilih untuk meredakan
                                    stres dan ketegangan.</p>
                                <p><strong>Durasi:</strong> 50 menit</p>
                                <p><strong>Harga:</strong> 250.000</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item rounded">
                        <div class="service-img rounded-top">
                            <img src="assets/img/service-4.jpeg" class="img-fluid rounded-top w-100" alt="">
                        </div>
                        <div class="service-content rounded-bottom bg-light p-4">
                            <div class="service-content-inner">
                                <h5 class="mb-4">Terapi Akupunktur</h5>
                                <p class="mb-4" style="text-align: justify;">Penggunaan jarum tipis untuk meredakan
                                    nyeri dan memulihkan keseimbangan.</p>
                                <p><strong>Durasi:</strong> 60 menit</p>
                                <p><strong>Harga:</strong> 500.000</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="service-item rounded">
                        <div class="service-img rounded-top">
                            <img src="assets/img/service-7.jpg" class="img-fluid rounded-top w-100" alt="">
                        </div>
                        <div class="service-content rounded-bottom bg-light p-4">
                            <div class="service-content-inner">
                                <h5 class="mb-4">Terapi Meditasi</h5>
                                <p class="mb-4" style="text-align: justify;">Praktik mental untuk menenangkan pikiran
                                    dan meningkatkan kesadaran.</p>
                                <p><strong>Durasi:</strong> 60 menit</p>
                                <p><strong>Harga:</strong> 250.000</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="service-item rounded">
                        <div class="service-img rounded-top">
                            <img src="assets/img/service-2.jpg" class="img-fluid rounded-top w-100" alt="">
                        </div>
                        <div class="service-content rounded-bottom bg-light p-4">
                            <div class="service-content-inner">
                                <h5 class="mb-4">Terapi Pernapasan</h5>
                                <p class="mb-4" style="text-align: justify;">Teknik pernapasan yang menenangkan dan
                                    meningkatkan kesehatan.</p>
                                <p><strong>Durasi:</strong> 45 menit</p>
                                <p><strong>Harga:</strong> 150.000</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="service-item rounded">
                        <div class="service-img rounded-top">
                            <img src="assets/img/service-6.jpg" class="img-fluid rounded-top w-100" alt="">
                        </div>
                        <div class="service-content rounded-bottom bg-light p-4">
                            <div class="service-content-inner">
                                <h5 class="mb-4">Terapi Reiki</h5>
                                <p class="mb-4" style="text-align: justify;">Energi positif yang disalurkan melalui
                                    sentuhan ringan untuk penyembuhan.</p>
                                <p><strong>Durasi:</strong> 60 menit</p>
                                <p><strong>Harga:</strong> 400.000</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="d-flex justify-content-center mt-4">
            <a class="btn btn-primary rounded-pill text-white py-2 px-4 mb-2" href="{{ route('appointment') }}">Reservasi Sekarang</a>
        </div>
    </div>
    <!-- Services End -->

    <!-- Feature Start -->
    <div class="container-fluid feature py-5">
        <div class="container py-5">
            <div class="section-title mb-5 wow fadeInUp" data-wow-delay="0.1s">
                <div class="sub-style">
                    <h4 class="sub-title px-3 mb-0">Kenapa Harus Memilih</h4>
                </div>
                <h1 class="display-3 mb-4">"Rileksia"</h1>
            </div>
            <div class="row g-4 justify-content-center">
                <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="row-cols-1 feature-item p-4">
                        <div class="col-12">
                            <div class="feature-icon mb-4">
                                <div class="p-3 d-inline-flex bg-white rounded">
                                    <i class="fas fa-user-md fa-4x text-primary"></i>
                                </div>
                            </div>
                            <div class="feature-content d-flex flex-column">
                                <h5 class="mb-4">Ahli Pijat Profesional</h5>
                                <p class="mb-0" style="text-align: justify;">Kami menyediakan terapis pria dan wanita
                                    yang berpengalaman dan bersertifikat.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="row-cols-1 feature-item p-4">
                        <div class="col-12">
                            <div class="feature-icon mb-4">
                                <div class="p-3 d-inline-flex bg-white rounded">
                                    <i class="fas fa-th-list fa-4x text-primary"></i>
                                </div>
                            </div>
                            <div class="feature-content d-flex flex-column">
                                <h5 class="mb-4">Layanan Lengkap</h5>
                                <p class="mb-0" style="text-align: justify;">Kami akan memberikan pelayanan pijat kami
                                    yang sangat lengkap kepada anda.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="row-cols-1 feature-item p-4">
                        <div class="col-12">
                            <div class="feature-icon mb-4">
                                <div class="p-3 d-inline-flex bg-white rounded">
                                    <i class="fas fa-shield-alt fa-4x text-primary"></i>
                                </div>
                            </div>
                            <div class="feature-content d-flex flex-column">
                                <h5 class="mb-4">Bersih & Higenis</h5>
                                <p class="mb-0" style="text-align: justify;">Semua terapis dalam keadaan sehat dan juga
                                    menerapkan protokol kesehatan.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="row-cols-1 feature-item p-4">
                        <div class="col-12">
                            <div class="feature-icon mb-4">
                                <div class="p-3 d-inline-flex bg-white rounded">
                                    <i class="fas fa-money-bill-alt fa-4x text-primary"></i>
                                </div>
                            </div>
                            <div class="feature-content d-flex flex-column">
                                <h5 class="mb-4">Harga Terjangkau</h5>
                                <p class="mb-0" style="text-align: justify;">Nikmati layanan pijat profesional dengan
                                    harga bersahabat, cocok untuk semua kalangan.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Feature End -->

    <!-- Footer Start -->
    <div class="container-fluid footer py-5 wow fadeIn" data-wow-delay="0.2s" id="contact">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-md-6 col-lg-6 col-xl-3">
                    <div class="footer-item d-flex flex-column">
                        <h4 class="text-white mb-4">Rileksia</h4>
                        <p>Tersedia pijat panggilan profesional di daerah Jabodetabek. Kepuasan Anda prioritas kami.
                        </p>
                        <div class="d-flex align-items-center">
                            <i class="fas fa-share fa-2x text-white me-2"></i>
                            <a class="btn-square btn btn-primary text-white rounded-circle mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                            <a class="btn-square btn btn-primary text-white rounded-circle mx-1" href=""><i class="fab fa-twitter"></i></a>
                            <a class="btn-square btn btn-primary text-white rounded-circle mx-1" href=""><i class="fab fa-instagram"></i></a>
                            <a class="btn-square btn btn-primary text-white rounded-circle mx-1" href=""><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-3">
                    <div class="footer-item d-flex flex-column">
                        <h4 class="mb-4 text-white">Area Layanan</h4>
                        <p><i class="fas fa-angle-right me-2"></i>Jakarta</p>
                        <p><i class="fas fa-angle-right me-2"></i>Bogor</p>
                        <p><i class="fas fa-angle-right me-2"></i>Depok</p>
                        <p><i class="fas fa-angle-right me-2"></i>Tangerang</p>
                        <p><i class="fas fa-angle-right me-2"></i>Bekasi</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-3">
                    <div class="footer-item d-flex flex-column">
                        <h4 class="mb-4 text-white">Layanan Terapi</h4>
                        <a href="#service"><i class="fas fa-angle-right me-2"></i>Semua Layanan</a>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-3">
                    <div class="footer-item d-flex flex-column">
                        <h4 class="mb-4 text-white">Contact Info</h4>
                        <a href=""><i class="fa fa-map-marker-alt me-2"></i> Jalan 123, Jakarta, IND</a>
                        <a href=""><i class="fas fa-envelope me-2"></i> contoh@example.com</a>
                        <a href=""><i class="fas fa-phone me-2"></i> +62 8345 67890</a>
                        <a href="" class="mb-3"><i class="bi bi-whatsapp me-2"></i> +62 8345 67890</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->

    <!-- Back to Top -->
    <a href="#" class="btn btn-primary btn-lg-square back-to-top"><i class="fa fa-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="assets/lib/wow/wow.min.js"></script>
    <script src="assets/lib/easing/easing.min.js"></script>
    <script src="assets/lib/waypoints/waypoints.min.js"></script>
    <script src="assets/lib/owlcarousel/owl.carousel.min.js"></script>


    <!-- Template Javascript -->
    <script src="assets/js/main.js"></script>

</body>

</html>