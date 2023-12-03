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
        <nav class="navbar navbar-expand-lg navbar-dark py-1 fixed-top">
            <div class="container">
                <a class="navbar-brand" href="#">
                    <img src="{{asset('asset/images/logo2.png')}}" height="55" width="100" alt="">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item ">
                            <a class="nav-link active" aria-current="page" href="{{route('dashboard')}}">Beranda</a>
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
                                <a class="dropdown-item" href="{{route('info-magang')}}">Info Tempat Magang</a>
                                <a class="dropdown-item" href="{{route('alur')}}">Alur Pendaftaran</a>
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


        {{-- Navbar --}}

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
