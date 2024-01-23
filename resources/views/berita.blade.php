<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">



<link rel="shortcut icon" href="{{asset('asset/icons/Picture1.ico')}}">

        <title>Prodi Bisnis Digital</title>

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <link rel="stylesheet" href="{{asset('asset/css/magang.css')}}">
            <!-- CSS here -->


    @include('navbar')
    </head>
<body>
    <section id="berita" style="margin-top: 100px" class="py5">
        <div class="container">

            <div class="header-berita text-center">
                <h2 class="fw-bold">Berita Seputar Bisnis DIgital</h2>
            </div>

            <main>
                <div class="row">
                    @foreach($beritas as $berita)
                        <div class="col-md-4 mb-4">
                            <div class="card">
                                <img src="{{ asset('storage/berita/' . $berita->image) }}" class="card-img-top mx-auto d-block" alt="{{ $berita->judul }}" style="max-width: 100px; max-height: 100px">
                                <div class="card-body">
                                    <p class="mb-3 text-secondary">{{ $berita->created_at}}</p>
                                    <h5 class="card-title">{{ $berita->judul }}</h5>
                                    <a href="/selengkapnya/{{ $berita->slug }}" class="btn btn-primary">Selengkapnya</a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </main>

            </div>
        </div>
    </section>
    <section> @include('footer')</section>

</body>
</html>
