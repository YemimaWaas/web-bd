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
    <style>
        .row.py-5 {
            display: flex;
            justify-content: space-around;
            flex-wrap: wrap;
        }

        .card {
            width: 300px; /* Ubah sesuai kebutuhan */
            margin: 10px;
        }

        .img-fluid {
            max-width: 100%;
            height: auto;
        }
    </style>
</head>

<body>
    <section id="berita">
        <div class="container py-5">
            <div class="header-berita text-center">
                <h2 class="fw-bold">Profil Dosen</h2>
            </div>

            <div class="row py-5">
                <div class="col-lg-4">
                    <div class="card border-0">
                        <img src="{{asset('asset/images/dosen-aldian-umbu.jpg')}}" class="img-fluid mb-3" alt="">
                        <div class="konten-berita">
                            <h4 class="fw-bold mb-3">Aldian Umbu Tamu Ama, S.Si., M.Cs.</h4>
                            <p class="text-secondaey">#bisnisdigital</p>
                            <a href="" class="text-decoration none text-danger">Selengkapnya</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="card border-0">
                        <img src="{{asset('asset/images/nita-edit.jpeg')}}" class="img-fluid mb-3" alt="">
                        <div class="konten-berita">
                            <h4 class="fw-bold mb-3">Deva Nita Mulya, S.E., M.M.</h4>
                            <p class="text-secondaey">#bisnisdigital</p>
                            <a href="" class="text-decoration none text-danger">Selengkapnya</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="card border-0">
                        <img src="{{asset('asset/images/dosen-bias.jpg')}}" class="img-fluid mb-3" alt="">
                        <div class="konten-berita">
                            <h4 class="fw-bold mb-3">Ignatius Bias Galih Prasadhya, S.Pd., M.M</h4>
                            <p class="text-secondaey">#bisnisdigital</p>
                            <a href="" class="text-decoration none text-danger">Selengkapnya</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="card border-0">
                        <img src="{{asset('asset/images/dosen-yashinta.jpg')}}" class="img-fluid mb-3" alt="">
                        <div class="konten-berita">
                            <h4 class="fw-bold mb-3">Yashinta Putri Dwi Astuti, S.E., M.M.</h4>
                            <p class="text-secondaey">#bisnisdigital</p>
                            <a href="" class="text-decoration none text-danger">Selengkapnya</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @include('footer')

</body>
</html>
