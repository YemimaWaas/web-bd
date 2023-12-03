<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css">
    <title>Halaman | Login</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('asset/css/login2.css')}}">

    <nav class="navbar bg-body-tertiary">
        <div class="container-fluid">
            <img src="{{asset('asset/images/logopolibest.png')}}" alt="PBS" class="logoPolibest"/>
            <img src="{{asset('asset/images/logobd.png')}}"       alt="BD"  class="logoBD"/>
        </div>

        <label class="navBD"  >Program Studi Bisnis Digital  </label>
        <label class="navPBS" >Politeknik Bhakti Semesta     </label>
        <label class="navTGL" > Minggu, 01 Oktober 2022      </label>
    </nav>

</head>
<body>

    <img src="{{asset('asset/images/kampus.jpeg')}}" alt="kampus"   class="Gedungkampus"/>
    <img src="{{asset('asset/icons/visi.png')}}"   alt="kampus"   class="visi"        />
    <div class="boxlogin"> </div>
    <h1> Login </h1>

    <label class="labelnim">NIM </label>
    <div class="TEXTFIELDnim">
    <input type="text"> </div>

    <label class="labelpw"> Password </label>
    <div class="TEXTFIELDpw">
    <input type="text"> </div>

    <button> Login </button>
    <hr>

    <label class="lihatPROFIL"   > LIHAT PROFIL BISNIS DIGITAL SELENGAKAPNYA <link rel="stylesheet" href=""> </label>
    <label class="selamatdatang" > Selamat datang di                         </label>
    <label class="program"       > Program Studi Bisnis Digital              </label>

</body>

    <footer class="footer">
        <div class="MAP">
            <img src="{{asset('asset/images/maps.png')}}" alt="">
        </div>

        <div class="icon">

            <img src="{{asset('asset/images/loc.png')}}" alt="Logo"   class="iconlokasi"/>
            <h2> Jl. Argoluwih No. 15, Kel.Ledok, Kec.Argomulyo, </h2>
            <h3> Kota Salatiga, Jawa Tengah 50732                </h3>

            <img src="{{asset('asset/images/wa.png')}}" alt="Logo"    class="iconwa"/>
            <h4> 0811 2667 088 </h4>

            <img src="{{asset('asset/images/email.png')}}" alt="Logo" class="iconemail"/>
            <h5> sekretariat@bhaktisemesta.ac.id </h5>

        </div>

    <footer class="footer2">
        <i>Program Studi Bisnis Digital © 2022-2023. All rights reserved </i>


        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</html>
