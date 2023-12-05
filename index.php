<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gravitymc</title>
    <link rel="stylesheet" href="style.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Viga&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">

    <!-- Swiper -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
</head>

<body>
    <div class="page-content">
        <!-- NAVBAR -->
        <nav class="navbar navbar-expand-lg" style="position: fixed; ">
            <div class="container">
                <a class="navbar-brand d-flex" href="#">
                    <img src="./image/vespalogo.png" alt="Logo" style="width: 50px;">
                    <div class="headline my-auto">
                        <h6 style="margin-left: 5px;">Gravity Motor Club</h6>
                    </div>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="burger-button">
                        <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 60 60" fill="none">
                            <path d="M50 17.5H10" stroke="white" stroke-width="3.75" stroke-linecap="round" />
                            <path d="M50 30H10" stroke="white" stroke-width="3.75" stroke-linecap="round" />
                            <path d="M50 42.5H10" stroke="white" stroke-width="3.75" stroke-linecap="round" />
                        </svg>
                    </span>
                </button>
                <div class="collapse navbar-collapse justify-content-end" id="navbarNavAltMarkup">
                    <div class="navbar-nav">
                        <a class="nav-link" href="#">Home</a>
                        <a class="nav-link" href="#profile">Profile</a>
                        <a class="nav-link" href="#visi">Visi Misi</a>
                        <a class="nav-link" href="#produk">Produk Kami</a>
                        <a class="nav-link" href="#kontak">Kontak Kami</a>
                        <button class="nav-item btn btn-custom tombol"><a href="https://wa.me/6281233456?text=Saya mau join GMC!">Join Us!</a></button>
                    </div>
                </div>
            </div>
        </nav>
        <!-- NAVBAR END -->




        <!-- HERO HOMEPAGE -->
        <div class="hero">
            <div class="hero-wrapper">
                <img src="./image/hero1.jpg" alt="">
                <div class="row text-overlay">
                    <h1 style="font-weight: 600;">Gravity Motorcycle Club <br><span>Inspire</span> to
                        <span>Aspire</span>
                    </h1>
                    <p>Solidaritas Tanpa Batas!</p>
                </div>
            </div>
        </div>
        <!-- END HERO HOMEPAGE -->

        <!-- SIDEBAR -->

        <button class="btn btn-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasScrolling" aria-controls="offcanvasScrolling" style="z-index: 200; position: fixed; top: 80%; left: -0.5%;"><a href=""></a>Menu</button>

        <div class="offcanvas offcanvas-start" data-bs-scroll="true" data-bs-backdrop="false" tabindex="-1" id="offcanvasScrolling" aria-labelledby="offcanvasScrollingLabel">
            <div class="offcanvas-header">
                <h5 class="offcanvas-title" id="offcanvasScrollingLabel">Gravity Motorcycle Club</h5>
                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
                <ul>
                    <li><a href="./artikel.php">Artikel</a></li>
                    <li><a href="#event">Event</a></li>
                    <li><a href="#galeri">Galeri Foto</a></li>
                    <li><a href="#klien">Klien Kami</a></li>
                </ul>
            </div>
        </div>
        <!-- END SIDEBAR -->

        <div class="bd-content pb-5">
            <section class="satu">
                <!-- ABOUT US -->
                <div class="tentang d-flex" id="tentang">
                    <div class="container">
                        <div class="row mt-4">
                            <div class="text-about my-auto">
                                <h5 style="font-weight: 700;">GRAVITY MOTORCYCLE CLUB <br> OF <span style="color: var(--primary-red);">INDONESIA</span></h5>
                                <p>Selamat datang di situs resmi Gravity Motorcycle Club (GMC)! GMC didirikan pada tahun
                                    2000, kami adalah komunitas pengendara yang bersemangat dan berdedikasi terhadap
                                    kecintaan pada sepeda motor dan jalan terbuka. Misi kami adalah menumbuhkan rasa
                                    persahabatan di antara pengendara sepeda motor, dengan melakukan praktik berkendara yang
                                    aman, dan berkontribusi positif kepada masyarakat melalui acara dan kegiatan amal.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END ABOUT US -->

                <!-- PROFILE PERUSAHAAN -->
                <div class="container profile mt-5">
                    <div class="row mt-5 justify-content-center about-profile">
                        <div class="col-lg-6 img-container p-0" id="visi">
                            <div class="overlay">
                                <h6>VISION & MISSION</h6>
                            </div>
                            <div class="img-wrapper">
                                <img src="image/vision.jpg" alt="visi misi">
                            </div>
                            <div class="profile-body mt-1 p-3">
                                <h6 style="color: var(--primary-red); font-weight: 700;">VISI</h6>
                                <p style="font-size: 14px;">Menjadikan GMC sebagai wadah untuk membangkitkan semangat
                                    berkarya dalam dunia otomotif serta menjadi teladan dalam berlalu lintas</p>
                                <h6 style="color: var(--primary-red); font-weight: 700;;">MISI</h6>
                                <ul style="font-size: 14px; color: white;">
                                    <li>Menjadi wadah penyaluran jiwa kreatifitas para anggotanya seperti modifikasi dan
                                        mengadakan kegiatan-kegiatan yang bersifat positif</li>
                                    <li>Meningkatkan kualitas dan keahlian para anggota dalam berkendaraan untuk menjadi
                                        masyarakat otomotif yang berperilaku positif</li>
                                    <li>Berkomitmen mendahulukan keselamatan dan keamanan, serta tertib berlalulintas</li>
                                </ul>
                            </div>
                        </div>

                        <div class="col-lg-6 img-container p-0" id="profile">
                            <div class="overlay">
                                <h6>PROFILE</h6>
                            </div>
                            <div class="img-wrapper">
                                <img src="image/profile.jpg" alt="visi misi">
                            </div>
                            <div class="profile-body mt-1 p-3">
                                <h6 style="color: var(--primary-red); font-weight: 700;">PROFILE</h6>
                                <p style=" text-align: justify;">GMC merupakan sebuah organisasi otomotif
                                    roda dua yang telah berdiri selama 23 tahun. Yang unik dan membanggakan dari club motor
                                    ini bahwa GMC menerima semua ras untuk menjadi Bikers di club ini (tentunya dengan
                                    syarat dan ketentuan yang wajib dipenuhi oleh calon bikers), dikarenakan club motor ini
                                    didirikan oleh pemuda-pemuda yang berasal dari berbagai macam daerah di Indonesia.
                                    Selain menjadi bikers, GMC juga kerap kali mengadakan acara sosial kemanusiaan seperti
                                    galang dana, berbagi sembako, dan masih banyak lagi. Belakangan ini, GMC juga sukses
                                    merambah ke dalam dunia bisnis khususnya di bidang otomotif.</p>
                            </div>
                        </div>

                    </div>
                </div>
                <!-- END PROFILE PERUSAHAAN -->
            </section>

            <!-- PRODUK -->
            <div class="w-100 mt-5 produk" id="produk">
                <div class="container p-0">
                    <h5 style=" font-weight: 700;">SERVICES</h5>
                    <div class="row row-cols-1 row-cols-lg-3 row-cols-md-3 mt-2">
                        <div class="col">
                            <div class="card-2">
                                <div class="content-img">
                                    <img src="image/otomotif.jpg" class="card-img-top" alt="gambar">
                                </div>
                                <div class="card-body">
                                    <h6>Wadah Pengembangan Diri </h6>
                                    <p>GMC menyediakan wadah bagi para anggotanya untuk mengembangkan diri dalam dunia
                                        otomotif</p>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card-2">
                                <div class="content-img">
                                    <img src="image/service.jpg" class="card-img-top" alt="gambar">
                                </div>
                                <div class="card-body">
                                    <h6>Service Motor</h6>
                                    <p>GMC membuka jasa service kendaraan bermotor dengan tenaga yang kompeten</p>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card-2">
                                <div class="content-img">
                                    <img src="image/motorsecond.jpg" class="card-img-top" alt="gambar">
                                </div>
                                <div class="card-body">
                                    <h6>Motor Second</h6>
                                    <p>Menyediakan jasa tukar tambah kendaraan bermotor</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END PRODUK -->


            <!-- KLIEN -->
            <div class="container mt-5" id="klien">
                <div class="row justify-content-center">
                    <h5 style="font-weight: 700; color: var(--cream); text-align: center; font-size: 30px;">CLIENT</h5>
                    <div class="col-10 info-panel w-100 justify-content-center text-center">
                        <div class="row w-100 d-flex" style="margin: 0;">
                            <div class="col mx-auto my-auto">
                                <img src="image/hardav.png" alt="sistem on" style="width: 120px; height: auto; margin: 0;">
                            </div>
                            <div class="col mx-auto my-auto">
                                <img src="image/cbr.png" alt="webservices" style="width: 120px; height: auto; margin: 0;">
                            </div>
                            <div class="col mx-auto my-auto">
                                <img src="image/bentley.png" alt="webservices" style="width: 120px; height: auto; margin: 0;">
                            </div>
                            <div class="col mx-auto my-auto">
                                <img src="image/merc.png" alt="webservices" style="width: 120px; height: auto; margin: 0;">
                            </div>
                            <div class="col mx-auto my-auto">
                                <img src="image/bmw.png" alt="baju" style="width: 100px; height: auto; margin: 0;">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END KLIEN -->


            <!-- EVENT -->
            <div class="container event p-0" id="event">
                <div class="row event-title mt-5">
                    <h5 style=" font-weight: 700; color: var(--cream); font-size: 30px;">UPCOMING EVENT</h5>
                </div>
                <div class="container swiper">
                    <div class="slide-container-upevent">
                        <div class="card-wrapper swiper-wrapper">
                            <div class="card swiper-slide mb-2 mt-2">
                                <div class="card wrapper">
                                    <div class="row card-event d-flex">
                                        <div class="col-4 d-flex align-items-center mt-2 mb-2">
                                            <img style="margin-left: 9px" src="image/event1.jpg">
                                        </div>
                                        <div class="col-8">
                                            <div class="teks">
                                                <div class="teks-body">
                                                    <h5 class="card-title">Gravity Motorcycle Club Annual Tour: Goes to
                                                        Banyuwangi</h5>
                                                    <div class="preview-cerita">
                                                        <p class="card-text"> Prepare yourself and get ready
                                                            to go on amazing journey with us! Future information will be
                                                            provided during the regular meeting next week!
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="date" style="text-align: center; display: flex; align-items: center; justify-content: center;">
                                                    <p style="color: var(--cream); font-weight: 600;">29 Desember 2023</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card swiper-slide mb-2 mt-2">
                                <div class="card wrapper">
                                    <div class="row card-event d-flex">
                                        <div class="col-4 d-flex align-items-center mt-2 mb-2">
                                            <img style="margin-left: 9px" src="image/event1.jpg">
                                        </div>
                                        <div class="col-8">
                                            <div class="teks">
                                                <div class="teks-body">
                                                    <h5 class="card-title">Gravity Motorcycle Club Annual Tour: Goes to
                                                        Banyuwangi</h5>
                                                    <div class="preview-cerita">
                                                        <p class="card-text"> Prepare yourself and get ready
                                                            to go on amazing journey with us! Future information will be
                                                            provided during the regular meeting next week!
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="date" style="text-align: center; display: flex; align-items: center; justify-content: center;">
                                                    <p style="color: var(--cream); font-weight: 600;">29 Desember 2023</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END EVENT -->

            <!-- GALERI FOTO -->
            <div class="container mt-5 p-0" id="galeri">
                <div class="row row-cols-1 row-cols-lg-3 row-cols-md-3 mt-2">
                    <div class="col mt-1 mb-1">                        
                        <div class="content-img">
                            <img src="image/fotbarclub2.jpg" class="card-img-top" alt="gambar">
                        </div>                                                    
                    </div>
                    <div class="col mt-2 mb-2">                        
                        <div class="content-img">
                            <img src="image/fotbarclub3.jpg" class="card-img-top" alt="gambar">
                        </div>                                                    
                    </div>
                    <div class="col mt-2 mb-2">                        
                        <div class="content-img">
                            <img src="image/fotbarclub.jpeg" class="card-img-top" alt="gambar">
                        </div>                                                    
                    </div>
                    <div class="col mt-2 mb-2">                        
                        <div class="content-img">
                            <img src="image/fotbarclub4.jpg" class="card-img-top" alt="gambar">
                        </div>                                                    
                    </div>
                    <div class="col mt-2 mb-2">                        
                        <div class="content-img">
                            <img src="image/fotbarclub5.jpeg" class="card-img-top" alt="gambar">
                        </div>                                                    
                    </div>
                    <div class="col mt-2 mb-2">                        
                        <div class="content-img">
                            <img src="image/fotbarclub6.jpg" class="card-img-top" alt="gambar">
                        </div>                                                    
                    </div>
                </div>                
            </div>
            <!-- END GALERI FOTO -->
        </div>


        <!-- FOOTER -->
        <div class="footer-wrapper">
            <div class="container">
                <div class="row footer">
                    <div class="col-12 mt-5 mb-5 kolom-wrapper">
                        <div class="row w-100 d-flex mx-auto">
                            <div class="col w-100 justify-content-center logo mb-5">
                                <h3 style="font-size: 30px; font-weight: 700; color: var(--cream);" class="mt-5 pt-3">Apakah
                                    ada pertanyaan? <br>Jangan ragu! <span style="color: var(--primary-red);">Mari kita
                                        bincangkan</span></h3>
                            </div>
                            <div class="col-lg-4">
                                <div class="alamat mb-4">
                                    <h6>Alamat</h6>
                                    <div class="alamat-wrapper d-flex">
                                        <div class="icon-alamat">
                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M3.25 10.4167C3.25 5.62281 7.17493 1.75 12 1.75C16.8251 1.75 20.75 5.62281 20.75 10.4167C20.75 13.3982 19.0113 16.3409 17.1686 18.4829C16.236 19.5669 15.2463 20.482 14.3733 21.1328C13.9374 21.4577 13.5186 21.7258 13.1405 21.9162C12.786 22.0947 12.3812 22.25 12 22.25C11.6188 22.25 11.214 22.0947 10.8595 21.9162C10.4814 21.7258 10.0626 21.4577 9.62674 21.1328C8.75371 20.482 7.76395 19.5669 6.83144 18.4829C4.98872 16.3409 3.25 13.3982 3.25 10.4167ZM12 13C10.3431 13 9 11.6569 9 10C9 8.34315 10.3431 7 12 7C13.6569 7 15 8.34315 15 10C15 11.6569 13.6569 13 12 13Z" fill="#e60d26" />
                                            </svg>
                                        </div>
                                        <div class="teks-alamat">
                                            <p>Kemayoran Jakarta Pusat</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="contact-us mt-3 mb-4" id="kontak">
                                    <h6>Hubungi Kami</h6>
                                    <div class="row hubungi-wrapper">
                                        <div class="mail-wrapper d-flex">
                                            <div class="icon-mail">
                                                <a href="https://instagram.com"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M1.25 9C1.25 5.82436 3.82436 3.25 7 3.25H17C20.1756 3.25 22.75 5.82436 22.75 9V15C22.75 18.1756 20.1756 20.75 17 20.75H7C3.82436 20.75 1.25 18.1756 1.25 15V9ZM6.45 8.4C6.11863 8.15147 5.64853 8.21863 5.4 8.55C5.15147 8.88137 5.21863 9.35147 5.55 9.6L10.35 13.2C11.3278 13.9333 12.6722 13.9333 13.65 13.2L18.45 9.6C18.7814 9.35147 18.8485 8.88137 18.6 8.55C18.3515 8.21863 17.8814 8.15147 17.55 8.4L12.75 12C12.3056 12.3333 11.6944 12.3333 11.25 12L6.45 8.4Z" fill="#e60d26" />
                                                    </svg>
                                                </a>
                                            </div>
                                            <div class="mail">
                                                <p>gravitymc@gmail.com</p>
                                            </div>
                                        </div>
                                        <div class="phone-wrapper d-flex">
                                            <div class="icon-phone">
                                                <a href="https://instagram.com"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M19.0621 20.2183C17.1077 22.1726 12.1028 20.3363 7.88327 16.1167C3.66372 11.8972 1.82739 6.89227 3.7817 4.93795L5.06847 3.65118C5.9568 2.76286 7.42054 2.78634 8.33784 3.70363L10.3309 5.69672C11.2482 6.61401 11.2717 8.07776 10.3834 8.96609L10.107 9.24247C9.62737 9.72209 9.58045 10.4958 10.0261 11.0359C10.456 11.5568 10.9194 12.0756 11.4219 12.5781C11.9244 13.0806 12.4432 13.544 12.9641 13.9739C13.5042 14.4196 14.2779 14.3726 14.7575 13.893L15.0339 13.6166C15.9222 12.7283 17.386 12.7518 18.3033 13.6691L20.2964 15.6622C21.2137 16.5795 21.2371 18.0432 20.3488 18.9315L19.0621 20.2183Z" fill="#e60d26" stroke="#e60d26" stroke-width="1.5" />
                                                    </svg>
                                                </a>
                                            </div>
                                            <div class="mail">
                                                <p>021-345-6897</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mb-5">
                                    <div class="col">
                                        <div class="row contact">
                                            <div class="col sosmed">
                                                <h6>Sosial Media</h6>
                                                <a href="https://instagram.com" target=_blank><i class="fa-brands fa-facebook fa-xl" style="color: #e60d26;"></i></a>
                                                <a href="https://instagram.com" target=_blank><i class="fa-brands fa-twitter fa-xl" style="color: #e60d26;"></i></a>
                                                <a href="https://instagram.com" target=_blank><i class="fa-brands fa-instagram fa-xl" style="color: #e60d26;"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 komen">
                                <div class="row">
                                    <h6>Kritik & Saran</h6>
                                    <p style="color: white; font-weight: 400">Nama
                                    <div class="input">
                                        <input type="text" name="name" id="name" class="input" style="height: 36px; width: 100%;" required>
                                    </div>
                                    </p>
                                </div>
                                <div class="row">
                                    <p style="color: white; font-weight: 400">Ulasan
                                    <div class="input">
                                        <textarea id="review" name="review" style="resize: none; height: 108px" required></textarea>
                                    </div>
                                    </p>
                                </div>
                                <button type="submit" class="send-button" style="color: black">Kirim</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row copyright">
                    <p>Copyright <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 60 60" fill="none">
                            <path d="M30 5C43.807 5 55 16.1929 55 30C55 43.807 43.807 55 30 55C16.1929 55 5 43.807 5 30C5 16.1929 16.1929 5 30 5ZM30 10C18.9543 10 10 18.9543 10 30C10 41.0458 18.9543 50 30 50C41.0458 50 50 41.0458 50 30C50 18.9543 41.0458 10 30 10ZM30 17.5C33.7337 17.5 37.0875 19.1402 39.3742 21.7311C40.288 22.7663 40.1895 24.3461 39.1543 25.2597C38.1193 26.1735 36.5393 26.075 35.6258 25.0397C34.2478 23.4786 32.2398 22.5 30 22.5C25.8577 22.5 22.5 25.8577 22.5 30C22.5 34.1423 25.8577 37.5 30 37.5C32.2398 37.5 34.2478 36.5215 35.6258 34.9603C36.5393 33.925 38.1193 33.8265 39.1543 34.7403C40.1895 35.654 40.288 37.2338 39.3742 38.269C37.0875 40.8597 33.7337 42.5 30 42.5C23.0964 42.5 17.5 36.9035 17.5 30C17.5 23.0964 23.0964 17.5 30 17.5Z" fill="white" />
                        </svg> Gravity Motorcycle Club All rights reserved.
                    </p>
                </div>
            </div>
        </div>
        <!-- END FOOTER -->
    </div>

    <script>
    var swiper = new Swiper(".slide-container-upevent", {
            slidesPerView: 1,
            spaceBetween: 20,
            sliderPerGroup: 1,
            loop: true,
            centerSlide: "true",
            fade: "true",
            grabCursor: "true",
            autoplay: true,
            autoplaySpeed: 2000,

            breakpoints: {
                0: {
                    slidesPerView: 1,
                },
                520: {
                    slidesPerView: 1,
                },
                768: {
                    slidesPerView: 1,
                },
                1000: {
                    slidesPerView: 1,
                },
            },
        });
</script>

</body>

</html>