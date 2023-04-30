@extends('layouts.app')

@section('title','Kontak')

@section('css')

<style type="text/css">
    .map{
        width: 610px;
        height: 500px;
    }

    @media screen and (max-width: 768px){
        .map{
            max-width: 370px;
            max-height: 300px;
        }
    }
</style>

@endsection

@section('content')


@if (session('alert'))
<script>		
   alert("{{ session('alert') }}")
</script>
@endif

<!-- Header -->
<!-- <section id="header">

    <div class="bg-img3 animated fadeIn">

        <div class="dark">

            <center>

                <div class="center">
                    <h1 class="animated bounceInDown" style="color: white; font-size: 400%;">HUBUNGI KAMI</h1>

                </div>

            </center>

        </div>

    </div>
</section> -->


<section id="kontak">
    <div class="c-content-title-1">
        <center>
            <br><h1>Hubungi Kami</h1>
        </center>
    </div>
    <div class="spacer2"></div>
    <div class="container card card-body ">
        <div class="row">
            <div class="col col-lg-5 col-md-5 col-xl-5" style="font-size: 18px;">
                <p>Hubungi Kami</p>
                <hr>
                <p><i class="fa fa-phone"></i>&nbsp;(+62)21 88332404</p>
                <p><i class="fa fa-whatsapp"></i>&nbsp;(+62)821-1978-8898</p>
                <p><i class="fa fa-envelope"></i><a href="mailto:support@smkstelekomunikasitelesandi.sch.id">&nbsp;support@smkstelekomunikasitelesandi.sch.id</a></p>
                <p><i class="fa fa-map-marker"></i>&nbsp;Mekarsari Raya Jl. KH. Mochammad, Tambun Selatan
                Bekasi ,Indonesia</p>
                <br>
                <p>Sosial Media</p>
                <hr>
                <ul class="list-unstyled">
                    <li>
                        <p><i class="fa fa-instagram"></i>
                            <a href="#" target="_blank" class="alink-team">Instagram</a>
                        </p>
                    </li>
                    <li>
                        <p>
                            <i class="fa fa-facebook"></i>
                            <a href="#" class="alink-team">Facebook</a>
                        </p>
                    </li>
                    <li>
                        <p><i class="fa fa-twitter"></i>
                            <a href="#" class="alink-team">Twitter</a>
                        </p>
                    </li>
                </ul>
            </div>
            <div class="col col-lg-5 col-md-5 col-xl-5">

                <iframe class="map" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15864.323686879698!2d107.0609933!3d-6.2530685!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x7f0f671bf57691ae!2sSMK%20TELEKOMUNIKASI%20TELESANDI%20BEKASI!5e0!3m2!1sid!2sid!4v1597909001432!5m2!1sid!2sid"  frameborder="0" style="border:0;"  ></iframe>

            </div>
        </div>

        <!-- sarkom -->
        <hr>
        <div class=""  style="font-size: 18px;">
            <form method="post" action="/kontak/add_sarkom" enctype="multipart/form-data">
               {{ csrf_field() }}
               <p class="text-center">Berikan Saran & Komentar Untuk Kami!</p>
               <hr style="width: 50px; border: 2px solid #1f2861;">

               <label>Nama</label><br>
               <input type="text" name="nama" class="form-control" required="required" placeholder="Nama"><br>

               <label>Email</label><br>
               <input type="email" name="email" class="form-control" required="required" placeholder="Email"><br>

               <label>Saran & Komentar</label><br>
               <textarea name="sarkom" class="form-control"  required="required" placeholder="Saran & Komentar"></textarea><br>

               <button type="submit" class="btn btn-primary">Kirim</button>

           </form>
       </div>
   </div>
</section>




@endsection