@extends('layouts/admin/admin')

@section('title','Manage Galeri')

@section('content')


@if (session('alert'))
<script>		
	alert("{{ session('alert') }}")
</script>
@endif
<div class="card shadow mb-4" width="100%">
	<div class="card-header py-3 d-sm-flex align-items-center justify-content-between mb-4">
		<h6 class="m-0 font-weight-bold text-primary">Manage Galeri</h6>
		<a href="/admin/tambah_foto" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-upload fa-sm text-white-50"></i> Tambah Foto</a>
	</div>
	<div class="card-body">
		<div class="table-responsive">
			<table class="table table-bordered text-center" id="dataTable" width="100%" cellspacing="0">
				<thead>
					<tr>
						<th>No</th>
						<th>Judul Foto</th>
						<th>Foto</th>
						<th>Opsi</th>
					</tr>
				</thead>
				<tbody>
					<?php $no = 1; ?>
					@foreach($galeri as $data)
					<tr>
						<td>{{$no++}}</td>
						<td>{{$data->judul_galeri}}</td>
						<td><img src="/file_galeri/{{$data->foto_galeri}}" style="max-width: 150px;"></td>
						<td>
							<a class="text-light" href="/admin/manage_galeri/edit_galeri/{{ $data->id_galeri }}"><button class="btn btn-success"><i class="fa fa-pencil-alt"></i></button></a>
							<a class="text-light" onclick="return confirm('Apakah Anda Yakin?')" href="/admin/hapus_galeri/{{ $data->id_galeri }}"><button class="btn btn-danger"><i class="fas fa-trash"></i></button></a>
						</td>
					</tr>
					@endforeach
				</tbody>
			</table>
		</div>
	</div>
</div>

@endsection