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
<section class="py-5" style="margin-top: 100px">
    <div class="container col-xxl-8 py-5">

        <div class="d-flex">
            <a href="{{ route('user') }}">Akun</a>
            <div class="mx-1"> . </div>
            <a href="#">Buat Akun</a>
        </div>

        <h4>Halaman Buat Akun</h4>

        <form action="{{ route('user.store') }}" method="POST" class="col-md-6">
            @csrf
            <div class="form-group mb-4">
                <label for="name">Name:</label>
                <input type="text" name="name" required class="form-control">
            </div>

            <div class="form-group mb-4">
                <label for="email">Email:</label>
                <input type="email" name="email" required class="form-control">
            </div>

            <div class="form-group mb-4">
                <label for="is_admin">Is Admin:</label>
                <input type="checkbox" name="is_admin">
            </div>

            <div class="form-group mb-4">
                <label for="password">Password:</label>
                <div class="input-group">
                    <input type="password" name="password" id="password" class="form-control" maxlength="20" required>
                    <span class="input-group-btn">
                        <button type="button" class="btn btn-default" onclick="togglePasswordVisibility()">
                            <i id="password-toggle-icon" class="glyphicon glyphicon-eye-open"></i>
                        </button>
                    </span>
                </div>
            </div>

            <button type="submit" class="btn btn-primary">Create</button>
        </form>
    </div>
</section>

<script>
    function togglePasswordVisibility() {
        var passwordField = document.getElementById('password');
        var icon = document.getElementById('password-toggle-icon');

        if (passwordField.type === 'password') {
            passwordField.type = 'text';
            icon.className = 'glyphicon glyphicon-eye-close';
        } else {
            passwordField.type = 'password';
            icon.className = 'glyphicon glyphicon-eye-open';
        }
    }
</script>

