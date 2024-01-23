<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        @include('navbar')

<link rel="shortcut icon" href="{{asset('asset/icons/Picture1.ico')}}">

        <title>Prodi Bisnis Digital</title>

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <link rel="stylesheet" href="{{asset('asset/css/style.css')}}">
    </head>


    <body>
        {{-- Navbar --}}

{{-- hero --}}

        <section id="hero" class="bx-0" >
            <div class ="container text-center text-lights">
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
                    <a href="{{route('berita')}}" class="btn btn-outline-danger">Berita Lainnya</a>
                </div>

            </div>
        </section>

        {{-- video --}}
        <section id="video" class="py-5">
            <div class="container py-5">
                <div class="text-center">
                    <iframe width="400" height="300" src="https://www.youtube.com/embed/tuUbLs1ot8E?si=fxL-x7uzIfOKaiG0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
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
                        <a href="{{route('gallery')}}" class="btn btn-outline-dark">Foto Lainnya</a>
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
        <section> @include('footer')</section>

    </body>
</html>
