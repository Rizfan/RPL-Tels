@extends('layouts.app')

@section('title','Beranda')

@section('content')

<section id="index">
	<div class="spacer4"></div>
	<div class="bg-1">
		<div class="dark">
			<div class="center">
				<center>
					<h1 style="color:white;">Rekayasa Perangkat Lunak</h1>
				</center>
			</div>
		</div>
	</div>
</section>


<!-- Tentang Kami -->
<section id="tentang_kami" width="100%">
	<div class="spacer2"></div>
	<div class="container ac">
		<div class="row justify-content-center" style="margin: 30px;">
			<div class="col col-md-6 col-sm-12 col-12">
				<img class="ee" src="{{'img/rpl.jpg'}}">
			</div>

			<div class="col col-md-6 col-sm-12 col-12 aa">
				<h3 class="text-center">Tentang Kami</h3>
				<div class="card shadow-lg " style="border-radius: 25px; padding: 25px;">
					<p >Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
						tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
						quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
						consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
						cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
					proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
					<a href="/tentang_kami" class="">Baca Selengkapnya...</a>
				</div>
			</div>  
		</div>
	</div>
	<div class="spacer2"></div>
</section>

<section id="galeri">
	<div class="container" style="max-height: 550px;">
		<div class="text-center">
			<h3>Galeri</h3>
			<hr>
		</div>
		<div id="carousel-example-1z" class="carousel slide carousel-fade" data-ride="carousel">
			<!--Slides-->
			<div class="carousel-inner" role="listbox">
				@foreach($galeri as $data)
				<div class="carousel-item active">
					<img class="d-block w-100" style="max-height:  450px;" src="/file_galeri/{{$data->foto_galeri}}"
					alt="First slide">
				</div>
				@endforeach

			</div>
			<!--/.Slides-->
			<!--Controls-->
			<a class="carousel-control-prev" href="#carousel-example-1z" role="button" data-slide="prev">
				<span class="carousel-control-prev-icon" aria-hidden="true"></span>
				<span class="sr-only">Previous</span>
			</a>
			<a class="carousel-control-next" href="#carousel-example-1z" role="button" data-slide="next">
				<span class="carousel-control-next-icon" aria-hidden="true"></span>
				<span class="sr-only">Next</span>
			</a>
			<!--/.Controls-->
		</div>
	</div>
	<!--/.Carousel Wrapper-->

</section>
@endsection