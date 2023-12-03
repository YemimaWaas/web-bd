<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">


<link rel="shortcut icon" href="{{asset('asset/icons/Picture1.ico')}}">

        <title>Prodi Bisnis Digital</title>

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <link rel="stylesheet" href="{{asset('asset/css/style.css')}}">
    </head>


    <body>

        {{-- Navbar --}}
        <nav class="navbar navbar-expand-lg navbar-dark py-3 fixed-top">
            <div class="container">
                <a class="navbar-brand" href="#">
                    <img src="{{asset('asset/images/logo2.png')}}" height="120" width="180" alt="">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item ">
                            <a class="nav-link active" aria-current="page" href="#">Beranda</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Profil
                            </a>
                            <div class="dropdown-menu submenu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="#">Tentang Bisnis Digital </a>
                                <a class="dropdown-item" href="#">Profil Dosen</a>
                                <a class="dropdown-item" href="#">Profil Lulusan</a>
                                <a class="dropdown-item" href="#">Organisasi</a>
                                <a class="dropdown-item" href="#">Prestasi</a>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown2" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Tempat Magang
                            </a>
                            <div class="dropdown-menu submenu" aria-labelledby="navbarDropdown2">
                                <a class="dropdown-item" href="#">Info Tempat Magang</a>
                                <a class="dropdown-item" href="#">Alur Pendaftaran</a>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="#">Berita</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="#">Gallery</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="#">Kontak</a>
                        </li>
                    </ul>
                    <div class="d-flex">
                        <a href="{{ route('login') }}" class="btn btn-danger">Login</a>
                    </div>
                </div>
            </div>
        </nav>


        {{-- Navbar --}}

        <section id="hero" class="bx-0" >
            <div class ="container text-center text-light">
                <div class="hero-title">
                    <div class="hero-text"> Selamat Datang <br> Di Website Prodi Bisnis Digital</div>
                    <h3>"Breakthrough Innovation"</h3>
                </div>
            </div>
        </section>

        <section id="berita">
            <div class="container py-5">
                <div class="header-berita text-center">
                    <h2 class="fw-bold">Berita Seputar Bisnis Digital</h2>
                </div>

                <div class="row py-5">
                    <div class="col-lg-4">
                        <div class="card border-0">
                            <img src="{{asset('asset/images/polibest.png')}}" class="img-fluid mb-3" alt="">
                            <div class="konten-berita">
                                <p class="mb-3 text-secondary">12/11/2023</p>
                                <h4 class="fw-bold mb-3">Lorem Ipsum</h4>
                                <p class="text-secondaey">#bisnisdigital</p>
                                <a href="" class="text-decoration none text-danger">Selengkapnya</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="card border-0">
                            <img src="{{asset('asset/images/polibest.png')}}" class="img-fluid mb-3" alt="">
                            <div class="konten-berita">
                                <p class="mb-3 text-secondary">12/11/2023</p>
                                <h4 class="fw-bold mb-3">Lorem Ipsum</h4>
                                <p class="text-secondaey">#bisnisdigital</p>
                                <a href="" class="text-decoration none text-danger">Selengkapnya</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="card border-0">
                            <img src="{{asset('asset/images/polibest.png')}}" class="img-fluid mb-3" alt="">
                            <div class="konten-berita">
                                <p class="mb-3 text-secondary">12/11/2023</p>
                                <h4 class="fw-bold mb-3">Lorem Ipsum</h4>
                                <p class="text-secondaey">#bisnisdigital</p>
                                <a href="" class="text-decoration none text-danger">Selengkapnya</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="footer-berita text-center">
                    <a href="" class="btn btn-outline-danger">Berita Lainnya</a>
                </div>

            </div>
        </section>

        {{-- video --}}
        <section id="video" class="py-5">
            <div class="container py-5">
                <div class="text-center">
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/tuUbLs1ot8E?si=fxL-x7uzIfOKaiG0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                </div>
            </div>
        </section>

        {{-- Foto Kegiatan --}}
        <section id="foto" class="section-foto parallax">
            <div class="container">
                <div class="d-flex justify-content-between align-items-center mb-5">
                    <div class="d-flex align-items-center">
                        <div class="stripe-hitam me-2"></div>
                        <h5 class="fw-bold text-black">Foto Kegiatan</h5>
                    </div>
                    <div>
                        <a href="" class="btn btn-outline-dark">Foto Lainnya</a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-6">
                        <img src="{{asset('asset/images/ft-1.png')}}" class="img-fluid" alt="">
                    </div>
                    <div class="col-lg-3 col-md-6 col-6">
                        <img src="{{asset('asset/images/ft-1.png')}}" class="img-fluid" alt="">
                    </div>
                    <div class="col-lg-3 col-md-6 col-6">
                        <img src="{{asset('asset/images/ft-3.png')}}" class="img-fluid" alt="">
                    </div>
                    <div class="col-lg-3 col-md-6 col-6">
                        <img src="{{asset('asset/images/ft-3.png')}}" class="img-fluid" alt="">
                    </div>
                </div>
            </div>
        </section>

        {{-- footer --}}
        <section id="footer" class="bg-white">
            <div class="container py-4">
                <footer>
                    <div class="row">
                        {{-- kolom1 navigasi --}}
                        <div class="col-12 col-md-3 mb-3">
                            <h5 class="fw-bold mb-3">Navigasi</h5>
                            <div class="d-flex">
                                <ul class="nav flex-column me-5">
                                    <li class="nav-item mb-2"><a href="" class="nav-link p-0 text-muted">Profil</a></li>
                                    <li class="nav-item mb-2"><a href="" class="nav-link p-0 text-muted">Berita</a></li>
                                    <li class="nav-item mb-2"><a href="" class="nav-link p-0 text-muted">Gallery</a></li>
                                    <li class="nav-item mb-2"><a href="" class="nav-link p-0 text-muted">Kegiatan</a></li>
                                </ul>
                                <ul class="nav flex-column">
                                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Prestasi</a></li>
                                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Tempat Magang</a></li>
                                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Kontak</a></li>
                                </ul>
                            </div>
                        </div>

                        {{-- kolom2 media sosial --}}
                        <div class="col-12 col-md-3 mb-3">
                            <h5 class="fw-bold mb-3">Follow Kami</h5>
                            <div class="d-flex mb-3">
                                <a href="" target="_blank" class="text-decoration-none text-dark">
                                    <img src="{{asset('asset/icons/ig1.png')}}" height="30" width="30" class="me-4" alt="">
                                </a>
                                <a href="" target="_blank" class="text-decoration-none text-dark">
                                    <img src="{{asset('asset/icons/yt.png')}}" height="30" width="30" class="me-4" alt="">
                                </a>
                            </div>

                        </div>

                        {{-- kolom 3 kontak --}}
                        <div class="col-12 col-md-3 mb-3">
                            <h5 class="font-inter fw-bold mb-3">Kontak Kami</h5>
                            <ul class="nav flex-column">
                                <li class="nav-item-mb2"><a href="" class="nav-link p-0 text-muted">sekretariat@bhaktisemesta.ac.id</a></li>
                                <li class="nav-item-mb2"><a href="" class="nav-link p-0 text-muted">08112667088</a></li>
                            </ul>
                        </div>

                        {{-- kolom 4 alamat --}}
                        <div class="col-12 col-md-3 mb-3">
                            <h5 class="font-inter fw-bold mb-3">Alamat</h5>
                            <p>Jl. Argoluwih No. 15, Kel.Ledok, Kec.Argomulyo, Kota Salatiga, Jawa Tengah 50732</p>
                        </div>

                    </div>
                </footer>
            </div>
        </section>

            </div>
        </section>

        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
        <script>
            const navbar = document.querySelector(".fixed-top");
            window.onscroll = () => {
                if (window.scrollY > 100) {
                    navbar.classList.add("scroll-nav-active");
                    navbar.classList.add("text-nav-active");
                    navbar.classList.remove("navbar-dark");
                } else {
                    navbar.classList.remove("scroll-nav-active");
                    navbar.classList.remove("text-nav-active");
                    navbar.classList.add("navbar-dark");
                }
            };
        </script>

    </body>
</html>
