@extends('layouts.app')

@section('title','Tentang Kami')

@section('css')

<style type="text/css">
	.gambar{
		width: 610px;
		height: 350px;
	}
</style>

@endsection

@section('content')

<section id="tentang_kami">
	
	<div class="container">
		<div class="c-content-title-1">
			<center>
				<br><h1>Tentang Kami</h1>
			</center>
		</div>
		<div class="spacer2"></div>
		<div class="row">
			<div class="col col-lg-6 col-md-6 col-xl-6">
				<h2>Rekayasa Perangkat Lunak</h2>
				<hr>
				<p>Rekayasa Perangkat Lunak merupakan kompetensi keahlian yang dibuka pada tahun pelajaran 2009-2010. Pada kompetensi keahlian ini, siswa dididik sesuai kebutuhan tenaga kerja yang ada di industri informasi. <br></p>

				<h2>Paket Keahlian yang diajarkan : </h2>
				<ul>
					<li>Perancangan Sistem</li>
					<li>Basis Data</li>
					<li>Pemrograman Dasar</li>
					<li>Pemrograman Berbasis Desktop, Berorientasi Objek, Web Statis dan Dinamis</li>
					<li>Pemrograman Grafik dan Mobile</li>
				</ul>
			</div>
			<div class="col col-lg-6 col-md-6 col-xl-6">
				<img src="{{url('img/rpl.jpg')}}" class="gambar">
			</div>
		</div>
	</div>

</section>

@endsection