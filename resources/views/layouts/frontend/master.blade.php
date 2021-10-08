<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>UTS WebFramework</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free Website Template" name="keywords">
    <meta content="Free Website Template" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400|Nunito:600,700" rel="stylesheet">

    <!-- CSS Libraries -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/flaticon/font/flaticon.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <!-- Nav Bar Start -->
    <div class="navbar navbar-expand-lg bg-light navbar-light">
        <div class="container-fluid">
            <a href="index.html" class="navbar-brand">Kopi <span>Kingz</span></a>
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                <div class="navbar-nav ml-auto">
                    <a href="index.html" class="nav-item nav-link active">Home</a>
                    <a href="about.html" class="nav-item nav-link">About</a>
                    <a href="feature.html" class="nav-item nav-link">Feature</a>
                    <a href="team.html" class="nav-item nav-link">Barista</a>
                    <a href="menu.html" class="nav-item nav-link">Menu</a>
                    <a href="booking.html" class="nav-item nav-link">Booking</a>
                    <a href="contact.html" class="nav-item nav-link">Contact</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Nav Bar End -->


    <!-- Carousel Start -->
    <div class="carousel">
        <div class="container-fluid">
            <div class="owl-carousel">
                <div class="carousel-item">
                    <div class="carousel-img">
                        <img src="img/carousel-1.jpg" alt="Image">
                    </div>
                    <div class="carousel-text">
                        <h1>Kopi <span>kami</span> Kopi <span>Indonesia</span></h1>
                        <p>"Membingkai pagi mewarnakan mentari, jangan lupa menyorekan hari dengan
                            segelas kopi berbagi, agar hati menjadi pelangi di malam nanti."
                        </p>
                        <div class="carousel-btn">
                            <a class="btn custom-btn" href="">View Menu</a>
                            <!-- <a class="btn custom-btn" href="">Book Table</a> -->
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="carousel-img">
                        <img src="img/carousel-2.jpg" alt="Image">
                    </div>
                    <div class="carousel-text">
                        <h1>Kopi <span>kami</span> Kopi <span>Indonesia</span></h1>
                        <p>
                            "Jadilah seperti kopi pagi ini. Walau sendiri, namun memberi
                            ketenangan dan inspirasi tanpa henti."
                        </p>
                        <div class="carousel-btn">
                            <!-- <a class="btn custom-btn" href="">View Menu</a> -->
                            <a class="btn custom-btn" href="">View Menu</a>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="carousel-img">
                        <img src="img/carousel-3.jpg" alt="Image">
                    </div>
                    <div class="carousel-text">
                        <h1>Kopi <span>kami</span> Kopi <span>Indonesia</span></h1>
                        <p>
                            "Biji kopi yang sama bisa jadi citarasa kopi lain di tangan
                            yang beda. sama seperti kasih sayang jika di tangan yang beda maka beda pula kisahnya."
                        </p>
                        <div class="carousel-btn">
                            <a class="btn custom-btn" href="">View Menu</a>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Carousel End -->
    @yield('content')
    <!-- Footer Start -->
    <div class="footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-7">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="footer-contact">
                                <h2>Alamat</h2>
                                <p><i class="fa fa-map-marker-alt"></i>Jalan Cempaka Raya GG Sidomulyo II RT 23 N0 99</p>
                                <p><i class="fa fa-phone-alt"></i>0822-5527-6227</p>
                                <p><i class="fa fa-envelope"></i>zildhanreynaldi99.com</p>
                                <div class="footer-social">
                                    <a href=""><i class="fab fa-twitter"></i></a>
                                    <a href=""><i class="fab fa-facebook-f"></i></a>
                                    <a href=""><i class="fab fa-youtube"></i></a>
                                    <a href=""><i class="fab fa-instagram"></i></a>
                                    <a href=""><i class="fab fa-linkedin-in"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="footer-newsletter">
                        <h2>Newsletter</h2>
                        <p>
                            Lorem ipsum dolor sit amet elit. Quisque eu lectus a leo dictum nec non quam. Tortor eu
                            placerat rhoncus, lorem quam iaculis felis, sed lacus neque id eros.
                        </p>
                        <div class="form">
                            <input class="form-control" placeholder="Email goes here">
                            <button class="btn custom-btn">Submit</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="copyright">
            <div class="container">
                <p>Copyright &copy; <a href="#">M Zildhan Reynaldi</a>, All Right Reserved.</p>
            </div>
        </div>
    </div>
    <!-- Footer End -->

    <a href="#" class="back-to-top"><i class="fa fa-chevron-up"> </i></a>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/tempusdominus/js/moment.min.js"></script>
    <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Contact Javascript File -->
    <script src="mail/jqBootstrapValidation.min.js"></script>
    <script src="mail/contact.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>