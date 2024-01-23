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

{{-- Foto Kegiatan --}}
        <section id="foto" class="section-foto parallax">
            <div class="container">
                <div class="d-flex justify-content-between align-items-center mb-5">
                    <div class="d-flex align-items-center">
                        <div class="stripe-hitam me-2"></div>
                        <h5 class="fw-bold text-black">Foto Kegiatan</h5>
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
        <section> @include('footer')</section>

    </body>
    </html>
