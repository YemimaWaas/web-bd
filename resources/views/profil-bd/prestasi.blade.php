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
    <!-- CSS here -->
</head>
<body>
    <section id="berita" style="margin-top: 100px" class="py5">
        <div class="container">
            <div class="header-berita text-center">
                <h2 class="fw-bold">Prestasi</h2>
            </div>

            <div class="row py-5" data-aos="flip-up">
                <div class="col-lg-4">
                    <div class="card border-0">
                        <img src="{{asset('asset/images/bohlam.png')}}" class="img-fluid mb-3" alt="" style="width: 100%;">
                        <div class="konten-berita">
                            <h4 class="fw-bold mb-3">prestasi1</h4>
                            <p class="text-secondaey">#bisnisdigital</p>
                            <a href="" class="text-decoration none text-danger">Selengkapnya</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card border-0">
                        <img src="{{asset('asset/images/bohlam.png')}}" class="img-fluid mb-3" alt="" style="width: 100%;">
                        <div class="konten-berita">
                            <h4 class="fw-bold mb-3">prestasi2</h4>
                            <p class="text-secondaey">#bisnisdigital</p>
                            <a href="" class="text-decoration none text-danger">Selengkapnya</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card border-0">
                        <img src="{{asset('asset/images/bohlam.png')}}" class="img-fluid mb-3" alt="" style="width: 100%;">
                        <div class="konten-berita">
                            <h4 class="fw-bold mb-3">prestasi3</h4>
                            <p class="text-secondaey">#bisnisdigital</p>
                            <a href="" class="text-decoration none text-danger">Selengkapnya</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section> @include('footer')</section>
</body>
</html>
