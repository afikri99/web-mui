<?php 
if (isset($_SERVER['HTTPS']) &&
    ($_SERVER['HTTPS'] == 'on' || $_SERVER['HTTPS'] == 1) ||
    isset($_SERVER['HTTP_X_FORWARDED_PROTO']) &&
    $_SERVER['HTTP_X_FORWARDED_PROTO'] == 'https') {
  $protocol = 'https://'.$_SERVER['SERVER_NAME'];;
}
else {
  $protocol = 'http://'.$_SERVER['SERVER_NAME'];;
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
	<base href="<?=$protocol?>/fikri/mui/smartSchool2/">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css"> -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/font/font/css/all.min.css">
    <link rel="stylesheet" href="assets/font/font/css/solid.min.css">
    <link rel="stylesheet" href="assets/css/style.css?v=<?=date('dmyHis')?>">
    <link rel="stylesheet" href="assets/OwlCarousel/dist/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/OwlCarousel/dist/assets/owl.theme.default.min.css">
    <title>PT. Maju Usaha Inovasi</title>
<meta name="title" content="PT. Maju Usaha Inovasi">
<meta name="description" content="Upgrade yourself, make your future!">

<!-- Open Graph / Facebook -->
<meta property="og:type" content="website">
<meta property="og:url" content="https://majuusahainovasi.com/">
<meta property="og:title" content="PT. Maju Usaha Inovasi">
<meta property="og:description" content="Upgrade yourself, make your future!">
<meta property="og:image" content="https://majuusahainovasi.com/assets/img/logo-pt-mui.jpg">

<!-- Twitter -->
<meta property="twitter:card" content="summary_large_image">
<meta property="twitter:url" content="https://majuusahainovasi.com/">
<meta property="twitter:title" content="PT. Maju Usaha Inovasi">
<meta property="twitter:description" content="Upgrade yourself, make your future!">
<meta property="twitter:image" content="https://majuusahainovasi.com/assets/img/logo-pt-mui.jpg">
    <meta name="robots" content="all, index, follow">

    <!-- Favicon and touch icons  -->
<link rel="shortcut icon" href="https://majuusahainovasi.com/assets/img/Logo_PTMUI-345x345px.png" />
	<link rel="icon" type="image/x-icon" href="https://majuusahainovasi.com/assets/img/Logo_PTMUI-345x345px.png">
    <meta name="msapplication-TileImage" content="https://majuusahainovasi.com/assets/img/Logo_PTMUI-345x345px.png">
    <link rel="shortcut icon" href="https://majuusahainovasi.com/assets/img/Logo_PTMUI-345x345px.png" />

</head>
<style>

</style>

<body>
    <nav class="navbar navbar-expand-lg navbar-light fs-5">
        <div class="container px-4 my-3">
            <a class="navbar-brand logo" href="#"><img src="assets/img/Logo_PTMUI-345x345px.png" width=75px alt="" class=""> 
            <span class="d-md-inline d-none"> PT MAJU USAHA INOVASI</span> 
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-link fw-bold px-4" href="#about">About</a>
                    <a class="nav-link fw-bold px-4" href="#ourservices">Product</a>
                    <a class="nav-link fw-bold px-4" href="#partner">Partner</a>
                    <a class="nav-link fw-bold px-4" href="#footer">Contact</a>
                    <li class="nav-item dropdown">
                        <a class="nav-link fw-bold px-4 dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            En
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Bahasa Indonesia</a></li>
                            <li><a class="dropdown-item" href="#">English</a></li>
                        </ul>
                    </li>

                </div>
            </div>
        </div>
    </nav>
    <!-- slide -->
    <div id="carouselExampleControls" class="carousel slide d-lg-block d-md-block d-none d-sm-none d-xs-none" data-bs-ride="carousel">
        <div class="carousel-inner ">
            <div class="carousel-item active">
                <div class="container text-dark caption-one">
                    <h1>Upgrade yourself, make your future!</h1>
                </div>
                <img src="assets/img/carouselweb.png" class="w-100" alt="Upgrade yourself, make your future" style=" margin-top: -3rem; ">
            </div>

        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <!-- <i class="fal fa-chevron-circle-right "></i> -->
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    <div id="carouselmobile" class="carousel slide d-l-none d-md-none d-sm-block d-xs-block" data-bs-ride="carousel">
        <div class="carousel-inner ">
            <div class="carousel-item active">
                <img src="assets/img/carouselmobile.png" class="w-100 " alt="...">
                <div class="container text-dark d-l-none d-md-block caption-one-mobile">
                    <h1>Upgrade yourself, make your future!</h1>
                </div>
            </div>

        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselmobile" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <!-- <i class="fal fa-chevron-circle-right "></i> -->
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselmobile" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    <!-- <div class="my-5 ">&nbsp;</div> -->
    <section id="about">
        <div class="container py-5">
            <div class="row">
                <div class="col-sm-12 mb-3 text-center">
                    <h2><b>About Us</b></h2>
                </div>
                <div class="col-md-3"></div>
                <div class="col-md-6 col-sm-12">
                    <iframe width="100%" height="315" src="https://www.youtube.com/embed/7lguVH2Y1nI" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

                </div>
                <div class="col-md-7"></div>
                <div class="col-sm-12">
                    <h3 class="text-center">We Are Commited To</h3>
                    <p>Dedicated to being a trusted company and a reference in developing Human Resources capabilities through quality materials as a result of the collaboration of all multidisciplinary resources with various competencies. So as to provide the best added value in building Indonesian people of caliber and character.</p>
                </div>
            </div>
        </div>
    </section>
    <section class="py-5 product-service" id="ourservices">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 mb-3 text-center">
                    <h2><b>What We Do</b></h5>
                </div>
                <div class="col-md-6">
                    <img src="assets/img/services/skkni.png" width=210px alt="" class="img-fluid bg-theme rounded p-4 mb-3">
                    <h3>National certification training (BNSP)</h3>
                    <p class="text-justify">National certification training (BNSP) is a training in the form of bundling learning, which consists of E-learning and Competency Test. In collaboration with LSP UI, the National Certification Training (BNSP) is aimed at the general public, SMK graduates with linear majors, students, workers, and professionals who want to get a professional certificate licensed by Badan Nasional Sertifikasi Profesi (BNSP).</p>
                    <button class="btn btn-primary mb-5 rounded rounded-pill">See Details</button>
                </div>
                <div class="col-md-6">
                    <img src="assets/img/services/shortcourse_.png" width=210px alt="" class="img-fluid bg-theme rounded p-4 mb-3">
                    <h3>Short Course</h3>
                    <p class="text-justify">Short Course is a training program in the form of online learning or E-learning. With a variety of multidisciplinary, targeted at the general public according to the needs of participants. Makara UI Academy also collaborates with several online training partners such as ManhwaKita, EnglisHunt, CEP FTUI, and others. <br />
                        Through this short training, participants can learn and deepen their special skills as well as get a certificate of completion from Makara UI Academy. </p>
                    <button class="btn btn-primary mb-5 rounded rounded-pill">See Details</button>
                </div>
                <div class="col-md-6">
                    <img src="assets/img/services/prakerja.png" width=210px alt="" class="img-fluid bg-theme rounded p-4 mb-3">
                    <h3>Prakerja Training</h3>
                    <p class="text-justify">Makara UI Academy offers online training programs for pre-employment card holders. The Pre-Employment Card is a work competency development program from the government, aimed at job seekers who have been terminated and need competency improvement.</p>
                    <button class="btn btn-primary mb-5 rounded rounded-pill">See Details</button>
                </div>
                <div class="col-md-6">
                    <img src="assets/img/services/training-on-demand.png" width=210px alt="" class="img-fluid bg-theme rounded p-4 mb-3">
                    <h3>On Demand Training</h3>
                    <p class="text-justify">Makara UI Academy provides certified training whose schedule is adjusted to the quota provided.</p>
                    <button class="btn btn-primary mb-5 rounded rounded-pill">See Details</button>
                </div>
                <div class="col-md-6">
                    <img src="assets/img/services/talkshow.png" width=210px alt="" class="img-fluid bg-theme rounded p-4 mb-3">
                    <h3>Talk Show & Webinar Event </h3>

                    <button class="btn btn-primary mb-5 rounded rounded-pill">See Details</button>
                </div>
                <div class="col-md-6">
                    <img src="assets/img/services/certificate.png" width=210px alt="" class="img-fluid bg-theme rounded p-4 mb-3">
                    <h3>Training National and International</h3>

                    <button class="btn btn-primary mb-3 rounded rounded-pill">See Details</button>
                </div>
            </div>
        </div>
    </section>
    <section id="partner">
        <div class="container py-5">
            <div class="row pt-4 perlahan">
                <div class="col-sm-12 text-center mb-3">
                    <h2>Our Partner</h2>
                </div>
                <!-- <div class="col-sm-12">
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio quaerat facere, nihil hic sequi ad numquam modi distinctio recusandae minima id a nemo cum quas.
                    </p>
                </div> -->
                <div class="col-sm-12">
                    <div class="row row-cols-2 row-cols-lg-3">
                        <div class="col-4 col-lg-2 my-3 "><img class="img-fluid" src="assets/img/logo/Logo-01.png" alt=""></div>
                        <div class="col-4 col-lg-2 my-3 "><img class="img-fluid" src="assets/img/logo/Logo-02.png" alt=""></div>
                        <div class="col-4 col-lg-2 my-3 "><img class="img-fluid" src="assets/img/logo/Logo-03.png" alt=""></div>
                        <div class="col-4 col-lg-2 my-3 "><img class="img-fluid" src="assets/img/logo/Logo-04.png" alt=""></div>
                        <div class="col-4 col-lg-2 my-3 "><img class="img-fluid" src="assets/img/logo/Logo-05.png" alt=""></div>
                        <div class="col-4 col-lg-2 my-3 "><img class="img-fluid" src="assets/img/logo/Logo-06.png" alt=""></div>
                        <div class="col-4 col-lg-2 my-3 "><img class="img-fluid" src="assets/img/logo/Logo-07.png" alt=""></div>
                        <div class="col-4 col-lg-2 my-3 "><img class="img-fluid" src="assets/img/logo/Logo-08.png" alt=""></div>
                        <div class="col-4 col-lg-2 my-3 "><img class="img-fluid" src="assets/img/logo/Logo-09.png" alt=""></div>
                        <div class="col-4 col-lg-2 my-3 "><img class="img-fluid" src="assets/img/logo/Logo-10.png" alt=""></div>
                        <div class="col-4 col-lg-2 my-3 "><img class="img-fluid" src="assets/img/logo/Logo-11.png" alt=""></div>
                        <div class="col-4 col-lg-2 my-3 "><img class="img-fluid" src="assets/img/logo/Logo-12.png" alt=""></div>
                        <div class="col-4 col-lg-2 my-3 "><img class="img-fluid" src="assets/img/logo/Logo-13.png" alt=""></div>
                        <div class="col-4 col-lg-2 my-3 "><img class="img-fluid" src="assets/img/logo/Logo-14.png" alt=""></div>
                        <div class="col-4 col-lg-2 my-3 "><img class="img-fluid" src="assets/img/logo/Logo-15.png" alt=""></div>
                        <div class="col-4 col-lg-2 my-3 "><img class="img-fluid" src="assets/img/logo/Logo-16.png" alt=""></div>
                        <div class="col-4 col-lg-2 my-3 "><img class="img-fluid" src="assets/img/logo/Logo-17.png" alt=""></div>
                        <div class="col-4 col-lg-2 my-3 "><img class="img-fluid" src="assets/img/logo/Logo-18.png" alt=""></div>
                        <div class="col-4 col-lg-2 my-3 "><img class="img-fluid" src="assets/img/logo/Logo-19.png" alt=""></div>
                        <div class="col-4 col-lg-2 my-3 "><img class="img-fluid" src="assets/img/logo/Logo-20.png" alt=""></div>
                        <div class="col-4 col-lg-2 my-3 "><img class="img-fluid" src="assets/img/logo/Logo-21.png" alt=""></div>
                        <div class="col-4 col-lg-2 my-3 sponsor"><img class="img-fluid" src="assets/img/logo/Logo-22.png" alt=""></div>
                        
                    </div>
                </div>

            </div>
            <center>
                <a href="mailto:info@makarauiacademy.com" class="btn btn-primary rounded rounded-pill py-3 px-3 my-5 perlahan"><b>BE OUR PARTNER </b></a>
            </center>
        </div>
    </section>
    <section id="">
        <div class="container py-5">
            <div class="row">
                <div class="col-sm-12 mb-3 text-center">
                    <h2><b>Testimonial</b></h2>
                </div>
                <div class="col-sm-12">

                    <div class="owl-carousel">
                        <div class="" style="padding-bottom:23px;">
                            <div class="card bg-theme p-2" style="height:100%;">
                                <center class="py-5">
                                    <img class="rounded-circle" style="width:175px" src="assets/img/testimonial/bu-ida.jpg" alt="Bu Ida">
                                </center>
                                <p class="text-center">" The existence of inclusive education access such as Makara UI Academy is important, so that people can access higher education certified without having to go through a long and complicated process. " <br>
                                <h6 class="text-center">~ Dr.Hj Ida Fauziah,M.Si</h6>
                                </p>

                            </div>
                        </div>
                        <div class="" style="padding-bottom:23px;">
                            <div class="card bg-theme p-2" style="height:100%;">
                                <center class="py-5">
                                    <img class="rounded-circle" style="width:175px" src="assets/img/testimonial/prof-ari.jpg" alt="Prof. Ari">
                                </center>

                                <p class="text-center">" We aspire that Makara UI Academy can become the main reference in developing human resource capabilities through quality materials, so that it can provide the best added value in building Indonesian people with caliber and character."</p>
                                <h6 class="text-center">~ Prof.Ari Kuncoro, S.E.,M.A.,Ph.D.</h6>
                            </div>

                        </div>
                        <div class="" style="padding-bottom:23px;">
                            <div class="card bg-theme p-2" style="height:100%;">
                                <center class="py-5">
                                    <img class="rounded-circle" style="width:175px" src="assets/img/testimonial/pak-fakhrudin.jpg" alt="Pak Fakhrudin">
                                </center>

                                <p class="text-center">" Makara UI Academy's learning modules are prepared by targeting all levels of society, covering the segment of children, youth, students, university students, housewives, job seekers, to Civil Servants. "</p>
                                <h6 class="text-center">~ Fakhrudin, M.Si., Psikolog</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>
    <section class="py-5" style="background:#fee300" id="career">
        <div class="container text-black perlahan">
            <div class="row py-5">
                <div class="col-sm-12 text-center">
                    <h2><b>Let's Talk About Project</b></h2>
                    <a href="mailto:info@makarauiacademy.com" class="btn btn-light rounded rounded-pill fw-bold">info@makarauiacademy.com</a>
                </div>
            </div>

        </div>
    </section>

    <section class="footer" id="footer">
        <div class="container py-5">
            <div class="row">
                <div class="col-md-4 perlahan">
                    <span>
                        <span class="title-footer ">
                            <img src="assets/img/logo-mui-text.jpg" alt="Maju Usaha Inovasi" class="img-fluid">
                        </span>
                        <div class="d-lg-block  d-md-block d-none d-sm-none d-xs-none">
                            <div class=" d-flex justify-content-evenly rounded-pill " style="background:#fee300">
                                <a href="https://facebook.com/Makara-UI-Academy-103930981781613" class="text-dark pt-1 fs-2 footer-social"><i class=" fab fa-facebook-square"></i></a>
                                <a href="https://www.instagram.com/makarauiacademy/" class="text-dark pt-1 fs-2 footer-social"><i class=" fab fa-instagram-square"></i></a>
                                <a href="https://www.youtube.com/channel/UC17yBKsk3AZVmSfEl1reKpg" class="text-dark pt-1 fs-2 footer-social"><i class=" fab fa-youtube-square"></i></a>
                                <a href="https://linkedin.com/company/makarauiacademy" class="text-dark pt-1 fs-2 footer-social"><i class=" fab fa-linkedin"></i></a>

                            </div>
                        </div>
                    </span>
                </div>
                <div class="col-md-4 perlahan">
                    <span>
                        <span class="title-footer">Contact</span>
                        <a class="footer-link mb-3" href="#" style="line-height:1.2"><i class="fa fa-map-marker-alt"></i> Daya Makara UI Office<br/>
                        Jl. Akses Vokasi, Universitas Indonesia<br/>
                        Kota Depok, Jawa Barat, Indonesia. 16424</a>
                        <a href="tel:+6222150191588" class="footer-link mb-3"><i class="fa fa-phone"></i> 021 5019 1588</a>
                        <a href="mailto:info@makarauiacademy.com" class="footer-link mb-3"><i class="fa fa-envelope"></i> info@makarauiacademy.com</a>
                    </span>
                </div>
                <div class="col-md-4 perlahan">
                    <span>
                        <span class="title-footer">Info</span>
                        <a class="footer-link mb-3" href="https://lms.makarauiacademy.com">Makara UI Academy</a>
                        <a class="footer-link mb-3" href="#ourservices">Our Services</a>
                        <a class="footer-link mb-3" href="#career">Career</a>
                        <div class="d-l-none d-md-none d-sm-block d-xs-block">
                            <div class=" d-flex justify-content-evenly rounded rounded-pill py-2" style="background:#fee300">
                                <a href="https://facebook.com/Makara-UI-Academy-103930981781613" class="text-dark pt-1 fs-2 footer-social"><i class=" fab fa-facebook-square"></i></a>
                                <a href="https://www.instagram.com/makarauiacademy/" class="text-dark pt-1 fs-2 footer-social"><i class=" fab fa-instagram-square"></i></a>
                                <a href="https://www.youtube.com/channel/UC17yBKsk3AZVmSfEl1reKpg" class="text-dark pt-1 fs-2"><i class=" fab fa-youtube-square"></i></a>
                                <a href="https://linkedin.com/company/makarauiacademy" class="text-dark pt-1 fs-2 footer-social"><i class=" fab fa-linkedin"></i></a>

                            </div>
                        </div>
                    </span>
                </div>
            </div>
        </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <section id="copyright" class="copyright py-3">
        <center>
            <small><?= date("Y") ?> PT. Maju Usaha Inovasi</small>
        </center>
    </section>
</body>

</html>
<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
<link rel="stylesheet" href="">
<script src="assets/OwlCarousel/dist/owl.carousel.min.js"></script>
<script src="assets/js/script.js"></script>