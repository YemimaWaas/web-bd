{{-- resources/views/layouts/app.blade.php --}}


    <!DOCTYPE html>
    <html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <link rel="shortcut icon" href="{{ asset('asset/icons/Picture1.ico') }}">

        <title>Prodi Bisnis Digital</title>

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <link rel="stylesheet" href="{{ asset('asset/css/style.css') }}">
    </head>

    <body>

        {{-- Navbar --}}
        <nav class="navbar navbar-expand-lg navbar-dark py-1 fixed-top">
            <div class="container">
                <a class="navbar-brand" href="#">
                    <img src="{{ asset('asset/images/logo2.png') }}" height="55" width="100" alt="">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Dashboard Admin</a>
                        </li>
                    </ul>

                    <div class="d-flex">
                        @auth
                            {{-- Jika pengguna sudah terotentikasi (login) --}}
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <button type="submit" class="btn btn-danger">Logout</button>
                            </form>
                        @else
                            {{-- Jika pengguna belum terotentikasi (belum login) --}}
                            <a href="{{ route('login') }}" class="btn btn-danger">Login</a>
                        @endauth
                    </div>
                </div>
            </div>
        </nav>

<!-- Konten halaman -->
<section style="margin-top: 100px">
    <div class="container col-xxl-8 py-5">
        <h3>Halaman Dashboard Admin</h3>
        <p>Selamat Datang di Halaman Dashboard Admin</p>

        <div class="row">
            <div class="col-lg-4">
                <div class="card shadow-sm rounded-3 border-0" >
                    <img src="{{asset('asset/images/magang.jpeg')}}" class="card shadow rounded-3 border-0 " alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Info Magang</h5>
                        <p class="card-text">CRUD Info Magang</p>
                        <a href="{{route('magang')}}" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4"> <!-- Added missing col-lg-4 -->
                <div class="card shadow-sm rounded-3 border-0" >
                    <img src="{{asset('asset/images/magang.jpeg')}}" class="card shadow rounded-3 border-0 " alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Akun</h5>
                        <p class="card-text">CRUD Akun</p>
                        <a href="{{route('user')}}" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4"> <!-- Added missing col-lg-4 -->
                <div class="card shadow-sm rounded-3 border-0" >
                    <img src="{{asset('asset/images/magang.jpeg')}}" class="card shadow rounded-3 border-0 " alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Berita</h5>
                        <p class="card-text">CRUD Berita</p>
                        <a href="{{route('berita2')}}" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>






            </div>
        </section>

        <!-- JS dan lainnya -->

    </body>
    </html>

