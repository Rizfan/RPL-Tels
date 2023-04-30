@extends('layouts.app')

@section('title','Galeri')

@section('css')

<style type="text/css">
	
</style>

@endsection

@section('content')

<section id="galeri">
	<div class="c-content-title-1">
		<center>
			<br><h1>Galeri</h1>
		</center>
	</div>
	<div class="spacer2"></div>
	<div class="container">
		<div class="row justify-content-center">
			@foreach($galeri as $data)
			<div class="col-lg-3 mb-5">
				<a href="/file_galeri/{{$data->foto_galeri}}" data-lightbox="Laptop1" data-title="{{$data->judul_galeri}}">
					<img src="/file_galeri/{{$data->foto_galeri}}" style="width: 100%">
				</a>
			</div>
			@endforeach
		</div>
	</div>

</section>

@endsection