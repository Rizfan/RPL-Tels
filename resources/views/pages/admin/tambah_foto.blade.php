@extends('layouts/admin/admin')

@section('title','Manage Galeri')

@section('content')

<div class="row">
	<div class="col col-md-6">
		<div class="card shadow">
			<div class="card-header py-3 d-sm-flex align-items-center justify-content-between mb-4">
				<h6 class="m-0 font-weight-bold text-primary">Tambah Foto</h6>
			</div>
			<form method="POST" enctype="multipart/form-data" action="/admin/add_foto/upload">
				<div class="card-body">
					<div class=" form-group row mb-4">
						@csrf
						<label class="col col-md-4 col-form-label text-md-left">Judul Gambar</label>
						<input type="text" name="judul" class="form-control col col-md-8">
					</div>
					<div class=" form-group row">
						<label class="col col-md-4 col-form-label text-md-left">Masukkan Gambar</label>
						<input type="file" name="foto" class="form-control col col-md-8">
					</div>
				</div>
				<div class="card-footer">
					<button class="btn btn-primary">Tambah</button>
					<a href="/admin/manage_galeri"  class="btn btn-danger">Batal</a>
				</div>
			</form>
		</div>
	</div>
</div>

@endsection