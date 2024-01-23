<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="shortcut icon" href="{{ asset('asset/icons/Picture1.ico') }}">
    <title>Prodi Bisnis Digital</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('asset/css/magang.css') }}">
    <link rel="stylesheet" href="assets/css/magnific-popup.css" />
    <link rel="stylesheet" href="{{ asset('asset/css/fontawesome-all.min.css') }}" />
    @include('navbar')
</head>
<body>
    @include('navbar')


    <main>
        <div class="container">
            <div class="card mb-3">
                <img src="{{ asset('storage/berita/' . $berita->image) }}" class="card-img-top mx-auto d-block" alt="{{ $berita->judul }}" style="max-width: 200px; max-height: 200px">
                <div class="card-body">
                    <p class="mb-3 text-secondary">{{ $berita->create_at}}</p>
                    <h5 class="card-title">{{ $berita->judul }}</h5>
                    <p class="card-text">{!! $berita->desc !!}</p>
                </div>
            </div>
        </div>
    </main>
    <section id="footer" class="bg-white">
        @include('footer')
    </section>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    </body>
    </html>
