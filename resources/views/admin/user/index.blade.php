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



            <h4>Halaman Akun</h4>

            <a href="{{route('user.create')}} " class="btn btn-primary">Buat Akun</a>

            <div class="table-ressponsive py-3 ">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nama</th>
                            <th>Email</th>
                            <th>Is Admin</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($users as $user)
                        <tr>
                            <td>{{ $user->id }}</td>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                            <td>{{ $user->is_admin == 1 ? 'Yes' : 'No' }}</td>
                            <td>
                                <a href="{{ route('user.edit', $user->id) }}" class="btn btn-warning" >Edit</a>
                                <form action="{{ route('user.destroy', $user->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" onclick="return confirm('Apakah Anda yakin akan menghapus Akun ini?')" class="btn btn-danger">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>

            </div>
        </div>
    </section>


</body>
</html>
