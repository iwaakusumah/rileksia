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
            <a href="{{ route('landing') }}" class="navbar-brand p-0">
                <h1 class="text-primary m-0">Rileksia</h1>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="fa fa-bars"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav ms-auto py-0">
                    <a href="{{ route('landing') }}" class="nav-item nav-link active">Beranda</a>
                    <a href="#contact" class="nav-item nav-link">Hubungi</a>
                </div>
            </div>
        </nav>
    </div>
    <!-- Navbar End -->


    <!-- Header Start -->
    <div class="container-fluid bg-breadcrumb">
        <div class="container text-center py-5" style="max-width: 900px;">
            <h3 class="text-white display-3 mb-4 wow fadeInDown" data-wow-delay="0.1s">Reservasi Sekarang</h1>
                <ol class="breadcrumb justify-content-center mb-0 wow fadeInDown" data-wow-delay="0.3s">
                    <li class="breadcrumb-item"><a href="{{ route('landing') }}">Beranda</a></li>
                    <li class="breadcrumb-item active text-primary">Reservasi</li>
                </ol>
        </div>
    </div>
    <!-- Header End -->


    <!-- Book Appointment Start -->
    <div class="container-fluid appointment py-5">
        <div class="container py-5">
            <div class="row g-5 align-items-center">
                <div class="col-lg-6 wow fadeInLeft" data-wow-delay="0.2">
                    <div class="section-title text-start">
                        <h4 class="sub-title pe-3 mb-0">Solusi Untuk Kesehatan Anda</h4>
                        <h1 class="display-4 mb-4">Kualitas Layanan Terbaik</h1>
                        <p class="mb-4" style="text-align: justify;">Rasakan relaksasi dan peremajaan yang tak tertandingi dengan terapis ahli
                            kami, Temukan kembali ketenangan dan keseimbangan melalui layanan terapi
                            kami yang komprehensif.</p>
                        <div class="row g-4">
                            <div class="col-12">
                                <div class="d-flex flex-column h-100">
                                    <div class="mb-4">
                                        <h5 class="mb-3"><i class="fa fa-check text-primary me-2"></i> Ahli Pijat Profesional
                                        </h5>
                                        <p class="mb-0" style="text-align: justify;">Kami menyediakan terapis pria dan wanita
                                            yang berpengalaman dan bersertifikat.</p>
                                    </div>
                                    <div class="mb-4">
                                        <h5 class="mb-3"><i class="fa fa-check text-primary me-2"></i> Layanan Lengkap
                                        </h5>
                                        <p class="mb-0" style="text-align: justify;">Kami akan memberikan pelayanan pijat dan terapi kami
                                            yang sangat lengkap kepada anda.</p>
                                    </div>
                                    <div class="mb-4">
                                        <h5 class="mb-3"><i class="fa fa-check text-primary me-2"></i> Bersih & Higenis
                                        </h5>
                                        <p class="mb-0" style="text-align: justify;">Semua terapis dalam keadaan sehat dan juga
                                            menerapkan protokol kesehatan.</p>
                                    </div>
                                    <div class="mb-4">
                                        <h5 class="mb-3"><i class="fa fa-check text-primary me-2"></i> Harga Terjangkau
                                        </h5>
                                        <p class="mb-0" style="text-align: justify;">Nikmati layanan pijat dan terapi profesional dengan
                                            harga bersahabat, cocok untuk semua kalangan.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInRight" data-wow-delay="0.4s">
                    <div class="appointment-form rounded p-5">
                        <p class="fs-4 text-uppercase text-primary">Hubungi Kami</p>
                        <h1 class="display-5 mb-4">Buat Reservasi</h1>
                        <form id="reservationForm" action="{{ route('store-booking') }}" method="POST">
                            @csrf
                            <div class="row gy-3 gx-4">
                                <div class="col-xl-6">
                                    <input type="text" class="form-control py-3 border-primary bg-transparent text-white" name="nama_pelanggan" placeholder="Nama Anda" required>
                                </div>
                                <div class="col-xl-6">
                                    <input type="text" class="form-control py-3 border-primary bg-transparent" name="no_telp" placeholder="Nomor Whatsapp" required>
                                </div>
                                <div class="col-xl-6">
                                    <select class="form-select py-3 border-primary bg-transparent" name="jenis_kelamin" aria-label="Default select example" required>
                                        <option selected disabled>Jenis Kelamin</option>
                                        <option value="Laki-laki">Laki - Laki</option>
                                        <option value="Perempuan">Perempuan</option>
                                    </select>
                                </div>
                                <div class="col-xl-6">
                                    <select class="form-select py-3 border-primary bg-transparent" name="jenis_layanan" aria-label="Default select example" required>
                                        <option selected disabled>Jenis Layanan</option>
                                        <option value="Terapi Spa">Terapi Spa</option>
                                        <option value="Terapi Refleksiologi">Terapi Refleksiologi</option>
                                        <option value="Terapi Aromaterapi">Terapi Aromaterapi</option>
                                        <option value="Terapi Musikoterapi">Terapi Musikoterapi</option>
                                        <option value="Terapi Akupunktur">Terapi Akupunktur</option>
                                        <option value="Terapi Meditasi">Terapi Meditasi</option>
                                        <option value="Terapi Pernapasan">Terapi Pernapasan</option>
                                        <option value="Terapi Reiki">Terapi Reiki</option>
                                    </select>
                                </div>
                                <div class="col-xl-6">
                                    <input type="date" class="form-control py-3 border-primary bg-transparent" name="tanggal" required min="{{ date('Y-m-d') }}">
                                </div>
                                <div class="col-xl-6">
                                    <input type="time" class="form-control py-3 border-primary bg-transparent" name="jam" required min="{{ date('H:i') }}">
                                </div>
                                <div class="col-xl-6">
                                    <select class="form-select py-3 border-primary bg-transparent" name="tempat_layanan" aria-label="Default select example" required>
                                        <option selected disabled>Tempat Layanan</option>
                                        <option value="Ditempat">Ditempat</option>
                                        <option value="Dirumah">Dirumah</option>
                                    </select>
                                </div>
                                <div class="col-xl-6">
                                    <select class="form-select py-3 border-primary bg-transparent" name="kota" aria-label="Default select example" required>
                                        <option selected disabled>Kota</option>
                                        <option value="Jakarta">Jakarta</option>
                                        <option value="Bogor">Bogor</option>
                                        <option value="Depok">Depok</option>
                                        <option value="Tangerang">Tangerang</option>
                                        <option value="Bekasi">Bekasi</option>
                                    </select>
                                </div>
                                <div class="col-12">
                                    <textarea class="form-control border-primary bg-transparent text-white" name="alamat" id="area-text" cols="30" rows="5" placeholder="Alamat Lengkap" required></textarea>
                                </div>
                                <div class="col-12 mb-1">
                                    <button type="submit" class="btn btn-primary text-white w-100 py-3 px-5">RESERVASI SEKARANG</button>
                                </div>
                                <div class="col-12">
                                    <button type="button" class="btn btn-danger text-white w-100 py-3 px-5" onclick="window.location.href='/'">BATAL</button>
                                </div>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal Video -->
    <div class="modal fade" id="videoModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content rounded-0">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Youtube Video</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <!-- 16:9 aspect ratio -->
                    <div class="ratio ratio-16x9">
                        <iframe class="embed-responsive-item" src="" id="video" allowfullscreen allowscriptaccess="always" allow="autoplay"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Book Appointment End -->


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
                        <a href="{{ route('landing') }}"><i class="fas fa-angle-right me-2"></i>Semua Layanan</a>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-3">
                    <div class="footer-item d-flex flex-column">
                        <h4 class="mb-4 text-white">Contact Info</h4>
                        <a href=""><i class="fa fa-map-marker-alt me-2"></i> Jalan 123, Jakarta, IND</a>
                        <a href=""><i class="fas fa-envelope me-2"></i> info@example.com</a>
                        <a href=""><i class="fas fa-envelope me-2"></i> info@example.com</a>
                        <a href=""><i class="fas fa-phone me-2"></i> +012 345 67890</a>
                        <a href="" class="mb-3"><i class="fas fa-print me-2"></i> +012 345 67890</a>
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
    <!-- SweetAlert library -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- Script untuk menangani submit form dan menampilkan SweetAlert -->
    <script>
        $(document).ready(function() {
            $('#reservationForm').submit(function(event) {
                event.preventDefault(); // Mencegah form submit secara default

                // Kirim form menggunakan AJAX
                $.ajax({
                    url: $(this).attr('action'),
                    method: 'POST',
                    data: $(this).serialize(),
                    dataType: 'json',
                    success: function(response) {
                        // Tampilkan SweetAlert dengan pesan sukses
                        Swal.fire({
                            icon: 'success',
                            title: 'Sukses!',
                            text: response.success,
                            confirmButtonText: 'OK'
                        }).then((result) => {
                            // Redirect atau lakukan tindakan lain setelah menekan OK
                            if (result.isConfirmed || result.isDismissed) {
                                window.location.href = '/';
                            }
                        });
                    },
                    error: function(xhr, status, error) {
                        // Handle error
                        console.error('AJAX Error:', error);
                        // Tampilkan pesan error jika diperlukan
                        Swal.fire({
                            icon: 'error',
                            title: 'Oops...',
                            text: 'Terjadi kesalahan. Silakan coba lagi nanti.',
                            confirmButtonText: 'OK'
                        });
                    }
                });
            });
        });
    </script>
</body>

</html>