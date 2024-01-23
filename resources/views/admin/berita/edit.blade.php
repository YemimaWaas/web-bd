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
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
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
                <a href="{{route('magang')}}">Berita</a>
                <div class="mx-1"> . </div>
                <a href="">Edit Berita</a>
            </div>

            <h4>Halaman Edit Berita </h4>

            <form action="{{route('berita.update', $berita->id)}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-grup mb-4">
                    <label for="">Masukan Judul Berita</label>
                    <input type="text" name="judul" required class="form-control @error('judul') is invalid @enderror"value="{{old('judul', $berita->judul)}}">

                    @error('judul')
                        <div class="text-danger">
                            {{$message}}
                        </div>
                    @enderror

                </div>


                <div class="form-group mb-4">
                    <label for="">Masukan Foto</label>
                    <input type="hidden" name="old_image" value="{{ $berita->image }}">
                    <div>
                        <img src="{{ asset('storage/berita/' . $berita->image) }}" class="col-lg-4" alt="">
                    </div>
                    <input type="file" name="image" required class="form-control @error('image') is-invalid @enderror" value="{{ old('image') }}">

                    @error('image')
                        <div class="text-danger">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                </div>

                <div class="form-grup mb-4">
                    <label for="">Deskripsi</label>
                    <textarea name="desc" required id="summernote">{!! $berita->desc !!}</textarea>

                    @error('desc')
                        <div class="text-danger">
                            {{$message}}
                        </div>
                    @enderror
                </div>

                <button type="submit" class="btn btn-primary">Simpan</button>
            </form>


        </div>



    </section>



    <!-- JS dan lainnya -->
    {{-- JQUERY --}}
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    {{-- Summernote JS --}}
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>

<script>
jQuery(document).ready(function() {
    jQuery('#summernote').summernote();
});

</script>

</body>
</html>

