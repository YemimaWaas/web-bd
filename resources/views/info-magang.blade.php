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


{{-- hero --}}

    <section id="bg" class="bx-0" >
        <div class ="container text-center text-dark">
            <div class="bg-title">
                <div class="bg-text">
                    <h1>Info Tempat Magang</h1>
                </div>
            </div>
        </div>
    </section>

    <main>
        <!-- Hero Area Start-->

        <!-- Hero Area End -->
        <!-- Job List Area Start -->
        <div class="job-listing-area pt-120 pb-120">
          <div class="container">
            <div class="row">
              <!-- Left content -->
              <div class="col-xl-3 col-lg-3 col-md-4">
                <div class="row">
                  <div class="col-12">
                    <div class="small-section-tittle2 mb-45">
                      <div class="ion">

                    </div>
                  </div>
                </div>
                <!-- Job Category Listing start -->
                <div class="job-category-listing mb-50">

                    <!-- Select job items start -->
                    <!--  Select job items End-->
                  </div>
                  <!-- single two -->
                </div>
                <!-- Job Category Listing End -->
              </div>
              <!-- Right content -->
              <div class="col-xl-15 col-lg-15 col-md-14">
                <!-- Featured_job_start -->
                <section class="featured-job-area">
                  <div class="container">
                    <!-- Count of Job list Start -->
                    <div class="row">
                      <div class="col-lg-12">
                      </div>
                    </div>
                    <!-- Count of Job list End -->
                    <!-- single-job-content -->


                            <main>
                                <div class="row">
                                    @foreach($artikels as $item)
                                        <div class="col-md-4 mb-4">
                                            <div class="card">
                                                <img src="{{ asset('storage/artikel/' . $item->image) }}" class="card-img-top mx-auto d-block" alt="{{ $item->judul }}" style="max-width: 100px; max-height: 100px">
                                                <div class="card-body">
                                                    <p class="mb-3 text-secondary">{{ $item->created_at}}</p>
                                                    <h5 class="card-title">{{ $item->judul }}</h5>
                                                    <h6 class="card-title">{{ $item->nama_perusahaan }}</h6>
                                                    <a href="/detail/{{ $item->slug }}" class="btn btn-primary">Detail</a>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </main>




        {{-- footer --}}
        <section id="footer" class="bg-white">
            @include('footer')
        </section>




        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
        {{-- <script>
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
        </script> --}}

    </body>
</html>
